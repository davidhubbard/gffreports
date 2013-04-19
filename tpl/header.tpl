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
<html>
<head>
<title>{$title_brand}</title>

<script type="text/javascript" src="{$relpath_top}img/jquery-1.9.1.min.js"></script>
{if isset($canloadmore)}
<script type="text/javascript">
function loadMoreRows()
{
	if (typeof window.loadingMore != 'undefined') return;

	window.loadingMore = 1;
	//$('#message').html('getting more...');
	var u = "?start=" + (window.tstart+window.tlimit);
	//$('#message').html('get ' + u + ' tstart=' + window.tstart + ' tlimit=' + window.tlimit + ' canloadmore=' + window.canloadmore);
	$.ajax({
		url: u,
		dataType: "html",
		success: function(h) {
				//$('#message').html('ajax success');
				//h = '<tr><td colspan="10">start ' + (window.tstart+window.tlimit) + '</td></tr>' + h;
				$('#loadmore').append(h);
				delete window.loadingMore;
			}
	});
}

function getWindowHeight(a)
{
	if (typeof window.innerHeight != 'undefined') return window.innerHeight;
	// IE6 in standards compliant mode (i.e. with a valid doctype as the first line in the document)
	if (typeof document.documentElement != 'undefined' && typeof document.documentElement.clientHeight != 'undefined' && document.documentElement.clientWidth != 0)
		return document.documentElement.clientHeight;
	if (a) alert('warning: your browser does not support window height detection');
	return undefined;
}

function checkForMore() {
	var w = getWindowHeight();
	var s = $(document).scrollTop();
	var d = $(document).height();
	var x = d-w-s;
	//$('#message').html('doc: ' + d + ' win:' + w + ' scrl:' + s + ' = ' + x);
	if (x < 400) loadMoreRows();
};
$(document).ready(function() {
	var h = getWindowHeight(1);	// try getting window height
	if (typeof h == 'undefined') return;
	checkForMore();

	$(window).resize(checkForMore);
	$(window).scroll(checkForMore);
});
</script>
{/if}

<style type="text/css">

div.title {
	font-size:24pt;
	padding-bottom:8px;
	margin-bottom:20px;
	box-shadow: 0 16px 16px -16px #888;
}

img.gfflogo {
	vertical-align:top;
	margin-right:10px;
}

div.bottom {
	clear:both;
	padding-top:20px;
}

div.messages {
	margin-left:20px;
	border-radius:10px;
	border:solid 1px #888;
	padding:10px;
	width:400px;
	background:#eee;
	float:left;
}

div.onemessage {
	margin-top:10px;
	border-radius:5px;
	padding:5px;
	border:solid 1px #000;
}

div.onemessage a {
	text-decoration:none;
}
div.onemessage span.icon:before {
	color:#ff0000;
	content: "X ";
}
div.onemessage span.msg {
	text-decoration:underline;
}

div.pickone {
	margin-left:20px;
	border-radius:10px;
	border:solid 1px #888;
	padding:10px;
	width:500px;
	background:#eee;
	float:left;
}

table.reports {
	min-width:350px;
}
table.reports tr.report {
	cursor: pointer;
}
table.reports tr.report:hover {
	background:#ffff00;
}
table.reports tr.report:hover td.gen {
	background:#eee;
}

div.reportedit {
	margin-left:20px;
	border-radius:10px;
	border:solid 1px #88a;
	padding:10px;
	width:700px;
	background:#e0e0ff;
	float:left;
}

table.reportedit td {
	padding-bottom:16px;
}
table.upload td {
	padding-bottom:0;
}

input.edit {
	margin-top:10px;
	width:100px;
	height:2em;
}

div.grouptitle {
	font-size: 18pt;
	border-bottom: solid 1px #000;
	margin-bottom: 10px;
}

span.hint {
	font-style: italic;
}

</style>
</head>
<body>
<div class="title">
	<a style="text-decoration:none;" href="{$relpath_top}">
	<img src="{$relpath_top}img/dark-gff.jpg" width="195" height="74" border="0" alt="GetFoundFirst.com" class="gfflogo"/>
