<?php /* Smarty version Smarty-3.1.13, created on 2013-04-19 15:04:45
         compiled from "./tpl/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16089441495148d9102f77f0-61862716%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '970c202d2c1b8db730411a07e6388d144d0cfe4e' => 
    array (
      0 => './tpl/footer.tpl',
      1 => 1366405482,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16089441495148d9102f77f0-61862716',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5148d910311152_81870911',
  'variables' => 
  array (
    'globals' => 0,
    'relpath_top' => 0,
    'k' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5148d910311152_81870911')) {function content_5148d910311152_81870911($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['globals']->value['_SESSION']['msg'])&&count($_smarty_tpl->tpl_vars['globals']->value['_SESSION']['msg'])){?>
<div class="messages">
	Messages:
	<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['globals']->value['_SESSION']['msg']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
	<div class="onemessage"><a href="<?php echo $_smarty_tpl->tpl_vars['relpath_top']->value;?>
view/msg.php?del=<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"><span class="icon"></span><span class="msg"><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</span></a></div>
	<?php } ?>
	<div align="right">
		<input class="edit" type="button" name="clear" value="Clear" onclick="document.location.href = '<?php echo $_smarty_tpl->tpl_vars['relpath_top']->value;?>
view/msg.php?clear=1'"/>
	</div>
</div>
<?php }?>

<div class="bottom">
	Copyright &copy; 2013 ndisp.com. All rights reserved.
</div>
</body></html>
<?php }} ?>