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

function run_view($smarty)
{
	require("model/report.php");
	$vars = parse_get_vars($smarty->getTemplateVars("get"));

	if (!isset($vars["id"])) invalid_request("gen id");
	$r = get_report($vars["id"]);
	if (!isset($r[$vars["id"]])) invalid_request("gen id enoent");
	$r = $r[$vars["id"]];
	$f = get_file($vars["id"]);

	$smarty->assign("clientname", $r["title"]);
	$smarty->assign("lastupdate_t", $r["last_update_t"]);

	foreach ($f as $k => $fr) {
		$v = array(
				"sourcefile" => $fr["sum"],
				"countrows" => $fr["rows"],
				"start_t" => $fr["t_start"],
				"end_t" => $fr["t_end"],
			);
		$res = get_file_contents($vars["id"], $fr["f"]);
		$v["all"] = $res->fetchAll(PDO::FETCH_ASSOC);
		$smarty->assign($fr["f"], $v);
	}

	foreach ($r["section"] as $s) $smarty->assign("checkbox_section$s", 1);
	$smarty->assign("strip_headers", 1);
	return "../chroot/report/" . $r["template"];
}
