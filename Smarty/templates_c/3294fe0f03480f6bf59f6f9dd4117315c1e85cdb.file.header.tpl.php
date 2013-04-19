<?php /* Smarty version Smarty-3.1.13, created on 2013-03-19 15:30:56
         compiled from "./tpl/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19507449495148d91026afb0-89822421%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3294fe0f03480f6bf59f6f9dd4117315c1e85cdb' => 
    array (
      0 => './tpl/header.tpl',
      1 => 1362004889,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19507449495148d91026afb0-89822421',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title_brand' => 0,
    'relpath_top' => 0,
    'canloadmore' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5148d9102b1238_85404980',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5148d9102b1238_85404980')) {function content_5148d9102b1238_85404980($_smarty_tpl) {?><html>
<head>
<title><?php echo $_smarty_tpl->tpl_vars['title_brand']->value;?>
</title>

<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['relpath_top']->value;?>
img/jquery-1.9.1.min.js"></script>
<?php if (isset($_smarty_tpl->tpl_vars['canloadmore']->value)){?>
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
<?php }?>

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
	<a style="text-decoration:none;" href="<?php echo $_smarty_tpl->tpl_vars['relpath_top']->value;?>
">
	<img src="<?php echo $_smarty_tpl->tpl_vars['relpath_top']->value;?>
img/dark-gff.jpg" width="195" height="74" border="0" alt="GetFoundFirst.com" class="gfflogo"/>
<?php }} ?>