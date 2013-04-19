<?php /* Smarty version Smarty-3.1.13, created on 2013-04-09 10:05:51
         compiled from "./chroot/report/gff_first_template.html" */ ?>
<?php /*%%SmartyHeaderCode:20827568105148d7e2c96ad2-42927203%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c597d7aaed827854e65ef38867e028b14d341afb' => 
    array (
      0 => './chroot/report/gff_first_template.html',
      1 => 1365523326,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20827568105148d7e2c96ad2-42927203',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5148d7e3e7ac37_47577436',
  'variables' => 
  array (
    'presentation_mode' => 0,
    'ads' => 0,
    'keyword' => 0,
    'auto_placements' => 0,
    'man_placements' => 0,
    'audiences' => 0,
    'hourly' => 0,
    'hourly_clicks' => 0,
    'totalclick' => 0,
    'totalimpr' => 0,
    'totalconv' => 0,
    'totalspend' => 0,
    'totalrev' => 0,
    'row' => 0,
    'adgroup_test' => 0,
    'adgroup_campaign_test' => 0,
    'i' => 0,
    'adgroup_names' => 0,
    'fromdate' => 0,
    'todate' => 0,
    'auto_placements_spend' => 0,
    'man_placements_spend' => 0,
    'clientname' => 0,
    'avgctr' => 0,
    'avgcpa' => 0,
    'arr' => 0,
    'h' => 0,
    'k' => 0,
    '($_smarty_tpl->tpl_vars[\'k\']->value).\'_rev' => 0,
    '($_smarty_tpl->tpl_vars[\'k\']->value).\'_spend' => 0,
    '($_smarty_tpl->tpl_vars[\'k\']->value).\'_clicks' => 0,
    '($_smarty_tpl->tpl_vars[\'k\']->value).\'_impr' => 0,
    '($_smarty_tpl->tpl_vars[\'k\']->value).\'_conv' => 0,
    'graphstatarray' => 0,
    'graphstat' => 0,
    'hournum' => 0,
    'pivot' => 0,
    'data' => 0,
    'datapoint' => 0,
    'highpoint' => 0,
    'overmillion' => 0,
    'topofscale' => 0,
    'submillion' => 0,
    'subhundredthousand' => 0,
    'subtenthousand' => 0,
    'subthousand' => 0,
    'subhundred' => 0,
    'sumofstat' => 0,
    'scalenum' => 0,
    'barheight' => 0,
    'hourlycpa' => 0,
    'avgcpaperhour' => 0,
    'hourcpa' => 0,
    'hourlyroas' => 0,
    'avgroasperhour' => 0,
    'hourroas' => 0,
    'daysofweek' => 0,
    'day' => 0,
    'dailycpa' => 0,
    'avgcpaperday' => 0,
    'dailyroas' => 0,
    'avgroasperday' => 0,
    'sorted_keyword_table' => 0,
    'kw' => 0,
    'total_top_kw_convs' => 0,
    'total_top_no_conv_kw_spend' => 0,
    'keyword_by_roi' => 0,
    'wasted_spend' => 0,
    'bottom_kw_by_roi' => 0,
    's' => 0,
    'roi' => 0,
    'new_roi' => 0,
    'bar_widith' => 0,
    'total_bottom_kw_by_roi' => 0,
    'keyword_eligible_count' => 0,
    'keyword_no_impr_count' => 0,
    'lastadgroup' => 0,
    'adgroup_count' => 0,
    'keyword_eligble_with_impr' => 0,
    'keyword_converting_count' => 0,
    'matchtype' => 0,
    'matches' => 0,
    'conv' => 0,
    'spend' => 0,
    'clicks' => 0,
    'impr' => 0,
    'hist' => 0,
    'qs_score' => 0,
    'qs' => 0,
    'qs_cost' => 0,
    'sum_numerator' => 0,
    'sum_denominator' => 0,
    'weighted_cpa_by_qs' => 0,
    'avgpos' => 0,
    'weighted_impr_score' => 0,
    'overall_avg_position' => 0,
    'weighted_avg_pos' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5148d7e3e7ac37_47577436')) {function content_5148d7e3e7ac37_47577436($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/var/www/sites/www.ndisp.com/gffreport/Smarty/plugins/modifier.truncate.php';
?>
<html>
<head>
<title>GFF Audit Presentation</title>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>


<?php $_smarty_tpl->tpl_vars['presentation_mode'] = new Smarty_variable('off', null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['presentation_mode']->value=='on'){?>
<script src="js/scripts.js"></script>
<?php }?>
<link rel="stylesheet" href="css/gff.css"/>
</head>
<body>
<div id="next">
	<span>Next</span>
</div>
<div id="prev">
	<span>Prev</span>
</div>
<div class="sildeNumDiv">
	<span>Slide Number: <span class="slideNum"></span></span>
</div>
<?php if ($_smarty_tpl->tpl_vars['presentation_mode']->value=='on'){?>
<div class="overlay">
<?php }?>
<div class="content" id="slideNum1">

	<?php $_smarty_tpl->tpl_vars['subhundred'] = new Smarty_variable(array(4,10,20,30,40,50), null, 0);?>
	<?php $_smarty_tpl->tpl_vars['subthousand'] = new Smarty_variable(array(100,200,300,400,500,600,700,800,900), null, 0);?>
	<?php $_smarty_tpl->tpl_vars['subtenthousand'] = new Smarty_variable(array(1000,2000,5000), null, 0);?>
	<?php $_smarty_tpl->tpl_vars['subhundredthousand'] = new Smarty_variable(array(10000,20000,50000), null, 0);?>
	<?php $_smarty_tpl->tpl_vars['submillion'] = new Smarty_variable(array(100000,200000,500000,1000000), null, 0);?>
	<?php $_smarty_tpl->tpl_vars['overmillion'] = new Smarty_variable(array(5000000,10000000,15000000,20000000,25000000,50000000,100000000), null, 0);?>


	<?php $_smarty_tpl->tpl_vars['ads_clicks'] = new Smarty_variable(sum($_smarty_tpl->tpl_vars['ads']->value,"Clicks"), null, 0);?>
	<?php $_smarty_tpl->tpl_vars['keyword_clicks'] = new Smarty_variable(sum($_smarty_tpl->tpl_vars['keyword']->value,"Clicks"), null, 0);?>
	<?php $_smarty_tpl->tpl_vars['auto_placements_clicks'] = new Smarty_variable(sum($_smarty_tpl->tpl_vars['auto_placements']->value,"Clicks"), null, 0);?>
	<?php $_smarty_tpl->tpl_vars['man_placements_clicks'] = new Smarty_variable(sum($_smarty_tpl->tpl_vars['man_placements']->value,"Clicks"), null, 0);?>
	<?php $_smarty_tpl->tpl_vars['remark_clicks'] = new Smarty_variable(sum($_smarty_tpl->tpl_vars['audiences']->value,"Clicks"), null, 0);?>
	<?php $_smarty_tpl->tpl_vars['hourly_clicks'] = new Smarty_variable(sum($_smarty_tpl->tpl_vars['hourly']->value,"Clicks"), null, 0);?>
	<?php $_smarty_tpl->tpl_vars['totalclick'] = new Smarty_variable($_smarty_tpl->tpl_vars['hourly_clicks']->value, null, 0);?>

	<?php $_smarty_tpl->tpl_vars['ads_impr'] = new Smarty_variable(sum($_smarty_tpl->tpl_vars['ads']->value,"Impressions"), null, 0);?>
	<?php $_smarty_tpl->tpl_vars['keyword_impr'] = new Smarty_variable(sum($_smarty_tpl->tpl_vars['keyword']->value,"Impressions"), null, 0);?>
	<?php $_smarty_tpl->tpl_vars['auto_placements_impr'] = new Smarty_variable(sum($_smarty_tpl->tpl_vars['auto_placements']->value,"Impressions"), null, 0);?>
	<?php $_smarty_tpl->tpl_vars['man_placements_impr'] = new Smarty_variable(sum($_smarty_tpl->tpl_vars['man_placements']->value,"Impressions"), null, 0);?>
	<?php $_smarty_tpl->tpl_vars['remark_impr'] = new Smarty_variable(sum($_smarty_tpl->tpl_vars['audiences']->value,"Impressions"), null, 0);?>
	<?php $_smarty_tpl->tpl_vars['totalimpr'] = new Smarty_variable(sum($_smarty_tpl->tpl_vars['hourly']->value,"Impressions"), null, 0);?>

	<?php $_smarty_tpl->tpl_vars['avgctr'] = new Smarty_variable(sprintf("%0.2f",$_smarty_tpl->tpl_vars['totalclick']->value/$_smarty_tpl->tpl_vars['totalimpr']->value*100), null, 0);?>

	<?php $_smarty_tpl->tpl_vars['ads_spend'] = new Smarty_variable(sum($_smarty_tpl->tpl_vars['ads']->value,"Cost"), null, 0);?>
	<?php $_smarty_tpl->tpl_vars['keyword_spend'] = new Smarty_variable(sum($_smarty_tpl->tpl_vars['keyword']->value,"Cost"), null, 0);?>
	<?php $_smarty_tpl->tpl_vars['auto_placements_spend'] = new Smarty_variable(sum($_smarty_tpl->tpl_vars['auto_placements']->value,"Cost"), null, 0);?>
	<?php $_smarty_tpl->tpl_vars['man_placements_spend'] = new Smarty_variable(sum($_smarty_tpl->tpl_vars['man_placements']->value,"Cost"), null, 0);?>
	<?php $_smarty_tpl->tpl_vars['remark_spend'] = new Smarty_variable(sum($_smarty_tpl->tpl_vars['audiences']->value,"Cost"), null, 0);?>
	<?php $_smarty_tpl->tpl_vars['totalspend'] = new Smarty_variable(sum($_smarty_tpl->tpl_vars['hourly']->value,"Cost"), null, 0);?>

	<?php $_smarty_tpl->tpl_vars['ads_conv'] = new Smarty_variable(sum($_smarty_tpl->tpl_vars['ads']->value,"Conv. (1-per-click)"), null, 0);?>
	<?php $_smarty_tpl->tpl_vars['keyword_conv'] = new Smarty_variable(sum($_smarty_tpl->tpl_vars['keyword']->value,"Conv. (1-per-click)"), null, 0);?>
	<?php $_smarty_tpl->tpl_vars['auto_placements_conv'] = new Smarty_variable(sum($_smarty_tpl->tpl_vars['auto_placements']->value,"Conv. (1-per-click)"), null, 0);?>
	<?php $_smarty_tpl->tpl_vars['man_placements_conv'] = new Smarty_variable(sum($_smarty_tpl->tpl_vars['man_placements']->value,"Conv. (1-per-click)"), null, 0);?>
	<?php $_smarty_tpl->tpl_vars['remark_conv'] = new Smarty_variable(sum($_smarty_tpl->tpl_vars['audiences']->value,"Conv. (1-per-click)"), null, 0);?>
	<?php $_smarty_tpl->tpl_vars['totalconv'] = new Smarty_variable(sum($_smarty_tpl->tpl_vars['hourly']->value,"Conv. (1-per-click)"), null, 0);?>

	<?php if ($_smarty_tpl->tpl_vars['totalconv']->value!=0){?><?php $_smarty_tpl->tpl_vars['avgcpa'] = new Smarty_variable(sprintf("%0.2f",$_smarty_tpl->tpl_vars['totalspend']->value/$_smarty_tpl->tpl_vars['totalconv']->value), null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['avgcpa'] = new Smarty_variable(0, null, 0);?><?php }?>

	<?php $_smarty_tpl->tpl_vars['totaladspend'] = new Smarty_variable(sprintf("%0.2f",$_smarty_tpl->tpl_vars['totalspend']->value), null, 0);?>

	<?php $_smarty_tpl->tpl_vars['ads_rev'] = new Smarty_variable(sum($_smarty_tpl->tpl_vars['ads']->value,"Total conv. value"), null, 0);?>
	<?php $_smarty_tpl->tpl_vars['keyword_rev'] = new Smarty_variable(sum($_smarty_tpl->tpl_vars['keyword']->value,"Total conv. value"), null, 0);?>
	<?php $_smarty_tpl->tpl_vars['auto_placements_rev'] = new Smarty_variable(sum($_smarty_tpl->tpl_vars['auto_placements']->value,"Total conv. value"), null, 0);?>
	<?php $_smarty_tpl->tpl_vars['man_placements_rev'] = new Smarty_variable(sum($_smarty_tpl->tpl_vars['man_placements']->value,"Total conv. value"), null, 0);?>
	<?php $_smarty_tpl->tpl_vars['remark_rev'] = new Smarty_variable(sum($_smarty_tpl->tpl_vars['audiences']->value,"Total conv. value"), null, 0);?>
	<?php $_smarty_tpl->tpl_vars['totalrev'] = new Smarty_variable(sum($_smarty_tpl->tpl_vars['hourly']->value,"Total conv. value"), null, 0);?>

	<?php if ($_smarty_tpl->tpl_vars['totalrev']->value!=0){?><?php $_smarty_tpl->tpl_vars['totalrevenue'] = new Smarty_variable(sprintf("%0.2f",$_smarty_tpl->tpl_vars['totalrev']->value), null, 0);?>
	<?php }else{ ?><?php $_smarty_tpl->tpl_vars['totalrevenue'] = new Smarty_variable(sprintf("%0.2f",0), null, 0);?>
	<?php }?>

	<?php $_smarty_tpl->tpl_vars['adgroup_test'] = new Smarty_variable(" ", null, 0);?>
	<?php $_smarty_tpl->tpl_vars['adgroup_campaign_test'] = new Smarty_variable(" ", null, 0);?>
	<?php $_smarty_tpl->tpl_vars['adgroup_names'] = new Smarty_variable(array(), null, 0);?>
	<?php $_smarty_tpl->tpl_vars['adgroup_campaign'] = new Smarty_variable(array(), null, 0);?>
	<?php $_smarty_tpl->tpl_vars['keyword_count_per_adgroup'] = new Smarty_variable(array(), null, 0);?>
	<?php $_smarty_tpl->tpl_vars['ctr_sum_per_adgroup'] = new Smarty_variable(array(), null, 0);?>
	<?php $_smarty_tpl->tpl_vars['avg_ctr_of_adgroups'] = new Smarty_variable(array(), null, 0);?>
	<?php $_smarty_tpl->tpl_vars['avg_adgroup_ctr'] = new Smarty_variable(0, null, 0);?>
	<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable(0, null, 0);?>

	<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['keyword']->value["all"]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
	<?php if ($_smarty_tpl->tpl_vars['row']->value["Ad group"]==$_smarty_tpl->tpl_vars['adgroup_test']->value){?>
		<?php if ($_smarty_tpl->tpl_vars['adgroup_campaign_test']->value==$_smarty_tpl->tpl_vars['row']->value["Campaign"]){?>
		<?php }else{ ?>
			<?php $_smarty_tpl->createLocalArrayVariable('adgroup_campaign', null, 0);
$_smarty_tpl->tpl_vars['adgroup_campaign']->value[$_smarty_tpl->tpl_vars['i']->value] = $_smarty_tpl->tpl_vars['row']->value["Campaign"];?>
			<?php $_smarty_tpl->createLocalArrayVariable('adgroup_names', null, 0);
$_smarty_tpl->tpl_vars['adgroup_names']->value[$_smarty_tpl->tpl_vars['i']->value] = $_smarty_tpl->tpl_vars['row']->value["Ad group"];?>
			<?php $_smarty_tpl->tpl_vars['adgroup_test'] = new Smarty_variable($_smarty_tpl->tpl_vars['row']->value["Ad group"], null, 0);?>
			<?php $_smarty_tpl->tpl_vars['adgroup_campaign_test'] = new Smarty_variable($_smarty_tpl->tpl_vars['row']->value["Campaign"], null, 0);?>
			<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable($_smarty_tpl->tpl_vars['i']->value+1, null, 0);?>
		<?php }?>
	<?php }else{ ?>
		<?php $_smarty_tpl->createLocalArrayVariable('adgroup_campaign', null, 0);
$_smarty_tpl->tpl_vars['adgroup_campaign']->value[$_smarty_tpl->tpl_vars['i']->value] = $_smarty_tpl->tpl_vars['row']->value["Campaign"];?>
		<?php $_smarty_tpl->createLocalArrayVariable('adgroup_names', null, 0);
$_smarty_tpl->tpl_vars['adgroup_names']->value[$_smarty_tpl->tpl_vars['i']->value] = $_smarty_tpl->tpl_vars['row']->value["Ad group"];?>
		<?php $_smarty_tpl->tpl_vars['adgroup_test'] = new Smarty_variable($_smarty_tpl->tpl_vars['row']->value["Ad group"], null, 0);?>
		<?php $_smarty_tpl->tpl_vars['adgroup_campaign_test'] = new Smarty_variable($_smarty_tpl->tpl_vars['row']->value["Campaign"], null, 0);?>
		<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable($_smarty_tpl->tpl_vars['i']->value+1, null, 0);?>
	<?php }?>
	<?php } ?>
	<?php $_smarty_tpl->tpl_vars['num_of_adgroups'] = new Smarty_variable(count($_smarty_tpl->tpl_vars['adgroup_names']->value), null, 0);?>

	<?php $_smarty_tpl->tpl_vars['campaign_network'] = new Smarty_variable(array(), null, 0);?>
	<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['keyword']->value["all"]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
		<?php $_smarty_tpl->createLocalArrayVariable('campaign_network', null, 0);
$_smarty_tpl->tpl_vars['campaign_network']->value[$_smarty_tpl->tpl_vars['row']->value["Campaign"]] = "No Data";?>
	<?php } ?>
	<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['hourly']->value["all"]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
		<?php $_smarty_tpl->createLocalArrayVariable('campaign_network', null, 0);
$_smarty_tpl->tpl_vars['campaign_network']->value[$_smarty_tpl->tpl_vars['row']->value["Campaign"]] = $_smarty_tpl->tpl_vars['row']->value["Network (with search partners)"];?>
	<?php } ?>

	<?php $_smarty_tpl->tpl_vars['campaign_of_adgroup'] = new Smarty_variable(array(), null, 0);?>
	
	<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['keyword']->value["all"]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
	<?php if ($_smarty_tpl->tpl_vars['row']->value["Ad group"]==$_smarty_tpl->tpl_vars['adgroup_test']->value){?>
		<?php if ($_smarty_tpl->tpl_vars['adgroup_campaign_test']->value==$_smarty_tpl->tpl_vars['row']->value["Campaign"]){?>
		<?php }else{ ?>
			<?php $_smarty_tpl->createLocalArrayVariable('campaign_of_adgroup', null, 0);
$_smarty_tpl->tpl_vars['campaign_of_adgroup']->value[$_smarty_tpl->tpl_vars['row']->value["Ad group"]] = $_smarty_tpl->tpl_vars['row']->value["Campaign"];?>
			<?php $_smarty_tpl->tpl_vars['adgroup_test'] = new Smarty_variable($_smarty_tpl->tpl_vars['row']->value["Ad group"], null, 0);?>
			<?php $_smarty_tpl->tpl_vars['adgroup_campaign_test'] = new Smarty_variable($_smarty_tpl->tpl_vars['row']->value["Campaign"], null, 0);?>
		<?php }?>
	<?php }else{ ?>
		<?php $_smarty_tpl->createLocalArrayVariable('campaign_of_adgroup', null, 0);
$_smarty_tpl->tpl_vars['campaign_of_adgroup']->value[$_smarty_tpl->tpl_vars['row']->value["Ad group"]] = $_smarty_tpl->tpl_vars['row']->value["Campaign"];?>
		<?php $_smarty_tpl->tpl_vars['adgroup_test'] = new Smarty_variable($_smarty_tpl->tpl_vars['row']->value["Ad group"], null, 0);?>
		<?php $_smarty_tpl->tpl_vars['adgroup_campaign_test'] = new Smarty_variable($_smarty_tpl->tpl_vars['row']->value["Campaign"], null, 0);?>
	<?php }?>
	<?php } ?>

	<header></header>
	
	<div class="logo"><img src="images/dark-gff.jpg" /></div>

	<h1 class="title">90 Day PPC Audit</h1>

	<?php $_smarty_tpl->tpl_vars['fromdate'] = new Smarty_variable(date("M j, Y H:i:s",$_smarty_tpl->tpl_vars['ads']->value["start_t"]), null, 0);?>
	<?php $_smarty_tpl->tpl_vars['todate'] = new Smarty_variable(date("M j, Y H:i:s",$_smarty_tpl->tpl_vars['ads']->value["end_t"]), null, 0);?>
	<span class="dates"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['fromdate']->value,12,'');?>
 - <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['todate']->value,12,'');?>
</span>

	<footer>
		<img class="gffLogo" src="images/large-white-gff.png" />
	</footer>

</div><!-- ###END CONTENT 1###-->
<div class="content" id="slideNum2">
	<div class="left"></div>
	<div class="right">

		<h2>Table of Contents</h2>
		<div class="contentsList">
		<ul style="float: left;">
			<li>i. Account Summary	1</li>
			<li style="padding-left: 20px;">a. Search</li>
			<li style="padding-left: 40px;">1) Hour of Day Segmentation</li>
			<li style="padding-left: 40px;">2) Day of the Week Segmentation</li>
			<li style="padding-left: 40px;">3) Converting Keywords</li>
			<li style="padding-left: 40px;">3) Keywords with Negative ROI</li>
			<li style="padding-left: 40px;">3) Keywords with Positive ROI</li>
			<li style="padding-left: 40px;">4) Current Keyword Review</li>
			<li style="padding-left: 40px;">5) Quality Score Review</li>
			<?php if (($_smarty_tpl->tpl_vars['auto_placements_spend']->value+$_smarty_tpl->tpl_vars['man_placements_spend']->value)>0){?>
			<li style="padding-left: 20px;">b. Display</li>
			<li style="padding-left: 40px;">1) Google Display Network Review</li>
			<?php }?>
			<li>ii. Summary of Key Takeaways</li>
			<li>iii. Scope of Solution</li>
			<li>iv. Proposed Package</li>
		</ul>
		<ul style="float: left;">
			<li>1</li>
			<li>2</li>
			<li>3</li>
			<li>4</li>
			<li>5</li>
			<li>6</li>
			<li>7</li>
			<li>8</li>
			<li>9</li>
			<li>10</li>
			<li>11</li>
			<li>12</li>
			<?php if (($_smarty_tpl->tpl_vars['auto_placements_spend']->value+$_smarty_tpl->tpl_vars['man_placements_spend']->value)>0){?>
			<li>13</li>
			<li>14</li>
			<?php }?>
		</ul>
		</div>
	</div>
	<div class="rightBottom">
		<img class="footerGffLogo" src="images/dark-gff.jpg" />
	</div>
</div><!-- ###END CONTENT 2###-->
<div class="content" id="slideNum3">
	<div class="left"></div>
	<div class="right">
		<h2><?php echo $_smarty_tpl->tpl_vars['clientname']->value;?>
 <span class="outline1">Account Summary</span></h2>
		<div class="statsTable">
			<table border="0" cellspacing="0" cellpadding="0">
				<tr>
					<th colspan="7">Account Overview</th>
				</tr>
				<tr>
					<th>Total Spend</th>
					<th>Clicks</th>
					<th>Impressions</th>
					<th>CTR</th>
					<th>Conversions</th>
					<th>Conversion Rate</th>
					<th>Average CPA</th>
					<?php if ($_smarty_tpl->tpl_vars['totalrev']->value>0){?>
					<th>Revenue</th>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['totalrev']->value/$_smarty_tpl->tpl_vars['totalspend']->value>0){?>
					<th>ROAS</th>
					<?php }?>
				</tr>
				<tr>
					<td>$<?php echo sprintf("%0.2f",$_smarty_tpl->tpl_vars['totalspend']->value);?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['totalclick']->value;?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['totalimpr']->value;?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['avgctr']->value;?>
%</td>
					<td><?php echo $_smarty_tpl->tpl_vars['totalconv']->value;?>
</td>
					<td><?php echo sprintf("%0.2f",($_smarty_tpl->tpl_vars['totalconv']->value/$_smarty_tpl->tpl_vars['totalclick']->value)*100);?>
%</td>
					<td>$<?php echo $_smarty_tpl->tpl_vars['avgcpa']->value;?>
</td>
					<?php if ($_smarty_tpl->tpl_vars['totalrev']->value>0){?>
					<td><?php echo $_smarty_tpl->tpl_vars['totalrev']->value;?>
</td>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['totalrev']->value/$_smarty_tpl->tpl_vars['totalspend']->value>0){?>
					<td><?php echo sprintf("%0.2f",$_smarty_tpl->tpl_vars['totalrev']->value/$_smarty_tpl->tpl_vars['totalspend']->value);?>
</td>
					<?php }?>
				</tr>
			</table>

			<table border="0" cellspacing="0" cellpadding="0"><tbody>
				<?php $_smarty_tpl->tpl_vars['arr'] = new Smarty_variable(array(), null, 0);?>
				<?php $_smarty_tpl->createLocalArrayVariable('arr', null, 0);
$_smarty_tpl->tpl_vars['arr']->value['keyword'] = "Search";?>
				<?php if (($_smarty_tpl->tpl_vars['auto_placements_spend']->value+$_smarty_tpl->tpl_vars['man_placements_spend']->value)>0){?>
				<?php $_smarty_tpl->createLocalArrayVariable('arr', null, 0);
$_smarty_tpl->tpl_vars['arr']->value['auto_placements'] = "Display";?>
				<?php $_smarty_tpl->createLocalArrayVariable('arr', null, 0);
$_smarty_tpl->tpl_vars['arr']->value['man_placements'] = "Remarketing";?>
				<?php }?>
				<?php  $_smarty_tpl->tpl_vars['h'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['h']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['arr']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['h']->key => $_smarty_tpl->tpl_vars['h']->value){
$_smarty_tpl->tpl_vars['h']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['h']->key;
?>
					<tr><th colspan="7">
					<?php if ($_smarty_tpl->tpl_vars['h']->value=="Display"){?>Display Ads<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['h']->value;?>
<?php }?>
						</th></tr>
					<tr><th>
						Total Spend 
					</th><th>
						% of Total
					</th><th>
						Ave CTR
					</th><th>
						CPA
					</th><?php if ($_smarty_tpl->tpl_vars[($_smarty_tpl->tpl_vars['k']->value).'_rev']->value>0){?><th>
						<?php echo $_smarty_tpl->tpl_vars['h']->value;?>
 Revenue
					</th><th>
						% of Total
					</th><th>
						<?php echo $_smarty_tpl->tpl_vars['h']->value;?>
 ROAS
					</th><?php }?></tr>
					<tr><td>
						<!--Total Spend-->
						$<?php echo sprintf("%0.2f",$_smarty_tpl->tpl_vars[($_smarty_tpl->tpl_vars['k']->value).'_spend']->value);?>

					</td><td>
						
						<?php if ($_smarty_tpl->tpl_vars['totalspend']->value!=0){?><?php echo sprintf("%0.2f",$_smarty_tpl->tpl_vars[($_smarty_tpl->tpl_vars['k']->value).'_spend']->value/$_smarty_tpl->tpl_vars['totalspend']->value*100);?>
%<?php }?>
					</td><td>
						<!--Ave CTR-->
						<?php echo sprintf("%0.2f",($_smarty_tpl->tpl_vars[($_smarty_tpl->tpl_vars['k']->value).'_clicks']->value/$_smarty_tpl->tpl_vars[($_smarty_tpl->tpl_vars['k']->value).'_impr']->value)*100);?>
%
					</td><td>
						<!--CPA-->
						<?php if ($_smarty_tpl->tpl_vars[($_smarty_tpl->tpl_vars['k']->value).'_conv']->value!=0){?>$<?php echo sprintf("%0.2f",$_smarty_tpl->tpl_vars[($_smarty_tpl->tpl_vars['k']->value).'_spend']->value/$_smarty_tpl->tpl_vars[($_smarty_tpl->tpl_vars['k']->value).'_conv']->value);?>
<?php }else{ ?>0 conv. spend = $<?php echo sprintf("%0.2f",$_smarty_tpl->tpl_vars[($_smarty_tpl->tpl_vars['k']->value).'_spend']->value);?>
.<?php }?>
					</td><?php if ($_smarty_tpl->tpl_vars[($_smarty_tpl->tpl_vars['k']->value).'_rev']->value>0){?><td>
						<!--<?php echo $_smarty_tpl->tpl_vars['h']->value;?>
 Revenue-->
						$<?php echo sprintf("%0.2f",$_smarty_tpl->tpl_vars[($_smarty_tpl->tpl_vars['k']->value).'_rev']->value);?>

					</td><td>
						
						<?php if ($_smarty_tpl->tpl_vars['totalrev']->value!=0){?><?php echo sprintf("%0.2f",$_smarty_tpl->tpl_vars[($_smarty_tpl->tpl_vars['k']->value).'_rev']->value/$_smarty_tpl->tpl_vars['totalrev']->value*100);?>
%
						<?php }else{ ?>(None)<?php }?>
					</td><td>
						<!--<?php echo $_smarty_tpl->tpl_vars['h']->value;?>
 ROAS-->
						<?php echo sprintf("%0.2f",$_smarty_tpl->tpl_vars[($_smarty_tpl->tpl_vars['k']->value).'_rev']->value/$_smarty_tpl->tpl_vars[($_smarty_tpl->tpl_vars['k']->value).'_spend']->value);?>

					</td><?php }?></tr>
				<?php } ?>
			</tbody></table>
		</div>
	</div>
	<div class="rightBottom">
		<img class="footerGffLogo" src="images/dark-gff.jpg" />
	</div>
</div><!-- ###END CONTENT 3###-->
<div class="content" id="slideNum4">
<div class="left"></div>
<div class="right">
<span style="display: none;" class="outline2">Search</span>
<h2><span class="outline3">Hour of Day Segmentation</span></h2>



<?php $_smarty_tpl->tpl_vars['pivot'] = new Smarty_variable(pivottable($_smarty_tpl->tpl_vars['hourly']->value,"Hour of day"), null, 0);?>



<?php $_smarty_tpl->tpl_vars['graphstatarray'] = new Smarty_variable(array("Conv. (1-per-click)"), null, 0);?>
<?php  $_smarty_tpl->tpl_vars['graphstat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['graphstat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['graphstatarray']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['graphstat']->key => $_smarty_tpl->tpl_vars['graphstat']->value){
$_smarty_tpl->tpl_vars['graphstat']->_loop = true;
?>

<div class="graph"><!--Start Graph Hour of Day-->
	<?php $_smarty_tpl->tpl_vars['sumofstat'] = new Smarty_variable(sum($_smarty_tpl->tpl_vars['hourly']->value,$_smarty_tpl->tpl_vars['graphstat']->value), null, 0);?>
	<?php $_smarty_tpl->tpl_vars['highpoint'] = new Smarty_variable(0, null, 0);?>
	<?php $_smarty_tpl->tpl_vars['hournum'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['hournum']->step = 1;$_smarty_tpl->tpl_vars['hournum']->total = (int)ceil(($_smarty_tpl->tpl_vars['hournum']->step > 0 ? 23+1 - (0) : 0-(23)+1)/abs($_smarty_tpl->tpl_vars['hournum']->step));
if ($_smarty_tpl->tpl_vars['hournum']->total > 0){
for ($_smarty_tpl->tpl_vars['hournum']->value = 0, $_smarty_tpl->tpl_vars['hournum']->iteration = 1;$_smarty_tpl->tpl_vars['hournum']->iteration <= $_smarty_tpl->tpl_vars['hournum']->total;$_smarty_tpl->tpl_vars['hournum']->value += $_smarty_tpl->tpl_vars['hournum']->step, $_smarty_tpl->tpl_vars['hournum']->iteration++){
$_smarty_tpl->tpl_vars['hournum']->first = $_smarty_tpl->tpl_vars['hournum']->iteration == 1;$_smarty_tpl->tpl_vars['hournum']->last = $_smarty_tpl->tpl_vars['hournum']->iteration == $_smarty_tpl->tpl_vars['hournum']->total;?>
		<?php $_smarty_tpl->tpl_vars['data'] = new Smarty_variable($_smarty_tpl->tpl_vars['pivot']->value[$_smarty_tpl->tpl_vars['hournum']->value], null, 0);?>
		<?php $_smarty_tpl->tpl_vars['datapoint'] = new Smarty_variable(sum($_smarty_tpl->tpl_vars['data']->value,$_smarty_tpl->tpl_vars['graphstat']->value), null, 0);?>
		<?php if ($_smarty_tpl->tpl_vars['datapoint']->value>$_smarty_tpl->tpl_vars['highpoint']->value){?>
			<?php $_smarty_tpl->tpl_vars['highpoint'] = new Smarty_variable($_smarty_tpl->tpl_vars['datapoint']->value, null, 0);?>
		<?php }?>
	<?php }} ?>
		<?php  $_smarty_tpl->tpl_vars['topofscale'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['topofscale']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['overmillion']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['topofscale']->key => $_smarty_tpl->tpl_vars['topofscale']->value){
$_smarty_tpl->tpl_vars['topofscale']->_loop = true;
?>
			<?php if ($_smarty_tpl->tpl_vars['highpoint']->value<$_smarty_tpl->tpl_vars['topofscale']->value){?>
				<?php $_smarty_tpl->tpl_vars['sumofstat'] = new Smarty_variable($_smarty_tpl->tpl_vars['topofscale']->value, null, 0);?>
				<?php break 1?>
			<?php }?>
		<?php } ?>
		<?php  $_smarty_tpl->tpl_vars['topofscale'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['topofscale']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['submillion']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['topofscale']->key => $_smarty_tpl->tpl_vars['topofscale']->value){
$_smarty_tpl->tpl_vars['topofscale']->_loop = true;
?>
			<?php if ($_smarty_tpl->tpl_vars['highpoint']->value<$_smarty_tpl->tpl_vars['topofscale']->value){?>
				<?php $_smarty_tpl->tpl_vars['sumofstat'] = new Smarty_variable($_smarty_tpl->tpl_vars['topofscale']->value, null, 0);?>
				<?php break 1?>
			<?php }?>
		<?php } ?>
		<?php  $_smarty_tpl->tpl_vars['topofscale'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['topofscale']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['subhundredthousand']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['topofscale']->key => $_smarty_tpl->tpl_vars['topofscale']->value){
$_smarty_tpl->tpl_vars['topofscale']->_loop = true;
?>
			<?php if ($_smarty_tpl->tpl_vars['highpoint']->value<$_smarty_tpl->tpl_vars['topofscale']->value){?>
				<?php $_smarty_tpl->tpl_vars['sumofstat'] = new Smarty_variable($_smarty_tpl->tpl_vars['topofscale']->value, null, 0);?>
				<?php break 1?>
			<?php }?>
		<?php } ?>
		<?php  $_smarty_tpl->tpl_vars['topofscale'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['topofscale']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['subtenthousand']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['topofscale']->key => $_smarty_tpl->tpl_vars['topofscale']->value){
$_smarty_tpl->tpl_vars['topofscale']->_loop = true;
?>
			<?php if ($_smarty_tpl->tpl_vars['highpoint']->value<$_smarty_tpl->tpl_vars['topofscale']->value){?>
				<?php $_smarty_tpl->tpl_vars['sumofstat'] = new Smarty_variable($_smarty_tpl->tpl_vars['topofscale']->value, null, 0);?>
				<?php break 1?>
			<?php }?>
		<?php } ?>
		<?php  $_smarty_tpl->tpl_vars['topofscale'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['topofscale']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['subthousand']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['topofscale']->key => $_smarty_tpl->tpl_vars['topofscale']->value){
$_smarty_tpl->tpl_vars['topofscale']->_loop = true;
?>
			<?php if ($_smarty_tpl->tpl_vars['highpoint']->value<$_smarty_tpl->tpl_vars['topofscale']->value){?>
				<?php $_smarty_tpl->tpl_vars['sumofstat'] = new Smarty_variable($_smarty_tpl->tpl_vars['topofscale']->value, null, 0);?>
				<?php break 1?>
			<?php }?>
		<?php } ?>
		<?php  $_smarty_tpl->tpl_vars['topofscale'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['topofscale']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['subhundred']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['topofscale']->key => $_smarty_tpl->tpl_vars['topofscale']->value){
$_smarty_tpl->tpl_vars['topofscale']->_loop = true;
?>
			<?php if ($_smarty_tpl->tpl_vars['highpoint']->value<$_smarty_tpl->tpl_vars['topofscale']->value){?>
				<?php $_smarty_tpl->tpl_vars['sumofstat'] = new Smarty_variable($_smarty_tpl->tpl_vars['topofscale']->value, null, 0);?>
				<?php break 1?>
			<?php }?>
		<?php } ?>
<div class="graph1">
<div class="verticalTitle"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['graphstat']->value,6,'');?>
</div>
<table border="0" cellspacing="0" cellpadding="0">
<?php $_smarty_tpl->tpl_vars['scalenum'] = new Smarty_variable($_smarty_tpl->tpl_vars['sumofstat']->value, null, 0);?>

<tr>
<td style="position: relative;top: 22px;">
	<?php if ($_smarty_tpl->tpl_vars['scalenum']->value==4){?>
	4&ensp;&ensp;
	<?php }else{ ?>
	<?php echo sprintf("%0.0f",$_smarty_tpl->tpl_vars['scalenum']->value);?>

	<?php }?>
</td>
<td style="border: none"></td>
</tr>
<tr>
<td style="position: relative;top: 22px;">
	<?php if ($_smarty_tpl->tpl_vars['scalenum']->value==4){?>
	3&ensp;&ensp;
	<?php }else{ ?>
	<?php echo sprintf("%0.0f",$_smarty_tpl->tpl_vars['scalenum']->value*.75);?>

	<?php }?>
</td>
<td></td>
</tr>
<tr>
<td style="position: relative;top: 22px;">
	<?php if ($_smarty_tpl->tpl_vars['scalenum']->value==4){?>
	2&ensp;&ensp;
	<?php }else{ ?>
	<?php echo sprintf("%0.0f",$_smarty_tpl->tpl_vars['scalenum']->value*.50);?>

	<?php }?>
</td>
<td></td>
</tr>
<tr>
<td style="position: relative;top: 22px;">
	<?php if ($_smarty_tpl->tpl_vars['scalenum']->value==4){?>
	1&ensp;&ensp;
	<?php }else{ ?>
	<?php echo sprintf("%0.0f",$_smarty_tpl->tpl_vars['scalenum']->value*.25);?>

	<?php }?>
</td>
<td></td>
</tr>
<tr>
<td style="position: relative;top: 22px;">
	<?php if ($_smarty_tpl->tpl_vars['scalenum']->value==4){?>
	0&ensp;&ensp;
	<?php }else{ ?>
	0
	<?php }?>
</td>
<td></td>
</tr>

<div class="graphBars">
	<?php $_smarty_tpl->tpl_vars['hournum'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['hournum']->step = 1;$_smarty_tpl->tpl_vars['hournum']->total = (int)ceil(($_smarty_tpl->tpl_vars['hournum']->step > 0 ? 23+1 - (0) : 0-(23)+1)/abs($_smarty_tpl->tpl_vars['hournum']->step));
if ($_smarty_tpl->tpl_vars['hournum']->total > 0){
for ($_smarty_tpl->tpl_vars['hournum']->value = 0, $_smarty_tpl->tpl_vars['hournum']->iteration = 1;$_smarty_tpl->tpl_vars['hournum']->iteration <= $_smarty_tpl->tpl_vars['hournum']->total;$_smarty_tpl->tpl_vars['hournum']->value += $_smarty_tpl->tpl_vars['hournum']->step, $_smarty_tpl->tpl_vars['hournum']->iteration++){
$_smarty_tpl->tpl_vars['hournum']->first = $_smarty_tpl->tpl_vars['hournum']->iteration == 1;$_smarty_tpl->tpl_vars['hournum']->last = $_smarty_tpl->tpl_vars['hournum']->iteration == $_smarty_tpl->tpl_vars['hournum']->total;?>
		<?php $_smarty_tpl->tpl_vars['data'] = new Smarty_variable($_smarty_tpl->tpl_vars['pivot']->value[$_smarty_tpl->tpl_vars['hournum']->value], null, 0);?>
		<?php $_smarty_tpl->tpl_vars['barheight'] = new Smarty_variable(sprintf('%0.0f',sum($_smarty_tpl->tpl_vars['data']->value,$_smarty_tpl->tpl_vars['graphstat']->value))/$_smarty_tpl->tpl_vars['sumofstat']->value*100, null, 0);?>
		<div class="bar" title="<?php echo sprintf('%0.0f',sum($_smarty_tpl->tpl_vars['data']->value,$_smarty_tpl->tpl_vars['graphstat']->value));?>
" style="float: left;height: <?php echo sprintf('%0.0f',$_smarty_tpl->tpl_vars['barheight']->value);?>
%;top: <?php echo 100-(sprintf('%0.0f',$_smarty_tpl->tpl_vars['barheight']->value));?>
%;width:3.1%;margin-left: .8%;">
			<?php if ($_smarty_tpl->tpl_vars['barheight']->value>8){?>
				<span class="barLabels" style=""><?php echo sprintf('%0.0f',sum($_smarty_tpl->tpl_vars['data']->value,$_smarty_tpl->tpl_vars['graphstat']->value));?>
</span>
			<?php }?>
		</div>
	<?php }} ?>
</div>

</table>
</div>
<div class="graph2">
<table border="0" cellspacing="0" cellpadding="0">
<tr>
<td></td>
<?php $_smarty_tpl->tpl_vars['hournum'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['hournum']->step = 1;$_smarty_tpl->tpl_vars['hournum']->total = (int)ceil(($_smarty_tpl->tpl_vars['hournum']->step > 0 ? 23+1 - (0) : 0-(23)+1)/abs($_smarty_tpl->tpl_vars['hournum']->step));
if ($_smarty_tpl->tpl_vars['hournum']->total > 0){
for ($_smarty_tpl->tpl_vars['hournum']->value = 0, $_smarty_tpl->tpl_vars['hournum']->iteration = 1;$_smarty_tpl->tpl_vars['hournum']->iteration <= $_smarty_tpl->tpl_vars['hournum']->total;$_smarty_tpl->tpl_vars['hournum']->value += $_smarty_tpl->tpl_vars['hournum']->step, $_smarty_tpl->tpl_vars['hournum']->iteration++){
$_smarty_tpl->tpl_vars['hournum']->first = $_smarty_tpl->tpl_vars['hournum']->iteration == 1;$_smarty_tpl->tpl_vars['hournum']->last = $_smarty_tpl->tpl_vars['hournum']->iteration == $_smarty_tpl->tpl_vars['hournum']->total;?>
<td style="width: <?php echo 850/24;?>
px;"><?php echo $_smarty_tpl->tpl_vars['hournum']->value;?>
</td>
<?php }} ?>
</tr>
</table>
</div>
<div class="horizontalTitle">Hour of Day</div>
<?php $_smarty_tpl->tpl_vars['sumofstat'] = new Smarty_variable(100, null, 0);?>
</div><!--End Graph-->

<?php } ?>






<?php $_smarty_tpl->tpl_vars['pivot'] = new Smarty_variable(pivottable($_smarty_tpl->tpl_vars['hourly']->value,"Hour of day"), null, 0);?>

<?php $_smarty_tpl->tpl_vars['avgcpaperhour'] = new Smarty_variable(array(), null, 0);?>
<?php $_smarty_tpl->tpl_vars['hournum'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['hournum']->step = 1;$_smarty_tpl->tpl_vars['hournum']->total = (int)ceil(($_smarty_tpl->tpl_vars['hournum']->step > 0 ? 23+1 - (0) : 0-(23)+1)/abs($_smarty_tpl->tpl_vars['hournum']->step));
if ($_smarty_tpl->tpl_vars['hournum']->total > 0){
for ($_smarty_tpl->tpl_vars['hournum']->value = 0, $_smarty_tpl->tpl_vars['hournum']->iteration = 1;$_smarty_tpl->tpl_vars['hournum']->iteration <= $_smarty_tpl->tpl_vars['hournum']->total;$_smarty_tpl->tpl_vars['hournum']->value += $_smarty_tpl->tpl_vars['hournum']->step, $_smarty_tpl->tpl_vars['hournum']->iteration++){
$_smarty_tpl->tpl_vars['hournum']->first = $_smarty_tpl->tpl_vars['hournum']->iteration == 1;$_smarty_tpl->tpl_vars['hournum']->last = $_smarty_tpl->tpl_vars['hournum']->iteration == $_smarty_tpl->tpl_vars['hournum']->total;?>
	<?php $_smarty_tpl->tpl_vars['data'] = new Smarty_variable($_smarty_tpl->tpl_vars['pivot']->value[$_smarty_tpl->tpl_vars['hournum']->value], null, 0);?>
	<?php $_smarty_tpl->tpl_vars['hourlycpa'] = new Smarty_variable(sum($_smarty_tpl->tpl_vars['data']->value,"Conv. (1-per-click)")/sum($_smarty_tpl->tpl_vars['data']->value,"Clicks")*100, null, 0);?>
	<?php $_smarty_tpl->createLocalArrayVariable('avgcpaperhour', null, 0);
$_smarty_tpl->tpl_vars['avgcpaperhour']->value[$_smarty_tpl->tpl_vars['hournum']->value] = sprintf("%0.2f",$_smarty_tpl->tpl_vars['hourlycpa']->value);?>
<?php }} ?>

<div class="graph"><!--Start Graph Hour of Day-->
	<?php $_smarty_tpl->tpl_vars['sumofstat'] = new Smarty_variable(0, null, 0);?>
	<?php $_smarty_tpl->tpl_vars['highpoint'] = new Smarty_variable(0, null, 0);?>
	<?php  $_smarty_tpl->tpl_vars['datapoint'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['datapoint']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['avgcpaperhour']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['datapoint']->key => $_smarty_tpl->tpl_vars['datapoint']->value){
$_smarty_tpl->tpl_vars['datapoint']->_loop = true;
?>
		<?php if ($_smarty_tpl->tpl_vars['datapoint']->value>$_smarty_tpl->tpl_vars['highpoint']->value){?>
			<?php $_smarty_tpl->tpl_vars['highpoint'] = new Smarty_variable($_smarty_tpl->tpl_vars['datapoint']->value, null, 0);?>
		<?php }?>
	<?php } ?>
		<?php  $_smarty_tpl->tpl_vars['topofscale'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['topofscale']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['overmillion']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['topofscale']->key => $_smarty_tpl->tpl_vars['topofscale']->value){
$_smarty_tpl->tpl_vars['topofscale']->_loop = true;
?>
			<?php if ($_smarty_tpl->tpl_vars['highpoint']->value<$_smarty_tpl->tpl_vars['topofscale']->value){?>
				<?php $_smarty_tpl->tpl_vars['sumofstat'] = new Smarty_variable($_smarty_tpl->tpl_vars['topofscale']->value, null, 0);?>
				<?php break 1?>
			<?php }?>
		<?php } ?>
		<?php  $_smarty_tpl->tpl_vars['topofscale'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['topofscale']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['submillion']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['topofscale']->key => $_smarty_tpl->tpl_vars['topofscale']->value){
$_smarty_tpl->tpl_vars['topofscale']->_loop = true;
?>
			<?php if ($_smarty_tpl->tpl_vars['highpoint']->value<$_smarty_tpl->tpl_vars['topofscale']->value){?>
				<?php $_smarty_tpl->tpl_vars['sumofstat'] = new Smarty_variable($_smarty_tpl->tpl_vars['topofscale']->value, null, 0);?>
				<?php break 1?>
			<?php }?>
		<?php } ?>
		<?php  $_smarty_tpl->tpl_vars['topofscale'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['topofscale']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['subhundredthousand']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['topofscale']->key => $_smarty_tpl->tpl_vars['topofscale']->value){
$_smarty_tpl->tpl_vars['topofscale']->_loop = true;
?>
			<?php if ($_smarty_tpl->tpl_vars['highpoint']->value<$_smarty_tpl->tpl_vars['topofscale']->value){?>
				<?php $_smarty_tpl->tpl_vars['sumofstat'] = new Smarty_variable($_smarty_tpl->tpl_vars['topofscale']->value, null, 0);?>
				<?php break 1?>
			<?php }?>
		<?php } ?>
		<?php  $_smarty_tpl->tpl_vars['topofscale'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['topofscale']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['subtenthousand']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['topofscale']->key => $_smarty_tpl->tpl_vars['topofscale']->value){
$_smarty_tpl->tpl_vars['topofscale']->_loop = true;
?>
			<?php if ($_smarty_tpl->tpl_vars['highpoint']->value<$_smarty_tpl->tpl_vars['topofscale']->value){?>
				<?php $_smarty_tpl->tpl_vars['sumofstat'] = new Smarty_variable($_smarty_tpl->tpl_vars['topofscale']->value, null, 0);?>
				<?php break 1?>
			<?php }?>
		<?php } ?>
		<?php  $_smarty_tpl->tpl_vars['topofscale'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['topofscale']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['subthousand']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['topofscale']->key => $_smarty_tpl->tpl_vars['topofscale']->value){
$_smarty_tpl->tpl_vars['topofscale']->_loop = true;
?>
			<?php if ($_smarty_tpl->tpl_vars['highpoint']->value<$_smarty_tpl->tpl_vars['topofscale']->value){?>
				<?php $_smarty_tpl->tpl_vars['sumofstat'] = new Smarty_variable($_smarty_tpl->tpl_vars['topofscale']->value, null, 0);?>
				<?php break 1?>
			<?php }?>
		<?php } ?>
		<?php  $_smarty_tpl->tpl_vars['topofscale'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['topofscale']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['subhundred']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['topofscale']->key => $_smarty_tpl->tpl_vars['topofscale']->value){
$_smarty_tpl->tpl_vars['topofscale']->_loop = true;
?>
			<?php if ($_smarty_tpl->tpl_vars['highpoint']->value<$_smarty_tpl->tpl_vars['topofscale']->value){?>
				<?php $_smarty_tpl->tpl_vars['sumofstat'] = new Smarty_variable($_smarty_tpl->tpl_vars['topofscale']->value, null, 0);?>
				<?php break 1?>
			<?php }?>
		<?php } ?>
<div class="graph1">
<div class="verticalTitle">CPA</div>
<table border="0" cellspacing="0" cellpadding="0">
<?php $_smarty_tpl->tpl_vars['scalenum'] = new Smarty_variable($_smarty_tpl->tpl_vars['sumofstat']->value, null, 0);?>

<tr>
<td style="position: relative;top: 22px;">
	<?php if ($_smarty_tpl->tpl_vars['scalenum']->value==4){?>
	$4&ensp;&ensp;
	<?php }else{ ?>
	$<?php echo sprintf("%0.0f",$_smarty_tpl->tpl_vars['scalenum']->value);?>

	<?php }?>
</td>
<td style="border: none"></td>
</tr>
<tr>
<td style="position: relative;top: 22px;">
	<?php if ($_smarty_tpl->tpl_vars['scalenum']->value==4){?>
	$3&ensp;&ensp;
	<?php }else{ ?>
	$<?php echo sprintf("%0.0f",$_smarty_tpl->tpl_vars['scalenum']->value*.75);?>

	<?php }?>
</td>
<td></td>
</tr>
<tr>
<td style="position: relative;top: 22px;">
	<?php if ($_smarty_tpl->tpl_vars['scalenum']->value==4){?>
	$2&ensp;&ensp;
	<?php }else{ ?>
	$<?php echo sprintf("%0.0f",$_smarty_tpl->tpl_vars['scalenum']->value*.50);?>

	<?php }?>
</td>
<td></td>
</tr>
<tr>
<td style="position: relative;top: 22px;">
	<?php if ($_smarty_tpl->tpl_vars['scalenum']->value==4){?>
	$1&ensp;&ensp;
	<?php }else{ ?>
	$<?php echo sprintf("%0.0f",$_smarty_tpl->tpl_vars['scalenum']->value*.25);?>

	<?php }?>
</td>
<td></td>
</tr>
<tr>
<td style="position: relative;top: 22px;">
	<?php if ($_smarty_tpl->tpl_vars['scalenum']->value==4){?>
	$0&ensp;&ensp;
	<?php }else{ ?>
	$0
	<?php }?>
</td>
<td></td>
</tr>

<div class="graphBars">
	<?php  $_smarty_tpl->tpl_vars['hourcpa'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['hourcpa']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['avgcpaperhour']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['hourcpa']->key => $_smarty_tpl->tpl_vars['hourcpa']->value){
$_smarty_tpl->tpl_vars['hourcpa']->_loop = true;
?>
		<?php $_smarty_tpl->tpl_vars['barheight'] = new Smarty_variable($_smarty_tpl->tpl_vars['hourcpa']->value/$_smarty_tpl->tpl_vars['sumofstat']->value*100, null, 0);?>
		<div class="bar" title="<?php echo $_smarty_tpl->tpl_vars['hourcpa']->value;?>
" style="float: left;height: <?php echo sprintf('%0.0f',$_smarty_tpl->tpl_vars['barheight']->value);?>
%;top: <?php echo 100-(sprintf('%0.0f',$_smarty_tpl->tpl_vars['barheight']->value));?>
%;width:3.1%;margin-left: .8%;">
			<?php if ($_smarty_tpl->tpl_vars['barheight']->value>8){?>
				<span class="barLabels" style="margin-left: 0;"><?php echo $_smarty_tpl->tpl_vars['hourcpa']->value;?>
</span>
			<?php }?>
		</div>
	<?php } ?>
</div>

</table>
</div>
<div class="graph2">
<table border="0" cellspacing="0" cellpadding="0">
<tr>
<td></td>
<?php $_smarty_tpl->tpl_vars['hournum'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['hournum']->step = 1;$_smarty_tpl->tpl_vars['hournum']->total = (int)ceil(($_smarty_tpl->tpl_vars['hournum']->step > 0 ? 23+1 - (0) : 0-(23)+1)/abs($_smarty_tpl->tpl_vars['hournum']->step));
if ($_smarty_tpl->tpl_vars['hournum']->total > 0){
for ($_smarty_tpl->tpl_vars['hournum']->value = 0, $_smarty_tpl->tpl_vars['hournum']->iteration = 1;$_smarty_tpl->tpl_vars['hournum']->iteration <= $_smarty_tpl->tpl_vars['hournum']->total;$_smarty_tpl->tpl_vars['hournum']->value += $_smarty_tpl->tpl_vars['hournum']->step, $_smarty_tpl->tpl_vars['hournum']->iteration++){
$_smarty_tpl->tpl_vars['hournum']->first = $_smarty_tpl->tpl_vars['hournum']->iteration == 1;$_smarty_tpl->tpl_vars['hournum']->last = $_smarty_tpl->tpl_vars['hournum']->iteration == $_smarty_tpl->tpl_vars['hournum']->total;?>
<td style="width: <?php echo 850/24;?>
px;"><?php echo $_smarty_tpl->tpl_vars['hournum']->value;?>
</td>
<?php }} ?>
</tr>
</table>
</div>
<div class="horizontalTitle">Hour of Day</div>
<?php $_smarty_tpl->tpl_vars['sumofstat'] = new Smarty_variable(100, null, 0);?>
</div><!--End Graph-->






<?php if ($_smarty_tpl->tpl_vars['totalrev']->value>0){?>
<?php $_smarty_tpl->tpl_vars['pivot'] = new Smarty_variable(pivottable($_smarty_tpl->tpl_vars['hourly']->value,"Hour of day"), null, 0);?>

<?php $_smarty_tpl->tpl_vars['avgroasperhour'] = new Smarty_variable(array(), null, 0);?>
<?php $_smarty_tpl->tpl_vars['hournum'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['hournum']->step = 1;$_smarty_tpl->tpl_vars['hournum']->total = (int)ceil(($_smarty_tpl->tpl_vars['hournum']->step > 0 ? 23+1 - (0) : 0-(23)+1)/abs($_smarty_tpl->tpl_vars['hournum']->step));
if ($_smarty_tpl->tpl_vars['hournum']->total > 0){
for ($_smarty_tpl->tpl_vars['hournum']->value = 0, $_smarty_tpl->tpl_vars['hournum']->iteration = 1;$_smarty_tpl->tpl_vars['hournum']->iteration <= $_smarty_tpl->tpl_vars['hournum']->total;$_smarty_tpl->tpl_vars['hournum']->value += $_smarty_tpl->tpl_vars['hournum']->step, $_smarty_tpl->tpl_vars['hournum']->iteration++){
$_smarty_tpl->tpl_vars['hournum']->first = $_smarty_tpl->tpl_vars['hournum']->iteration == 1;$_smarty_tpl->tpl_vars['hournum']->last = $_smarty_tpl->tpl_vars['hournum']->iteration == $_smarty_tpl->tpl_vars['hournum']->total;?>
	<?php $_smarty_tpl->tpl_vars['data'] = new Smarty_variable($_smarty_tpl->tpl_vars['pivot']->value[$_smarty_tpl->tpl_vars['hournum']->value], null, 0);?>
	<?php $_smarty_tpl->tpl_vars['hourlyroas'] = new Smarty_variable(sum($_smarty_tpl->tpl_vars['data']->value,"Total conv. value")/sum($_smarty_tpl->tpl_vars['data']->value,"Cost")*100, null, 0);?>
	<?php $_smarty_tpl->createLocalArrayVariable('avgroasperhour', null, 0);
$_smarty_tpl->tpl_vars['avgroasperhour']->value[$_smarty_tpl->tpl_vars['hournum']->value] = sprintf("%0.2f",$_smarty_tpl->tpl_vars['hourlyroas']->value);?>
<?php }} ?>

<div class="graph"><!--Start Graph Hour of Day-->
	<?php $_smarty_tpl->tpl_vars['sumofstat'] = new Smarty_variable(0, null, 0);?>
	<?php $_smarty_tpl->tpl_vars['highpoint'] = new Smarty_variable(0, null, 0);?>
	<?php  $_smarty_tpl->tpl_vars['datapoint'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['datapoint']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['avgroasperhour']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['datapoint']->key => $_smarty_tpl->tpl_vars['datapoint']->value){
$_smarty_tpl->tpl_vars['datapoint']->_loop = true;
?>
		<?php if ($_smarty_tpl->tpl_vars['datapoint']->value>$_smarty_tpl->tpl_vars['highpoint']->value){?>
			<?php $_smarty_tpl->tpl_vars['highpoint'] = new Smarty_variable($_smarty_tpl->tpl_vars['datapoint']->value, null, 0);?>
		<?php }?>
	<?php } ?>
		<?php  $_smarty_tpl->tpl_vars['topofscale'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['topofscale']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['overmillion']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['topofscale']->key => $_smarty_tpl->tpl_vars['topofscale']->value){
$_smarty_tpl->tpl_vars['topofscale']->_loop = true;
?>
			<?php if ($_smarty_tpl->tpl_vars['highpoint']->value<$_smarty_tpl->tpl_vars['topofscale']->value){?>
				<?php $_smarty_tpl->tpl_vars['sumofstat'] = new Smarty_variable($_smarty_tpl->tpl_vars['topofscale']->value, null, 0);?>
				<?php break 1?>
			<?php }?>
		<?php } ?>
		<?php  $_smarty_tpl->tpl_vars['topofscale'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['topofscale']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['submillion']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['topofscale']->key => $_smarty_tpl->tpl_vars['topofscale']->value){
$_smarty_tpl->tpl_vars['topofscale']->_loop = true;
?>
			<?php if ($_smarty_tpl->tpl_vars['highpoint']->value<$_smarty_tpl->tpl_vars['topofscale']->value){?>
				<?php $_smarty_tpl->tpl_vars['sumofstat'] = new Smarty_variable($_smarty_tpl->tpl_vars['topofscale']->value, null, 0);?>
				<?php break 1?>
			<?php }?>
		<?php } ?>
		<?php  $_smarty_tpl->tpl_vars['topofscale'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['topofscale']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['subhundredthousand']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['topofscale']->key => $_smarty_tpl->tpl_vars['topofscale']->value){
$_smarty_tpl->tpl_vars['topofscale']->_loop = true;
?>
			<?php if ($_smarty_tpl->tpl_vars['highpoint']->value<$_smarty_tpl->tpl_vars['topofscale']->value){?>
				<?php $_smarty_tpl->tpl_vars['sumofstat'] = new Smarty_variable($_smarty_tpl->tpl_vars['topofscale']->value, null, 0);?>
				<?php break 1?>
			<?php }?>
		<?php } ?>
		<?php  $_smarty_tpl->tpl_vars['topofscale'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['topofscale']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['subtenthousand']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['topofscale']->key => $_smarty_tpl->tpl_vars['topofscale']->value){
$_smarty_tpl->tpl_vars['topofscale']->_loop = true;
?>
			<?php if ($_smarty_tpl->tpl_vars['highpoint']->value<$_smarty_tpl->tpl_vars['topofscale']->value){?>
				<?php $_smarty_tpl->tpl_vars['sumofstat'] = new Smarty_variable($_smarty_tpl->tpl_vars['topofscale']->value, null, 0);?>
				<?php break 1?>
			<?php }?>
		<?php } ?>
		<?php  $_smarty_tpl->tpl_vars['topofscale'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['topofscale']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['subthousand']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['topofscale']->key => $_smarty_tpl->tpl_vars['topofscale']->value){
$_smarty_tpl->tpl_vars['topofscale']->_loop = true;
?>
			<?php if ($_smarty_tpl->tpl_vars['highpoint']->value<$_smarty_tpl->tpl_vars['topofscale']->value){?>
				<?php $_smarty_tpl->tpl_vars['sumofstat'] = new Smarty_variable($_smarty_tpl->tpl_vars['topofscale']->value, null, 0);?>
				<?php break 1?>
			<?php }?>
		<?php } ?>
		<?php  $_smarty_tpl->tpl_vars['topofscale'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['topofscale']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['subhundred']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['topofscale']->key => $_smarty_tpl->tpl_vars['topofscale']->value){
$_smarty_tpl->tpl_vars['topofscale']->_loop = true;
?>
			<?php if ($_smarty_tpl->tpl_vars['highpoint']->value<$_smarty_tpl->tpl_vars['topofscale']->value){?>
				<?php $_smarty_tpl->tpl_vars['sumofstat'] = new Smarty_variable($_smarty_tpl->tpl_vars['topofscale']->value, null, 0);?>
				<?php break 1?>
			<?php }?>
		<?php } ?>
<div class="graph1">
<div class="verticalTitle">ROAS</div>
<table border="0" cellspacing="0" cellpadding="0">
<?php $_smarty_tpl->tpl_vars['scalenum'] = new Smarty_variable($_smarty_tpl->tpl_vars['sumofstat']->value, null, 0);?>

<tr>
<td style="position: relative;top: 22px;">
	<?php if ($_smarty_tpl->tpl_vars['scalenum']->value==4){?>
	$4&ensp;&ensp;
	<?php }else{ ?>
	$<?php echo sprintf("%0.0f",$_smarty_tpl->tpl_vars['scalenum']->value);?>

	<?php }?>
</td>
<td style="border: none"></td>
</tr>
<tr>
<td style="position: relative;top: 22px;">
	<?php if ($_smarty_tpl->tpl_vars['scalenum']->value==4){?>
	$3&ensp;&ensp;
	<?php }else{ ?>
	$<?php echo sprintf("%0.0f",$_smarty_tpl->tpl_vars['scalenum']->value*.75);?>

	<?php }?>
</td>
<td></td>
</tr>
<tr>
<td style="position: relative;top: 22px;">
	<?php if ($_smarty_tpl->tpl_vars['scalenum']->value==4){?>
	$2&ensp;&ensp;
	<?php }else{ ?>
	$<?php echo sprintf("%0.0f",$_smarty_tpl->tpl_vars['scalenum']->value*.50);?>

	<?php }?>
</td>
<td></td>
</tr>
<tr>
<td style="position: relative;top: 22px;">
	<?php if ($_smarty_tpl->tpl_vars['scalenum']->value==4){?>
	$1&ensp;&ensp;
	<?php }else{ ?>
	$<?php echo sprintf("%0.0f",$_smarty_tpl->tpl_vars['scalenum']->value*.25);?>

	<?php }?>
</td>
<td></td>
</tr>
<tr>
<td style="position: relative;top: 22px;">
	<?php if ($_smarty_tpl->tpl_vars['scalenum']->value==4){?>
	$0&ensp;&ensp;
	<?php }else{ ?>
	$0
	<?php }?>
</td>
<td></td>
</tr>

<div class="graphBars">
	<?php  $_smarty_tpl->tpl_vars['hourroas'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['hourroas']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['avgroasperhour']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['hourroas']->key => $_smarty_tpl->tpl_vars['hourroas']->value){
$_smarty_tpl->tpl_vars['hourroas']->_loop = true;
?>
		<?php $_smarty_tpl->tpl_vars['barheight'] = new Smarty_variable($_smarty_tpl->tpl_vars['hourroas']->value/$_smarty_tpl->tpl_vars['sumofstat']->value*100, null, 0);?>
		<div class="bar" title="$<?php echo $_smarty_tpl->tpl_vars['hourroas']->value;?>
" style="float: left;height: <?php echo sprintf('%0.0f',$_smarty_tpl->tpl_vars['barheight']->value);?>
%;top: <?php echo 100-(sprintf('%0.0f',$_smarty_tpl->tpl_vars['barheight']->value));?>
%;width:3.1%;margin-left: .8%;">
			<?php if ($_smarty_tpl->tpl_vars['barheight']->value>8){?>
				<span class="barLabels" style="margin-left: 0;"><?php echo $_smarty_tpl->tpl_vars['hourroas']->value;?>
</span>
			<?php }?>
		</div>
	<?php } ?>
</div>

</table>
</div>
<div class="graph2">
<table border="0" cellspacing="0" cellpadding="0">
<tr>
<td></td>
<?php $_smarty_tpl->tpl_vars['hournum'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['hournum']->step = 1;$_smarty_tpl->tpl_vars['hournum']->total = (int)ceil(($_smarty_tpl->tpl_vars['hournum']->step > 0 ? 23+1 - (0) : 0-(23)+1)/abs($_smarty_tpl->tpl_vars['hournum']->step));
if ($_smarty_tpl->tpl_vars['hournum']->total > 0){
for ($_smarty_tpl->tpl_vars['hournum']->value = 0, $_smarty_tpl->tpl_vars['hournum']->iteration = 1;$_smarty_tpl->tpl_vars['hournum']->iteration <= $_smarty_tpl->tpl_vars['hournum']->total;$_smarty_tpl->tpl_vars['hournum']->value += $_smarty_tpl->tpl_vars['hournum']->step, $_smarty_tpl->tpl_vars['hournum']->iteration++){
$_smarty_tpl->tpl_vars['hournum']->first = $_smarty_tpl->tpl_vars['hournum']->iteration == 1;$_smarty_tpl->tpl_vars['hournum']->last = $_smarty_tpl->tpl_vars['hournum']->iteration == $_smarty_tpl->tpl_vars['hournum']->total;?>
<td style="width: <?php echo 850/24;?>
px;"><?php echo $_smarty_tpl->tpl_vars['hournum']->value;?>
</td>
<?php }} ?>
</tr>
</table>
</div>
<div class="horizontalTitle">Hour of Day</div>
<?php $_smarty_tpl->tpl_vars['sumofstat'] = new Smarty_variable(100, null, 0);?>
</div><!--End Graph-->

<?php }?>



</div>
<div class="rightBottom">
<img class="footerGffLogo" src="images/dark-gff.jpg" />
</div>
</div><!-- ###END CONTENT 4###-->
<div class="content" id="slideNum5">
<div class="left"></div>
<div class="right">
<h2><span class="outline3">Day of the Week Segmentation</span></h2>



<?php $_smarty_tpl->tpl_vars['daysofweek'] = new Smarty_variable(array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"), null, 0);?>
<?php $_smarty_tpl->tpl_vars['pivot'] = new Smarty_variable(pivottable($_smarty_tpl->tpl_vars['hourly']->value,"Day of week"), null, 0);?>


<?php  $_smarty_tpl->tpl_vars['graphstat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['graphstat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['graphstatarray']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['graphstat']->key => $_smarty_tpl->tpl_vars['graphstat']->value){
$_smarty_tpl->tpl_vars['graphstat']->_loop = true;
?>

<div class="graph"><!--Start Graph Day of Week-->
<div class="graph1">
	<?php $_smarty_tpl->tpl_vars['sumofstat'] = new Smarty_variable(sum($_smarty_tpl->tpl_vars['hourly']->value,$_smarty_tpl->tpl_vars['graphstat']->value), null, 0);?>
	<?php $_smarty_tpl->tpl_vars['highpoint'] = new Smarty_variable(0, null, 0);?>
	<?php  $_smarty_tpl->tpl_vars['day'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['day']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['daysofweek']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['day']->key => $_smarty_tpl->tpl_vars['day']->value){
$_smarty_tpl->tpl_vars['day']->_loop = true;
?>
		<?php $_smarty_tpl->tpl_vars['data'] = new Smarty_variable($_smarty_tpl->tpl_vars['pivot']->value[$_smarty_tpl->tpl_vars['day']->value], null, 0);?>
		<?php $_smarty_tpl->tpl_vars['datapoint'] = new Smarty_variable(sum($_smarty_tpl->tpl_vars['data']->value,$_smarty_tpl->tpl_vars['graphstat']->value), null, 0);?>
		<?php if ($_smarty_tpl->tpl_vars['datapoint']->value>$_smarty_tpl->tpl_vars['highpoint']->value){?>
			<?php $_smarty_tpl->tpl_vars['highpoint'] = new Smarty_variable($_smarty_tpl->tpl_vars['datapoint']->value, null, 0);?>
		<?php }?>
	<?php } ?>
		<?php  $_smarty_tpl->tpl_vars['topofscale'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['topofscale']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['overmillion']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['topofscale']->key => $_smarty_tpl->tpl_vars['topofscale']->value){
$_smarty_tpl->tpl_vars['topofscale']->_loop = true;
?>
			<?php if ($_smarty_tpl->tpl_vars['highpoint']->value<$_smarty_tpl->tpl_vars['topofscale']->value){?>
				<?php $_smarty_tpl->tpl_vars['sumofstat'] = new Smarty_variable($_smarty_tpl->tpl_vars['topofscale']->value, null, 0);?>
				<?php break 1?>
			<?php }?>
		<?php } ?>
		<?php  $_smarty_tpl->tpl_vars['topofscale'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['topofscale']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['submillion']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['topofscale']->key => $_smarty_tpl->tpl_vars['topofscale']->value){
$_smarty_tpl->tpl_vars['topofscale']->_loop = true;
?>
			<?php if ($_smarty_tpl->tpl_vars['highpoint']->value<$_smarty_tpl->tpl_vars['topofscale']->value){?>
				<?php $_smarty_tpl->tpl_vars['sumofstat'] = new Smarty_variable($_smarty_tpl->tpl_vars['topofscale']->value, null, 0);?>
				<?php break 1?>
			<?php }?>
		<?php } ?>
		<?php  $_smarty_tpl->tpl_vars['topofscale'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['topofscale']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['subhundredthousand']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['topofscale']->key => $_smarty_tpl->tpl_vars['topofscale']->value){
$_smarty_tpl->tpl_vars['topofscale']->_loop = true;
?>
			<?php if ($_smarty_tpl->tpl_vars['highpoint']->value<$_smarty_tpl->tpl_vars['topofscale']->value){?>
				<?php $_smarty_tpl->tpl_vars['sumofstat'] = new Smarty_variable($_smarty_tpl->tpl_vars['topofscale']->value, null, 0);?>
				<?php break 1?>
			<?php }?>
		<?php } ?>
		<?php  $_smarty_tpl->tpl_vars['topofscale'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['topofscale']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['subtenthousand']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['topofscale']->key => $_smarty_tpl->tpl_vars['topofscale']->value){
$_smarty_tpl->tpl_vars['topofscale']->_loop = true;
?>
			<?php if ($_smarty_tpl->tpl_vars['highpoint']->value<$_smarty_tpl->tpl_vars['topofscale']->value){?>
				<?php $_smarty_tpl->tpl_vars['sumofstat'] = new Smarty_variable($_smarty_tpl->tpl_vars['topofscale']->value, null, 0);?>
				<?php break 1?>
			<?php }?>
		<?php } ?>
		<?php  $_smarty_tpl->tpl_vars['topofscale'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['topofscale']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['subthousand']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['topofscale']->key => $_smarty_tpl->tpl_vars['topofscale']->value){
$_smarty_tpl->tpl_vars['topofscale']->_loop = true;
?>
			<?php if ($_smarty_tpl->tpl_vars['highpoint']->value<$_smarty_tpl->tpl_vars['topofscale']->value){?>
				<?php $_smarty_tpl->tpl_vars['sumofstat'] = new Smarty_variable($_smarty_tpl->tpl_vars['topofscale']->value, null, 0);?>
				<?php break 1?>
			<?php }?>
		<?php } ?>
		<?php  $_smarty_tpl->tpl_vars['topofscale'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['topofscale']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['subhundred']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['topofscale']->key => $_smarty_tpl->tpl_vars['topofscale']->value){
$_smarty_tpl->tpl_vars['topofscale']->_loop = true;
?>
			<?php if ($_smarty_tpl->tpl_vars['highpoint']->value<$_smarty_tpl->tpl_vars['topofscale']->value){?>
				<?php $_smarty_tpl->tpl_vars['sumofstat'] = new Smarty_variable($_smarty_tpl->tpl_vars['topofscale']->value, null, 0);?>
				<?php break 1?>
			<?php }?>
		<?php } ?>
<div class="verticalTitle"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['graphstat']->value,6,'');?>
</div>
<table border="0" cellspacing="0" cellpadding="0">
<?php $_smarty_tpl->tpl_vars['scalenum'] = new Smarty_variable($_smarty_tpl->tpl_vars['sumofstat']->value, null, 0);?>

<tr>
<td style="position: relative;top: 22px;">
	<?php if ($_smarty_tpl->tpl_vars['scalenum']->value==4){?>
	4&ensp;&ensp;
	<?php }else{ ?>
	<?php echo sprintf("%0.0f",$_smarty_tpl->tpl_vars['scalenum']->value);?>

	<?php }?>
</td>
<td style="border: none"></td>
</tr>
<tr>
<td style="position: relative;top: 22px;">
	<?php if ($_smarty_tpl->tpl_vars['scalenum']->value==4){?>
	3&ensp;&ensp;
	<?php }else{ ?>
	<?php echo sprintf("%0.0f",$_smarty_tpl->tpl_vars['scalenum']->value*.75);?>

	<?php }?>
</td>
<td></td>
</tr>
<tr>
<td style="position: relative;top: 22px;">
	<?php if ($_smarty_tpl->tpl_vars['scalenum']->value==4){?>
	2&ensp;&ensp;
	<?php }else{ ?>
	<?php echo sprintf("%0.0f",$_smarty_tpl->tpl_vars['scalenum']->value*.50);?>

	<?php }?>
</td>
<td></td>
</tr>
<tr>
<td style="position: relative;top: 22px;">
	<?php if ($_smarty_tpl->tpl_vars['scalenum']->value==4){?>
	1&ensp;&ensp;
	<?php }else{ ?>
	<?php echo sprintf("%0.0f",$_smarty_tpl->tpl_vars['scalenum']->value*.25);?>

	<?php }?>
</td>
<td></td>
</tr>
<tr>
<td style="position: relative;top: 22px;">
	<?php if ($_smarty_tpl->tpl_vars['scalenum']->value==4){?>
	0&ensp;&ensp;
	<?php }else{ ?>
	0
	<?php }?>
</td>
<td></td>
</tr>

<div class="graphBars">
	<?php  $_smarty_tpl->tpl_vars['day'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['day']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['daysofweek']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['day']->key => $_smarty_tpl->tpl_vars['day']->value){
$_smarty_tpl->tpl_vars['day']->_loop = true;
?>
		<?php $_smarty_tpl->tpl_vars['data'] = new Smarty_variable($_smarty_tpl->tpl_vars['pivot']->value[$_smarty_tpl->tpl_vars['day']->value], null, 0);?>
		<?php $_smarty_tpl->tpl_vars['barheight'] = new Smarty_variable(sprintf('%0.0f',sum($_smarty_tpl->tpl_vars['data']->value,$_smarty_tpl->tpl_vars['graphstat']->value))/$_smarty_tpl->tpl_vars['sumofstat']->value*100, null, 0);?>
		<div class="bar" title="<?php echo sprintf('%0.0f',sum($_smarty_tpl->tpl_vars['data']->value,$_smarty_tpl->tpl_vars['graphstat']->value));?>
" style="float: left;height: <?php echo sprintf('%0.0f',$_smarty_tpl->tpl_vars['barheight']->value);?>
%;top: <?php echo 100-(sprintf('%0.0f',$_smarty_tpl->tpl_vars['barheight']->value));?>
%;width:13%;margin-left: .8%;">
			<?php if ($_smarty_tpl->tpl_vars['barheight']->value>8){?>
				<span class="barLabels" style=""><?php echo sprintf('%0.0f',sum($_smarty_tpl->tpl_vars['data']->value,$_smarty_tpl->tpl_vars['graphstat']->value));?>
</span>
			<?php }?>
		</div>
	<?php } ?>
</div>

</table>
</div>
<div class="graph2">
<table border="0" cellspacing="0" cellpadding="0">
<tr>
<td></td>
<?php  $_smarty_tpl->tpl_vars['day'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['day']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['daysofweek']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['day']->key => $_smarty_tpl->tpl_vars['day']->value){
$_smarty_tpl->tpl_vars['day']->_loop = true;
?>
<td style="width: <?php echo 850/7;?>
px;"><?php echo $_smarty_tpl->tpl_vars['day']->value;?>
</td>
<?php } ?>
</tr>
</table>
</div>
<div class="horizontalTitle">Day of Week</div>
<?php $_smarty_tpl->tpl_vars['sumofstat'] = new Smarty_variable(100, null, 0);?>
</div><!--End Graph-->

<?php } ?>






<?php $_smarty_tpl->tpl_vars['pivot'] = new Smarty_variable(pivottable($_smarty_tpl->tpl_vars['hourly']->value,"Day of week"), null, 0);?>

<?php $_smarty_tpl->tpl_vars['avgcpaperday'] = new Smarty_variable(array(), null, 0);?>
<?php  $_smarty_tpl->tpl_vars['day'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['day']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['daysofweek']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['day']->key => $_smarty_tpl->tpl_vars['day']->value){
$_smarty_tpl->tpl_vars['day']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['day']->key;
?>
	<?php $_smarty_tpl->tpl_vars['data'] = new Smarty_variable($_smarty_tpl->tpl_vars['pivot']->value[$_smarty_tpl->tpl_vars['day']->value], null, 0);?>
	<?php $_smarty_tpl->tpl_vars['dailycpa'] = new Smarty_variable(sum($_smarty_tpl->tpl_vars['data']->value,"Conv. (1-per-click)")/sum($_smarty_tpl->tpl_vars['data']->value,"Clicks")*100, null, 0);?>
	<?php $_smarty_tpl->createLocalArrayVariable('avgcpaperday', null, 0);
$_smarty_tpl->tpl_vars['avgcpaperday']->value[$_smarty_tpl->tpl_vars['k']->value] = sprintf("%0.2f",$_smarty_tpl->tpl_vars['dailycpa']->value);?>
<?php } ?>

<div class="graph"><!--Start Graph Day of Week-->
<div class="graph1">
	<?php $_smarty_tpl->tpl_vars['sumofstat'] = new Smarty_variable(0, null, 0);?>
	<?php $_smarty_tpl->tpl_vars['highpoint'] = new Smarty_variable(0, null, 0);?>
	<?php  $_smarty_tpl->tpl_vars['day'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['day']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['avgcpaperday']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['day']->key => $_smarty_tpl->tpl_vars['day']->value){
$_smarty_tpl->tpl_vars['day']->_loop = true;
?>
		<?php $_smarty_tpl->tpl_vars['datapoint'] = new Smarty_variable($_smarty_tpl->tpl_vars['day']->value, null, 0);?>
		<?php if ($_smarty_tpl->tpl_vars['datapoint']->value>$_smarty_tpl->tpl_vars['highpoint']->value){?>
			<?php $_smarty_tpl->tpl_vars['highpoint'] = new Smarty_variable($_smarty_tpl->tpl_vars['datapoint']->value, null, 0);?>
		<?php }?>
	<?php } ?>
		<?php  $_smarty_tpl->tpl_vars['topofscale'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['topofscale']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['overmillion']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['topofscale']->key => $_smarty_tpl->tpl_vars['topofscale']->value){
$_smarty_tpl->tpl_vars['topofscale']->_loop = true;
?>
			<?php if ($_smarty_tpl->tpl_vars['highpoint']->value<$_smarty_tpl->tpl_vars['topofscale']->value){?>
				<?php $_smarty_tpl->tpl_vars['sumofstat'] = new Smarty_variable($_smarty_tpl->tpl_vars['topofscale']->value, null, 0);?>
				<?php break 1?>
			<?php }?>
		<?php } ?>
		<?php  $_smarty_tpl->tpl_vars['topofscale'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['topofscale']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['submillion']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['topofscale']->key => $_smarty_tpl->tpl_vars['topofscale']->value){
$_smarty_tpl->tpl_vars['topofscale']->_loop = true;
?>
			<?php if ($_smarty_tpl->tpl_vars['highpoint']->value<$_smarty_tpl->tpl_vars['topofscale']->value){?>
				<?php $_smarty_tpl->tpl_vars['sumofstat'] = new Smarty_variable($_smarty_tpl->tpl_vars['topofscale']->value, null, 0);?>
				<?php break 1?>
			<?php }?>
		<?php } ?>
		<?php  $_smarty_tpl->tpl_vars['topofscale'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['topofscale']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['subhundredthousand']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['topofscale']->key => $_smarty_tpl->tpl_vars['topofscale']->value){
$_smarty_tpl->tpl_vars['topofscale']->_loop = true;
?>
			<?php if ($_smarty_tpl->tpl_vars['highpoint']->value<$_smarty_tpl->tpl_vars['topofscale']->value){?>
				<?php $_smarty_tpl->tpl_vars['sumofstat'] = new Smarty_variable($_smarty_tpl->tpl_vars['topofscale']->value, null, 0);?>
				<?php break 1?>
			<?php }?>
		<?php } ?>
		<?php  $_smarty_tpl->tpl_vars['topofscale'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['topofscale']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['subtenthousand']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['topofscale']->key => $_smarty_tpl->tpl_vars['topofscale']->value){
$_smarty_tpl->tpl_vars['topofscale']->_loop = true;
?>
			<?php if ($_smarty_tpl->tpl_vars['highpoint']->value<$_smarty_tpl->tpl_vars['topofscale']->value){?>
				<?php $_smarty_tpl->tpl_vars['sumofstat'] = new Smarty_variable($_smarty_tpl->tpl_vars['topofscale']->value, null, 0);?>
				<?php break 1?>
			<?php }?>
		<?php } ?>
		<?php  $_smarty_tpl->tpl_vars['topofscale'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['topofscale']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['subthousand']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['topofscale']->key => $_smarty_tpl->tpl_vars['topofscale']->value){
$_smarty_tpl->tpl_vars['topofscale']->_loop = true;
?>
			<?php if ($_smarty_tpl->tpl_vars['highpoint']->value<$_smarty_tpl->tpl_vars['topofscale']->value){?>
				<?php $_smarty_tpl->tpl_vars['sumofstat'] = new Smarty_variable($_smarty_tpl->tpl_vars['topofscale']->value, null, 0);?>
				<?php break 1?>
			<?php }?>
		<?php } ?>
		<?php  $_smarty_tpl->tpl_vars['topofscale'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['topofscale']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['subhundred']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['topofscale']->key => $_smarty_tpl->tpl_vars['topofscale']->value){
$_smarty_tpl->tpl_vars['topofscale']->_loop = true;
?>
			<?php if ($_smarty_tpl->tpl_vars['highpoint']->value<$_smarty_tpl->tpl_vars['topofscale']->value){?>
				<?php $_smarty_tpl->tpl_vars['sumofstat'] = new Smarty_variable($_smarty_tpl->tpl_vars['topofscale']->value, null, 0);?>
				<?php break 1?>
			<?php }?>
		<?php } ?>
<div class="verticalTitle">CPA</div>
<table border="0" cellspacing="0" cellpadding="0">
<?php $_smarty_tpl->tpl_vars['scalenum'] = new Smarty_variable($_smarty_tpl->tpl_vars['sumofstat']->value, null, 0);?>

<tr>
<td style="position: relative;top: 22px;">
	<?php if ($_smarty_tpl->tpl_vars['scalenum']->value==4){?>
	$4&ensp;&ensp;
	<?php }else{ ?>
	$<?php echo sprintf("%0.0f",$_smarty_tpl->tpl_vars['scalenum']->value);?>

	<?php }?>
</td>
<td style="border: none"></td>
</tr>
<tr>
<td style="position: relative;top: 22px;">
	<?php if ($_smarty_tpl->tpl_vars['scalenum']->value==4){?>
	$3&ensp;&ensp;
	<?php }else{ ?>
	$<?php echo sprintf("%0.0f",$_smarty_tpl->tpl_vars['scalenum']->value*.75);?>

	<?php }?>
</td>
<td></td>
</tr>
<tr>
<td style="position: relative;top: 22px;">
	<?php if ($_smarty_tpl->tpl_vars['scalenum']->value==4){?>
	$2&ensp;&ensp;
	<?php }else{ ?>
	$<?php echo sprintf("%0.0f",$_smarty_tpl->tpl_vars['scalenum']->value*.50);?>

	<?php }?>
</td>
<td></td>
</tr>
<tr>
<td style="position: relative;top: 22px;">
	<?php if ($_smarty_tpl->tpl_vars['scalenum']->value==4){?>
	$1&ensp;&ensp;
	<?php }else{ ?>
	$<?php echo sprintf("%0.0f",$_smarty_tpl->tpl_vars['scalenum']->value*.25);?>

	<?php }?>
</td>
<td></td>
</tr>
<tr>
<td style="position: relative;top: 22px;">
	<?php if ($_smarty_tpl->tpl_vars['scalenum']->value==4){?>
	$0&ensp;&ensp;
	<?php }else{ ?>
	$0
	<?php }?>
</td>
<td></td>
</tr>

<div class="graphBars">
	<?php  $_smarty_tpl->tpl_vars['day'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['day']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['avgcpaperday']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['day']->key => $_smarty_tpl->tpl_vars['day']->value){
$_smarty_tpl->tpl_vars['day']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['day']->key;
?>
		<?php $_smarty_tpl->tpl_vars['barheight'] = new Smarty_variable($_smarty_tpl->tpl_vars['day']->value/$_smarty_tpl->tpl_vars['sumofstat']->value*100, null, 0);?>
		<div class="bar" title="$<?php echo $_smarty_tpl->tpl_vars['day']->value;?>
" style="float: left;height: <?php echo sprintf('%0.0f',$_smarty_tpl->tpl_vars['barheight']->value);?>
%;top: <?php echo 100-(sprintf('%0.0f',$_smarty_tpl->tpl_vars['barheight']->value));?>
%;width:13%;margin-left: .8%;">
			<?php if ($_smarty_tpl->tpl_vars['barheight']->value>9){?>
				<span class="barLabels" style="">$<?php echo $_smarty_tpl->tpl_vars['day']->value;?>
</span>
			<?php }?>
		</div>
	<?php } ?>
</div>

</table>
</div>
<div class="graph2">
<table border="0" cellspacing="0" cellpadding="0">
<tr>
<td></td>
<?php  $_smarty_tpl->tpl_vars['day'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['day']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['daysofweek']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['day']->key => $_smarty_tpl->tpl_vars['day']->value){
$_smarty_tpl->tpl_vars['day']->_loop = true;
?>
<td style="width: <?php echo 850/7;?>
px;"><?php echo $_smarty_tpl->tpl_vars['day']->value;?>
</td>
<?php } ?>
</tr>
</table>
</div>
<div class="horizontalTitle">Day of Week</div>
<?php $_smarty_tpl->tpl_vars['sumofstat'] = new Smarty_variable(100, null, 0);?>
</div><!--End Graph-->






<?php if (sum($_smarty_tpl->tpl_vars['hourly']->value,"Total conv. value")>0){?>

<?php $_smarty_tpl->tpl_vars['pivot'] = new Smarty_variable(pivottable($_smarty_tpl->tpl_vars['hourly']->value,"Day of week"), null, 0);?>

<?php $_smarty_tpl->tpl_vars['avgroasperday'] = new Smarty_variable(array(), null, 0);?>
<?php  $_smarty_tpl->tpl_vars['day'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['day']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['daysofweek']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['day']->key => $_smarty_tpl->tpl_vars['day']->value){
$_smarty_tpl->tpl_vars['day']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['day']->key;
?>
	<?php $_smarty_tpl->tpl_vars['data'] = new Smarty_variable($_smarty_tpl->tpl_vars['pivot']->value[$_smarty_tpl->tpl_vars['day']->value], null, 0);?>
	<?php $_smarty_tpl->tpl_vars['dailyroas'] = new Smarty_variable(sum($_smarty_tpl->tpl_vars['data']->value,"Total conv. value")/sum($_smarty_tpl->tpl_vars['data']->value,"Cost")*100, null, 0);?>
	<?php $_smarty_tpl->createLocalArrayVariable('avgroasperday', null, 0);
$_smarty_tpl->tpl_vars['avgroasperday']->value[$_smarty_tpl->tpl_vars['k']->value] = sprintf("%0.2f",$_smarty_tpl->tpl_vars['dailyroas']->value);?>
<?php } ?>

<div class="graph"><!--Start Graph Day of Week-->
<div class="graph1">
	<?php $_smarty_tpl->tpl_vars['sumofstat'] = new Smarty_variable(0, null, 0);?>
	<?php $_smarty_tpl->tpl_vars['highpoint'] = new Smarty_variable(0, null, 0);?>
	<?php  $_smarty_tpl->tpl_vars['day'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['day']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['avgroasperday']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['day']->key => $_smarty_tpl->tpl_vars['day']->value){
$_smarty_tpl->tpl_vars['day']->_loop = true;
?>
		<?php $_smarty_tpl->tpl_vars['datapoint'] = new Smarty_variable($_smarty_tpl->tpl_vars['day']->value, null, 0);?>
		<?php if ($_smarty_tpl->tpl_vars['datapoint']->value>$_smarty_tpl->tpl_vars['highpoint']->value){?>
			<?php $_smarty_tpl->tpl_vars['highpoint'] = new Smarty_variable($_smarty_tpl->tpl_vars['datapoint']->value, null, 0);?>
		<?php }?>
	<?php } ?>
		<?php  $_smarty_tpl->tpl_vars['topofscale'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['topofscale']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['overmillion']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['topofscale']->key => $_smarty_tpl->tpl_vars['topofscale']->value){
$_smarty_tpl->tpl_vars['topofscale']->_loop = true;
?>
			<?php if ($_smarty_tpl->tpl_vars['highpoint']->value<$_smarty_tpl->tpl_vars['topofscale']->value){?>
				<?php $_smarty_tpl->tpl_vars['sumofstat'] = new Smarty_variable($_smarty_tpl->tpl_vars['topofscale']->value, null, 0);?>
				<?php break 1?>
			<?php }?>
		<?php } ?>
		<?php  $_smarty_tpl->tpl_vars['topofscale'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['topofscale']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['submillion']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['topofscale']->key => $_smarty_tpl->tpl_vars['topofscale']->value){
$_smarty_tpl->tpl_vars['topofscale']->_loop = true;
?>
			<?php if ($_smarty_tpl->tpl_vars['highpoint']->value<$_smarty_tpl->tpl_vars['topofscale']->value){?>
				<?php $_smarty_tpl->tpl_vars['sumofstat'] = new Smarty_variable($_smarty_tpl->tpl_vars['topofscale']->value, null, 0);?>
				<?php break 1?>
			<?php }?>
		<?php } ?>
		<?php  $_smarty_tpl->tpl_vars['topofscale'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['topofscale']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['subhundredthousand']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['topofscale']->key => $_smarty_tpl->tpl_vars['topofscale']->value){
$_smarty_tpl->tpl_vars['topofscale']->_loop = true;
?>
			<?php if ($_smarty_tpl->tpl_vars['highpoint']->value<$_smarty_tpl->tpl_vars['topofscale']->value){?>
				<?php $_smarty_tpl->tpl_vars['sumofstat'] = new Smarty_variable($_smarty_tpl->tpl_vars['topofscale']->value, null, 0);?>
				<?php break 1?>
			<?php }?>
		<?php } ?>
		<?php  $_smarty_tpl->tpl_vars['topofscale'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['topofscale']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['subtenthousand']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['topofscale']->key => $_smarty_tpl->tpl_vars['topofscale']->value){
$_smarty_tpl->tpl_vars['topofscale']->_loop = true;
?>
			<?php if ($_smarty_tpl->tpl_vars['highpoint']->value<$_smarty_tpl->tpl_vars['topofscale']->value){?>
				<?php $_smarty_tpl->tpl_vars['sumofstat'] = new Smarty_variable($_smarty_tpl->tpl_vars['topofscale']->value, null, 0);?>
				<?php break 1?>
			<?php }?>
		<?php } ?>
		<?php  $_smarty_tpl->tpl_vars['topofscale'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['topofscale']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['subthousand']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['topofscale']->key => $_smarty_tpl->tpl_vars['topofscale']->value){
$_smarty_tpl->tpl_vars['topofscale']->_loop = true;
?>
			<?php if ($_smarty_tpl->tpl_vars['highpoint']->value<$_smarty_tpl->tpl_vars['topofscale']->value){?>
				<?php $_smarty_tpl->tpl_vars['sumofstat'] = new Smarty_variable($_smarty_tpl->tpl_vars['topofscale']->value, null, 0);?>
				<?php break 1?>
			<?php }?>
		<?php } ?>
		<?php  $_smarty_tpl->tpl_vars['topofscale'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['topofscale']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['subhundred']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['topofscale']->key => $_smarty_tpl->tpl_vars['topofscale']->value){
$_smarty_tpl->tpl_vars['topofscale']->_loop = true;
?>
			<?php if ($_smarty_tpl->tpl_vars['highpoint']->value<$_smarty_tpl->tpl_vars['topofscale']->value){?>
				<?php $_smarty_tpl->tpl_vars['sumofstat'] = new Smarty_variable($_smarty_tpl->tpl_vars['topofscale']->value, null, 0);?>
				<?php break 1?>
			<?php }?>
		<?php } ?>
<div class="verticalTitle">ROAS</div>
<table border="0" cellspacing="0" cellpadding="0">
<?php $_smarty_tpl->tpl_vars['scalenum'] = new Smarty_variable($_smarty_tpl->tpl_vars['sumofstat']->value, null, 0);?>

<tr>
<td style="position: relative;top: 22px;">
	<?php if ($_smarty_tpl->tpl_vars['scalenum']->value==4){?>
	$4&ensp;&ensp;
	<?php }else{ ?>
	$<?php echo sprintf("%0.0f",$_smarty_tpl->tpl_vars['scalenum']->value);?>

	<?php }?>
</td>
<td style="border: none"></td>
</tr>
<tr>
<td style="position: relative;top: 22px;">
	<?php if ($_smarty_tpl->tpl_vars['scalenum']->value==4){?>
	$3&ensp;&ensp;
	<?php }else{ ?>
	$<?php echo sprintf("%0.0f",$_smarty_tpl->tpl_vars['scalenum']->value*.75);?>

	<?php }?>
</td>
<td></td>
</tr>
<tr>
<td style="position: relative;top: 22px;">
	<?php if ($_smarty_tpl->tpl_vars['scalenum']->value==4){?>
	$2&ensp;&ensp;
	<?php }else{ ?>
	$<?php echo sprintf("%0.0f",$_smarty_tpl->tpl_vars['scalenum']->value*.50);?>

	<?php }?>
</td>
<td></td>
</tr>
<tr>
<td style="position: relative;top: 22px;">
	<?php if ($_smarty_tpl->tpl_vars['scalenum']->value==4){?>
	$1&ensp;&ensp;
	<?php }else{ ?>
	$<?php echo sprintf("%0.0f",$_smarty_tpl->tpl_vars['scalenum']->value*.25);?>

	<?php }?>
</td>
<td></td>
</tr>
<tr>
<td style="position: relative;top: 22px;">
	<?php if ($_smarty_tpl->tpl_vars['scalenum']->value==4){?>
	$0&ensp;&ensp;
	<?php }else{ ?>
	$0
	<?php }?>
</td>
<td></td>
</tr>

<div class="graphBars">
	<?php  $_smarty_tpl->tpl_vars['day'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['day']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['avgroasperday']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['day']->key => $_smarty_tpl->tpl_vars['day']->value){
$_smarty_tpl->tpl_vars['day']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['day']->key;
?>
		<?php $_smarty_tpl->tpl_vars['barheight'] = new Smarty_variable($_smarty_tpl->tpl_vars['day']->value/$_smarty_tpl->tpl_vars['sumofstat']->value*100, null, 0);?>
		<div class="bar" title="$<?php echo $_smarty_tpl->tpl_vars['day']->value;?>
" style="float: left;height: <?php echo sprintf('%0.0f',$_smarty_tpl->tpl_vars['barheight']->value);?>
%;top: <?php echo 100-(sprintf('%0.0f',$_smarty_tpl->tpl_vars['barheight']->value));?>
%;width:13%;margin-left: .8%;">
			<?php if ($_smarty_tpl->tpl_vars['barheight']->value>9){?>
				<span class="barLabels" style="">$<?php echo $_smarty_tpl->tpl_vars['day']->value;?>
</span>
			<?php }?>
		</div>
	<?php } ?>
</div>

</table>
</div>
<div class="graph2">
<table border="0" cellspacing="0" cellpadding="0">
<tr>
<td></td>
<?php  $_smarty_tpl->tpl_vars['day'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['day']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['daysofweek']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['day']->key => $_smarty_tpl->tpl_vars['day']->value){
$_smarty_tpl->tpl_vars['day']->_loop = true;
?>
<td style="width: <?php echo 850/7;?>
px;"><?php echo $_smarty_tpl->tpl_vars['day']->value;?>
</td>
<?php } ?>
</tr>
</table>
</div>
<div class="horizontalTitle">Day of Week</div>
<?php $_smarty_tpl->tpl_vars['sumofstat'] = new Smarty_variable(100, null, 0);?>
</div><!--End Graph-->

<?php }?>



</div>
<div class="rightBottom">
<img class="footerGffLogo" src="images/dark-gff.jpg" />
</div>
</div><!-- ###END CONTENT 5###-->
<div class="content" id="slideNum6">
<div class="left"></div>
<div class="right">
<h2><span class="outline3">Converting Keywords</span></h2>
<table style="margin: 0 auto;margin-top: -45px;"><tbody><tr>
	<?php $_smarty_tpl->tpl_vars['sorted_keyword_table'] = new Smarty_variable(smarty_function_sort($_smarty_tpl->tpl_vars['keyword']->value["all"],"-#Conv. (1-per-click)","-#Cost"), null, 0);?>
	<?php $_smarty_tpl->tpl_vars['pivot'] = new Smarty_variable(pivottable($_smarty_tpl->tpl_vars['sorted_keyword_table']->value,"Keyword"), null, 0);?>
	<?php $_smarty_tpl->tpl_vars['total_top_kw_convs'] = new Smarty_variable(0, null, 0);?>
	<td><div class="longTable" style="margin: 0;">
	<table border="0" cellspacing="0" cellpadding="0"><tbody>
	<tr>
		<th colspan="5">Top Coverting Keywords</th>
	</tr>
	<tr valign="top">
		<th>Keyword</th>
		<th>Impr.</th>
		<th>Clicks</th>
		<th>Spend</th>
		<th>Conv.</th>
	</tr>
	<?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_smarty_tpl->tpl_vars['kw'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['pivot']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['data']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value){
$_smarty_tpl->tpl_vars['data']->_loop = true;
 $_smarty_tpl->tpl_vars['kw']->value = $_smarty_tpl->tpl_vars['data']->key;
 $_smarty_tpl->tpl_vars['data']->index++;
?>
	<?php if (sum($_smarty_tpl->tpl_vars['data']->value,"Conv. (1-per-click)")>0){?>
	<tr valign="middle" style="font-size: 12px;"><td><span><?php echo $_smarty_tpl->tpl_vars['kw']->value;?>
</span></td><td><p><?php echo sum($_smarty_tpl->tpl_vars['data']->value,"Impressions");?>
</p></td><td><p><?php echo sum($_smarty_tpl->tpl_vars['data']->value,"Clicks");?>
</p></td><td><p><?php echo sprintf("%0.2f",sum($_smarty_tpl->tpl_vars['data']->value,"Cost"));?>
</p></td><td><p><?php echo sum($_smarty_tpl->tpl_vars['data']->value,"Conv. (1-per-click)");?>
</p></td></tr>
	<?php $_smarty_tpl->tpl_vars['total_top_kw_convs'] = new Smarty_variable($_smarty_tpl->tpl_vars['total_top_kw_convs']->value+sum($_smarty_tpl->tpl_vars['data']->value,"Conv. (1-per-click)"), null, 0);?>
	<?php if ($_smarty_tpl->tpl_vars['data']->index>20){?><?php break 1?><?php }?>
	<?php }?>
	<?php } ?>
	<tr>
		<th colspan="4" style="background: #00a9b9;color: #fff;height: 25px;">Total Conv. of Top Keywords</th>
		<td style="background: #404040;color: #fff;vertical-align: bottom; padding-bottom: 5px;"><p><?php echo $_smarty_tpl->tpl_vars['total_top_kw_convs']->value;?>
</p></td>
	</tr>
	<tr style="border-top: 1px solid #ccc;">
		<th colspan="4" style="background: #00a9b9;color: #fff;height: 25px;">Percent of Total Conv.</th>
		<td style="background: #404040;color: #fff;vertical-align: bottom; padding-bottom: 5px;"><p><?php echo sprintf("%0.2f",$_smarty_tpl->tpl_vars['total_top_kw_convs']->value/$_smarty_tpl->tpl_vars['totalconv']->value)*100;?>
%</p></td>
	</tr>
	</tbody></table>
	</div></td>
	<td><div class="longTable">
	<?php $_smarty_tpl->tpl_vars['total_top_no_conv_kw_spend'] = new Smarty_variable(0, null, 0);?>
	<?php $_smarty_tpl->tpl_vars['sorted_keyword_table'] = new Smarty_variable(smarty_function_sort($_smarty_tpl->tpl_vars['keyword']->value["all"],"-#Cost"), null, 0);?>
	<?php $_smarty_tpl->tpl_vars['pivot'] = new Smarty_variable(pivottable($_smarty_tpl->tpl_vars['sorted_keyword_table']->value,"Keyword"), null, 0);?>
	<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable(0, null, 0);?>
	<table border="0" cellspacing="0" cellpadding="0"><tbody>
	<tr>
		<th colspan="5">High Cost No Convertions</th>
	</tr>
	<tr valign="top">
		<th>Keyword</th>
		<th>Impr.</th>
		<th>Clicks</th>
		<th>Spend</th>
	</tr>
	<?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_smarty_tpl->tpl_vars['kw'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['pivot']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['data']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value){
$_smarty_tpl->tpl_vars['data']->_loop = true;
 $_smarty_tpl->tpl_vars['kw']->value = $_smarty_tpl->tpl_vars['data']->key;
 $_smarty_tpl->tpl_vars['data']->index++;
?>
		<?php if (sum($_smarty_tpl->tpl_vars['data']->value,"Cost")>0){?>
			<?php if (sum($_smarty_tpl->tpl_vars['data']->value,"Conv. (1-per-click)")==0){?>
				<tr valign="middle" style="font-size: 12px;"><td><span><?php echo $_smarty_tpl->tpl_vars['kw']->value;?>
</span></td><td><p>	<?php echo sum($_smarty_tpl->tpl_vars['data']->value,"Impressions");?>
</p></td><td><p><?php echo sum($_smarty_tpl->tpl_vars['data']->value,"Clicks");?>
</p></td><td><p><?php echo sprintf("%0.2f",sum($_smarty_tpl->tpl_vars['data']->value,"Cost"));?>
</p></td></tr>
				<?php $_smarty_tpl->tpl_vars['total_top_no_conv_kw_spend'] = new Smarty_variable($_smarty_tpl->tpl_vars['total_top_no_conv_kw_spend']->value+sprintf("%0.2f",sum($_smarty_tpl->tpl_vars['data']->value,"Cost")), null, 0);?>
				<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable($_smarty_tpl->tpl_vars['i']->value+1, null, 0);?>
				<?php if ($_smarty_tpl->tpl_vars['i']->value>21){?><?php break 1?><?php }?>
			<?php }?>
		<?php }?>
	<?php } ?>
	<tr>
		<th colspan="3" style="background: #00a9b9;color: #fff;height: 25px;">Total Conv. of Top Keywords</th>
		<td style="background: #404040;color: #fff;vertical-align: bottom; padding-bottom: 5px;"><p>$<?php echo $_smarty_tpl->tpl_vars['total_top_no_conv_kw_spend']->value;?>
</p></td>
	</tr>
	<tr style="border-top: 1px solid #ccc;">
		<th colspan="3" style="background: #00a9b9;color: #fff;height: 25px;">Percent of Total Spend</th>
		<td style="background: #404040;color: #fff;vertical-align: bottom; padding-bottom: 5px;"><p><?php echo sprintf("%0.2f",$_smarty_tpl->tpl_vars['total_top_no_conv_kw_spend']->value/$_smarty_tpl->tpl_vars['totalspend']->value)*100;?>
%</p></td>
	</tr>
	</tbody></table>
	</div></td>
</tr></tbody></table>
</div>
<div class="rightBottom">
<img class="footerGffLogo" src="images/dark-gff.jpg" />
</div>
</div><!-- ###END CONTENT 6###-->
<div class="content" id="slideNum7">
<div class="left"></div>
<div class="right">
<h2>Keywords with Negative ROI</h2>

<?php $_smarty_tpl->tpl_vars['keyword_by_roi'] = new Smarty_variable(smarty_function_sort($_smarty_tpl->tpl_vars['keyword']->value["all"],"#Conv. value / cost"), null, 0);?>
<?php $_smarty_tpl->tpl_vars['pivot'] = new Smarty_variable(pivottable($_smarty_tpl->tpl_vars['keyword_by_roi']->value,"Keyword"), null, 0);?>

<?php $_smarty_tpl->tpl_vars['bottom_kw_by_roi'] = new Smarty_variable(array(), null, 0);?>
<?php $_smarty_tpl->tpl_vars['bottom_kw_by_roi_roi'] = new Smarty_variable(array(), null, 0);?>
<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable(0, null, 0);?>

<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_smarty_tpl->tpl_vars['kw'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['pivot']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
 $_smarty_tpl->tpl_vars['kw']->value = $_smarty_tpl->tpl_vars['row']->key;
?>
		<?php if (sum($_smarty_tpl->tpl_vars['row']->value,"Conv. value / cost")>0){?>
			<?php $_smarty_tpl->tpl_vars['wasted_spend'] = new Smarty_variable(sum($_smarty_tpl->tpl_vars['row']->value,"Cost")-(sum($_smarty_tpl->tpl_vars['row']->value,"Cost")*sum($_smarty_tpl->tpl_vars['row']->value,"Conv. value / cost")), null, 0);?>
				<?php if ($_smarty_tpl->tpl_vars['wasted_spend']->value>0){?>
					<?php $_smarty_tpl->createLocalArrayVariable('bottom_kw_by_roi', null, 0);
$_smarty_tpl->tpl_vars['bottom_kw_by_roi']->value[$_smarty_tpl->tpl_vars['kw']->value] = $_smarty_tpl->tpl_vars['wasted_spend']->value;?>
					<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable($_smarty_tpl->tpl_vars['i']->value+1, null, 0);?>
					<?php if ($_smarty_tpl->tpl_vars['i']->value>17){?><?php break 1?><?php }?>
				<?php }?>
		<?php }?>
<?php } ?>

<?php $_smarty_tpl->tpl_vars['bottom_kw_by_roi_sorted'] = new Smarty_variable(arsort($_smarty_tpl->tpl_vars['bottom_kw_by_roi']->value), null, 0);?>

<?php $_smarty_tpl->tpl_vars['highpoint'] = new Smarty_variable(0, null, 0);?>
	<?php  $_smarty_tpl->tpl_vars['s'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['s']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['bottom_kw_by_roi']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['s']->key => $_smarty_tpl->tpl_vars['s']->value){
$_smarty_tpl->tpl_vars['s']->_loop = true;
?>
		<?php $_smarty_tpl->tpl_vars['datapoint'] = new Smarty_variable($_smarty_tpl->tpl_vars['s']->value, null, 0);?>
		<?php if ($_smarty_tpl->tpl_vars['datapoint']->value>$_smarty_tpl->tpl_vars['highpoint']->value){?>
			<?php $_smarty_tpl->tpl_vars['highpoint'] = new Smarty_variable($_smarty_tpl->tpl_vars['datapoint']->value, null, 0);?>
		<?php }?>
	<?php } ?>
		<?php  $_smarty_tpl->tpl_vars['topofscale'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['topofscale']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['subhundredthousand']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['topofscale']->key => $_smarty_tpl->tpl_vars['topofscale']->value){
$_smarty_tpl->tpl_vars['topofscale']->_loop = true;
?>
			<?php if ($_smarty_tpl->tpl_vars['highpoint']->value<$_smarty_tpl->tpl_vars['topofscale']->value){?>
				<?php $_smarty_tpl->tpl_vars['sumofstat'] = new Smarty_variable($_smarty_tpl->tpl_vars['topofscale']->value, null, 0);?>
				<?php break 1?>
			<?php }?>
		<?php } ?>
		<?php  $_smarty_tpl->tpl_vars['topofscale'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['topofscale']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['subtenthousand']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['topofscale']->key => $_smarty_tpl->tpl_vars['topofscale']->value){
$_smarty_tpl->tpl_vars['topofscale']->_loop = true;
?>
			<?php if ($_smarty_tpl->tpl_vars['highpoint']->value<$_smarty_tpl->tpl_vars['topofscale']->value){?>
				<?php $_smarty_tpl->tpl_vars['sumofstat'] = new Smarty_variable($_smarty_tpl->tpl_vars['topofscale']->value, null, 0);?>
				<?php break 1?>
			<?php }?>
		<?php } ?>
		<?php  $_smarty_tpl->tpl_vars['topofscale'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['topofscale']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['subthousand']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['topofscale']->key => $_smarty_tpl->tpl_vars['topofscale']->value){
$_smarty_tpl->tpl_vars['topofscale']->_loop = true;
?>
			<?php if ($_smarty_tpl->tpl_vars['highpoint']->value<$_smarty_tpl->tpl_vars['topofscale']->value){?>
				<?php $_smarty_tpl->tpl_vars['sumofstat'] = new Smarty_variable($_smarty_tpl->tpl_vars['topofscale']->value, null, 0);?>
				<?php break 1?>
			<?php }?>
		<?php } ?>
		<?php  $_smarty_tpl->tpl_vars['topofscale'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['topofscale']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['subhundred']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['topofscale']->key => $_smarty_tpl->tpl_vars['topofscale']->value){
$_smarty_tpl->tpl_vars['topofscale']->_loop = true;
?>
			<?php if ($_smarty_tpl->tpl_vars['highpoint']->value<$_smarty_tpl->tpl_vars['topofscale']->value){?>
				<?php $_smarty_tpl->tpl_vars['sumofstat'] = new Smarty_variable($_smarty_tpl->tpl_vars['topofscale']->value, null, 0);?>
				<?php break 1?>
			<?php }?>
		<?php } ?>

<table class="horizontalGraph">
<?php $_smarty_tpl->tpl_vars['total_bottom_kw_by_roi'] = new Smarty_variable(0, null, 0);?>
<?php  $_smarty_tpl->tpl_vars['roi'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['roi']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['bottom_kw_by_roi']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['roi']->key => $_smarty_tpl->tpl_vars['roi']->value){
$_smarty_tpl->tpl_vars['roi']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['roi']->key;
?>
	<?php $_smarty_tpl->tpl_vars['new_roi'] = new Smarty_variable(sprintf("%0.2f",$_smarty_tpl->tpl_vars['roi']->value), null, 0);?>
	<?php $_smarty_tpl->tpl_vars['bar_widith'] = new Smarty_variable(($_smarty_tpl->tpl_vars['new_roi']->value/$_smarty_tpl->tpl_vars['sumofstat']->value)*100, null, 0);?>
	<tr>
		<td class="horizontalChartLabel"><?php echo $_smarty_tpl->tpl_vars['k']->value;?>
</td><td class="barHolder"><div title="<?php echo $_smarty_tpl->tpl_vars['new_roi']->value;?>
" class="horizontalBar" style="width: <?php echo $_smarty_tpl->tpl_vars['bar_widith']->value;?>
%"><span>$<?php echo $_smarty_tpl->tpl_vars['new_roi']->value;?>
</span></div></td>
	</tr>
	<?php $_smarty_tpl->tpl_vars['total_bottom_kw_by_roi'] = new Smarty_variable($_smarty_tpl->tpl_vars['total_bottom_kw_by_roi']->value+$_smarty_tpl->tpl_vars['new_roi']->value, null, 0);?>
<?php } ?>
	<tr style="border-top: 1px solid #404040">
		<th style="color: #404040;height: 30px;vertical-align: bottom;padding-bottom: 5px;text-align: left;">Total Wasted Spend</th><td style="color: red;height: 30px;vertical-align: bottom;padding-bottom: 5px;text-align: left;">$<?php echo $_smarty_tpl->tpl_vars['total_bottom_kw_by_roi']->value;?>
</td>
	</tr>
</table>

</div>
<div class="rightBottom">
<img class="footerGffLogo" src="images/dark-gff.jpg" />
</div>
</div><!-- ###END CONTENT 7###-->
<div class="content" id="slideNum8">
<div class="left"></div>
<div class="right">
<h2>Keywords with Positive ROI</h2>

<?php $_smarty_tpl->tpl_vars['keyword_by_roi'] = new Smarty_variable(smarty_function_sort($_smarty_tpl->tpl_vars['keyword']->value["all"],"#Conv. value / cost"), null, 0);?>
<?php $_smarty_tpl->tpl_vars['pivot'] = new Smarty_variable(pivottable($_smarty_tpl->tpl_vars['keyword_by_roi']->value,"Keyword"), null, 0);?>

<?php $_smarty_tpl->tpl_vars['bottom_kw_by_roi'] = new Smarty_variable(array(), null, 0);?>
<?php $_smarty_tpl->tpl_vars['bottom_kw_by_roi_roi'] = new Smarty_variable(array(), null, 0);?>
<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable(0, null, 0);?>

<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_smarty_tpl->tpl_vars['kw'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['pivot']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
 $_smarty_tpl->tpl_vars['kw']->value = $_smarty_tpl->tpl_vars['row']->key;
?>
		<?php if (sum($_smarty_tpl->tpl_vars['row']->value,"Conv. value / cost")>0){?>
			<?php $_smarty_tpl->tpl_vars['wasted_spend'] = new Smarty_variable(sum($_smarty_tpl->tpl_vars['row']->value,"Cost")-(sum($_smarty_tpl->tpl_vars['row']->value,"Cost")*sum($_smarty_tpl->tpl_vars['row']->value,"Conv. value / cost")), null, 0);?>
				<?php if ($_smarty_tpl->tpl_vars['wasted_spend']->value<0){?>
					<?php $_smarty_tpl->createLocalArrayVariable('bottom_kw_by_roi', null, 0);
$_smarty_tpl->tpl_vars['bottom_kw_by_roi']->value[$_smarty_tpl->tpl_vars['kw']->value] = $_smarty_tpl->tpl_vars['wasted_spend']->value*-1;?>
					<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable($_smarty_tpl->tpl_vars['i']->value+1, null, 0);?>
					<?php if ($_smarty_tpl->tpl_vars['i']->value>17){?><?php break 1?><?php }?>
				<?php }?>
		<?php }?>
<?php } ?>

<?php $_smarty_tpl->tpl_vars['bottom_kw_by_roi_sorted'] = new Smarty_variable(arsort($_smarty_tpl->tpl_vars['bottom_kw_by_roi']->value), null, 0);?>

<?php $_smarty_tpl->tpl_vars['highpoint'] = new Smarty_variable(0, null, 0);?>
	<?php  $_smarty_tpl->tpl_vars['s'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['s']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['bottom_kw_by_roi']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['s']->key => $_smarty_tpl->tpl_vars['s']->value){
$_smarty_tpl->tpl_vars['s']->_loop = true;
?>
		<?php $_smarty_tpl->tpl_vars['datapoint'] = new Smarty_variable($_smarty_tpl->tpl_vars['s']->value, null, 0);?>
		<?php if ($_smarty_tpl->tpl_vars['datapoint']->value>$_smarty_tpl->tpl_vars['highpoint']->value){?>
			<?php $_smarty_tpl->tpl_vars['highpoint'] = new Smarty_variable($_smarty_tpl->tpl_vars['datapoint']->value, null, 0);?>
		<?php }?>
	<?php } ?>
		<?php  $_smarty_tpl->tpl_vars['topofscale'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['topofscale']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['subhundredthousand']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['topofscale']->key => $_smarty_tpl->tpl_vars['topofscale']->value){
$_smarty_tpl->tpl_vars['topofscale']->_loop = true;
?>
			<?php if ($_smarty_tpl->tpl_vars['highpoint']->value<$_smarty_tpl->tpl_vars['topofscale']->value){?>
				<?php $_smarty_tpl->tpl_vars['sumofstat'] = new Smarty_variable($_smarty_tpl->tpl_vars['topofscale']->value, null, 0);?>
				<?php break 1?>
			<?php }?>
		<?php } ?>
		<?php  $_smarty_tpl->tpl_vars['topofscale'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['topofscale']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['subtenthousand']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['topofscale']->key => $_smarty_tpl->tpl_vars['topofscale']->value){
$_smarty_tpl->tpl_vars['topofscale']->_loop = true;
?>
			<?php if ($_smarty_tpl->tpl_vars['highpoint']->value<$_smarty_tpl->tpl_vars['topofscale']->value){?>
				<?php $_smarty_tpl->tpl_vars['sumofstat'] = new Smarty_variable($_smarty_tpl->tpl_vars['topofscale']->value, null, 0);?>
				<?php break 1?>
			<?php }?>
		<?php } ?>
		<?php  $_smarty_tpl->tpl_vars['topofscale'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['topofscale']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['subthousand']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['topofscale']->key => $_smarty_tpl->tpl_vars['topofscale']->value){
$_smarty_tpl->tpl_vars['topofscale']->_loop = true;
?>
			<?php if ($_smarty_tpl->tpl_vars['highpoint']->value<$_smarty_tpl->tpl_vars['topofscale']->value){?>
				<?php $_smarty_tpl->tpl_vars['sumofstat'] = new Smarty_variable($_smarty_tpl->tpl_vars['topofscale']->value, null, 0);?>
				<?php break 1?>
			<?php }?>
		<?php } ?>
		<?php  $_smarty_tpl->tpl_vars['topofscale'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['topofscale']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['subhundred']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['topofscale']->key => $_smarty_tpl->tpl_vars['topofscale']->value){
$_smarty_tpl->tpl_vars['topofscale']->_loop = true;
?>
			<?php if ($_smarty_tpl->tpl_vars['highpoint']->value<$_smarty_tpl->tpl_vars['topofscale']->value){?>
				<?php $_smarty_tpl->tpl_vars['sumofstat'] = new Smarty_variable($_smarty_tpl->tpl_vars['topofscale']->value, null, 0);?>
				<?php break 1?>
			<?php }?>
		<?php } ?>

<table class="horizontalGraph">
<?php $_smarty_tpl->tpl_vars['total_bottom_kw_by_roi'] = new Smarty_variable(0, null, 0);?>
<?php  $_smarty_tpl->tpl_vars['roi'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['roi']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['bottom_kw_by_roi']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['roi']->key => $_smarty_tpl->tpl_vars['roi']->value){
$_smarty_tpl->tpl_vars['roi']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['roi']->key;
?>
	<?php $_smarty_tpl->tpl_vars['new_roi'] = new Smarty_variable(sprintf("%0.2f",$_smarty_tpl->tpl_vars['roi']->value), null, 0);?>
	<?php $_smarty_tpl->tpl_vars['bar_widith'] = new Smarty_variable(($_smarty_tpl->tpl_vars['new_roi']->value/$_smarty_tpl->tpl_vars['sumofstat']->value)*100, null, 0);?>
	<tr>
		<td class="horizontalChartLabel"><?php echo $_smarty_tpl->tpl_vars['k']->value;?>
</td><td class="barHolder"><div title="<?php echo $_smarty_tpl->tpl_vars['new_roi']->value;?>
" class="horizontalBar" style="width: <?php echo $_smarty_tpl->tpl_vars['bar_widith']->value;?>
%"><span style="color: green">$<?php echo $_smarty_tpl->tpl_vars['new_roi']->value;?>
</span></div></td>
	</tr>
	<?php $_smarty_tpl->tpl_vars['total_bottom_kw_by_roi'] = new Smarty_variable($_smarty_tpl->tpl_vars['total_bottom_kw_by_roi']->value+$_smarty_tpl->tpl_vars['new_roi']->value, null, 0);?>
<?php } ?>
	<tr style="border-top: 1px solid #404040">
		<th style="color: #404040;height: 30px;vertical-align: bottom;padding-bottom: 5px;text-align: left;">Total</th><td style="color: green;height: 30px;vertical-align: bottom;padding-bottom: 5px;text-align: left;">$<?php echo $_smarty_tpl->tpl_vars['total_bottom_kw_by_roi']->value;?>
</td>
	</tr>
</table>

</div>
<div class="rightBottom">
<img class="footerGffLogo" src="images/dark-gff.jpg" />
</div>
</div><!-- ###END CONTENT 7###-->
<div class="content" id="slideNum9">
<div class="left"></div>
<div class="right">
<h2><span class="outline3">Current Keyword Review</span></h2>

	<?php $_smarty_tpl->tpl_vars['keyword_eligible_count'] = new Smarty_variable(0, null, 0);?>
	<?php $_smarty_tpl->tpl_vars['keyword_no_impr_count'] = new Smarty_variable(0, null, 0);?>
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
	<?php } ?>
	<?php $_smarty_tpl->tpl_vars['adgroup_count'] = new Smarty_variable(0, null, 0);?>
	<?php $_smarty_tpl->tpl_vars['lastadgroup'] = new Smarty_variable(" ", null, 0);?>
	<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['keyword']->value['all']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['row']->key;
?>
		<?php if ($_smarty_tpl->tpl_vars['row']->value["Ad group"]!==$_smarty_tpl->tpl_vars['lastadgroup']->value){?>
			<?php $_smarty_tpl->tpl_vars['adgroup_count'] = new Smarty_variable($_smarty_tpl->tpl_vars['adgroup_count']->value+1, null, 0);?>
			<?php $_smarty_tpl->tpl_vars['lastadgroup'] = new Smarty_variable($_smarty_tpl->tpl_vars['row']->value["Ad group"], null, 0);?>
		<?php }?>
	<?php } ?>
	<?php $_smarty_tpl->tpl_vars['keyword_eligble_with_impr'] = new Smarty_variable($_smarty_tpl->tpl_vars['keyword_eligible_count']->value-$_smarty_tpl->tpl_vars['keyword_no_impr_count']->value, null, 0);?>

<div class="statsTable">
<table border="0" cellspacing="0" cellpadding="0"><tbody>
	<tr>
		<th colspan="4">Eligible Keywords</th>
	</tr>
	<tr>
		<th>Total Number of Eligible Keywords</th>
		<th>0 Impression Eligible Keywords</th>
		<th>Keywords with Impressions</th>
		
	</tr>
	<tr>
		<td>
			<?php echo $_smarty_tpl->tpl_vars['keyword_eligible_count']->value;?>

		</td><td>
			<?php echo $_smarty_tpl->tpl_vars['keyword_no_impr_count']->value;?>

		</td><td>
			<?php echo $_smarty_tpl->tpl_vars['keyword_eligble_with_impr']->value;?>

		</td>
	</tr>
</tbody></table>
</div>

	<?php $_smarty_tpl->tpl_vars['keyword_converting_count'] = new Smarty_variable(0, null, 0);?>
	<?php $_smarty_tpl->tpl_vars['keyword_no_conv_with_impr_count'] = new Smarty_variable(0, null, 0);?>
	<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['keyword']->value['all']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['row']->key;
?>
		<?php if ($_smarty_tpl->tpl_vars['row']->value["Conv. (1-per-click)"]>0){?>
			<?php $_smarty_tpl->tpl_vars['keyword_converting_count'] = new Smarty_variable($_smarty_tpl->tpl_vars['keyword_converting_count']->value+1, null, 0);?>
		<?php }?>
	<?php } ?>

<div class="statsTable">
<table border="0" cellspacing="0" cellpadding="0"><tbody>
	<tr>
		<th colspan="4">Converting Keywords</th>
	</tr>
	<tr>
		<th>Converting Keywords</th>
		<th>Non-Converting Keywords with Impressions</th>
		<th>% of Eligible Keywords that Convert</th>
		<th>ROI per Impression</th>
	</tr>
	<tr>
		<td>
			<?php echo $_smarty_tpl->tpl_vars['keyword_converting_count']->value;?>

		</td><td>
			<?php echo $_smarty_tpl->tpl_vars['keyword_eligble_with_impr']->value-$_smarty_tpl->tpl_vars['keyword_converting_count']->value;?>

		</td><td>
			<?php echo sprintf("%0.2f",($_smarty_tpl->tpl_vars['keyword_converting_count']->value/$_smarty_tpl->tpl_vars['keyword_eligible_count']->value)*100);?>
%
		</td><td>
			<?php if ($_smarty_tpl->tpl_vars['totalrev']->value==0){?>
				No Revenue Recorded
			<?php }else{ ?>
				$<?php echo sprintf("%0.2f",($_smarty_tpl->tpl_vars['totalrev']->value-$_smarty_tpl->tpl_vars['totalspend']->value)/$_smarty_tpl->tpl_vars['totalimpr']->value);?>

			<?php }?>
		</td>
	</tr>
</tbody></table>
</div>

<?php $_smarty_tpl->tpl_vars['pivot'] = new Smarty_variable(pivottable($_smarty_tpl->tpl_vars['keyword']->value,"Match type"), null, 0);?>
<div class="longTable">
<table border="0" cellspacing="0" cellpadding="0"><tbody>
	<tr>
		<th colspan="4">Review by Match Type</th>
	</tr>
	<tr>
		<th>Match Type</th>
		<th>Ave. CPA</th>
		<th>Ave. Conversion Rate</th>
		<th>Ave. CTR</th>
		<th>Conversions</th>
	</tr>
	<?php  $_smarty_tpl->tpl_vars['matches'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['matches']->_loop = false;
 $_smarty_tpl->tpl_vars['matchtype'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['pivot']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['matches']->key => $_smarty_tpl->tpl_vars['matches']->value){
$_smarty_tpl->tpl_vars['matches']->_loop = true;
 $_smarty_tpl->tpl_vars['matchtype']->value = $_smarty_tpl->tpl_vars['matches']->key;
?>
		<tr><td><span><?php echo $_smarty_tpl->tpl_vars['matchtype']->value;?>
</span></td>
		<td>
			<?php $_smarty_tpl->tpl_vars['spend'] = new Smarty_variable(sum($_smarty_tpl->tpl_vars['matches']->value,"Cost"), null, 0);?>
			<?php $_smarty_tpl->tpl_vars['conv'] = new Smarty_variable(sum($_smarty_tpl->tpl_vars['matches']->value,"Conv. (1-per-click)"), null, 0);?>
			<?php $_smarty_tpl->tpl_vars['clicks'] = new Smarty_variable(sum($_smarty_tpl->tpl_vars['matches']->value,"Clicks"), null, 0);?>
			<?php $_smarty_tpl->tpl_vars['impr'] = new Smarty_variable(sum($_smarty_tpl->tpl_vars['matches']->value,"Impressions"), null, 0);?>
			<?php if ($_smarty_tpl->tpl_vars['conv']->value!=0){?>
				<p>$<?php echo sprintf("%0.2f",$_smarty_tpl->tpl_vars['spend']->value/$_smarty_tpl->tpl_vars['conv']->value);?>
</p>
			<?php }else{ ?>
				<p>0 conversions: spend of $<?php echo sprintf("%0.2f",$_smarty_tpl->tpl_vars['spend']->value);?>
.</p>
			<?php }?>
		</td>
		<td><p><?php echo sprintf("%0.2f",$_smarty_tpl->tpl_vars['conv']->value/$_smarty_tpl->tpl_vars['clicks']->value*100);?>
%</p></td>
		<td><p><?php echo sprintf("%0.2f",sum($_smarty_tpl->tpl_vars['matches']->value,"Clicks")/$_smarty_tpl->tpl_vars['impr']->value*100);?>
%</p></td>
		<td><p><?php echo sprintf("%0.2f",$_smarty_tpl->tpl_vars['conv']->value);?>
</p></td>
		</tr>
	<?php } ?>
</tbody></table>
</div>
</div>
<div class="rightBottom">
<img class="footerGffLogo" src="images/dark-gff.jpg" />
</div>
</div><!-- ###END CONTENT 7###-->
<div class="content" id="slideNum10">
<div class="left"></div>
<div class="right">
<h2><span class="outline3">Quality Score Review</span></h2>



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

<div class="graph"><!--Start Graph Day of Week-->
<div class="graph1">
	<?php $_smarty_tpl->tpl_vars['graphstat'] = new Smarty_variable("Quality score", null, 0);?>
	<?php $_smarty_tpl->tpl_vars['sumofstat'] = new Smarty_variable(sum($_smarty_tpl->tpl_vars['keyword']->value,$_smarty_tpl->tpl_vars['graphstat']->value), null, 0);?>
	<?php $_smarty_tpl->tpl_vars['highpoint'] = new Smarty_variable(0, null, 0);?>
	<?php  $_smarty_tpl->tpl_vars['qs_score'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['qs_score']->_loop = false;
 $_smarty_tpl->tpl_vars['qs'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['hist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['qs_score']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['qs_score']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['qs_score']->key => $_smarty_tpl->tpl_vars['qs_score']->value){
$_smarty_tpl->tpl_vars['qs_score']->_loop = true;
 $_smarty_tpl->tpl_vars['qs']->value = $_smarty_tpl->tpl_vars['qs_score']->key;
 $_smarty_tpl->tpl_vars['qs_score']->iteration++;
 $_smarty_tpl->tpl_vars['qs_score']->last = $_smarty_tpl->tpl_vars['qs_score']->iteration === $_smarty_tpl->tpl_vars['qs_score']->total;
?>
		<?php if ($_smarty_tpl->tpl_vars['qs_score']->last){?>
			<?php continue 1?>
		<?php }?>
		<?php $_smarty_tpl->tpl_vars['datapoint'] = new Smarty_variable($_smarty_tpl->tpl_vars['qs_score']->value, null, 0);?>
		<?php if ($_smarty_tpl->tpl_vars['datapoint']->value>$_smarty_tpl->tpl_vars['highpoint']->value){?>
			<?php $_smarty_tpl->tpl_vars['highpoint'] = new Smarty_variable($_smarty_tpl->tpl_vars['datapoint']->value, null, 0);?>
		<?php }?>
	<?php } ?>
		<?php  $_smarty_tpl->tpl_vars['topofscale'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['topofscale']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['overmillion']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['topofscale']->key => $_smarty_tpl->tpl_vars['topofscale']->value){
$_smarty_tpl->tpl_vars['topofscale']->_loop = true;
?>
			<?php if ($_smarty_tpl->tpl_vars['highpoint']->value<$_smarty_tpl->tpl_vars['topofscale']->value){?>
				<?php $_smarty_tpl->tpl_vars['sumofstat'] = new Smarty_variable($_smarty_tpl->tpl_vars['topofscale']->value, null, 0);?>
				<?php break 1?>
			<?php }?>
		<?php } ?>
		<?php  $_smarty_tpl->tpl_vars['topofscale'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['topofscale']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['submillion']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['topofscale']->key => $_smarty_tpl->tpl_vars['topofscale']->value){
$_smarty_tpl->tpl_vars['topofscale']->_loop = true;
?>
			<?php if ($_smarty_tpl->tpl_vars['highpoint']->value<$_smarty_tpl->tpl_vars['topofscale']->value){?>
				<?php $_smarty_tpl->tpl_vars['sumofstat'] = new Smarty_variable($_smarty_tpl->tpl_vars['topofscale']->value, null, 0);?>
				<?php break 1?>
			<?php }?>
		<?php } ?>
		<?php  $_smarty_tpl->tpl_vars['topofscale'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['topofscale']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['subhundredthousand']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['topofscale']->key => $_smarty_tpl->tpl_vars['topofscale']->value){
$_smarty_tpl->tpl_vars['topofscale']->_loop = true;
?>
			<?php if ($_smarty_tpl->tpl_vars['highpoint']->value<$_smarty_tpl->tpl_vars['topofscale']->value){?>
				<?php $_smarty_tpl->tpl_vars['sumofstat'] = new Smarty_variable($_smarty_tpl->tpl_vars['topofscale']->value, null, 0);?>
				<?php break 1?>
			<?php }?>
		<?php } ?>
		<?php  $_smarty_tpl->tpl_vars['topofscale'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['topofscale']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['subtenthousand']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['topofscale']->key => $_smarty_tpl->tpl_vars['topofscale']->value){
$_smarty_tpl->tpl_vars['topofscale']->_loop = true;
?>
			<?php if ($_smarty_tpl->tpl_vars['highpoint']->value<$_smarty_tpl->tpl_vars['topofscale']->value){?>
				<?php $_smarty_tpl->tpl_vars['sumofstat'] = new Smarty_variable($_smarty_tpl->tpl_vars['topofscale']->value, null, 0);?>
				<?php break 1?>
			<?php }?>
		<?php } ?>
		<?php  $_smarty_tpl->tpl_vars['topofscale'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['topofscale']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['subthousand']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['topofscale']->key => $_smarty_tpl->tpl_vars['topofscale']->value){
$_smarty_tpl->tpl_vars['topofscale']->_loop = true;
?>
			<?php if ($_smarty_tpl->tpl_vars['highpoint']->value<$_smarty_tpl->tpl_vars['topofscale']->value){?>
				<?php $_smarty_tpl->tpl_vars['sumofstat'] = new Smarty_variable($_smarty_tpl->tpl_vars['topofscale']->value, null, 0);?>
				<?php break 1?>
			<?php }?>
		<?php } ?>
		<?php  $_smarty_tpl->tpl_vars['topofscale'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['topofscale']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['subhundred']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['topofscale']->key => $_smarty_tpl->tpl_vars['topofscale']->value){
$_smarty_tpl->tpl_vars['topofscale']->_loop = true;
?>
			<?php if ($_smarty_tpl->tpl_vars['highpoint']->value<$_smarty_tpl->tpl_vars['topofscale']->value){?>
				<?php $_smarty_tpl->tpl_vars['sumofstat'] = new Smarty_variable($_smarty_tpl->tpl_vars['topofscale']->value, null, 0);?>
				<?php break 1?>
			<?php }?>
		<?php } ?>
<div class="verticalTitle"># of Keywords</div>
<table border="0" cellspacing="0" cellpadding="0">
<?php $_smarty_tpl->tpl_vars['scalenum'] = new Smarty_variable($_smarty_tpl->tpl_vars['sumofstat']->value, null, 0);?>

<tr>
<td style="position: relative;top: 22px;">
	<?php if ($_smarty_tpl->tpl_vars['scalenum']->value==4){?>
	4&ensp;&ensp;
	<?php }else{ ?>
	<?php echo sprintf("%0.0f",$_smarty_tpl->tpl_vars['scalenum']->value);?>

	<?php }?>
</td>
<td style="border: none"></td>
</tr>
<tr>
<td style="position: relative;top: 22px;">
	<?php if ($_smarty_tpl->tpl_vars['scalenum']->value==4){?>
	3&ensp;&ensp;
	<?php }else{ ?>
	<?php echo sprintf("%0.0f",$_smarty_tpl->tpl_vars['scalenum']->value*.75);?>

	<?php }?>
</td>
<td></td>
</tr>
<tr>
<td style="position: relative;top: 22px;">
	<?php if ($_smarty_tpl->tpl_vars['scalenum']->value==4){?>
	2&ensp;&ensp;
	<?php }else{ ?>
	<?php echo sprintf("%0.0f",$_smarty_tpl->tpl_vars['scalenum']->value*.50);?>

	<?php }?>
</td>
<td></td>
</tr>
<tr>
<td style="position: relative;top: 22px;">
	<?php if ($_smarty_tpl->tpl_vars['scalenum']->value==4){?>
	1&ensp;&ensp;
	<?php }else{ ?>
	<?php echo sprintf("%0.0f",$_smarty_tpl->tpl_vars['scalenum']->value*.25);?>

	<?php }?>
</td>
<td></td>
</tr>
<tr>
<td style="position: relative;top: 22px;">
	<?php if ($_smarty_tpl->tpl_vars['scalenum']->value==4){?>
	0&ensp;&ensp;
	<?php }else{ ?>
	0
	<?php }?>
</td>
<td></td>
</tr>

<div class="graphBars">
	<?php  $_smarty_tpl->tpl_vars['qs_score'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['qs_score']->_loop = false;
 $_smarty_tpl->tpl_vars['qs'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['hist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['qs_score']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['qs_score']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['qs_score']->key => $_smarty_tpl->tpl_vars['qs_score']->value){
$_smarty_tpl->tpl_vars['qs_score']->_loop = true;
 $_smarty_tpl->tpl_vars['qs']->value = $_smarty_tpl->tpl_vars['qs_score']->key;
 $_smarty_tpl->tpl_vars['qs_score']->iteration++;
 $_smarty_tpl->tpl_vars['qs_score']->last = $_smarty_tpl->tpl_vars['qs_score']->iteration === $_smarty_tpl->tpl_vars['qs_score']->total;
?>
		<?php if ($_smarty_tpl->tpl_vars['qs_score']->last){?>
			<?php continue 1?>
		<?php }?>
		<?php $_smarty_tpl->tpl_vars['barheight'] = new Smarty_variable($_smarty_tpl->tpl_vars['qs_score']->value/$_smarty_tpl->tpl_vars['sumofstat']->value*100, null, 0);?>
		<div class="bar" title="<?php echo sprintf('%0.0f',$_smarty_tpl->tpl_vars['qs_score']->value);?>
" style="float: left;height: <?php echo sprintf('%0.0f',$_smarty_tpl->tpl_vars['barheight']->value);?>
%;top: <?php echo 100-(sprintf('%0.0f',$_smarty_tpl->tpl_vars['barheight']->value));?>
%;width:8.9%;margin-left: .8%;">
			<?php if ($_smarty_tpl->tpl_vars['barheight']->value>8){?>
				<span class="barLabels" style=""><?php echo sprintf('%0.0f',$_smarty_tpl->tpl_vars['qs_score']->value);?>
</span>
			<?php }?>
		</div>
	<?php } ?>
</div>

</table>
</div>
<div class="graph2">
<table border="0" cellspacing="0" cellpadding="0">
<tr>
<td></td>
<?php  $_smarty_tpl->tpl_vars['qs_score'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['qs_score']->_loop = false;
 $_smarty_tpl->tpl_vars['qs'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['hist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['qs_score']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['qs_score']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['qs_score']->key => $_smarty_tpl->tpl_vars['qs_score']->value){
$_smarty_tpl->tpl_vars['qs_score']->_loop = true;
 $_smarty_tpl->tpl_vars['qs']->value = $_smarty_tpl->tpl_vars['qs_score']->key;
 $_smarty_tpl->tpl_vars['qs_score']->iteration++;
 $_smarty_tpl->tpl_vars['qs_score']->last = $_smarty_tpl->tpl_vars['qs_score']->iteration === $_smarty_tpl->tpl_vars['qs_score']->total;
?>
<?php if ($_smarty_tpl->tpl_vars['qs_score']->last){?>
	<?php continue 1?>
<?php }?>
<td style="width: <?php echo 850/10;?>
px;"><?php echo $_smarty_tpl->tpl_vars['qs']->value;?>
</td>
<?php } ?>
</tr>
</table>
</div>
<div class="horizontalTitle">Quality Score</div>
<?php $_smarty_tpl->tpl_vars['sumofstat'] = new Smarty_variable(100, null, 0);?>
</div><!--End Graph-->





<?php $_smarty_tpl->tpl_vars['pivot'] = new Smarty_variable(pivottable($_smarty_tpl->tpl_vars['keyword']->value,"Quality score"), null, 0);?>

<?php $_smarty_tpl->tpl_vars['graphstat'] = new Smarty_variable("Cost", null, 0);?>

<div class="graph"><!--Start Graph Day of Week-->
<div class="graph1">
	<?php $_smarty_tpl->tpl_vars['sumofstat'] = new Smarty_variable(sum($_smarty_tpl->tpl_vars['keyword']->value,$_smarty_tpl->tpl_vars['graphstat']->value), null, 0);?>
	<?php $_smarty_tpl->tpl_vars['highpoint'] = new Smarty_variable(0, null, 0);?>
	<?php $_smarty_tpl->tpl_vars['qs'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['qs']->step = 1;$_smarty_tpl->tpl_vars['qs']->total = (int)ceil(($_smarty_tpl->tpl_vars['qs']->step > 0 ? 10+1 - (1) : 1-(10)+1)/abs($_smarty_tpl->tpl_vars['qs']->step));
if ($_smarty_tpl->tpl_vars['qs']->total > 0){
for ($_smarty_tpl->tpl_vars['qs']->value = 1, $_smarty_tpl->tpl_vars['qs']->iteration = 1;$_smarty_tpl->tpl_vars['qs']->iteration <= $_smarty_tpl->tpl_vars['qs']->total;$_smarty_tpl->tpl_vars['qs']->value += $_smarty_tpl->tpl_vars['qs']->step, $_smarty_tpl->tpl_vars['qs']->iteration++){
$_smarty_tpl->tpl_vars['qs']->first = $_smarty_tpl->tpl_vars['qs']->iteration == 1;$_smarty_tpl->tpl_vars['qs']->last = $_smarty_tpl->tpl_vars['qs']->iteration == $_smarty_tpl->tpl_vars['qs']->total;?>
		<?php if (!isset($_smarty_tpl->tpl_vars['pivot']->value[$_smarty_tpl->tpl_vars['qs']->value])){?>
		<?php }else{ ?>
			<?php $_smarty_tpl->tpl_vars['data'] = new Smarty_variable($_smarty_tpl->tpl_vars['pivot']->value[$_smarty_tpl->tpl_vars['qs']->value], null, 0);?>
			<?php $_smarty_tpl->tpl_vars['datapoint'] = new Smarty_variable(sum($_smarty_tpl->tpl_vars['data']->value,$_smarty_tpl->tpl_vars['graphstat']->value), null, 0);?>
			<?php if ($_smarty_tpl->tpl_vars['datapoint']->value>$_smarty_tpl->tpl_vars['highpoint']->value){?>
				<?php $_smarty_tpl->tpl_vars['highpoint'] = new Smarty_variable($_smarty_tpl->tpl_vars['datapoint']->value, null, 0);?>
			<?php }?>
		<?php }?>
		<?php $_smarty_tpl->tpl_vars['datapoint'] = new Smarty_variable(sum($_smarty_tpl->tpl_vars['data']->value,$_smarty_tpl->tpl_vars['graphstat']->value), null, 0);?>
	<?php }} ?>
		<?php  $_smarty_tpl->tpl_vars['topofscale'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['topofscale']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['overmillion']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['topofscale']->key => $_smarty_tpl->tpl_vars['topofscale']->value){
$_smarty_tpl->tpl_vars['topofscale']->_loop = true;
?>
			<?php if ($_smarty_tpl->tpl_vars['highpoint']->value<$_smarty_tpl->tpl_vars['topofscale']->value){?>
				<?php $_smarty_tpl->tpl_vars['sumofstat'] = new Smarty_variable($_smarty_tpl->tpl_vars['topofscale']->value, null, 0);?>
				<?php break 1?>
			<?php }?>
		<?php } ?>
		<?php  $_smarty_tpl->tpl_vars['topofscale'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['topofscale']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['submillion']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['topofscale']->key => $_smarty_tpl->tpl_vars['topofscale']->value){
$_smarty_tpl->tpl_vars['topofscale']->_loop = true;
?>
			<?php if ($_smarty_tpl->tpl_vars['highpoint']->value<$_smarty_tpl->tpl_vars['topofscale']->value){?>
				<?php $_smarty_tpl->tpl_vars['sumofstat'] = new Smarty_variable($_smarty_tpl->tpl_vars['topofscale']->value, null, 0);?>
				<?php break 1?>
			<?php }?>
		<?php } ?>
		<?php  $_smarty_tpl->tpl_vars['topofscale'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['topofscale']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['subhundredthousand']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['topofscale']->key => $_smarty_tpl->tpl_vars['topofscale']->value){
$_smarty_tpl->tpl_vars['topofscale']->_loop = true;
?>
			<?php if ($_smarty_tpl->tpl_vars['highpoint']->value<$_smarty_tpl->tpl_vars['topofscale']->value){?>
				<?php $_smarty_tpl->tpl_vars['sumofstat'] = new Smarty_variable($_smarty_tpl->tpl_vars['topofscale']->value, null, 0);?>
				<?php break 1?>
			<?php }?>
		<?php } ?>
		<?php  $_smarty_tpl->tpl_vars['topofscale'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['topofscale']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['subtenthousand']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['topofscale']->key => $_smarty_tpl->tpl_vars['topofscale']->value){
$_smarty_tpl->tpl_vars['topofscale']->_loop = true;
?>
			<?php if ($_smarty_tpl->tpl_vars['highpoint']->value<$_smarty_tpl->tpl_vars['topofscale']->value){?>
				<?php $_smarty_tpl->tpl_vars['sumofstat'] = new Smarty_variable($_smarty_tpl->tpl_vars['topofscale']->value, null, 0);?>
				<?php break 1?>
			<?php }?>
		<?php } ?>
		<?php  $_smarty_tpl->tpl_vars['topofscale'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['topofscale']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['subthousand']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['topofscale']->key => $_smarty_tpl->tpl_vars['topofscale']->value){
$_smarty_tpl->tpl_vars['topofscale']->_loop = true;
?>
			<?php if ($_smarty_tpl->tpl_vars['highpoint']->value<$_smarty_tpl->tpl_vars['topofscale']->value){?>
				<?php $_smarty_tpl->tpl_vars['sumofstat'] = new Smarty_variable($_smarty_tpl->tpl_vars['topofscale']->value, null, 0);?>
				<?php break 1?>
			<?php }?>
		<?php } ?>
		<?php  $_smarty_tpl->tpl_vars['topofscale'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['topofscale']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['subhundred']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['topofscale']->key => $_smarty_tpl->tpl_vars['topofscale']->value){
$_smarty_tpl->tpl_vars['topofscale']->_loop = true;
?>
			<?php if ($_smarty_tpl->tpl_vars['highpoint']->value<$_smarty_tpl->tpl_vars['topofscale']->value){?>
				<?php $_smarty_tpl->tpl_vars['sumofstat'] = new Smarty_variable($_smarty_tpl->tpl_vars['topofscale']->value, null, 0);?>
				<?php break 1?>
			<?php }?>
		<?php } ?>
<div class="verticalTitle"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['graphstat']->value,6,'');?>
</div>
<table border="0" cellspacing="0" cellpadding="0">
<?php $_smarty_tpl->tpl_vars['scalenum'] = new Smarty_variable($_smarty_tpl->tpl_vars['sumofstat']->value, null, 0);?>

<tr>
<td style="position: relative;top: 22px;">
	<?php if ($_smarty_tpl->tpl_vars['scalenum']->value==4){?>
	4&ensp;&ensp;
	<?php }else{ ?>
	<?php echo sprintf("%0.0f",$_smarty_tpl->tpl_vars['scalenum']->value);?>

	<?php }?>
</td>
<td style="border: none"></td>
</tr>
<tr>
<td style="position: relative;top: 22px;">
	<?php if ($_smarty_tpl->tpl_vars['scalenum']->value==4){?>
	3&ensp;&ensp;
	<?php }else{ ?>
	<?php echo sprintf("%0.0f",$_smarty_tpl->tpl_vars['scalenum']->value*.75);?>

	<?php }?>
</td>
<td></td>
</tr>
<tr>
<td style="position: relative;top: 22px;">
	<?php if ($_smarty_tpl->tpl_vars['scalenum']->value==4){?>
	2&ensp;&ensp;
	<?php }else{ ?>
	<?php echo sprintf("%0.0f",$_smarty_tpl->tpl_vars['scalenum']->value*.50);?>

	<?php }?>
</td>
<td></td>
</tr>
<tr>
<td style="position: relative;top: 22px;">
	<?php if ($_smarty_tpl->tpl_vars['scalenum']->value==4){?>
	1&ensp;&ensp;
	<?php }else{ ?>
	<?php echo sprintf("%0.0f",$_smarty_tpl->tpl_vars['scalenum']->value*.25);?>

	<?php }?>
</td>
<td></td>
</tr>
<tr>
<td style="position: relative;top: 22px;">
	<?php if ($_smarty_tpl->tpl_vars['scalenum']->value==4){?>
	0&ensp;&ensp;
	<?php }else{ ?>
	0
	<?php }?>
</td>
<td></td>
</tr>

<div class="graphBars">
	<?php $_smarty_tpl->tpl_vars['qs'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['qs']->step = 1;$_smarty_tpl->tpl_vars['qs']->total = (int)ceil(($_smarty_tpl->tpl_vars['qs']->step > 0 ? 10+1 - (1) : 1-(10)+1)/abs($_smarty_tpl->tpl_vars['qs']->step));
if ($_smarty_tpl->tpl_vars['qs']->total > 0){
for ($_smarty_tpl->tpl_vars['qs']->value = 1, $_smarty_tpl->tpl_vars['qs']->iteration = 1;$_smarty_tpl->tpl_vars['qs']->iteration <= $_smarty_tpl->tpl_vars['qs']->total;$_smarty_tpl->tpl_vars['qs']->value += $_smarty_tpl->tpl_vars['qs']->step, $_smarty_tpl->tpl_vars['qs']->iteration++){
$_smarty_tpl->tpl_vars['qs']->first = $_smarty_tpl->tpl_vars['qs']->iteration == 1;$_smarty_tpl->tpl_vars['qs']->last = $_smarty_tpl->tpl_vars['qs']->iteration == $_smarty_tpl->tpl_vars['qs']->total;?>
		<?php if (isset($_smarty_tpl->tpl_vars['pivot']->value[$_smarty_tpl->tpl_vars['qs']->value])){?>
			<?php $_smarty_tpl->tpl_vars['data'] = new Smarty_variable($_smarty_tpl->tpl_vars['pivot']->value[$_smarty_tpl->tpl_vars['qs']->value], null, 0);?>
		<?php }?>
		<?php $_smarty_tpl->tpl_vars['qs_cost'] = new Smarty_variable(sum($_smarty_tpl->tpl_vars['data']->value,$_smarty_tpl->tpl_vars['graphstat']->value), null, 0);?>
		<?php $_smarty_tpl->tpl_vars['barheight'] = new Smarty_variable(sprintf('%0.0f',$_smarty_tpl->tpl_vars['qs_cost']->value)/$_smarty_tpl->tpl_vars['sumofstat']->value*100, null, 0);?>
		<div class="bar" title="$<?php echo sprintf('%0.2f',$_smarty_tpl->tpl_vars['qs_cost']->value);?>
" style="float: left;height: <?php echo sprintf('%0.0f',$_smarty_tpl->tpl_vars['barheight']->value);?>
%;top: <?php echo 100-(sprintf('%0.0f',$_smarty_tpl->tpl_vars['barheight']->value));?>
%;width:8.9%;margin-left: .8%;">
			<?php if ($_smarty_tpl->tpl_vars['barheight']->value>8){?>
				<span class="barLabels" style="">$<?php echo sprintf('%0.2f',$_smarty_tpl->tpl_vars['qs_cost']->value);?>
</span>
			<?php }?>
		</div>
	<?php }} ?>
</div>

</table>
</div>
<div class="graph2">
<table border="0" cellspacing="0" cellpadding="0">
<tr>
<td></td>
<?php $_smarty_tpl->tpl_vars['qs'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['qs']->step = 1;$_smarty_tpl->tpl_vars['qs']->total = (int)ceil(($_smarty_tpl->tpl_vars['qs']->step > 0 ? 10+1 - (1) : 1-(10)+1)/abs($_smarty_tpl->tpl_vars['qs']->step));
if ($_smarty_tpl->tpl_vars['qs']->total > 0){
for ($_smarty_tpl->tpl_vars['qs']->value = 1, $_smarty_tpl->tpl_vars['qs']->iteration = 1;$_smarty_tpl->tpl_vars['qs']->iteration <= $_smarty_tpl->tpl_vars['qs']->total;$_smarty_tpl->tpl_vars['qs']->value += $_smarty_tpl->tpl_vars['qs']->step, $_smarty_tpl->tpl_vars['qs']->iteration++){
$_smarty_tpl->tpl_vars['qs']->first = $_smarty_tpl->tpl_vars['qs']->iteration == 1;$_smarty_tpl->tpl_vars['qs']->last = $_smarty_tpl->tpl_vars['qs']->iteration == $_smarty_tpl->tpl_vars['qs']->total;?>
<td style="width: <?php echo 850/10;?>
px;"><?php echo $_smarty_tpl->tpl_vars['qs']->value;?>
</td>
<?php }} ?>
</tr>
</table>
</div>
<div class="horizontalTitle">Quality Scores</div>
<?php $_smarty_tpl->tpl_vars['sumofstat'] = new Smarty_variable(100, null, 0);?>
</div><!--End Graph-->




<?php $_smarty_tpl->tpl_vars['sum_numerator'] = new Smarty_variable(0, null, 0);?>
<?php $_smarty_tpl->tpl_vars['sum_denominator'] = new Smarty_variable(0, null, 0);?>
<?php $_smarty_tpl->tpl_vars['weighted_cpa_by_qs'] = new Smarty_variable(array(), null, 0);?>

<?php $_smarty_tpl->tpl_vars['qs'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['qs']->step = 1;$_smarty_tpl->tpl_vars['qs']->total = (int)ceil(($_smarty_tpl->tpl_vars['qs']->step > 0 ? 10+1 - (1) : 1-(10)+1)/abs($_smarty_tpl->tpl_vars['qs']->step));
if ($_smarty_tpl->tpl_vars['qs']->total > 0){
for ($_smarty_tpl->tpl_vars['qs']->value = 1, $_smarty_tpl->tpl_vars['qs']->iteration = 1;$_smarty_tpl->tpl_vars['qs']->iteration <= $_smarty_tpl->tpl_vars['qs']->total;$_smarty_tpl->tpl_vars['qs']->value += $_smarty_tpl->tpl_vars['qs']->step, $_smarty_tpl->tpl_vars['qs']->iteration++){
$_smarty_tpl->tpl_vars['qs']->first = $_smarty_tpl->tpl_vars['qs']->iteration == 1;$_smarty_tpl->tpl_vars['qs']->last = $_smarty_tpl->tpl_vars['qs']->iteration == $_smarty_tpl->tpl_vars['qs']->total;?>
	<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['keyword']->value["all"]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
		<?php if ($_smarty_tpl->tpl_vars['row']->value["Quality score"]==$_smarty_tpl->tpl_vars['qs']->value){?>
			<?php $_smarty_tpl->tpl_vars['sum_numerator'] = new Smarty_variable($_smarty_tpl->tpl_vars['sum_numerator']->value+($_smarty_tpl->tpl_vars['row']->value["Conv. (1-per-click)"]*$_smarty_tpl->tpl_vars['row']->value["Cost / conv. (1-per-click)"]), null, 0);?>
			<?php $_smarty_tpl->tpl_vars['sum_denominator'] = new Smarty_variable($_smarty_tpl->tpl_vars['sum_denominator']->value+$_smarty_tpl->tpl_vars['row']->value["Conv. (1-per-click)"], null, 0);?>
		<?php }?>
	<?php } ?>
	<?php if ($_smarty_tpl->tpl_vars['sum_denominator']->value>0){?>
		<?php $_smarty_tpl->createLocalArrayVariable('weighted_cpa_by_qs', null, 0);
$_smarty_tpl->tpl_vars['weighted_cpa_by_qs']->value[$_smarty_tpl->tpl_vars['qs']->value] = $_smarty_tpl->tpl_vars['sum_numerator']->value/$_smarty_tpl->tpl_vars['sum_denominator']->value;?>
	<?php }else{ ?>
		<?php $_smarty_tpl->createLocalArrayVariable('weighted_cpa_by_qs', null, 0);
$_smarty_tpl->tpl_vars['weighted_cpa_by_qs']->value[$_smarty_tpl->tpl_vars['qs']->value] = 0;?>
	<?php }?>
	<?php $_smarty_tpl->tpl_vars['sum_numerator'] = new Smarty_variable(0, null, 0);?>
	<?php $_smarty_tpl->tpl_vars['sum_denominator'] = new Smarty_variable(0, null, 0);?>
<?php }} ?>

<div class="graph"><!--Start Graph Day of Week-->
<div class="graph1">
	<?php $_smarty_tpl->tpl_vars['highpoint'] = new Smarty_variable(0, null, 0);?>
	<?php $_smarty_tpl->tpl_vars['qs'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['qs']->step = 1;$_smarty_tpl->tpl_vars['qs']->total = (int)ceil(($_smarty_tpl->tpl_vars['qs']->step > 0 ? 10+1 - (1) : 1-(10)+1)/abs($_smarty_tpl->tpl_vars['qs']->step));
if ($_smarty_tpl->tpl_vars['qs']->total > 0){
for ($_smarty_tpl->tpl_vars['qs']->value = 1, $_smarty_tpl->tpl_vars['qs']->iteration = 1;$_smarty_tpl->tpl_vars['qs']->iteration <= $_smarty_tpl->tpl_vars['qs']->total;$_smarty_tpl->tpl_vars['qs']->value += $_smarty_tpl->tpl_vars['qs']->step, $_smarty_tpl->tpl_vars['qs']->iteration++){
$_smarty_tpl->tpl_vars['qs']->first = $_smarty_tpl->tpl_vars['qs']->iteration == 1;$_smarty_tpl->tpl_vars['qs']->last = $_smarty_tpl->tpl_vars['qs']->iteration == $_smarty_tpl->tpl_vars['qs']->total;?>
		<?php $_smarty_tpl->tpl_vars['datapoint'] = new Smarty_variable($_smarty_tpl->tpl_vars['weighted_cpa_by_qs']->value[$_smarty_tpl->tpl_vars['qs']->value], null, 0);?>
		<?php if ($_smarty_tpl->tpl_vars['datapoint']->value>$_smarty_tpl->tpl_vars['highpoint']->value){?>
			<?php $_smarty_tpl->tpl_vars['highpoint'] = new Smarty_variable($_smarty_tpl->tpl_vars['datapoint']->value, null, 0);?>
		<?php }?>
	<?php }} ?>
		<?php  $_smarty_tpl->tpl_vars['topofscale'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['topofscale']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['overmillion']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['topofscale']->key => $_smarty_tpl->tpl_vars['topofscale']->value){
$_smarty_tpl->tpl_vars['topofscale']->_loop = true;
?>
			<?php if ($_smarty_tpl->tpl_vars['highpoint']->value<$_smarty_tpl->tpl_vars['topofscale']->value){?>
				<?php $_smarty_tpl->tpl_vars['sumofstat'] = new Smarty_variable($_smarty_tpl->tpl_vars['topofscale']->value, null, 0);?>
				<?php break 1?>
			<?php }?>
		<?php } ?>
		<?php  $_smarty_tpl->tpl_vars['topofscale'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['topofscale']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['submillion']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['topofscale']->key => $_smarty_tpl->tpl_vars['topofscale']->value){
$_smarty_tpl->tpl_vars['topofscale']->_loop = true;
?>
			<?php if ($_smarty_tpl->tpl_vars['highpoint']->value<$_smarty_tpl->tpl_vars['topofscale']->value){?>
				<?php $_smarty_tpl->tpl_vars['sumofstat'] = new Smarty_variable($_smarty_tpl->tpl_vars['topofscale']->value, null, 0);?>
				<?php break 1?>
			<?php }?>
		<?php } ?>
		<?php  $_smarty_tpl->tpl_vars['topofscale'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['topofscale']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['subhundredthousand']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['topofscale']->key => $_smarty_tpl->tpl_vars['topofscale']->value){
$_smarty_tpl->tpl_vars['topofscale']->_loop = true;
?>
			<?php if ($_smarty_tpl->tpl_vars['highpoint']->value<$_smarty_tpl->tpl_vars['topofscale']->value){?>
				<?php $_smarty_tpl->tpl_vars['sumofstat'] = new Smarty_variable($_smarty_tpl->tpl_vars['topofscale']->value, null, 0);?>
				<?php break 1?>
			<?php }?>
		<?php } ?>
		<?php  $_smarty_tpl->tpl_vars['topofscale'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['topofscale']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['subtenthousand']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['topofscale']->key => $_smarty_tpl->tpl_vars['topofscale']->value){
$_smarty_tpl->tpl_vars['topofscale']->_loop = true;
?>
			<?php if ($_smarty_tpl->tpl_vars['highpoint']->value<$_smarty_tpl->tpl_vars['topofscale']->value){?>
				<?php $_smarty_tpl->tpl_vars['sumofstat'] = new Smarty_variable($_smarty_tpl->tpl_vars['topofscale']->value, null, 0);?>
				<?php break 1?>
			<?php }?>
		<?php } ?>
		<?php  $_smarty_tpl->tpl_vars['topofscale'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['topofscale']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['subthousand']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['topofscale']->key => $_smarty_tpl->tpl_vars['topofscale']->value){
$_smarty_tpl->tpl_vars['topofscale']->_loop = true;
?>
			<?php if ($_smarty_tpl->tpl_vars['highpoint']->value<$_smarty_tpl->tpl_vars['topofscale']->value){?>
				<?php $_smarty_tpl->tpl_vars['sumofstat'] = new Smarty_variable($_smarty_tpl->tpl_vars['topofscale']->value, null, 0);?>
				<?php break 1?>
			<?php }?>
		<?php } ?>
		<?php  $_smarty_tpl->tpl_vars['topofscale'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['topofscale']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['subhundred']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['topofscale']->key => $_smarty_tpl->tpl_vars['topofscale']->value){
$_smarty_tpl->tpl_vars['topofscale']->_loop = true;
?>
			<?php if ($_smarty_tpl->tpl_vars['highpoint']->value<$_smarty_tpl->tpl_vars['topofscale']->value){?>
				<?php $_smarty_tpl->tpl_vars['sumofstat'] = new Smarty_variable($_smarty_tpl->tpl_vars['topofscale']->value, null, 0);?>
				<?php break 1?>
			<?php }?>
		<?php } ?>
<div class="verticalTitle">CPA</div>
<table border="0" cellspacing="0" cellpadding="0">
<?php $_smarty_tpl->tpl_vars['scalenum'] = new Smarty_variable($_smarty_tpl->tpl_vars['sumofstat']->value, null, 0);?>

<tr>
<td style="position: relative;top: 22px;">
	<?php if ($_smarty_tpl->tpl_vars['scalenum']->value==4){?>
	4&ensp;&ensp;
	<?php }else{ ?>
	<?php echo sprintf("%0.0f",$_smarty_tpl->tpl_vars['scalenum']->value);?>

	<?php }?>
</td>
<td style="border: none"></td>
</tr>
<tr>
<td style="position: relative;top: 22px;">
	<?php if ($_smarty_tpl->tpl_vars['scalenum']->value==4){?>
	3&ensp;&ensp;
	<?php }else{ ?>
	<?php echo sprintf("%0.0f",$_smarty_tpl->tpl_vars['scalenum']->value*.75);?>

	<?php }?>
</td>
<td></td>
</tr>
<tr>
<td style="position: relative;top: 22px;">
	<?php if ($_smarty_tpl->tpl_vars['scalenum']->value==4){?>
	2&ensp;&ensp;
	<?php }else{ ?>
	<?php echo sprintf("%0.0f",$_smarty_tpl->tpl_vars['scalenum']->value*.50);?>

	<?php }?>
</td>
<td></td>
</tr>
<tr>
<td style="position: relative;top: 22px;">
	<?php if ($_smarty_tpl->tpl_vars['scalenum']->value==4){?>
	1&ensp;&ensp;
	<?php }else{ ?>
	<?php echo sprintf("%0.0f",$_smarty_tpl->tpl_vars['scalenum']->value*.25);?>

	<?php }?>
</td>
<td></td>
</tr>
<tr>
<td style="position: relative;top: 22px;">
	<?php if ($_smarty_tpl->tpl_vars['scalenum']->value==4){?>
	0&ensp;&ensp;
	<?php }else{ ?>
	0
	<?php }?>
</td>
<td></td>
</tr>

<div class="graphBars">
	<?php $_smarty_tpl->tpl_vars['qs'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['qs']->step = 1;$_smarty_tpl->tpl_vars['qs']->total = (int)ceil(($_smarty_tpl->tpl_vars['qs']->step > 0 ? 10+1 - (1) : 1-(10)+1)/abs($_smarty_tpl->tpl_vars['qs']->step));
if ($_smarty_tpl->tpl_vars['qs']->total > 0){
for ($_smarty_tpl->tpl_vars['qs']->value = 1, $_smarty_tpl->tpl_vars['qs']->iteration = 1;$_smarty_tpl->tpl_vars['qs']->iteration <= $_smarty_tpl->tpl_vars['qs']->total;$_smarty_tpl->tpl_vars['qs']->value += $_smarty_tpl->tpl_vars['qs']->step, $_smarty_tpl->tpl_vars['qs']->iteration++){
$_smarty_tpl->tpl_vars['qs']->first = $_smarty_tpl->tpl_vars['qs']->iteration == 1;$_smarty_tpl->tpl_vars['qs']->last = $_smarty_tpl->tpl_vars['qs']->iteration == $_smarty_tpl->tpl_vars['qs']->total;?>
		<?php $_smarty_tpl->tpl_vars['barheight'] = new Smarty_variable(sprintf('%0.0f',$_smarty_tpl->tpl_vars['weighted_cpa_by_qs']->value[$_smarty_tpl->tpl_vars['qs']->value])/$_smarty_tpl->tpl_vars['sumofstat']->value*100, null, 0);?>
		<div class="bar" title="$<?php echo sprintf('%0.2f',$_smarty_tpl->tpl_vars['qs_cost']->value);?>
" style="float: left;height: <?php echo sprintf('%0.0f',$_smarty_tpl->tpl_vars['barheight']->value);?>
%;top: <?php echo 100-(sprintf('%0.0f',$_smarty_tpl->tpl_vars['barheight']->value));?>
%;width:8.9%;margin-left: .8%;">
			<?php if ($_smarty_tpl->tpl_vars['barheight']->value>8){?>
				<span class="barLabels" style="">$<?php echo sprintf('%0.2f',$_smarty_tpl->tpl_vars['weighted_cpa_by_qs']->value[$_smarty_tpl->tpl_vars['qs']->value]);?>
</span>
			<?php }?>
		</div>
	<?php }} ?>
</div>

</table>
</div>
<div class="graph2">
<table border="0" cellspacing="0" cellpadding="0">
<tr>
<td></td>
<?php $_smarty_tpl->tpl_vars['qs'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['qs']->step = 1;$_smarty_tpl->tpl_vars['qs']->total = (int)ceil(($_smarty_tpl->tpl_vars['qs']->step > 0 ? 10+1 - (1) : 1-(10)+1)/abs($_smarty_tpl->tpl_vars['qs']->step));
if ($_smarty_tpl->tpl_vars['qs']->total > 0){
for ($_smarty_tpl->tpl_vars['qs']->value = 1, $_smarty_tpl->tpl_vars['qs']->iteration = 1;$_smarty_tpl->tpl_vars['qs']->iteration <= $_smarty_tpl->tpl_vars['qs']->total;$_smarty_tpl->tpl_vars['qs']->value += $_smarty_tpl->tpl_vars['qs']->step, $_smarty_tpl->tpl_vars['qs']->iteration++){
$_smarty_tpl->tpl_vars['qs']->first = $_smarty_tpl->tpl_vars['qs']->iteration == 1;$_smarty_tpl->tpl_vars['qs']->last = $_smarty_tpl->tpl_vars['qs']->iteration == $_smarty_tpl->tpl_vars['qs']->total;?>
<td style="width: <?php echo 850/10;?>
px;"><?php echo $_smarty_tpl->tpl_vars['qs']->value;?>
</td>
<?php }} ?>
</tr>
</table>
</div>
<div class="horizontalTitle">Quality Scores</div>
<?php $_smarty_tpl->tpl_vars['sumofstat'] = new Smarty_variable(100, null, 0);?>
</div><!--End Graph-->



</div>
<div class="rightBottom">
<img class="footerGffLogo" src="images/dark-gff.jpg" />
</div>
</div><!-- ###END CONTENT 8###-->
<div class="content" id="slideNum11">
<div class="left"></div>
<div class="right">
<h2>Ad Review</h2>

<?php $_smarty_tpl->tpl_vars['overall_avg_position'] = new Smarty_variable(0, null, 0);?>
<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ads']->value["all"]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
	<?php $_smarty_tpl->tpl_vars['avgpos'] = new Smarty_variable($_smarty_tpl->tpl_vars['row']->value["Avg. position"], null, 0);?>
	<?php $_smarty_tpl->tpl_vars['weighted_impr_score'] = new Smarty_variable(($_smarty_tpl->tpl_vars['row']->value["Impressions"]/$_smarty_tpl->tpl_vars['totalimpr']->value)*100, null, 0);?>
	<?php $_smarty_tpl->tpl_vars['weighted_avg_pos'] = new Smarty_variable($_smarty_tpl->tpl_vars['avgpos']->value*$_smarty_tpl->tpl_vars['weighted_impr_score']->value, null, 0);?>
	<?php $_smarty_tpl->tpl_vars['overall_avg_position'] = new Smarty_variable($_smarty_tpl->tpl_vars['overall_avg_position']->value+$_smarty_tpl->tpl_vars['weighted_avg_pos']->value, null, 0);?>
<?php } ?>


<div class="statsTable">

<table border="0" cellspacing="0" cellpadding="0">
	<tr>
		<th colspan="4">Ad Review</th>
	</tr>
	<tr>
		<th>Average # of Ads per Adgroup</th>
		<th>Average Ad Position</th>
		<th>Average Adgroup CTR</th>
		<th>Average Campaign CTR</th>
	</tr>
	<tr>
		<td><?php echo sprintf("%0.2f",count($_smarty_tpl->tpl_vars['ads']->value["all"])/($_smarty_tpl->tpl_vars['adgroup_count']->value+1));?>
</td>
		<td><?php echo sprintf("%0.1f",$_smarty_tpl->tpl_vars['overall_avg_position']->value/100);?>
</td>
		<td>needs to be calculated</td>
		<td>needs to be calculated</td>
	</tr>
</table>
</div> 



</div>
<div class="rightBottom">
<img class="footerGffLogo" src="images/dark-gff.jpg" />
</div>
</div><!-- ###END CONTENT 9###-->
<div class="content" id="slideNum12">
<div class="left"></div>
<div class="right">
<span style="display: none;" class="outline2">Display</span>
<h2><span class="outline3">Google Display Network Review</span></h2>
<?php if (($_smarty_tpl->tpl_vars['auto_placements_spend']->value+$_smarty_tpl->tpl_vars['man_placements_spend']->value)>0){?>
<div class="statsTable">
<table border="0" cellspacing="0" cellpadding="0"><tbody>
	<?php $_smarty_tpl->tpl_vars['arr'] = new Smarty_variable(array(), null, 0);?>
	<?php $_smarty_tpl->createLocalArrayVariable('arr', null, 0);
$_smarty_tpl->tpl_vars['arr']->value['man_placements'] = "Managed Placements";?>
	<?php $_smarty_tpl->createLocalArrayVariable('arr', null, 0);
$_smarty_tpl->tpl_vars['arr']->value['auto_placements'] = "Automatic Placements";?>
	<?php  $_smarty_tpl->tpl_vars['h'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['h']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['arr']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['h']->key => $_smarty_tpl->tpl_vars['h']->value){
$_smarty_tpl->tpl_vars['h']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['h']->key;
?>
		<?php if ($_smarty_tpl->tpl_vars[($_smarty_tpl->tpl_vars['k']->value).'_impr']->value==0){?>
			<tr><th>No <?php echo $_smarty_tpl->tpl_vars['k']->value;?>
</th></tr>
			<?php continue 1?>
		<?php }?>
	<tr><th>
		<?php if ($_smarty_tpl->tpl_vars['h']->value=="Managed Placements"){?>Managed Placements<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['h']->value;?>
<?php }?>
		</th></tr>
		<tr><th>
			Spend
		</th><th>
			Impressions
		</th><th>
			Clicks
		</th><th>
			CTR
		</th><th>
			CPA
		</th><th>
			ROAS
		</th><th>
			PPI
		</th></tr>
		<tr><td>
			<!--Spend-->
			$<?php echo sprintf("%0.2f",$_smarty_tpl->tpl_vars[($_smarty_tpl->tpl_vars['k']->value).'_spend']->value);?>

		</td><td>
			<!--Impressions-->
			<?php echo sprintf("%0.0f",$_smarty_tpl->tpl_vars[($_smarty_tpl->tpl_vars['k']->value).'_impr']->value);?>

		</td><td>
			<!--Clicks-->
			<?php echo sprintf("%0.0f",$_smarty_tpl->tpl_vars[($_smarty_tpl->tpl_vars['k']->value).'_clicks']->value);?>

		</td><td>
			<!--CTR-->
			<?php echo sprintf("%0.2f",($_smarty_tpl->tpl_vars[($_smarty_tpl->tpl_vars['k']->value).'_clicks']->value/$_smarty_tpl->tpl_vars[($_smarty_tpl->tpl_vars['k']->value).'_impr']->value)*100);?>
%
		</td><td>
			<!--CPA-->
			<?php if ($_smarty_tpl->tpl_vars[($_smarty_tpl->tpl_vars['k']->value).'_conv']->value==0){?>
				Conv. = 0
			<?php }else{ ?>
				$<?php echo sprintf("%0.2f",($_smarty_tpl->tpl_vars[($_smarty_tpl->tpl_vars['k']->value).'_spend']->value/$_smarty_tpl->tpl_vars[($_smarty_tpl->tpl_vars['k']->value).'_conv']->value)*100);?>

			<?php }?>
		</td><td>
			<!--ROAS-->
			<?php if ($_smarty_tpl->tpl_vars[($_smarty_tpl->tpl_vars['k']->value).'_spend']->value==0){?>
				Spend = 0
			<?php }else{ ?>
				<?php echo sprintf("%0.0f",($_smarty_tpl->tpl_vars[($_smarty_tpl->tpl_vars['k']->value).'_rev']->value/$_smarty_tpl->tpl_vars[($_smarty_tpl->tpl_vars['k']->value).'_spend']->value)*100);?>

			<?php }?>
		</td><td>
			<!--PPI-->
			<?php echo sprintf("%0.2f",($_smarty_tpl->tpl_vars[($_smarty_tpl->tpl_vars['k']->value).'_rev']->value/$_smarty_tpl->tpl_vars[($_smarty_tpl->tpl_vars['k']->value).'_impr']->value)*100);?>

		</td></tr>
	<?php } ?>
</tbody></table>
</div>
<?php }else{ ?>
	<h3 style="margin-left: 40px;margin-top: 40px;">No display network traffic</h3>
<?php }?>
</div>
<div class="rightBottom">
<img class="footerGffLogo" src="images/dark-gff.jpg" />
</div>
</div><!-- ###END CONTENT 10###-->
<div class="content" id="slideNum13">
<div class="left"></div>
<div class="right">
<h2><span class="outline1">Summary of Key Takeaways</span></h2>

<h3>The Good</h3>
<ul>
	<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit</li>
	<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit</li>
	<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit</li>
	<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit</li>
	<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit</li>
	<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit</li>
</ul>

<h3>Could be better</h3>
<ul>
	<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit</li>
	<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit</li>
	<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit</li>
	<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit</li>
	<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit</li>
	<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit</li>
</ul>

</div>
<div class="rightBottom">
<img class="footerGffLogo" src="images/dark-gff.jpg" />
</div>
</div><!-- ###END CONTENT 11###-->
<div class="content" id="slideNum14">
<div class="left"></div>
<div class="right">
<h2><span class="outline1">Scope of Solution</span></h2>

<h3>90 Day Plan of Attack</h3>

<table class="poa">
	<tr>
		<th>0 - 30 days</th>
		<th>30 - 60 days</th>
		<th>60 - 90 days</th>
	</tr>
	<tr>
		<td>
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eu mauris elit, ac placerat nulla. Duis et lorem sit amet nunc fermentum placerat. Ut et rhoncus nulla.
		</td>
		<td>
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eu mauris elit, ac placerat nulla. Duis et lorem sit amet nunc fermentum placerat. Ut et rhoncus nulla.
		</td>
		<td>
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eu mauris elit, ac placerat nulla. Duis et lorem sit amet nunc fermentum placerat. Ut et rhoncus nulla.
		</td>
	</tr>
</table>


</div>
<div class="rightBottom">
<img class="footerGffLogo" src="images/dark-gff.jpg" />
</div>
</div><!-- ###END CONTENT 12###-->
<div class="content" id="slideNum15">
<div class="left"></div>
<div class="right">
<h2><span class="outline1">Proposed Package</span></h2>

<ul>
	<li>Nam vel dui at neque vehicula ultricies. </li>
	<li>Nam vel dui at neque vehicula ultricies. </li>
	<li>Nam vel dui at neque vehicula ultricies. </li>
	<li>Nam vel dui at neque vehicula ultricies. </li>
	<li>Nam vel dui at neque vehicula ultricies. </li>
	<li>Nam vel dui at neque vehicula ultricies. </li>
	<li>Nam vel dui at neque vehicula ultricies. </li>
	<li>Nam vel dui at neque vehicula ultricies. </li>
	<li>Nam vel dui at neque vehicula ultricies. </li>
</ul>

</div>
<div class="rightBottom">
<img class="footerGffLogo" src="images/dark-gff.jpg" />
</div>
</div><!-- ###END CONTENT 13###-->
<div class="content" id="slideNum16">
<div class="left"></div>
<div class="right">
<h2>The End</h2>


</div>
<div class="rightBottom">
<img class="footerGffLogo" src="images/dark-gff.jpg" />
</div>
</div><!-- ###END CONTENT 14###-->
<?php if ($_smarty_tpl->tpl_vars['presentation_mode']->value=='on'){?>
</div><!--overlay-->
<?php }?>
</body>
</html>
<?php }} ?>