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

if (!defined('__IN_MAIN_ROUTER__')) invalid_request(basename(__FILE__));

function run_download($smarty, $id, $f, $format, $filesize)
{
	if ($format != "csv") die("bad format $format");
	$gz = "img/csv/$id.$f.csv.gz";
	if (!file_exists($gz)) invalid_request("not found: $f");
	header('Content-Description: File Transfer');
	header('Content-Encoding: gzip');
	header('Content-Type: application/octet-stream');
	header('Content-Disposition: attachment; filename=' . "$f.csv");
	header('Content-Transfer-Encoding: binary');
	header('Expires: 0');
	header('Cache-Control: no-cache, no-store, max-age=0, must-revalidate');
	header('Pragma: public, no-cache');
	header('Content-Length: ' . filesize($gz));

	readfile($gz);
	exit(0);
}

function run_view($smarty)
{
	require("model/report.php");
	$vars = parse_get_vars($smarty->getTemplateVars("get"));

	if (!isset($vars["id"]) || !isset($vars["file"])) invalid_request("report id");
	$r = get_report($vars["id"]);
	if (!isset($r[$vars["id"]])) invalid_request("report id enoent");
	$r = $r[$vars["id"]];
	$f = get_file($vars["id"]);
	if (!count($f)) invalid_request("report no files");
	if (isset($vars["format"])) return run_download($smarty, $vars["id"], $vars["file"], $vars["format"], $f[0]["filesize"]);

	$smarty->assign("id", $vars["id"]);
	$smarty->assign("f", $vars["file"]);

	foreach ($f as $k => $fr) if ($fr["f"] == $vars["file"]) {
		$smarty->assign("title", $r["title"]);
		$smarty->assign("sum", $fr["sum"]);
		$smarty->assign("count", $fr["rows"]);

		$max_safe_rows = 15000;
		if ($fr["rows"] > $max_safe_rows) {
			$smarty->assign("limit", $max_safe_rows);
			$res = get_file_contents($vars["id"], $vars["file"], 0, $max_safe_rows);
		} else {
			$max_safe_rows = $fr["rows"];
			$smarty->assign("limit", false);
			$res = get_file_contents($vars["id"], $vars["file"]);
		}
		$c = $res->fetchAll(PDO::FETCH_ASSOC);

		// find cols which are 100% all the same value
		$same = array( );
		$check_size = $max_safe_rows;
		if ($check_size > 1) {
			foreach ($c[0] as $k => $v) $same[$k] = $v;
			for ($i = 1; $i < $check_size; $i++) {	// look for anything that does NOT match $same[]
				foreach ($same as $k => $v) if ($c[$i][$k] != $v) unset($same[$k]);
			}
			for ($i = 0; $i < count($c); $i++) {	// remove columns from $c that are still in $same[], including those after $check_size
				foreach ($same as $k => $v) unset($c[$i][$k]);
			}
		}

		$smarty->assign("c", $c);
		$smarty->assign("same", $same);
		return "file.tpl";
	}
	invalid_request("report file einval");
}
