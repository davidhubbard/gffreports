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

function pivottable(&$a, $col)
{
	if (array_has_string_keys($a)) {
		if (!isset($a["all"][0])) trigger_error("array does not have [all]\"$col\": use pivottable(array, col)");
		$b = &$a["all"];
	} else {
		$b = &$a;
	}
	if (!isset($b[0][$col])) trigger_error("array does not have \"$col\": use pivottable(array, col)");
	$r = array();
	foreach ($b as &$row) {
		$v = $row[$col];
		if (!isset($r[$v])) $r[$v] = array();
		$r[$v][] = $row;
	}
	return $r;
}
