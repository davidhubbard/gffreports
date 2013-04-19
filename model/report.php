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

function model_report_make_db_name($id)
{
	global $db_db;
	return $db_db . "_$id";
}

function add_report($title, $template)
{
	global $pdo;
	try {
		$pdo->exec("create table if not exists report ( " .
			"id bigint not null auto_increment, " .
			"title varchar(255) not null unique, " .
			"template varchar(255) not null, " .
			"last_update_t timestamp null, " .
			"primary key (id))");

		$pdo->exec("create table if not exists upload ( " .
			"id bigint not null, " .
			"f varchar(255) not null, " .
			"sum varchar(255) not null, " .
			"t_start timestamp not null, " .
			"t_end timestamp not null, " .
			"filesize bigint not null, " .
			"index (id), index (id, f))");

		$res = $pdo->prepare("insert into report ( title, template, last_update_t ) values ( ?, ?, null )");
		$res = $res->execute(array($title, $template));
	} catch (Exception $e) {
		if (preg_match("/Integrity constraint violation.*Duplicate.*for key.*title/i", $e->getMessage()))
			return "Report $title already exists";
		die("report.php: PDO failed: " . $e->getMessage());
	}

	if ($res != 1) die("report.php: insert returned " . print_r($res, true));
	$id = $pdo->lastInsertId();
	try {
		$pdo->exec("create database `" . model_report_make_db_name($id) . "`");
	} catch (Exception $e) {
		die("report.php: PDO db failed: " . $e->getMessage());
	}
	return $id;
}

function del_report($id)
{
	global $pdo;
	try {
		$res = $pdo->prepare("delete from report where id=?");
		$res = $res->execute(array($id));
		$res = $pdo->prepare("delete from upload where id=?");
		$res = $res->execute(array($id));
	} catch (Exception $e) {
		die("report.php: PDO failed: " . $e->getMessage());
	}

	if ($res != 1) die("report.php: delete returned " . print_r($res, true));

	if (!is_numeric($id)) die("report.php: sql injection trying to delete: $id");
	try {
		$pdo->exec("drop database if exists `" . model_report_make_db_name($id) . "`");
	} catch (Exception $e) {
		die("report.php: PDO db failed: " . $e->getMessage());
	}
}

function get_report($id = false)
{
	global $pdo;
	try {
		// only create the table 'report' in add_report()
		$res = $pdo->query("show tables");
		$res = $res->fetchAll(PDO::FETCH_ASSOC);

		$a = array();
		foreach ($res as $row) {
			$k = $row["Tables_in_" . get_cfg_dbname()];
			$a[$k] = $k;
		}
		if (!isset($a["report"])) return array();

		// now that 'report' exists get the stuff in it
		$res = $pdo->prepare("select id, title, template, last_update_t from report" . ($id === false ? "" : " where id=?"));
		if ($id === false) $res->execute(); else $res->execute(array($id));
		$res = $res->fetchAll(PDO::FETCH_ASSOC);
		$a = array();
		foreach ($res as $row) {
			if ($row["last_update_t"]) $row["last_update_t"] = DateTime::createFromFormat("Y-m-d H:i:s", $row["last_update_t"])->getTimestamp();

			$row["section"] = array();
			for ($i = 1; $i < 10; $i++) $row["section"][] = $i;

			$a[$row["id"]] = $row;
		}

		return $a;
	} catch (Exception $e) {
		repair_unknown_db($e->getMessage());
		die("report.php: PDO failed: " . $e->getMessage());
	}
}

function update_report($id, $title, $template)
{
	global $pdo;
	try {
		$res = $pdo->prepare("update report set title=?, template=? where id=?");
		$res = $res->execute(array($title, $template, $id));
	} catch (Exception $e) {
		if (preg_match("/Integrity constraint violation.*Duplicate.*for key.*title/i", $e->getMessage()))
			return "Report $title already exists";
		die("report.php: PDO failed: " . $e->getMessage());
	}

	if ($res != 1) die("report.php: update returned " . print_r($res, true));
	return false;
}

function get_file($id)
{
	global $pdo;
	try {
		$res = $pdo->prepare("select id, f, sum, t_start, t_end, filesize from upload where id=?");
		$res->execute(array($id));
		$res = $res->fetchAll(PDO::FETCH_ASSOC);
		foreach ($res as &$row) {
			$f = $pdo->query("select count(*) from `" . model_report_make_db_name($id) . "." . $row["f"] . "`");
			$f = $f->fetchAll(PDO::FETCH_ASSOC);
			if (count($f) != 1) $row["rows"] = "Warning: count(*) f=" . $row["f"] . " got " . count($f) . " rows";
			else {
				$f = $f[0];
				if (!isset($f["count(*)"])) $row["rows"] = "Warning: count(*) = <pre>" . print_r($f, true) . "</pre>";
				else $row["rows"] = $f["count(*)"];
			}
			$row["t_start"] = DateTime::createFromFormat("Y-m-d H:i:s", $row["t_start"])->getTimestamp();
			$row["t_end"] = DateTime::createFromFormat("Y-m-d H:i:s", $row["t_end"])->getTimestamp();
		}
		return $res;
	} catch (Exception $e) {
		die("report.php: PDO failed: " . $e->getMessage());
	}
}

function get_file_contents($id, $f, $start = false, $limit = false)
{
	global $pdo;
	try {
		$sql = "select * from `" . model_report_make_db_name($id) . ".$f`";
		if ($start !== false && $limit !== false) $sql .= " limit $start, $limit";
		return $pdo->query($sql);
	} catch (Exception $e) {
		die("report.php: PDO failed: " . $e->getMessage());
	}
}

function add_file($id, $c, $tmpname)
{
	global $pdo;

	// auto-convert from UTF-16 to UTF-8
	if (substr($c, 0, 2) == "\xff\xfe") $c = iconv("utf16", "utf8", $c);

	// auto-remove all "\r\n" and replace with "\n"
	$c = str_replace("\r\n", "\n", $c);

	// get first line
	$p = strcspn($c, "\n");
	$fl = substr($c, 0, $p);
	$p += strspn($c, "\n", $p);

	$t = explode("(", $fl, 2);
	$d = trim($t[1]);
	if (substr($d, -1) == '"') $d = substr($d, 0, -1);
	if (substr($d, -1) == ')') $d = substr($d, 0, -1);
	$d = explode("-", $d, 2);
	$s = array();
	foreach ($d as $k => $v) {
		$o = DateTime::createFromFormat("M d, Y", trim($d[$k]));
		if ($o === false) die("bad date \"" . $d[$k] . "\": " . print_r(DateTime::getLastErrors(), true));
		$s[$k] = $o->getTimestamp();
		$d[$k] = $o->format("Y-m-d");
	}
	$t_start = $d[0];
	$t_end = $d[1];
	if ($s[0] > $s[1]) die("dates in wrong order: $t_start $t_end");

	$sum = trim($t[0]);
	if (substr($sum, 0, 1) == '"') $sum = substr($sum, 1);
	$sum = trim($sum);

	if (preg_match("/Ad report/i", $sum)) {
		$t = "ads";
	} else if (preg_match("/Automatic placements report/i", $sum)) {
		$t = "auto_placements";
	} else if (preg_match("/Managed placements report/i", $sum)) {
		$t = "man_placements";
	} else if (preg_match("/Hour and Day Campaign report/i", $sum)) {
		$t = "hourly";
	} else if (preg_match("/Keyword report/i", $sum)) {
		$t = "keyword";
	} else if (preg_match("/Campaign report/i", $sum)) {
		$t = "campaign";
	} else if (preg_match("/Audiences report/i", $sum)) {
		$t = "audiences";
	} else {
		add_message("Unknown file summary \"$sum\"");
		return;
	}

	// get fields
	$p2 = $p + strcspn($c, "\n", $p);
	$fl = substr($c, $p, $p2 - $p);
	$p2 += strspn($c, "\n", $p2);

	// write $c as "$t.csv.gz" to save a copy of the original file
	$filesize = strlen($c);
	$fh = fopen("img/csv/$id.$t.csv.gz", "wb");
	fwrite($fh, gzencode($c));
	fclose($fh);
	$c = substr($c, $p2);

	// import $tmpname into table $t database model_report_make_db_name($id)
	// note that $c has been format-converted, the first few lines stripped off, so write it out again for mysql to process (faster than escaping every cell)
	$fh = fopen($tmpname, "wb");
	if (!$fh) die("write $tmpname failed");
	fwrite($fh, $c);
	fclose($fh);

	$fl = explode("\t", $fl);
	foreach ($fl as $k => $v) $fl[$k] = "`" . trim($fl[$k]) . "`";
	$flc = $fl;
	foreach ($flc as $k => $v) $flc[$k] = $flc[$k] . " varchar(255) not null";

	$mt = model_report_make_db_name($id) . ".$t";
	try {
		$sql = "create table `$mt` ( " . implode(",", $flc) . " )";
		$pdo->exec($sql);
	} catch (Exception $e) {
		if (preg_match("/Base table or view already exists/i", $e->getMessage())) {
			add_message("File already uploaded: $sum");
			return;
		}
		echo "<pre>$sql</pre><br/>\n";
		die("report.php: PDO failed: " . $e->getMessage());
	}

	try {
		$sql = "load data local infile '$tmpname' into table `$mt` character set utf8 " .
			"fields terminated by '\\t' optionally enclosed by '\\\"' lines terminated by '\\n' " .
			"( " . implode(",", $fl) . " )";
		$pdo->exec($sql);

		$res = $pdo->prepare("insert into upload ( id, f, sum, t_start, t_end, filesize ) values ( ?, ?, ?, ?, ?, ? )");
		$res = $res->execute(array($id, $t, $sum, $t_start, $t_end, $filesize));
		if ($res != 1) die("report.php: upload returned " . print_r($res, true));

		$res = $pdo->prepare("update report set last_update_t = ? where id = ? and last_update_t < ?");
		$res = $res->execute(array($t_end, $id, $t_end));
		if ($res != 1) die("report.php: unable to set timestamp: " . print_r($res, true));

		// delete the last row if it has "total" in the first column
		$res = $pdo->query("select count(*) from `$mt`");
		$res = $res->fetchAll(PDO::FETCH_NUM);
		if (!isset($res[0][0])) die("report.php: unable to get count(*) $mt");
		$total = $res[0][0];
		$n = $total;
		while ($n > 0) {
			$n--;
			$res = $pdo->query("select * from `$mt` limit $n, 1");
			$res = $res->fetchAll(PDO::FETCH_NUM);
			if (!isset($res[0][0])) die("report.php: unable to get row $n col 0 from $mt");
			echo "check row $n<br/>\n";
			if (!preg_match("/total/i", $res[0][0])) {
				$n++;

				// delete all rows up to $n (yes, this is the easiest way in MySQL)
				if ($n < $total) {
					$res = $pdo->exec("drop table if exists `$mt" . "_copy`");
					$res = $pdo->exec("create table `" . $mt . "_copy` select * from `$mt` limit $n");
					$res = $pdo->exec("rename table `$mt` to `$mt" . "_old`, `$mt" . "_copy` to `$mt`");
					$res = $pdo->exec("drop table `$mt" . "_old`");
					$total = $n;
				}
				break;
			}
		}

		// find columns where data is numeric
		$k = $pdo->query("select * from `$mt` limit 1");
		$k = $k->fetchAll(PDO::FETCH_ASSOC);
		if (isset($k[0])) {
			// must have at least 1 row or this becomes a no-op
			$k = $k[0];
			$ncol = array( );
			foreach ($k as $col => $ignored) {
				$res = $pdo->query("select count(*) from `$mt` where `" . $col . "` regexp ('^[0-9+-][0-9,.]*')");
				$res = $res->fetchAll(PDO::FETCH_NUM);
				if (!isset($res[0][0])) die("report.php: unable to get count col " . $col . " from $mt");
				if ($res[0][0] == $total) {
					// data is numeric in this column
					$ncol[] = $col;
				}
			}

			// strip commas
			$sql = "update `$mt` set";
			foreach ($ncol as $col) $sql .= " `" . $col . "` = replace(`" . $col . "`, ',', ''),";
			$sql = substr($sql, 0, -1);
			$pdo->exec($sql);
		}
	} catch (Exception $e) {
		echo "<pre>$sql</pre><br/>\n";
		die("report.php: PDO failed: " . $e->getMessage());
	}

	add_message("Upload completed: $sum");
}

function del_file($id, $f)
{
	global $pdo;
	$gz = "img/csv/$id.$f.csv.gz";
	if (file_exists($gz)) unlink($gz);
	$mt = model_report_make_db_name($id) . ".$f";
	try {
		$pdo->exec("drop table `$mt`");
		$res = $pdo->prepare("delete from upload where id=? and f=?");
		$res = $res->execute(array($id, $f));
		if ($res != 1) die("report.php: del_file returned " . print_r($res, true));
	} catch (Exception $e) {
		die("report.php: PDO failed: " . $e->getMessage());
	}

	add_message("Deleted $f");
}
