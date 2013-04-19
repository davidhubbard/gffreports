{**
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
**}
	{$title_brand}</a>
</div>

<div class="pickone"><div class="grouptitle">Reports:</div>
{if count($reports)}
	<table border="1" cellspacing="0" cellpadding="2" class="reports"><tbody>
	<tr valign="top"><th>Client Name</th><th>Report</th><th>Week of</th><td>&nbsp;</td></tr>
	{foreach name="reports" from=$reports key=k item=v}
{capture assign=click}onclick="document.location.href = 'view/report.php?id={$k}'"{/capture}
	<tr valign="top" class="report"><td {$click}>{$v.title}</td><td {$click}>{$templates[$v.template]}</td>
		<td {$click}>{if $v.last_update_t}{date("M j, Y", $v.last_update_t)}{else}no files{/if}</td>
		{$u = "{$relpath_top}test/report/?id={$k}"}
		<td onclick="window.open('{$u}');return false" class="gen"><a href="{$u}">Generate!</a></td></tr>
	{/foreach}
	</tbody></table>
{/if}
	<form name="addreport" method="get" action="view/reportadd.php">
	<input type="submit" value="+" class="edit"/> <span class="hint">Add report</span>
	</form>
</div>
