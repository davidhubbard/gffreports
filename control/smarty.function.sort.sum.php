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

function array_has_string_keys(&$a)
{
	return count(array_filter(array_keys($a), 'is_string'));
}

function sum(&$a, $col)
{
	$sum = 0;
	if (array_has_string_keys($a)) {
		if (!isset($a["all"][0]) || !isset($a["all"][0][$col])) trigger_error("array does not have \"$col\": use sum(array, col)");
		foreach ($a["all"] as &$row) $sum += $row[$col];
	} else {
		foreach ($a as &$row) $sum += $row[$col];
	}
	return $sum;
}

# replace sort() with a new user-defined function that sorts an array of arrays by the supplied fields
# modified from http://www.smarty.net/forums/viewtopic.php?t=1079
#
# example usage: {assign var=sorted value=sort($my_array, 'name', '#age', '-state')}
#
# The use of class Smarty_Security is to insert this code directly into
# the Smarty compiler and modify function names on the fly!
#

function custom_sort_build_func($sortby)
{
	$code = "\$c=0;";
	foreach (explode(',', $sortby) as $key) {
		$d = '';
		$n = 0;
		while (1) {
			if (substr($key, 0, 1) == '-') {
				$d = '-';
				$key = substr($key, 1);
				continue;
			}
			if (substr($key, 0, 1) == '#') {
				$key = substr($key, 1);
				$n = 1;
				continue;
			}
			break;
		}
		if ($n) $code .= "if ( ( \$c = (\$a['$key'] - \$b['$key'])) != 0 ) return $d\$c;\n";
			else $code .= "if ( (\$c = strcasecmp(\$a['$key'],\$b['$key'])) != 0 ) return $d\$c;\n";
	}
	$code .= 'return 0;';
	return create_function('$a, $b', $code);
}

function smarty_function_sort(&$data)
{
	static $sort_funcs = array();
	if (func_num_args() < 2) {
		$bt = debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS);
		userErrorHandler(E_COMPILE_ERROR, 'sort() requires two or more parameters: a table and field(s) to sort on', $bt[0]["file"], $bt[0]["line"], array());
		return $data;
	}

	$sortby = '';
	for ($i = 1; $i < func_num_args(); $i++) $sortby .= func_get_arg($i) . ',';
	$sortby = substr($sortby, 0, -1);
	if (!isset($sort_funcs[$sortby])) $sort_funcs[$sortby] = custom_sort_build_func($sortby);
	uasort($data, $sort_funcs[$sortby]);
	return $data;
}

class Gffreport_Security_Policy extends Smarty_Security {
	// enable all PHP functions
	public $php_functions = array();

	// override Smarty_Security::isTrustedPhpFunction
	//
	// Note: "control/smarty.function.sort.php:63 Runtime Notice:
	// Declaration of Gffreport_Security_Policy::isTrustedPhpFunction() should be compatible with that of
	// Smarty_Security::isTrustedPhpFunction()"
	//
	// Yup. Change Smarty_Security::isTrustedPhpFunction so $function_name is passed by reference
	// (add & before $function_name in Smarty/sysplugins/smarty_security.php)
	//
	public function isTrustedPhpFunction(&$function_name, $compiler)
	{
		if ($function_name == 'sort') $function_name = 'smarty_function_sort';
		return parent::isTrustedPhpFunction($function_name, $compiler);
	}
}

$smarty->enableSecurity(new Gffreport_Security_Policy($smarty));
