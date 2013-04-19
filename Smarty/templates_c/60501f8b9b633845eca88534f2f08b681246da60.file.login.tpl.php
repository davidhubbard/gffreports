<?php /* Smarty version Smarty-3.1.13, created on 2013-04-19 14:31:55
         compiled from "./tpl/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:548797309517177238cea76-76939743%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '60501f8b9b633845eca88534f2f08b681246da60' => 
    array (
      0 => './tpl/login.tpl',
      1 => 1366403514,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '548797309517177238cea76-76939743',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_517177238f6db6_35809351',
  'variables' => 
  array (
    'title_brand' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_517177238f6db6_35809351')) {function content_517177238f6db6_35809351($_smarty_tpl) {?>	<?php echo $_smarty_tpl->tpl_vars['title_brand']->value;?>
</a>
</div>

<div class="pickone"><div class="grouptitle">Please log in:</div>
	<form name="login" method="post" action="./">
	<table border="0" cellspacing="0" cellpadding="2"><tbody>
	<tr valign="top"><td>Username:</td><td><input type="text" name="user" id="user"></td></tr>
	<tr valign="top"><td>Password:</td><td><input type="password" name="pass" id="pass"></td></tr>
	<tr valign="top"><td>&nbsp;</td><td><input type="submit" name="login" id="login" value="Log In"></td></tr>
	</tbody></table>
	</form>
</div>

<script type="text/javascript">
<!--
$(document).ready(function() {
	$('#user').focus();
});
-->
</script>
<?php }} ?>