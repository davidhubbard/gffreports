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
	{$title_brand} - Report "{$title}"</a>
</div>

<div class="grouptitle">File: <tt>{$sum}</tt></div>

{if $limit !== false}<span style="color:red;">Warning: only {$limit} of {$count} rows displayed here.
Please <a href="?id={$id}&file={$f}&format=csv">download the CSV</a> to see all rows.</span>
{else}{if $count != 1}{$count} rows total. {/if}<a href="?id={$id}&file={$f}&format=csv">Download CSV</a>
{/if}<br/>
{if count($same)}<b>Identical for {if $limit === false}all{else}{$limit}{/if} rows:</b><br/>
<table border="1" cellspacing="0" cellpadding="2"><tbody>
<tr valign="top">{foreach name="same" from=$same key=k item=v}<th>{$k}</th>{/foreach}</tr>
<tr valign="top">{foreach name="same" from=$same key=k item=v}<td>{$v}</td>{/foreach}</tr>
</tbody></table>
<br/>
<br/>
{/if}
<table border="1" cellspacing="0" cellpadding="2"><tbody>
<tr valign="top">{foreach name="hdr" from=$c[0] key=k item=v}<th><font size="0">{$k}</font></th>{/foreach}</tr>
{foreach name="row" from=$c item=r}
<tr valign="top">{foreach name="col" from=$r key=k item=v}<td>{$v}</td>{/foreach}</tr>
{/foreach}
</tbody></table>
