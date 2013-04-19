<?php
//
// GetFoundFirst.com Reporting Engine
// Copyright 2013 ndisp.com and getfoundfirst.com
//
// This application is free software; you can redistribute it and/or
// modify it under the terms of the GNU General Public
// License as published by the Free Software Foundation; either
// version 3 of the License, or (at your option) any later version.
//
// This library is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
// General Public License for more details.
//
// You should have received a copy of the GNU General Public
// License along with this code; if not, write to the Free Software
// Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
//

//
// router.php loads the page requested in $_SERVER['REQUEST_URI']
//

require("errorhand.php");
require("message.php");

function load_smarty_functions()
{
	global $smarty;
	require("smarty.function.sort.sum.php");
	require("smarty.function.pivottable.php");
	require("smarty.function.table.of.contents.php");
}

function invalid_request($msg)
{
	header("HTTP/1.0 404 Not Found");
	die("404 Not Found " . $msg);
}

function do_smarty_display($smarty, $filename)
{
	ob_start();
	$smarty->display($filename);
	$GLOBALS['did_smarty_send_something'] = (ob_get_length() != 0);
	ob_end_flush();
}

function route_to_test($smarty, $filename)
{
	if (substr($filename, -5) == ".html" || substr($filename, -4) == ".htm") {
		load_smarty_functions();
		do_smarty_display($smarty, $filename);
	} else {
		readfile($filename);
	}
	exit(0);
}

function parse_get_vars($get)
{
	$p = strpos($get, "?");
	if ($p === false) return array();
	$get = substr($get, $p + 1);
	//echo "get=\"$get\"<br/>\n";
	$a = array();
	foreach (explode("&", $get) as $s) {
		$t = explode("=", $s, 2);
		//echo "\"" . $t[0] . "\"=\"" . $t[1] . "\"<br/>\n";
		$a[$t[0]] = $t[1];
	}
	return $a;
}

function main_router($smarty)
{
	global $pdo, $title_brand;

	$smarty->assign("title_brand", $title_brand);
	$smarty->assign("relpath_top", "");
	load_view($smarty);

	$tpl = run_view($smarty);
	if ($tpl === false) return;

	$smarty->assign("globals", $GLOBALS);
	$strip_headers = $smarty->getTemplateVars("strip_headers");
	try {
		load_smarty_functions();
		if (!$strip_headers) do_smarty_display($smarty, 'tpl/header.tpl');
		do_smarty_display($smarty, "tpl/$tpl");
		if (!$strip_headers) do_smarty_display($smarty, 'tpl/footer.tpl');
	} catch (Exception $e) {
		echo "exception: " . $e->getMessage() . "<br/>\n";
		userErrorHandler(E_COMPILE_ERROR, $e->getMessage(), $tpl, "", array());
	}

	if (!$GLOBALS['did_smarty_send_something']) {
		echo "<span style=\"color:red;\">Warning: clearing Smarty cache, please hit reload to see if it fixes the problem</span><br/>\n";
		echo "If the problem persists, please email david.c.hubbard@gmail.com\n";
		$smarty->clearAllCache();
		$smarty->clearCompiledTemplate();
	}
}

function load_view($smarty)
{
	$u = $_SERVER['REQUEST_URI'];
	if (strpos($u, "config.php") !== false) invalid_request("");	// deny requests that try to directly load config.php

	if ($_SERVER['QUERY_STRING'] == "") {
		// root url displays home page
		require('view/index.php');
		return;
	}

	// analyze url to see if it is a valid page
	$p = strpos($u, $_SERVER['QUERY_STRING']);
	if ($p === false) invalid_request("qs $u");

	$u = substr($u, $p);
	$b = str_replace("control/router.php", "", __FILE__);
	if ("test/report/?id=" == substr($u, 0, 16)) {
		if ($u == "test/report/") invalid_request("gen");
		$r = realpath(preg_replace("/^test\//", "chroot/", $_SERVER['QUERY_STRING']));
		if (substr($r, 0, strlen($b)) != $b) invalid_request("$u " . substr($r, strlen($b)));
		$r = substr($r, strlen($b));
		if (substr($r, 0, -1) != "/") $r = "$r/";
		$top = str_repeat("../", count(explode("/", $r)) - 1);
		$smarty->assign("relpath_top", $top);
		$smarty->assign("get", $u);
		require("view/gen.php");
		return;
	}
	if ("test/" == substr($u, 0, 5)) {
		if ($u == "test/") invalid_request("test");
		$r = realpath(preg_replace("/^test\//", "chroot/", $_SERVER['QUERY_STRING']));
		if (substr($r, 0, strlen($b)) != $b) invalid_request("$u " . substr($r, strlen($b)));
		$r = substr($r, strlen($b));
		if (!file_exists($r)) invalid_request("file not found: $r");
		route_to_test($smarty, $r);
		return;
	}

	$r = realpath($_SERVER['QUERY_STRING']);
	if (substr($r, 0, strlen($b)) != $b) invalid_request("$u " . substr($r, strlen($b)));

	$r = substr($r, strlen($b));
	$top = str_repeat("../", count(explode("/", $r)) - 1);
	$smarty->assign("relpath_top", $top);
	if ("view/" == substr($u, 0, 5)) {
		if ($u == "view/") invalid_request("view");
		$smarty->assign("get", $u);
		if (!file_exists($r)) invalid_request("noent $u");
		require($r);
		return;
	}

	if ("model/" != substr($u, 0, 6)) invalid_request("bad $u");

	// run model in debug mode
	if (!file_exists($r)) invalid_request("noent $u");
	echo "<html><head><title>Debug model $u</title></head><body>Debug model $u<br/>\n";
	require($r);

	function run_view($smarty)	// define run_view() here
	{
		$res = run_model(0, 30);
		while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
			if (!isset($k)) {
				$k = array_keys($row);
				echo "<table border=\"1\" cellspacing=\"0\" cellpadding=\"0\"><tbody>\n";
				echo "<tr valign=\"top\">";
				foreach ($k as $n) echo "<th>$n</th>";
				echo "</tr>\n";
			}
			echo "<tr valign=\"top\">";
			foreach ($k as $key) {
				$v = print_r($row[$key], true);
				if ($v == "") $v = "<span></span>";	// prevent empty rows from disappearing
				echo "<td>" . $v . "</td>";
			}
			echo "</tr>\n";
		}
		echo "</tbody></table>\n";
		echo "</body></html>\n";
		return false;
	}
}



//
// config.php
//

if (!file_exists('../config.php')) {
	?>
<b>Fresh Install of GetFoundFirst.com Reporting Engine</b><br/>
<br/>
Please copy <tt>config.php.sample</tt> to <tt>config.php</tt> and follow the instructions there.
<?php
	exit(0);
}

require('../config.php');
$cfghelptext = ". Please edit config.php and follow the instructions there.";
if (!isset($db_db) || !$db_db) die("config.php: must define db_db$cfghelptext");
if (strcspn($db_db, ";.") != strlen($db_db)) die("config.php: db_db cannot have a semicolon \";\" or a period \".\" in it$cfghelptext");
if (!isset($db_user) || !$db_user) die("config.php: must define db_user$cfghelptext");
if (!isset($db_pass) || !$db_pass) die("config.php: must define db_pass$cfghelptext");
if (isset($db_port) && isset($db_unix_socket)) die("config.php: only define db_unix_socket after commenting out db_port");

if (!function_exists("iconv")) die("iconv() support is required");

//
// PDO
//
function ini_get_as_int($key)
{
	$v = trim(ini_get($key));
	$c = strtolower($v[strlen($v)-1]);
	switch ($c) {
	case 'g': $v *= 1024;
	case 'm': $v *= 1024;
	case 'k': $v *= 1024;
	}
	return $v;
}

function repair_unknown_db($msg)
{
	global $dsn;

	if (stripos($msg, "Unknown database '" . get_cfg_dbname() . "'") === false) return;

	echo "Creating database '" . get_cfg_dbname() . "':<br/>\n";
	try {
		$pdo = new PDO("$dsn", $GLOBALS['db_user'], $GLOBALS['db_pass'], array());
	} catch (Exception $e2) {
		die("router.php: Failed to connect to PDO MYSQL: " . $e2->getMessage());
	}
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	try {
		$pdo->exec("create database `" . get_cfg_dbname() . "`");
	} catch (Exception $e2) {
		die("router.php: Failed to create database '" . get_cfg_dbname() . "': " . $e2->getMessage());
	}
	echo "Done. Please hit the refresh button on your browser to continue.";
	exit(0);
}

function connect_to_db()
{
	global $dsn;

	if (!class_exists('PDO') || !method_exists('PDO', 'getAvailableDrivers')) {
		die("router.php: PDO is not available. Please reinstall PHP with PDO and PDO-MYSQL support");
	}

	if (!in_array("mysql", PDO::getAvailableDrivers())) {
		die("router.php: PDO-MYSQL is not available. Please reinstall PHP with PDO and PDO-MYSQL support");
	}

	$dsn = "mysql:";

	if (isset($GLOBALS['db_port'])) {
		if (!isset($GLOBALS['db_host'])) $GLOBALS['db_host'] = "localhost";
		$dsn .= "host=" . $GLOBALS['db_host'] . ";port=" . $GLOBALS['db_port'];

	} else if (isset($GLOBALS['db_unix_socket'])) {
		$dsn .= "unix_socket=" . $GLOBALS['db_unix_socket'];

	} else {
		die("config.php: must define one of db_unix_socket or db_port");
	}

	try {
		$GLOBALS['pdo'] = new PDO("$dsn;dbname=" . get_cfg_dbname(), $GLOBALS['db_user'], $GLOBALS['db_pass'], array(PDO::ATTR_PERSISTENT => true));
	} catch (Exception $e) {
		repair_unknown_db($e->getMessage());

		die("router.php: Failed to connect to PDO MYSQL: " . $e->getMessage());
	}
	$GLOBALS['pdo']->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	if (ini_get_as_int("upload_max_filesize") < $GLOBALS['max_upload']) {
		die("upload_max_filesize needs to be " . $GLOBALS['max_upload'] . " or more: " . ini_get("upload_max_filesize") . "<br/>\nPlease check /etc/php5/apache2/php.ini (search for upload_max_filesize)");
	}
	ini_set("session.gc_maxlifetime", 2147483647);

	if (isset($_SERVER['CONTENT_LENGTH']) && $_SERVER['CONTENT_LENGTH'] > ini_get_as_int("post_max_size")) {
		die("Uploaded file too large, please limit file uploads to " . ini_get("upload_max_filesize") . " bytes");
	}
}

function get_cfg_dbname()
{
	global $db_db;
	return $db_db . "cfg";
}

connect_to_db();

//
// Smarty
//
chdir('..');
require('Smarty/Smarty.class.php');
$smarty = new Smarty();

$smarty->setTemplateDir('./');
$smarty->setCompileDir('Smarty/templates_c');
$smarty->setCacheDir('Smarty/cache');
$smarty->setConfigDir('Smarty/configs');

session_start();

define('__IN_MAIN_ROUTER__', 1);
main_router($smarty);
