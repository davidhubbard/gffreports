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
{if isset($globals._SESSION.msg) && count($globals._SESSION.msg)}
<div class="messages">
	Messages:
	{foreach name="msg" from=$globals._SESSION.msg key=k item=v}
	<div class="onemessage"><a href="{$relpath_top}view/msg.php?del={$k}"><span class="icon"></span><span class="msg">{$v}</span></a></div>
	{/foreach}
	<div align="right">
		<input class="edit" type="button" name="clear" value="Clear" onclick="document.location.href = '{$relpath_top}view/msg.php?clear=1'"/>
	</div>
</div>
{/if}

<div class="bottom">
	Copyright &copy; 2013 ndisp.com. All rights reserved.
</div>
</body></html>
