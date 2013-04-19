<?php /* Smarty version Smarty-3.1.13, created on 2013-03-20 15:57:22
         compiled from "./tpl/report.tpl" */ ?>
<?php /*%%SmartyHeaderCode:372343048514a30c27d7f97-06105242%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1903dd7dfd02084929d97fb44ecdf2cf21f9d8f3' => 
    array (
      0 => './tpl/report.tpl',
      1 => 1362006283,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '372343048514a30c27d7f97-06105242',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title_brand' => 0,
    'edit_title' => 0,
    'report_id' => 0,
    'section' => 0,
    's' => 0,
    'relpath_top' => 0,
    'u' => 0,
    'title' => 0,
    'templates' => 0,
    'k' => 0,
    'template_selected' => 0,
    'v' => 0,
    'edit_post_action' => 0,
    'upload' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_514a30c2895932_70481420',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_514a30c2895932_70481420')) {function content_514a30c2895932_70481420($_smarty_tpl) {?>	<?php echo $_smarty_tpl->tpl_vars['title_brand']->value;?>
</a>
</div>

<div class="reportedit"><div class="grouptitle"><?php echo $_smarty_tpl->tpl_vars['edit_title']->value;?>
</div>
	<table border="0" cellspacing="0" cellpadding="0" class="reportedit" width="100%"><tbody>
	<tr valign="top"><td>Client Name:</td><td>
		<?php if (isset($_smarty_tpl->tpl_vars['report_id']->value)){?>
		<div style="float:right;max-width:400px;">
			<form name="gen" method="get" action="">
			<?php  $_smarty_tpl->tpl_vars['s'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['s']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['section']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['s']->key => $_smarty_tpl->tpl_vars['s']->value){
$_smarty_tpl->tpl_vars['s']->_loop = true;
?>
			<div style="display:inline-block;"><input type="checkbox" name="section<?php echo $_smarty_tpl->tpl_vars['s']->value;?>
" id="section<?php echo $_smarty_tpl->tpl_vars['s']->value;?>
" checked="checked"
				/><label for="section<?php echo $_smarty_tpl->tpl_vars['s']->value;?>
">Section <?php echo $_smarty_tpl->tpl_vars['s']->value;?>
</label></div>
			<?php } ?><br/>
			<?php $_smarty_tpl->tpl_vars['u'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['relpath_top']->value)."test/report/?id=".((string)$_smarty_tpl->tpl_vars['report_id']->value), null, 0);?>
			<a href="<?php echo $_smarty_tpl->tpl_vars['u']->value;?>
" onclick="window.open('<?php echo $_smarty_tpl->tpl_vars['u']->value;?>
');return false">Generate!</a></form></div>
		<?php }?>
		<form name="report" method="post" action="<?php echo $_smarty_tpl->tpl_vars['relpath_top']->value;?>
view/report.php">
		<input type="text" name="title"<?php if (isset($_smarty_tpl->tpl_vars['title']->value)){?> value="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
"<?php }?>/></td></tr>
	<tr valign="top"><td>Template:</td><td>
		<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['templates']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
		<input type="radio" name="template" id="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['template_selected']->value==$_smarty_tpl->tpl_vars['k']->value){?> checked="checked"<?php }?>/><label for="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"> <?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</label><br/>
		<?php } ?>
	</td></tr>
<?php if ($_smarty_tpl->tpl_vars['edit_post_action']->value=="+"){?>
	<tr valign="top"><td>&nbsp;</td><td>
		<span class="hint">Upload files in the next step</span></br>
		<input type="submit" name="action" value="<?php echo $_smarty_tpl->tpl_vars['edit_post_action']->value;?>
" class="edit"/>
<?php }else{ ?>
	<tr valign="top"><td>Data files:</td><td>
<?php if (count($_smarty_tpl->tpl_vars['upload']->value)){?>
		<table border="1" cellspacing="0" cellpadding="2" class="upload"><tbody>
<?php  $_smarty_tpl->tpl_vars['u'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['u']->_loop = false;
 $_from = smarty_function_sort($_smarty_tpl->tpl_vars['upload']->value,'t_start','sum'); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['u']->key => $_smarty_tpl->tpl_vars['u']->value){
$_smarty_tpl->tpl_vars['u']->_loop = true;
?>
		<tr valign="top"><td><a href="file.php?id=<?php echo $_smarty_tpl->tpl_vars['u']->value['id'];?>
&file=<?php echo $_smarty_tpl->tpl_vars['u']->value['f'];?>
"><?php echo $_smarty_tpl->tpl_vars['u']->value['sum'];?>
</a></td>
			<td><a href="file.php?id=<?php echo $_smarty_tpl->tpl_vars['u']->value['id'];?>
&file=<?php echo $_smarty_tpl->tpl_vars['u']->value['f'];?>
&format=csv">download</a></td>
			<td><?php echo date("M j, Y",$_smarty_tpl->tpl_vars['u']->value['t_start']);?>
-<?php echo date("M j, Y",$_smarty_tpl->tpl_vars['u']->value['t_end']);?>
</td>
			<td><a href="?id=<?php echo $_smarty_tpl->tpl_vars['u']->value['id'];?>
&action=delfile&f=<?php echo $_smarty_tpl->tpl_vars['u']->value['f'];?>
">Delete</a></td></tr>
<?php } ?>
		</tbody></table>
<?php }?>

		<div style="position:relative; top:50px;">
			<input type="submit" name="action" value="<?php echo $_smarty_tpl->tpl_vars['edit_post_action']->value;?>
" class="edit"/>
			<input type="submit" name="delete" value="delete report" class="edit" onclick="return confirm('Are you sure you want to delete this report?')"/>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['report_id']->value)){?>
			<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['report_id']->value;?>
"/>
<?php }?>
			<input type="button" name="cancel" value="cancel" onclick="document.location.href='./<?php echo $_smarty_tpl->tpl_vars['relpath_top']->value;?>
'" class="edit"/>
			</form>
<?php if ($_smarty_tpl->tpl_vars['edit_post_action']->value!="+"){?>
		</div>

		<div style="position:relative; top:-30px;">
			<form name="datafiles" method="post" action="<?php echo $_smarty_tpl->tpl_vars['relpath_top']->value;?>
view/report.php" enctype="multipart/form-data">
			<input type="hidden" name="MAX_FILE_SIZE" value="104857600"/>
			<input type="file" name="file0" id="file0"/><br/>
			<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['report_id']->value;?>
"/>
			<input type="submit" name="action" value="upload"/>
			</form>
		</div>

<?php }?>
	</td></tr>
	</tbody></table>
	<script type="text/javascript">
	$(function() { $("form [name=title]").focus(); });
	</script>
</div>
<?php }} ?>