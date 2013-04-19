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
	//require('model/newadd.php');
	$vars = parse_get_vars($smarty->getTemplateVars("get"));
	if (isset($vars['clear'])) {
		$_SESSION['msg'] = array( );
	} else {
		if (!isset($vars['del'])) invalid_request("del");
		if (!isset($_SESSION['msg'][$vars['del']])) invalid_request("msg");
		unset($_SESSION['msg'][$vars['del']]);
	}

	header("Location: " . $_SERVER['HTTP_REFERER']);
	exit(0);
}
