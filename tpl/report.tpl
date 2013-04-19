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

<div class="reportedit"><div class="grouptitle">{$edit_title}</div>
	<table border="0" cellspacing="0" cellpadding="0" class="reportedit" width="100%"><tbody>
	<tr valign="top"><td>Client Name:</td><td>
		{if isset($report_id)}
		<div style="float:right;max-width:400px;">
			<form name="gen" method="get" action="">
			{foreach from=$section item=s}
			<div style="display:inline-block;"><input type="checkbox" name="section{$s}" id="section{$s}" checked="checked"
				/><label for="section{$s}">Section {$s}</label></div>
			{/foreach}<br/>
			{$u = "{$relpath_top}test/report/?id={$report_id}"}
			<a href="{$u}" onclick="window.open('{$u}');return false">Generate!</a></form></div>
		{/if}
		<form name="report" method="post" action="{$relpath_top}view/report.php">
		<input type="text" name="title"{if isset($title)} value="{$title}"{/if}/></td></tr>
	<tr valign="top"><td>Template:</td><td>
		{foreach name="template" from=$templates key=k item=v}
		<input type="radio" name="template" id="{$k}" value="{$k}"{if $template_selected == $k} checked="checked"{/if}/><label for="{$k}"> {$v}</label><br/>
		{/foreach}
	</td></tr>
{if $edit_post_action == "+"}
	<tr valign="top"><td>&nbsp;</td><td>
		<span class="hint">Upload files in the next step</span></br>
		<input type="submit" name="action" value="{$edit_post_action}" class="edit"/>
{else}
	<tr valign="top"><td>Data files:</td><td>
{if count($upload)}
		<table border="1" cellspacing="0" cellpadding="2" class="upload"><tbody>
{foreach name="upload" from=sort($upload, 't_start', 'sum') item=u}
		<tr valign="top"><td><a href="file.php?id={$u.id}&file={$u.f}">{$u.sum}</a></td>
			<td><a href="file.php?id={$u.id}&file={$u.f}&format=csv">download</a></td>
			<td>{date("M j, Y", $u.t_start)}-{date("M j, Y", $u.t_end)}</td>
			<td><a href="?id={$u.id}&action=delfile&f={$u.f}">Delete</a></td></tr>
{/foreach}
		</tbody></table>
{/if}

		<div style="position:relative; top:50px;">
			<input type="submit" name="action" value="{$edit_post_action}" class="edit"/>
			<input type="submit" name="delete" value="delete report" class="edit" onclick="return confirm('Are you sure you want to delete this report?')"/>
{/if}
{if isset($report_id)}
			<input type="hidden" name="id" value="{$report_id}"/>
{/if}
			<input type="button" name="cancel" value="cancel" onclick="document.location.href='./{$relpath_top}'" class="edit"/>
			</form>
{if $edit_post_action != "+"}
		</div>

		<div style="position:relative; top:-30px;">
			<form name="datafiles" method="post" action="{$relpath_top}view/report.php" enctype="multipart/form-data">
			<input type="hidden" name="MAX_FILE_SIZE" value="104857600"/>
			<input type="file" name="file0" id="file0"/><br/>
			<input type="hidden" name="id" value="{$report_id}"/>
			<input type="submit" name="action" value="upload"/>
			</form>
		</div>

{/if}
	</td></tr>
	</tbody></table>
	<script type="text/javascript">
	$(function() { $("form [name=title]").focus(); });
	</script>
</div>
