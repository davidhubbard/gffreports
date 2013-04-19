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

function int_to_roman($N)
{
	$c='IVXLCDM';
	$s='';
	for($a=5,$b=$s='';$N;$b++,$a^=7)
		for($o=$N%$a,$N=$N/$a^0;$o--;$s=$c[$o>2?$b+$N-($N&=-2)+$o=1:$b].$s);
	return $s;
} 

function smarty_generate_toc($tpl_source, Smarty_Internal_Template $template)
{
	global $smarty;

	$m = array();
	if (preg_match_all("/(page-break-before|<span[^>]*class=\"outline([0-9]+)\"[^>]*>)/i", $tpl_source, $m, PREG_PATTERN_ORDER | PREG_OFFSET_CAPTURE) === false) {
		die("smarty_generate_toc preg_match error");
	}

	if (!isset($m[2])) die("smarty_generate_toc preg_match did not capture");
	$page_no = 1;
	$counter = array();
	$toc = "<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\"><tbody>\n";
	foreach ($m[2] as $hdr) {
		if (!is_array($hdr)) {
			$page_no++;
			continue;
		}

		$indent = $hdr[0];
		$p = $hdr[1] + strcspn($tpl_source, ">", $hdr[1]);
		if (substr($tpl_source, $p, 1) == ">") $p++;
		$title = substr($tpl_source, $p, stripos($tpl_source, "</span", $p) - $p);

		while (count($counter)-1 < $indent) $counter[] = 0;
		while (count($counter) && count($counter)-1 > $indent) array_pop($counter);
		$counter[$indent]++;
		//echo "indent=$indent page=$page_no: " . $counter[$indent] . " " . htmlentities($title) . "<br/>\n";

		if ($indent == 0) $c_str = $counter[$indent] . ".";
		else if ($indent == 1) $c_str = strtolower(int_to_roman($counter[$indent])) . ".";
		else if ($indent == 2) $c_str = chr(ord("a") + $counter[$indent] - 1) . ".";
		else $c_str = $counter[$indent] . ")";

		$toc .= "<tr valign=\"top\"><td>" . str_repeat("&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;", $indent) .
			"$c_str $title</td><td style=\"padding-left:5px;\">$page_no</td></tr>\n";
	}
	$toc .= "</tbody></table>\n";

	$tpl_source = str_replace($smarty->getTemplateVars("insert_table_of_contents"), $toc, $tpl_source);
	return $tpl_source;
}

$smarty->registerFilter('output','smarty_generate_toc');
$smarty->assign("insert_table_of_contents", "<tableOfContentsGoesHere/>");

// only IE6, IE7, and IE8 will break a page because of a <br> tag
// the ms-special-character is to fix copy-paste into word
$smarty->assign("pagebreak", "</div><br clear=\"all\" style=\"ms-special-character:line-break;page-break-before:always\"/><div class=\"page\">");
