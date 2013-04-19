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

function clean_name($n, $lno)
{
	$n = preg_replace("/Smarty\/(templates_c|cache)\/[^.]*\.file\./", "", preg_replace("/.*gffreport\//", "", $n));
	return "$n:$lno";
}

function userErrorHandler($errno, $errmsg, $filename, $linenum, $vars) 
{
	if (!(ini_get("error_reporting") & $errno)) return;	// see documentation for set_error_handler: "this value will be 0 if the statement that caused the error was prepended by the @ error-control operator."
	$t = time();

	$type = array (
			E_ERROR              => 'Error',
			E_WARNING            => 'Warning',
			E_PARSE              => 'Parsing Error',
			E_NOTICE             => 'Notice',
			E_CORE_ERROR         => 'Core Error',
			E_CORE_WARNING       => 'Core Warning',
			E_COMPILE_ERROR      => 'Compile Error',
			E_COMPILE_WARNING    => 'Compile Warning',
			E_USER_ERROR         => 'User Error',
			E_USER_WARNING       => 'User Warning',
			E_USER_NOTICE        => 'User Notice',
			E_STRICT             => 'Runtime Notice',
			E_RECOVERABLE_ERROR  => 'Catchable Fatal Error',
			E_DEPRECATED         => 'Deprecated',
		);
	$utype = array(E_USER_ERROR, E_USER_WARNING, E_USER_NOTICE);

	echo "<span style=\"font-size:12pt;color:#ff0000;\">" . clean_name($filename, $linenum) . " " . $type[$errno] . ": $errmsg </span><br/>\n";
	if (in_array($errno, $utype)) {
		echo "Variables:<br/><pre>" . print_r($vars, true) . "</pre><br/>\n";
	}
}
error_reporting(E_ALL | E_STRICT | E_WARNING | E_USER_WARNING & ~(E_NOTICE | E_USER_NOTICE));	// replace PHP default error handling with userErrorHandler
set_error_handler("userErrorHandler");
