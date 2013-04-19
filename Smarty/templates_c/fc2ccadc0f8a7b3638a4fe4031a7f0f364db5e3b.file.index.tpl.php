<?php /* Smarty version Smarty-3.1.13, created on 2013-04-19 14:37:09
         compiled from "./tpl/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14804162585148d9102b4b77-82451265%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fc2ccadc0f8a7b3638a4fe4031a7f0f364db5e3b' => 
    array (
      0 => './tpl/index.tpl',
      1 => 1366390473,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14804162585148d9102b4b77-82451265',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5148d9102f3fc0_74356352',
  'variables' => 
  array (
    'title_brand' => 0,
    'reports' => 0,
    'k' => 0,
    'click' => 0,
    'v' => 0,
    'templates' => 0,
    'relpath_top' => 0,
    'u' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5148d9102f3fc0_74356352')) {function content_5148d9102f3fc0_74356352($_smarty_tpl) {?>	<?php echo $_smarty_tpl->tpl_vars['title_brand']->value;?>
</a>
</div>

<div class="pickone"><div class="grouptitle">Reports:</div>
<?php if (count($_smarty_tpl->tpl_vars['reports']->value)){?>
	<table border="1" cellspacing="0" cellpadding="2" class="reports"><tbody>
	<tr valign="top"><th>Client Name</th><th>Report</th><th>Week of</th><td>&nbsp;</td></tr>
	<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['reports']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
<?php $_smarty_tpl->_capture_stack[0][] = array('default', 'click', null); ob_start(); ?>onclick="document.location.href = 'view/report.php?id=<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
'"<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
	<tr valign="top" class="report"><td <?php echo $_smarty_tpl->tpl_vars['click']->value;?>
><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</td><td <?php echo $_smarty_tpl->tpl_vars['click']->value;?>
><?php echo $_smarty_tpl->tpl_vars['templates']->value[$_smarty_tpl->tpl_vars['v']->value['template']];?>
</td>
		<td <?php echo $_smarty_tpl->tpl_vars['click']->value;?>
><?php if ($_smarty_tpl->tpl_vars['v']->value['last_update_t']){?><?php echo date("M j, Y",$_smarty_tpl->tpl_vars['v']->value['last_update_t']);?>
<?php }else{ ?>no files<?php }?></td>
		<?php $_smarty_tpl->tpl_vars['u'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['relpath_top']->value)."test/report/?id=".((string)$_smarty_tpl->tpl_vars['k']->value), null, 0);?>
		<td onclick="window.open('<?php echo $_smarty_tpl->tpl_vars['u']->value;?>
');return false" class="gen"><a href="<?php echo $_smarty_tpl->tpl_vars['u']->value;?>
">Generate!</a></td></tr>
	<?php } ?>
	</tbody></table>
<?php }?>
	<form name="addreport" method="get" action="view/reportadd.php">
	<input type="submit" value="+" class="edit"/> <span class="hint">Add report</span>
	</form>
</div>
<?php }} ?>