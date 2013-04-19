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

function get_templates()
{
	$d = "chroot/report/";
	$a = scandir($d);
	$r = array();
	if (is_array($a)) foreach ($a as $fn) if (is_file("$d$fn") && is_readable("$d$fn") && ($fh = fopen("$d$fn", "rb")) !== false) {
		$size = filesize("$d$fn");
		$initial = 4096;
		if ($size < $initial) $initial = $size;
		$b = fread($fh, $initial);
		if (substr($b, 0, 2) == "{*") {
			$p1 = strspn($b, "*", 1) + 1;
			$p2 = strpos($b, "*}", $p1);
			while (substr($b, $p2, 1) == "*") $p2--;
			$title = trim(substr($b, $p1, $p2 - $p1));
			//echo "$d$fn: \"" . $title . "\"<br/>\n";
			$r[$fn] = $title;
		}
		fclose($fh);
	}
	if (!count($r)) $r = Array( 'audit_detailed.html' => 'Audit Detailed' );
	return $r;
}
