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

function run_action_exit()
{
	if (isset($_POST["id"])) header("Location: report.php?id=" . $_POST["id"]);
	else echo "id not set in run_action_exit";
	exit(0);
}

function run_action($smarty)
{
	if ($_POST["action"] == "+") {
		if (!isset($_POST["title"]) || !isset($_POST["template"])) invalid_request("report add");
		$r = add_report($_POST["title"], $_POST["template"]);
		if (is_numeric($r)) {
			add_message("Added new report \"" . $_POST["title"] . "\"");
			header("Location: report.php?id=$r");
		} else {
			add_message($r);
			header("Location: ./" . $smarty->getTemplateVars("relpath_top"));
		}
		exit(0);
	}

	if ($_POST["action"] == "update") {
		if (!isset($_POST["id"]) || !isset($_POST["title"]) || !isset($_POST["template"])) invalid_request("report update");
		$prev = get_report($_POST["id"]);
		if (!isset($prev[$_POST["id"]])) invalid_request("report id enoent");
		$prev = $prev[$_POST["id"]];
		if ($_POST["title"] != $prev["title"] || $_POST["template"] != $prev["template"]) {
			$r = update_report($_POST["id"], $_POST["title"], $_POST["template"]);
			if ($r === false) add_message("Report saved"); else add_message($r);
		}
		run_action_exit();
	}

	if ($_POST["action"] == "upload") {
		if (!isset($_POST["id"])) invalid_request("report upload id");
		if (isset($_FILES["file0"]["error"]) && $_FILES["file0"]["error"] != UPLOAD_ERR_OK) {
			switch ($_FILES["file0"]["error"]) {
			case UPLOAD_ERR_INI_SIZE:
				$msg = $_FILES["file0"]["name"] . " is too large (must be under " . (ini_get_as_int("upload_max_filesize") / 1048576) . "MB)";
				break;
			case UPLOAD_ERR_FORM_SIZE:  invalid_request("report upload"); break;
			case UPLOAD_ERR_PARTIAL:    $msg = "Upload interrupted"; break;
			case UPLOAD_ERR_NO_FILE:    run_action_exit(); break;
			case UPLOAD_ERR_NO_TMP_DIR: $msg = "Upload configuration error"; break;
			case UPLOAD_ERR_CANT_WRITE: $msg = "Upload permission error"; break;
			case UPLOAD_ERR_EXTENSION:  $msg = "Upload extended error"; break;
			default: $msg = "error code " . $_FILES["file0"]["error"]; break;
			}
			add_message($msg);
			run_action_exit();
		}
		if (!isset($_FILES["file0"]) || !is_uploaded_file($_FILES["file0"]["tmp_name"])) {
			print_r($_FILES);
			die("bad upload");
		}
		$name = $_FILES["file0"]["name"];
		$size = $_FILES["file0"]["size"];
		if ($size == 0) die("File not uploaded");
		$c = file_get_contents($_FILES["file0"]["tmp_name"]);
		add_file($_POST["id"], $c, $_FILES["file0"]["tmp_name"]);
		run_action_exit();
	}

	invalid_request("report action");
}

function run_view($smarty)
{
	require('model/template.php');
	require("model/report.php");
	$vars = parse_get_vars($smarty->getTemplateVars("get"));
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if (isset($_POST["action"])) {
			run_action($smarty);
		} else if (isset($_POST["delete"]) && isset($_POST["id"])) {
			del_report($_POST["id"]);
			add_message("Report \"" . $_POST["title"] . "\" deleted");
			header("Location: ./" . $smarty->getTemplateVars("relpath_top"));
		} else {
			echo "_POST:<br/><pre>" . print_r($_POST, true) . "</pre><br/>_FILES:<br/><pre>" . print_r($_FILES, true) . "</pre>";
			invalid_request("post");
			exit();
		}
		return;
	}

	if (!isset($vars["id"])) invalid_request("report id");
	$r = get_report($vars["id"]);
	if (!isset($r[$vars["id"]])) invalid_request("report id enoent");
	if (isset($vars["action"]) && $vars["action"] == "delfile") {
		if (!isset($vars["f"])) invalid_request("report delfile f");
		del_file($vars["id"], $vars["f"]);
		$_POST["id"] = $vars["id"];
		run_action_exit();
	}
	$r = $r[$vars["id"]];

	$smarty->assign("edit_title", "Edit Report");
	$smarty->assign("edit_post_action", "update");
	$smarty->assign("report_id", $vars["id"]);
	$smarty->assign("title", $r["title"]);
	$smarty->assign("upload", get_file($vars["id"]));
	$smarty->assign("templates", get_templates());
	$smarty->assign("template_selected", $r["template"]);
	$smarty->assign("section", $r["section"]);

	return "report.tpl";
}
