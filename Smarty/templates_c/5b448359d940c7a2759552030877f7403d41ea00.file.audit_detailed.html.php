<?php /* Smarty version Smarty-3.1.13, created on 2013-03-21 16:54:05
         compiled from "./chroot/report/audit_detailed.html" */ ?>
<?php /*%%SmartyHeaderCode:863283017514b8f8d669099-22501185%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5b448359d940c7a2759552030877f7403d41ea00' => 
    array (
      0 => './chroot/report/audit_detailed.html',
      1 => 1363090939,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '863283017514b8f8d669099-22501185',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title_brand' => 0,
    'relpath_top' => 0,
    'lastupdate_t' => 0,
    'clientname' => 0,
    'pagebreak' => 0,
    'insert_table_of_contents' => 0,
    'hourly' => 0,
    'totalclick' => 0,
    'totalimpr' => 0,
    'totalconv' => 0,
    'totalspend' => 0,
    'totalrev' => 0,
    'auto_placements' => 0,
    'row' => 0,
    'rowcamp' => 0,
    'report' => 0,
    'campaign' => 0,
    'keyword' => 0,
    'keyword_eligible_count' => 0,
    'keyword_no_impr_count' => 0,
    'ads' => 0,
    'arr' => 0,
    'k' => 0,
    'pivot' => 0,
    'a' => 0,
    'p_spend' => 0,
    'p_adgroups' => 0,
    'p_clicks' => 0,
    'p_impr' => 0,
    'p_conv' => 0,
    'p_rev' => 0,
    'checkbox_section1' => 0,
    'hournum' => 0,
    'data' => 0,
    'dow' => 0,
    'checkbox_section2' => 0,
    'matchtype' => 0,
    'matches' => 0,
    'conv' => 0,
    'spend' => 0,
    'impr' => 0,
    'zeroconv' => 0,
    'kw' => 0,
    'someimpr_spend' => 0,
    'someimpr_rev' => 0,
    'someconv' => 0,
    'checkbox_section3' => 0,
    'hist' => 0,
    'qs' => 0,
    'qs_score' => 0,
    'checkbox_section4' => 0,
    'sumgroupctr' => 0,
    'countallads' => 0,
    'countgroups' => 0,
    'checkbox_section5' => 0,
    'man_placements' => 0,
    'man_impr' => 0,
    'man_clicks' => 0,
    'man_spend' => 0,
    'man_rev' => 0,
    'auto_placements_impr' => 0,
    'auto_placements_clicks' => 0,
    'auto_placements_spend' => 0,
    'auto_placements_rev' => 0,
    'checkbox_section6' => 0,
    'remark' => 0,
    'remark_impr' => 0,
    'remark_clicks' => 0,
    'remark_conv' => 0,
    'remark_spend' => 0,
    'remark_rev' => 0,
    'checkbox_section7' => 0,
    'checkbox_section8' => 0,
    'checkbox_section9' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_514b8f8dcc3ed0_88440723',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_514b8f8dcc3ed0_88440723')) {function content_514b8f8dcc3ed0_88440723($_smarty_tpl) {?>





<html>
<head>
<title><?php echo $_smarty_tpl->tpl_vars['title_brand']->value;?>
</title>

<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['relpath_top']->value;?>
img/jquery-1.9.1.min.js"></script>

<style type="text/css" media="screen">
div.titlepage {
	margin-left: 2px;
	margin-right: 4px;
	margin-bottom: -8px;
	padding: 4px;
	box-shadow: 2px 2px 8px #000000;
}

div.page {
	margin-left: 2px;
	margin-right: 4px;
	margin-bottom: -8px;
	padding: 4px;
	box-shadow: 2px 2px 8px #000000;
}
</style>

<style type="text/css" media="print">
div.titlepage {
	page-break-after: always;
	page-break-inside: avoid;
}
div.page:not(.dummy) {
	page-break-after: always;
	page-break-inside: avoid;
}
div.page:last-of-type {
	page-break-after: auto;
}
</style>

<style type="text/css">

div.titlepage {
	font-size:24pt;
	padding-bottom:8px;
}

img.gfflogo {
	vertical-align:top;
	margin-right:10px;
}

div.grouptitle {
	font-size: 18pt;
	border-bottom: solid 1px #000;
	margin-bottom: 10px;
}

div.indent {
	margin-left:4em;
}

table.single {
	border-collapse:collapse;
}

table.single td, table.single th {
	border: 1px solid #000000;
	padding:5px;
	font-weight:normal;
}

td.tablerowheading {
	font-size:20px;
	font-weight:bold !important;
	background:#f0f0f0;
}

</style>
</head>
<body>
<div class="titlepage">
	<img src="<?php echo $_smarty_tpl->tpl_vars['relpath_top']->value;?>
img/dark-gff.jpg" width="195" height="74" border="0" alt="GetFoundFirst.com" class="gfflogo"/>

	<div style="padding-top:50px;">
		90 Day Account Audit<br/>
		<?php echo date("M j, Y",$_smarty_tpl->tpl_vars['lastupdate_t']->value);?>

	</div>

	<div style="padding-top:50px;">
		(logo) <?php echo $_smarty_tpl->tpl_vars['clientname']->value;?>

	</div>

<?php echo $_smarty_tpl->tpl_vars['pagebreak']->value;?>


	<div class="grouptitle">
		Table of Contents
	</div>

	<?php echo $_smarty_tpl->tpl_vars['insert_table_of_contents']->value;?>


<?php echo $_smarty_tpl->tpl_vars['pagebreak']->value;?>


	<div class="grouptitle">
		<?php echo $_smarty_tpl->tpl_vars['clientname']->value;?>
 <span class="outline1">Account Summary</span>
	</div>

	<table border="0" cellspacing="0" cellpadding="0" class="single"><tbody>
	<tr valign="top"><td>
		<u>Total # of Clicks</u><br/>
		<?php $_smarty_tpl->tpl_vars['totalclick'] = new Smarty_variable(sum($_smarty_tpl->tpl_vars['hourly']->value,"Clicks"), null, 0);?>
		<?php echo $_smarty_tpl->tpl_vars['totalclick']->value;?>

	</td><td>
		<u>Total # of Impressions</u><br/>
		<?php $_smarty_tpl->tpl_vars['totalimpr'] = new Smarty_variable(sum($_smarty_tpl->tpl_vars['hourly']->value,"Impressions"), null, 0);?>
		<?php echo $_smarty_tpl->tpl_vars['totalimpr']->value;?>

	</td><td>
		<u>Average CTR</u><br/>
		<?php echo sprintf("%0.2f",$_smarty_tpl->tpl_vars['totalclick']->value/$_smarty_tpl->tpl_vars['totalimpr']->value*100);?>
%
	</td><td>
		<u>Average CPA</u><br/>

		<?php $_smarty_tpl->tpl_vars['totalspend'] = new Smarty_variable(sum($_smarty_tpl->tpl_vars['hourly']->value,"Cost"), null, 0);?>
		<?php $_smarty_tpl->tpl_vars['totalconv'] = new Smarty_variable(sum($_smarty_tpl->tpl_vars['hourly']->value,"Conv. (1-per-click)"), null, 0);?>

		<?php if ($_smarty_tpl->tpl_vars['totalconv']->value!=0){?>$<?php echo sprintf("%0.2f",$_smarty_tpl->tpl_vars['totalspend']->value/$_smarty_tpl->tpl_vars['totalconv']->value);?>
<?php }else{ ?>0 conversions: spend of $<?php echo sprintf("%0.2f",$_smarty_tpl->tpl_vars['totalspend']->value);?>
, CPA is a division by zero<?php }?>
	</td><td>
		<u>Conversion Rate</u><br/>
		<?php echo sprintf("%0.2f",$_smarty_tpl->tpl_vars['totalconv']->value/$_smarty_tpl->tpl_vars['totalclick']->value*100);?>
%
	</td></tr>
	<tr valign="top"><td>
		<u>Total Spend</u></br>
		$<?php echo sprintf("%0.2f",$_smarty_tpl->tpl_vars['totalspend']->value);?>

	</td><td>
		<u>Total # of Conversions</u><br/>
		<?php echo $_smarty_tpl->tpl_vars['totalconv']->value;?>

	</td><td>
		<u>Total Revenue</u><br/>
		<?php $_smarty_tpl->tpl_vars['totalrev'] = new Smarty_variable(sum($_smarty_tpl->tpl_vars['hourly']->value,"Total conv. value"), null, 0);?>

		<?php if ($_smarty_tpl->tpl_vars['totalrev']->value!=0){?>$<?php echo sprintf("%0.2f",$_smarty_tpl->tpl_vars['totalrev']->value);?>

		<?php }else{ ?>(showing nothing<br/>because total = $0)
		<?php }?>
	</td><td>
		<u>Overall ROAS</u><br/>
		<?php if ($_smarty_tpl->tpl_vars['totalrev']->value!=0){?><?php echo sprintf("%0.8f",$_smarty_tpl->tpl_vars['totalrev']->value/$_smarty_tpl->tpl_vars['totalspend']->value);?>
<?php }?>
	</td></tr>
	</tbody></table>

	<div style="height:20px;"></div>



<?php $_smarty_tpl->tpl_vars['campaign'] = new Smarty_variable(array(), null, 0);?>
<?php $_smarty_tpl->createLocalArrayVariable('campaign', null, 0);
$_smarty_tpl->tpl_vars['campaign']->value["Display"] = array();?>
<?php $_smarty_tpl->createLocalArrayVariable('campaign', null, 0);
$_smarty_tpl->tpl_vars['campaign']->value["Remarketing"] = array();?>
<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['auto_placements']->value['all']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['row']->key;
?>
	<?php $_smarty_tpl->tpl_vars['rowcamp'] = new Smarty_variable($_smarty_tpl->tpl_vars['row']->value["Campaign"], null, 0);?>
	<?php if (stripos($_smarty_tpl->tpl_vars['rowcamp']->value,"partner")!==false){?><?php continue 1?><?php }?>

	<?php $_smarty_tpl->tpl_vars['report'] = new Smarty_variable("Display", null, 0);?>
	<?php if (stripos($_smarty_tpl->tpl_vars['rowcamp']->value,"remarketing")!==false){?><?php $_smarty_tpl->tpl_vars['report'] = new Smarty_variable("Remarketing", null, 0);?><?php }?>

	
	<?php if (isset($_smarty_tpl->tpl_vars['campaign']->value[$_smarty_tpl->tpl_vars['report']->value][$_smarty_tpl->tpl_vars['rowcamp']->value])){?>
		<?php $_smarty_tpl->createLocalArrayVariable('campaign', null, 0);
$_smarty_tpl->tpl_vars['campaign']->value[$_smarty_tpl->tpl_vars['report']->value][$_smarty_tpl->tpl_vars['rowcamp']->value][] = $_smarty_tpl->tpl_vars['row']->value;?>
	<?php }else{ ?>
		<?php $_smarty_tpl->createLocalArrayVariable('campaign', null, 0);
$_smarty_tpl->tpl_vars['campaign']->value[$_smarty_tpl->tpl_vars['report']->value][$_smarty_tpl->tpl_vars['rowcamp']->value] = array($_smarty_tpl->tpl_vars['row']->value);?>
	<?php }?>
<?php } ?>

<?php $_smarty_tpl->tpl_vars['keyword_eligible_count'] = new Smarty_variable(0, null, 0);?>
<?php $_smarty_tpl->tpl_vars['keyword_no_impr_count'] = new Smarty_variable(0, null, 0);?>
<?php $_smarty_tpl->createLocalArrayVariable('campaign', null, 0);
$_smarty_tpl->tpl_vars['campaign']->value["Search"] = array();?>
<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['keyword']->value['all']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['row']->key;
?>
	<?php if ($_smarty_tpl->tpl_vars['row']->value["Status"]=="eligible"){?>
		<?php $_smarty_tpl->tpl_vars['keyword_eligible_count'] = new Smarty_variable($_smarty_tpl->tpl_vars['keyword_eligible_count']->value+1, null, 0);?>
		<?php if ($_smarty_tpl->tpl_vars['row']->value["Impressions"]==0){?>
			<?php $_smarty_tpl->tpl_vars['keyword_no_impr_count'] = new Smarty_variable($_smarty_tpl->tpl_vars['keyword_no_impr_count']->value+1, null, 0);?>
		<?php }?>
	<?php }?>

	<?php $_smarty_tpl->tpl_vars['rowcamp'] = new Smarty_variable($_smarty_tpl->tpl_vars['row']->value["Campaign"], null, 0);?>
	<?php if (stripos($_smarty_tpl->tpl_vars['rowcamp']->value,"partner")!==false){?><?php continue 1?><?php }?>

	
	<?php if (isset($_smarty_tpl->tpl_vars['campaign']->value["Display"][$_smarty_tpl->tpl_vars['rowcamp']->value])||isset($_smarty_tpl->tpl_vars['campaign']->value["Remarketing"][$_smarty_tpl->tpl_vars['rowcamp']->value])){?><?php continue 1?><?php }?>

	<?php $_smarty_tpl->tpl_vars['report'] = new Smarty_variable("Search", null, 0);?>
	
	<?php if (isset($_smarty_tpl->tpl_vars['campaign']->value[$_smarty_tpl->tpl_vars['report']->value][$_smarty_tpl->tpl_vars['rowcamp']->value])){?>
		<?php $_smarty_tpl->createLocalArrayVariable('campaign', null, 0);
$_smarty_tpl->tpl_vars['campaign']->value[$_smarty_tpl->tpl_vars['report']->value][$_smarty_tpl->tpl_vars['rowcamp']->value][] = $_smarty_tpl->tpl_vars['row']->value;?>
	<?php }else{ ?>
		<?php $_smarty_tpl->createLocalArrayVariable('campaign', null, 0);
$_smarty_tpl->tpl_vars['campaign']->value[$_smarty_tpl->tpl_vars['report']->value][$_smarty_tpl->tpl_vars['rowcamp']->value] = array($_smarty_tpl->tpl_vars['row']->value);?>
	<?php }?>
<?php } ?>


	<table border="0" cellspacing="0" cellpadding="0" class="single"><tbody>
	<?php $_smarty_tpl->tpl_vars['ads_clicks'] = new Smarty_variable(sum($_smarty_tpl->tpl_vars['ads']->value,"Clicks"), null, 0);?>
	<?php $_smarty_tpl->tpl_vars['keyword_clicks'] = new Smarty_variable(sum($_smarty_tpl->tpl_vars['keyword']->value,"Clicks"), null, 0);?>
	<?php $_smarty_tpl->tpl_vars['auto_placements_clicks'] = new Smarty_variable(sum($_smarty_tpl->tpl_vars['auto_placements']->value,"Clicks"), null, 0);?>

	<?php $_smarty_tpl->tpl_vars['arr'] = new Smarty_variable(array("Search","Display","Remarketing"), null, 0);?>
	<?php  $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['k']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['arr']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['k']->key => $_smarty_tpl->tpl_vars['k']->value){
$_smarty_tpl->tpl_vars['k']->_loop = true;
?>
		
		<?php $_smarty_tpl->tpl_vars['pivot'] = new Smarty_variable(array(), null, 0);?>
		<?php  $_smarty_tpl->tpl_vars['a'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['a']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['campaign']->value[$_smarty_tpl->tpl_vars['k']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['a']->key => $_smarty_tpl->tpl_vars['a']->value){
$_smarty_tpl->tpl_vars['a']->_loop = true;
?><?php $_smarty_tpl->tpl_vars['pivot'] = new Smarty_variable(array_merge($_smarty_tpl->tpl_vars['pivot']->value,$_smarty_tpl->tpl_vars['a']->value), null, 0);?><?php } ?>
		<?php if ($_smarty_tpl->tpl_vars['k']->value=="Remarketing"){?><?php $_smarty_tpl->tpl_vars['remark'] = new Smarty_variable($_smarty_tpl->tpl_vars['pivot']->value, null, 0);?><?php }?>

		
		<?php $_smarty_tpl->tpl_vars['p_spend'] = new Smarty_variable(sum($_smarty_tpl->tpl_vars['pivot']->value,"Cost"), null, 0);?>
		<?php $_smarty_tpl->tpl_vars['p_clicks'] = new Smarty_variable(sum($_smarty_tpl->tpl_vars['pivot']->value,"Clicks"), null, 0);?>
		<?php $_smarty_tpl->tpl_vars['p_impr'] = new Smarty_variable(sum($_smarty_tpl->tpl_vars['pivot']->value,"Impressions"), null, 0);?>
		<?php $_smarty_tpl->tpl_vars['p_conv'] = new Smarty_variable(sum($_smarty_tpl->tpl_vars['pivot']->value,"Conv. (1-per-click)"), null, 0);?>
		<?php $_smarty_tpl->tpl_vars['p_rev'] = new Smarty_variable(sum($_smarty_tpl->tpl_vars['pivot']->value,"Total conv. value"), null, 0);?>
		<?php if (count($_smarty_tpl->tpl_vars['pivot']->value)){?>
			<?php $_smarty_tpl->tpl_vars['p_adgroups'] = new Smarty_variable(count(pivottable($_smarty_tpl->tpl_vars['pivot']->value,"Ad group")), null, 0);?>
		<?php }else{ ?>
			<?php $_smarty_tpl->tpl_vars['p_adgroups'] = new Smarty_variable(0, null, 0);?>
		<?php }?>

		<tr valign="top"><td colspan="9" class="tablerowheading">
			<?php echo $_smarty_tpl->tpl_vars['k']->value;?>

		</td></tr>
		<tr valign="top"><th>
			Total Spend
		</th><th>
			% of Total
		</th><th>
			# Campaigns
		</th><th>
			# Adgroups
		</th><th>
			Ave CTR
		</th><th>
			CPA
		</th><th>
			<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
 Revenue
		</th><th>
			% of Total
		</th><th>
			<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
 ROAS
		</th></tr>
		<tr valign="top"><td>
			<!--Total Spend-->
			$<?php echo sprintf("%0.2f",$_smarty_tpl->tpl_vars['p_spend']->value);?>

		</td><td>
			
			<?php if ($_smarty_tpl->tpl_vars['totalspend']->value!=0){?><?php echo sprintf("%0.2f",$_smarty_tpl->tpl_vars['p_spend']->value/$_smarty_tpl->tpl_vars['totalspend']->value*100);?>
%<?php }?>
		</td><td>
			<!--# Campaigns-->
			<?php echo count($_smarty_tpl->tpl_vars['campaign']->value[$_smarty_tpl->tpl_vars['k']->value]);?>

		</td><td>
			<!--# Adgroups-->
			<?php echo $_smarty_tpl->tpl_vars['p_adgroups']->value;?>

		</td><td>
			<!--Ave CTR-->
			<?php echo sprintf("%0.2f",$_smarty_tpl->tpl_vars['p_clicks']->value/$_smarty_tpl->tpl_vars['p_impr']->value*100);?>
%
		</td><td>
			<!--CPA-->
			<?php if ($_smarty_tpl->tpl_vars['p_conv']->value!=0){?>$<?php echo sprintf("%0.2f",$_smarty_tpl->tpl_vars['p_spend']->value/$_smarty_tpl->tpl_vars['p_conv']->value);?>
<?php }else{ ?>0 conversions: spend of $<?php echo sprintf("%0.2f",$_smarty_tpl->tpl_vars['p_spend']->value);?>
, CPA is a division by zero<?php }?>
		</td><td>
			<!--<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
 Revenue-->
			$<?php echo sprintf("%0.2f",$_smarty_tpl->tpl_vars['p_rev']->value);?>

		</td><td>
			
			<?php if ($_smarty_tpl->tpl_vars['totalrev']->value!=0){?><?php echo sprintf("%0.2f",$_smarty_tpl->tpl_vars['p_rev']->value/$_smarty_tpl->tpl_vars['totalrev']->value*100);?>
%
			<?php }else{ ?>(showing nothing because total revenue = 0)<?php }?>
		</td><td>
			<!--<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
 ROAS-->
			<?php echo sprintf("%0.2f",$_smarty_tpl->tpl_vars['p_rev']->value/$_smarty_tpl->tpl_vars['p_spend']->value);?>

		</td></tr>
	<?php } ?>
	</tbody></table>

<?php if (isset($_smarty_tpl->tpl_vars['checkbox_section1']->value)){?>
<?php echo $_smarty_tpl->tpl_vars['pagebreak']->value;?>


	<div class="grouptitle">
		<span class="outline2">Search</span><br/>
		<span class="outline3">Campaign Dimension/Segmentation</span>
	</div>

	<h2>Hour of Day segmentation</h2>
	<?php $_smarty_tpl->tpl_vars['pivot'] = new Smarty_variable(pivottable($_smarty_tpl->tpl_vars['hourly']->value,"Hour of day"), null, 0);?>
	<table border="0" cellspacing="0" cellpadding="0" class="single"><tbody>
	<tr valign="top"><th>Hour</th><th>Impressions</th><th>Clicks</th><th>Spend</th><th>Conversions</th></tr>
	<?php $_smarty_tpl->tpl_vars['hournum'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['hournum']->step = 1;$_smarty_tpl->tpl_vars['hournum']->total = (int)ceil(($_smarty_tpl->tpl_vars['hournum']->step > 0 ? 23+1 - (0) : 0-(23)+1)/abs($_smarty_tpl->tpl_vars['hournum']->step));
if ($_smarty_tpl->tpl_vars['hournum']->total > 0){
for ($_smarty_tpl->tpl_vars['hournum']->value = 0, $_smarty_tpl->tpl_vars['hournum']->iteration = 1;$_smarty_tpl->tpl_vars['hournum']->iteration <= $_smarty_tpl->tpl_vars['hournum']->total;$_smarty_tpl->tpl_vars['hournum']->value += $_smarty_tpl->tpl_vars['hournum']->step, $_smarty_tpl->tpl_vars['hournum']->iteration++){
$_smarty_tpl->tpl_vars['hournum']->first = $_smarty_tpl->tpl_vars['hournum']->iteration == 1;$_smarty_tpl->tpl_vars['hournum']->last = $_smarty_tpl->tpl_vars['hournum']->iteration == $_smarty_tpl->tpl_vars['hournum']->total;?>
	<?php $_smarty_tpl->tpl_vars['data'] = new Smarty_variable($_smarty_tpl->tpl_vars['pivot']->value[$_smarty_tpl->tpl_vars['hournum']->value], null, 0);?>
	<tr valign="top"><td><?php echo $_smarty_tpl->tpl_vars['hournum']->value;?>
</td><td><?php echo sum($_smarty_tpl->tpl_vars['data']->value,"Impressions");?>
</td><td><?php echo sum($_smarty_tpl->tpl_vars['data']->value,"Clicks");?>
</td>
		<td><?php echo sprintf("%0.2f",sum($_smarty_tpl->tpl_vars['data']->value,"Cost"));?>
</td><td><?php echo sum($_smarty_tpl->tpl_vars['data']->value,"Conv. (1-per-click)");?>
</td></tr>
<!--    <div style="width:<?php echo sum($_smarty_tpl->tpl_vars['data']->value,"Impressions")/$_smarty_tpl->tpl_vars['totalimpr']->value*100;?>
px"></div> -->
	<?php }} ?>
	</tbody></table>

<?php echo $_smarty_tpl->tpl_vars['pagebreak']->value;?>


	<h2>Day of Week Segmentation</h2>
	<?php $_smarty_tpl->tpl_vars['pivot'] = new Smarty_variable(pivottable($_smarty_tpl->tpl_vars['hourly']->value,"Day of week"), null, 0);?>
	<table border="0" cellspacing="0" cellpadding="0" class="single"><tbody>
	<tr valign="top"><th>Day</th><th>Impressions</th><th>Clicks</th><th>Spend</th><th>Conversions</th></tr>
	<?php  $_smarty_tpl->tpl_vars['dow'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['dow']->_loop = false;
 $_from = array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['dow']->key => $_smarty_tpl->tpl_vars['dow']->value){
$_smarty_tpl->tpl_vars['dow']->_loop = true;
?>
	<?php $_smarty_tpl->tpl_vars['data'] = new Smarty_variable($_smarty_tpl->tpl_vars['pivot']->value[$_smarty_tpl->tpl_vars['dow']->value], null, 0);?>
	<tr valign="top"><td><?php echo $_smarty_tpl->tpl_vars['dow']->value;?>
</td><td><?php echo sum($_smarty_tpl->tpl_vars['data']->value,"Impressions");?>
</td><td><?php echo sum($_smarty_tpl->tpl_vars['data']->value,"Clicks");?>
</td>
		<td><?php echo sprintf("%0.2f",sum($_smarty_tpl->tpl_vars['data']->value,"Cost"));?>
</td><td><?php echo sum($_smarty_tpl->tpl_vars['data']->value,"Conv. (1-per-click)");?>
</td></tr>
	<?php } ?>
	</tbody></table>

<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['checkbox_section2']->value)){?>
<?php echo $_smarty_tpl->tpl_vars['pagebreak']->value;?>


	<div class="grouptitle">
		<span class="outline3">Current Keyword Review</span>
	</div>

	<div>
		<table border="0" cellspacing="0" cellpadding="0" class="single"><tbody>
		<tr valign="top"><th>Total Number of Eligible Keywords</th><th>0 Impression Eligible Keywords</th>
			<th>Keywords with Impressions</th><th>Average # of KWs per Adgroup</th></tr>
		<tr valign="top"><td>
			<?php echo $_smarty_tpl->tpl_vars['keyword_eligible_count']->value;?>

		</td><td>
			<?php echo $_smarty_tpl->tpl_vars['keyword_no_impr_count']->value;?>

		</td><td>
			<?php echo $_smarty_tpl->tpl_vars['keyword_eligible_count']->value-$_smarty_tpl->tpl_vars['keyword_no_impr_count']->value;?>

		</td><td>
			<?php $_smarty_tpl->tpl_vars['pivot'] = new Smarty_variable(pivottable($_smarty_tpl->tpl_vars['keyword']->value,"Ad group"), null, 0);?>
			<?php echo sprintf("%0.2f",count($_smarty_tpl->tpl_vars['keyword']->value["all"])/count($_smarty_tpl->tpl_vars['pivot']->value));?>

		</td></tr>
		</tbody></table>

		<h2>Review by Match Type</h2>
		<?php $_smarty_tpl->tpl_vars['pivot'] = new Smarty_variable(pivottable($_smarty_tpl->tpl_vars['keyword']->value,"Match type"), null, 0);?>
		<table border="0" cellspacing="0" cellpadding="0" class="single"><tbody>
		<tr valign="top"><th>Match Type</th><th>Ave. CPA</th><th>Ave. Conversion Rate</th><th>Ave. CTR</th></tr>
		<?php  $_smarty_tpl->tpl_vars['matches'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['matches']->_loop = false;
 $_smarty_tpl->tpl_vars['matchtype'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['pivot']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['matches']->key => $_smarty_tpl->tpl_vars['matches']->value){
$_smarty_tpl->tpl_vars['matches']->_loop = true;
 $_smarty_tpl->tpl_vars['matchtype']->value = $_smarty_tpl->tpl_vars['matches']->key;
?>
		<tr valign="top"><td><?php echo $_smarty_tpl->tpl_vars['matchtype']->value;?>
</td>
			<td><?php $_smarty_tpl->tpl_vars['spend'] = new Smarty_variable(sum($_smarty_tpl->tpl_vars['matches']->value,"Cost"), null, 0);?><?php $_smarty_tpl->tpl_vars['conv'] = new Smarty_variable(sum($_smarty_tpl->tpl_vars['matches']->value,"Conv. (1-per-click)"), null, 0);?><?php $_smarty_tpl->tpl_vars['impr'] = new Smarty_variable(sum($_smarty_tpl->tpl_vars['matches']->value,"Impressions"), null, 0);?>
				<?php if ($_smarty_tpl->tpl_vars['conv']->value!=0){?>$<?php echo sprintf("%0.2f",$_smarty_tpl->tpl_vars['spend']->value/$_smarty_tpl->tpl_vars['conv']->value);?>
<?php }else{ ?>0 conversions: spend of $<?php echo sprintf("%0.2f",$_smarty_tpl->tpl_vars['spend']->value);?>
, CPA is a division by zero<?php }?>
			</td><td><?php echo sprintf("%0.2f",$_smarty_tpl->tpl_vars['conv']->value/$_smarty_tpl->tpl_vars['impr']->value*100);?>
%
			</td><td><?php echo sprintf("%0.2f",sum($_smarty_tpl->tpl_vars['matches']->value,"Clicks")/$_smarty_tpl->tpl_vars['impr']->value*100);?>
%
			</td></tr>
		<?php } ?>
		</tbody></table>


		<?php $_smarty_tpl->tpl_vars['pivot'] = new Smarty_variable(pivottable($_smarty_tpl->tpl_vars['keyword']->value,"Keyword"), null, 0);?>

		
		

		<?php $_smarty_tpl->tpl_vars['zeroconv'] = new Smarty_variable(array(), null, 0);?>
		<?php $_smarty_tpl->tpl_vars['someconv'] = new Smarty_variable(array(), null, 0);?>
		<?php $_smarty_tpl->tpl_vars['someimpr_rev'] = new Smarty_variable(0, null, 0);?>	
		<?php $_smarty_tpl->tpl_vars['someimpr_spend'] = new Smarty_variable(0, null, 0);?>	
		<?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_smarty_tpl->tpl_vars['kw'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['pivot']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value){
$_smarty_tpl->tpl_vars['data']->_loop = true;
 $_smarty_tpl->tpl_vars['kw']->value = $_smarty_tpl->tpl_vars['data']->key;
?>
			<?php $_smarty_tpl->tpl_vars['conv'] = new Smarty_variable(sum($_smarty_tpl->tpl_vars['data']->value,"Conv. (1-per-click)"), null, 0);?>
			<?php $_smarty_tpl->tpl_vars['impr'] = new Smarty_variable(sum($_smarty_tpl->tpl_vars['data']->value,"Impressions"), null, 0);?>
			<?php if ($_smarty_tpl->tpl_vars['conv']->value==0){?>
				<?php if ($_smarty_tpl->tpl_vars['impr']->value!=0&&count($_smarty_tpl->tpl_vars['zeroconv']->value)<20){?>
					<?php $_smarty_tpl->createLocalArrayVariable('zeroconv', null, 0);
$_smarty_tpl->tpl_vars['zeroconv']->value[$_smarty_tpl->tpl_vars['kw']->value] = array();?>
					<?php $_smarty_tpl->createLocalArrayVariable('zeroconv', null, 0);
$_smarty_tpl->tpl_vars['zeroconv']->value[$_smarty_tpl->tpl_vars['kw']->value]["conv"] = $_smarty_tpl->tpl_vars['conv']->value;?>
					<?php $_smarty_tpl->createLocalArrayVariable('zeroconv', null, 0);
$_smarty_tpl->tpl_vars['zeroconv']->value[$_smarty_tpl->tpl_vars['kw']->value]["impr"] = $_smarty_tpl->tpl_vars['impr']->value;?>
					<?php $_smarty_tpl->createLocalArrayVariable('zeroconv', null, 0);
$_smarty_tpl->tpl_vars['zeroconv']->value[$_smarty_tpl->tpl_vars['kw']->value]["spend"] = sum($_smarty_tpl->tpl_vars['data']->value,"Cost");?>
					<?php $_smarty_tpl->tpl_vars['someimpr_spend'] = new Smarty_variable($_smarty_tpl->tpl_vars['someimpr_spend']->value+$_smarty_tpl->tpl_vars['zeroconv']->value[$_smarty_tpl->tpl_vars['kw']->value]["spend"], null, 0);?>
					<?php $_smarty_tpl->createLocalArrayVariable('zeroconv', null, 0);
$_smarty_tpl->tpl_vars['zeroconv']->value[$_smarty_tpl->tpl_vars['kw']->value]["clicks"] = sum($_smarty_tpl->tpl_vars['data']->value,"Clicks");?>
					<?php $_smarty_tpl->tpl_vars['someimpr_rev'] = new Smarty_variable($_smarty_tpl->tpl_vars['someimpr_rev']->value+sum($_smarty_tpl->tpl_vars['data']->value,"Total conv. value"), null, 0);?>
				<?php }?>
			<?php }else{ ?>
				<?php $_smarty_tpl->createLocalArrayVariable('someconv', null, 0);
$_smarty_tpl->tpl_vars['someconv']->value[$_smarty_tpl->tpl_vars['kw']->value] = array();?>
				<?php $_smarty_tpl->createLocalArrayVariable('someconv', null, 0);
$_smarty_tpl->tpl_vars['someconv']->value[$_smarty_tpl->tpl_vars['kw']->value]["conv"] = $_smarty_tpl->tpl_vars['conv']->value;?>
				<?php $_smarty_tpl->createLocalArrayVariable('someconv', null, 0);
$_smarty_tpl->tpl_vars['someconv']->value[$_smarty_tpl->tpl_vars['kw']->value]["impr"] = $_smarty_tpl->tpl_vars['impr']->value;?>
				<?php $_smarty_tpl->createLocalArrayVariable('someconv', null, 0);
$_smarty_tpl->tpl_vars['someconv']->value[$_smarty_tpl->tpl_vars['kw']->value]["spend"] = sum($_smarty_tpl->tpl_vars['data']->value,"Cost");?>
				<?php $_smarty_tpl->tpl_vars['someimpr_spend'] = new Smarty_variable($_smarty_tpl->tpl_vars['someimpr_spend']->value+$_smarty_tpl->tpl_vars['someconv']->value[$_smarty_tpl->tpl_vars['kw']->value]["spend"], null, 0);?>
				<?php $_smarty_tpl->createLocalArrayVariable('someconv', null, 0);
$_smarty_tpl->tpl_vars['someconv']->value[$_smarty_tpl->tpl_vars['kw']->value]["clicks"] = sum($_smarty_tpl->tpl_vars['data']->value,"Clicks");?>
				<?php $_smarty_tpl->tpl_vars['someimpr_rev'] = new Smarty_variable($_smarty_tpl->tpl_vars['someimpr_rev']->value+sum($_smarty_tpl->tpl_vars['data']->value,"Total conv. value"), null, 0);?>
			<?php }?>
		<?php } ?>

		<br/><br/>
		<table border="0" cellspacing="0" cellpadding="0" class="single"><tbody>
		<tr valign="top"><td colspan="5" class="tablerowheading">Non-Converting Keywords with Impressions</td></tr>
		<tr valign="top"><td colspan="5">(Sorted by Spend and only top 20 shown)</td></tr>
		<tr valign="top"><th>Keyword</th><th>Impressions</th><th>Spend</th><th>Clicks</th><th>Conversions</th></tr>
		<?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_smarty_tpl->tpl_vars['kw'] = new Smarty_Variable;
 $_from = smarty_function_sort($_smarty_tpl->tpl_vars['zeroconv']->value,"-#spend","-#impr"); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value){
$_smarty_tpl->tpl_vars['data']->_loop = true;
 $_smarty_tpl->tpl_vars['kw']->value = $_smarty_tpl->tpl_vars['data']->key;
?>
		<tr valign="top"><td><?php echo $_smarty_tpl->tpl_vars['kw']->value;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['data']->value["impr"];?>
</td><td>$<?php echo sprintf("%0.2f",$_smarty_tpl->tpl_vars['data']->value["spend"]);?>
</td><td><?php echo $_smarty_tpl->tpl_vars['data']->value["clicks"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['data']->value["conv"];?>
</td></tr>
		<?php } ?>

		<tr valign="top"><td colspan="5" class="tablerowheading">Converting Keywords</td></tr>
		<tr valign="top"><th>Keyword</th><th>Impressions</th><th>Spend</th><th>Clicks</th><th>Conversions</th></tr>
		<?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_smarty_tpl->tpl_vars['kw'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['someconv']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value){
$_smarty_tpl->tpl_vars['data']->_loop = true;
 $_smarty_tpl->tpl_vars['kw']->value = $_smarty_tpl->tpl_vars['data']->key;
?>
		<tr valign="top"><td><?php echo $_smarty_tpl->tpl_vars['kw']->value;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['data']->value["impr"];?>
</td><td>$<?php echo sprintf("%0.2f",$_smarty_tpl->tpl_vars['data']->value["spend"]);?>
</td><td><?php echo $_smarty_tpl->tpl_vars['data']->value["clicks"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['data']->value["conv"];?>
</td></tr>
		<?php } ?>
		</tbody></table>

		<h2>% of Keywords that Convert</h2>
		<?php echo count($_smarty_tpl->tpl_vars['someconv']->value);?>
/<?php echo count($_smarty_tpl->tpl_vars['zeroconv']->value)+count($_smarty_tpl->tpl_vars['someconv']->value);?>
 = <?php echo sprintf("%0.2f",count($_smarty_tpl->tpl_vars['someconv']->value)/(count($_smarty_tpl->tpl_vars['zeroconv']->value)+count($_smarty_tpl->tpl_vars['someconv']->value))*100);?>
%

		<h2>ROI per Impression</h2>
		Revenue on all keywords with non-zero impressions: $<?php echo $_smarty_tpl->tpl_vars['someimpr_rev']->value;?>
<br/>
		Spend on all keywords with non-zero impressions: $<?php echo $_smarty_tpl->tpl_vars['someimpr_spend']->value;?>
<br/>
		ROI: <?php echo sprintf("%0.2f",$_smarty_tpl->tpl_vars['someimpr_rev']->value/$_smarty_tpl->tpl_vars['someimpr_spend']->value*100);?>
%

	</div>

<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['checkbox_section3']->value)){?>
<?php echo $_smarty_tpl->tpl_vars['pagebreak']->value;?>


	<div class="grouptitle">
		<span class="outline3">Quality Score Review</span>
	</div>

	<div>
		Chart - KW Quality Score distribution<br/>
<?php $_smarty_tpl->tpl_vars['hist'] = new Smarty_variable(array(), null, 0);?>
<?php $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['row']->step = 1;$_smarty_tpl->tpl_vars['row']->total = (int)ceil(($_smarty_tpl->tpl_vars['row']->step > 0 ? 10+1 - (1) : 1-(10)+1)/abs($_smarty_tpl->tpl_vars['row']->step));
if ($_smarty_tpl->tpl_vars['row']->total > 0){
for ($_smarty_tpl->tpl_vars['row']->value = 1, $_smarty_tpl->tpl_vars['row']->iteration = 1;$_smarty_tpl->tpl_vars['row']->iteration <= $_smarty_tpl->tpl_vars['row']->total;$_smarty_tpl->tpl_vars['row']->value += $_smarty_tpl->tpl_vars['row']->step, $_smarty_tpl->tpl_vars['row']->iteration++){
$_smarty_tpl->tpl_vars['row']->first = $_smarty_tpl->tpl_vars['row']->iteration == 1;$_smarty_tpl->tpl_vars['row']->last = $_smarty_tpl->tpl_vars['row']->iteration == $_smarty_tpl->tpl_vars['row']->total;?>
    <?php $_smarty_tpl->createLocalArrayVariable('hist', null, 0);
$_smarty_tpl->tpl_vars['hist']->value[$_smarty_tpl->tpl_vars['row']->value] = 0;?>
<?php }} ?>
<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_smarty_tpl->tpl_vars['rownumber'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['keyword']->value["all"]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
 $_smarty_tpl->tpl_vars['rownumber']->value = $_smarty_tpl->tpl_vars['row']->key;
?>
<?php if (isset($_smarty_tpl->tpl_vars['hist']->value[$_smarty_tpl->tpl_vars['row']->value["Quality score"]])){?>
    <?php $_smarty_tpl->createLocalArrayVariable('hist', null, 0);
$_smarty_tpl->tpl_vars['hist']->value[$_smarty_tpl->tpl_vars['row']->value["Quality score"]] = $_smarty_tpl->tpl_vars['hist']->value[$_smarty_tpl->tpl_vars['row']->value["Quality score"]]+1;?>
<?php }else{ ?>
    <?php $_smarty_tpl->createLocalArrayVariable('hist', null, 0);
$_smarty_tpl->tpl_vars['hist']->value[$_smarty_tpl->tpl_vars['row']->value["Quality score"]] = 1;?>
<?php }?>
<?php } ?>
<table border="0" cellspacing="0" cellpadding="0" class="single"><tbody>
<tr valign="top"><th>QS</th><th>Score</th></tr>
<?php  $_smarty_tpl->tpl_vars['qs_score'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['qs_score']->_loop = false;
 $_smarty_tpl->tpl_vars['qs'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['hist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['qs_score']->key => $_smarty_tpl->tpl_vars['qs_score']->value){
$_smarty_tpl->tpl_vars['qs_score']->_loop = true;
 $_smarty_tpl->tpl_vars['qs']->value = $_smarty_tpl->tpl_vars['qs_score']->key;
?>
<tr valign="top"><td><?php echo $_smarty_tpl->tpl_vars['qs']->value;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['qs_score']->value;?>
</td></tr>
<?php } ?>
</tbody></table>

		Chart – KW Total Costs by QS (formula?)<br/>
		Chart – Conversions by QS (formula?)<br/>
		Chart – Revenue by QS (formula?)<br/>
		Chart - ROI by QS (formula?)

	</div>

<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['checkbox_section4']->value)){?>
<?php echo $_smarty_tpl->tpl_vars['pagebreak']->value;?>


	<div class="grouptitle">
		<span class="outline3">Ad Copy Review</span>
	</div>

	<div>
		Average # of Ads per Adgroup:
		<?php $_smarty_tpl->tpl_vars['pivot'] = new Smarty_variable(pivottable($_smarty_tpl->tpl_vars['ads']->value,"Ad group"), null, 0);?>
		<?php $_smarty_tpl->tpl_vars['countallads'] = new Smarty_variable(count($_smarty_tpl->tpl_vars['ads']->value["all"]), null, 0);?>
		<?php $_smarty_tpl->tpl_vars['countgroups'] = new Smarty_variable(count($_smarty_tpl->tpl_vars['pivot']->value), null, 0);?>
		<?php $_smarty_tpl->tpl_vars['sumgroupctr'] = new Smarty_variable(0, null, 0);?>
		<?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_smarty_tpl->tpl_vars['group'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['pivot']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value){
$_smarty_tpl->tpl_vars['data']->_loop = true;
 $_smarty_tpl->tpl_vars['group']->value = $_smarty_tpl->tpl_vars['data']->key;
?>
		<?php $_smarty_tpl->tpl_vars['impr'] = new Smarty_variable(sum($_smarty_tpl->tpl_vars['data']->value,"Impressions"), null, 0);?>
		<?php if ($_smarty_tpl->tpl_vars['impr']->value!=0){?><?php $_smarty_tpl->tpl_vars['sumgroupctr'] = new Smarty_variable($_smarty_tpl->tpl_vars['sumgroupctr']->value+sum($_smarty_tpl->tpl_vars['data']->value,"Clicks")/$_smarty_tpl->tpl_vars['impr']->value, null, 0);?><?php }?>
		<?php } ?>
		<?php echo sprintf("%0.4f",$_smarty_tpl->tpl_vars['countallads']->value/$_smarty_tpl->tpl_vars['countgroups']->value);?>
<br/>
		<br/>

		Average Ad Position:
		<?php echo sprintf("%0.2f",sum($_smarty_tpl->tpl_vars['ads']->value,"Avg. position")/$_smarty_tpl->tpl_vars['countallads']->value);?>
<br/>
		<br/>

		Average Adgroup CTR:
		<?php echo sprintf("%0.2f",$_smarty_tpl->tpl_vars['sumgroupctr']->value/$_smarty_tpl->tpl_vars['countgroups']->value*100);?>
%<br/>
		<br/>

		Average Campaign CTR:
		<?php $_smarty_tpl->tpl_vars['pivot'] = new Smarty_variable(pivottable($_smarty_tpl->tpl_vars['ads']->value,"Campaign"), null, 0);?>
		<?php $_smarty_tpl->tpl_vars['sumgroupctr'] = new Smarty_variable(0, null, 0);?>
		<?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_smarty_tpl->tpl_vars['group'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['pivot']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value){
$_smarty_tpl->tpl_vars['data']->_loop = true;
 $_smarty_tpl->tpl_vars['group']->value = $_smarty_tpl->tpl_vars['data']->key;
?>
		<?php $_smarty_tpl->tpl_vars['impr'] = new Smarty_variable(sum($_smarty_tpl->tpl_vars['data']->value,"Impressions"), null, 0);?>
		<?php if ($_smarty_tpl->tpl_vars['impr']->value!=0){?><?php $_smarty_tpl->tpl_vars['sumgroupctr'] = new Smarty_variable($_smarty_tpl->tpl_vars['sumgroupctr']->value+sum($_smarty_tpl->tpl_vars['data']->value,"Clicks")/$_smarty_tpl->tpl_vars['impr']->value, null, 0);?><?php }?>
		<?php } ?>
		<?php $_smarty_tpl->tpl_vars['countgroups'] = new Smarty_variable(count($_smarty_tpl->tpl_vars['pivot']->value), null, 0);?>
		<?php echo sprintf("%0.2f",$_smarty_tpl->tpl_vars['sumgroupctr']->value/$_smarty_tpl->tpl_vars['countgroups']->value*100);?>
%<br/>
	</div>

<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['checkbox_section5']->value)){?>
<?php echo $_smarty_tpl->tpl_vars['pagebreak']->value;?>


	<div class="grouptitle">
		<span class="outline2">Display</span><br/>
		<span class="outline3">Google GDN</span>
	</div>

	<div>

		<h2>Managed</h2>
		<div class="indent">
			# of Managed Placement Impressions<br/>
			<?php $_smarty_tpl->tpl_vars['man_impr'] = new Smarty_variable(sum($_smarty_tpl->tpl_vars['man_placements']->value,"Impressions"), null, 0);?>
			<?php echo $_smarty_tpl->tpl_vars['man_impr']->value;?>
<br/>
			<br/>

			# of Managed Placement Clicks<br/>
			<?php $_smarty_tpl->tpl_vars['man_clicks'] = new Smarty_variable(sum($_smarty_tpl->tpl_vars['man_placements']->value,"Clicks"), null, 0);?>
			<?php echo $_smarty_tpl->tpl_vars['man_clicks']->value;?>
<br/>
			<br/>

			Managed Placement CTR<br/>
			<?php echo sprintf("%0.2f",$_smarty_tpl->tpl_vars['man_clicks']->value/$_smarty_tpl->tpl_vars['man_impr']->value*100);?>
%<br/>
			<br/>

			Managed Placement CPA<br/>
			<?php $_smarty_tpl->tpl_vars['man_spend'] = new Smarty_variable(sum($_smarty_tpl->tpl_vars['man_placements']->value,"Cost"), null, 0);?>
			$<?php echo sprintf("%0.2f",$_smarty_tpl->tpl_vars['man_spend']->value/$_smarty_tpl->tpl_vars['man_clicks']->value);?>
<br/>
			<br/>

			Managed Placement ROAS<br/>
			<?php $_smarty_tpl->tpl_vars['man_rev'] = new Smarty_variable(sum($_smarty_tpl->tpl_vars['man_placements']->value,"Total conv. value"), null, 0);?>
			<?php echo sprintf("%0.2f",$_smarty_tpl->tpl_vars['man_rev']->value/$_smarty_tpl->tpl_vars['man_spend']->value);?>
<br/>
			<br/>

			Managed Placement PPI<br/>
			<?php echo sprintf("%0.6f",($_smarty_tpl->tpl_vars['man_rev']->value-$_smarty_tpl->tpl_vars['man_spend']->value)/$_smarty_tpl->tpl_vars['man_impr']->value);?>

			<br/>

		</div>

		<h2>Automatic</h2>
		<div class="indent">
			# of Automatic Placement Impressions<br/>
			<?php $_smarty_tpl->tpl_vars['auto_placements_impr'] = new Smarty_variable(sum($_smarty_tpl->tpl_vars['auto_placements']->value,"Impressions"), null, 0);?>
			<?php echo $_smarty_tpl->tpl_vars['auto_placements_impr']->value;?>
<br/>
			<br/>

			# of Automatic Placement Clicks<br/>
			<?php $_smarty_tpl->tpl_vars['auto_placements_clicks'] = new Smarty_variable(sum($_smarty_tpl->tpl_vars['auto_placements']->value,"Clicks"), null, 0);?>
			<?php echo $_smarty_tpl->tpl_vars['auto_placements_clicks']->value;?>
<br/>
			<br/>

			Automatic Placement CTR<br/>
			<?php echo sprintf("%0.2f",$_smarty_tpl->tpl_vars['auto_placements_clicks']->value/$_smarty_tpl->tpl_vars['auto_placements_impr']->value*100);?>
%<br/>
			<br/>

			Automatic Placement CPA<br/>
			<?php $_smarty_tpl->tpl_vars['auto_placements_spend'] = new Smarty_variable(sum($_smarty_tpl->tpl_vars['auto_placements']->value,"Cost"), null, 0);?>
			$<?php echo sprintf("%0.2f",$_smarty_tpl->tpl_vars['auto_placements_spend']->value/$_smarty_tpl->tpl_vars['auto_placements_clicks']->value);?>
<br/>
			<br/>

			Automatic Placement ROAS<br/>
			<?php $_smarty_tpl->tpl_vars['auto_placements_rev'] = new Smarty_variable(sum($_smarty_tpl->tpl_vars['auto_placements']->value,"Total conv. value"), null, 0);?>
			<?php echo sprintf("%0.2f",$_smarty_tpl->tpl_vars['auto_placements_rev']->value/$_smarty_tpl->tpl_vars['auto_placements_spend']->value);?>
<br/>
			<br/>

			Automatic Placement PPI<br/>
			<?php echo sprintf("%0.6f",($_smarty_tpl->tpl_vars['auto_placements_rev']->value-$_smarty_tpl->tpl_vars['auto_placements_spend']->value)/$_smarty_tpl->tpl_vars['auto_placements_impr']->value);?>

			<br/>

		</div>

	</div>

<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['checkbox_section6']->value)){?>
<?php echo $_smarty_tpl->tpl_vars['pagebreak']->value;?>


	<div class="grouptitle">
		<span class="outline3">Remarketing</span>
	</div>

	<div>

		# Impressions<br/>
		<?php $_smarty_tpl->tpl_vars['remark_impr'] = new Smarty_variable(sum($_smarty_tpl->tpl_vars['remark']->value,"Impressions"), null, 0);?>
		<?php echo $_smarty_tpl->tpl_vars['remark_impr']->value;?>
<br/>
		<br/>

		# Clicks<br/>
		<?php $_smarty_tpl->tpl_vars['remark_clicks'] = new Smarty_variable(sum($_smarty_tpl->tpl_vars['remark']->value,"Clicks"), null, 0);?>
		<?php echo $_smarty_tpl->tpl_vars['remark_clicks']->value;?>
<br/>
		<br/>

		CTR<br/>
		<?php echo sprintf("%0.2f",$_smarty_tpl->tpl_vars['remark_clicks']->value/$_smarty_tpl->tpl_vars['remark_impr']->value*100);?>
%<br/>
		<br/>

		CPA<br/>
		<?php $_smarty_tpl->tpl_vars['remark_spend'] = new Smarty_variable(sum($_smarty_tpl->tpl_vars['remark']->value,"Cost"), null, 0);?>
		<?php $_smarty_tpl->tpl_vars['remark_conv'] = new Smarty_variable(sum($_smarty_tpl->tpl_vars['remark']->value,"Conv. (1-per-click)"), null, 0);?>
		<?php if ($_smarty_tpl->tpl_vars['remark_conv']->value!=0){?>$<?php echo sprintf("%0.2f",$_smarty_tpl->tpl_vars['remark_spend']->value/$_smarty_tpl->tpl_vars['remark_conv']->value);?>
<?php }else{ ?>0 conversions: spend of $<?php echo sprintf("%0.2f",$_smarty_tpl->tpl_vars['remark_spend']->value);?>
, CPA is a division by zero<?php }?><br/>
		<br/>

		ROAS<br/>
		<?php $_smarty_tpl->tpl_vars['remark_rev'] = new Smarty_variable(sum($_smarty_tpl->tpl_vars['remark']->value,"Total conv. value"), null, 0);?>
		<?php echo sprintf("%0.2f",$_smarty_tpl->tpl_vars['remark_rev']->value/$_smarty_tpl->tpl_vars['remark_spend']->value);?>
<br/>
		<br/>

		PPI<br/>
		<?php echo sprintf("%0.6f",($_smarty_tpl->tpl_vars['remark_rev']->value-$_smarty_tpl->tpl_vars['remark_spend']->value)/$_smarty_tpl->tpl_vars['remark_impr']->value);?>
<br/>
		<br/>

		Relative CTR<br/>
		<?php echo sprintf("%0.2f",($_smarty_tpl->tpl_vars['remark_clicks']->value/$_smarty_tpl->tpl_vars['remark_impr']->value)/($_smarty_tpl->tpl_vars['totalclick']->value/$_smarty_tpl->tpl_vars['totalimpr']->value));?>
 - relative to Overall Account Average CTR?<br/>

	</div>

<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['checkbox_section7']->value)){?>
<?php echo $_smarty_tpl->tpl_vars['pagebreak']->value;?>


	<div class="grouptitle">
		<span class="outline1">Summary of Key Takeaways</span>
	</div>

	<div>
		The Good<br/>
		<br/>

		Could Be Better
	</div>

<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['checkbox_section8']->value)){?>
<?php echo $_smarty_tpl->tpl_vars['pagebreak']->value;?>


	<div class="grouptitle">
		<span class="outline1">Scope of Solution</span>
	</div>

	<div>

		90 Day Plan of Attack<br/>
		<br/>

		Month 1<br/>

		Month 2<br/>

		Month 3<br/>

	</div>

<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['checkbox_section9']->value)){?>
<?php echo $_smarty_tpl->tpl_vars['pagebreak']->value;?>


	<div class="grouptitle">
		<span class="outline1">Proposed Package</span>
	</div>

	<div>

		Edit this text
	</div>

<?php }?>
</div>
</body>
</html>
<?php }} ?>