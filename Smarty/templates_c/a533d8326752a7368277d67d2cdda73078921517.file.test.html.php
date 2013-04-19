<?php /* Smarty version Smarty-3.1.13, created on 2013-04-02 15:39:07
         compiled from "./chroot/report/test.html" */ ?>
<?php /*%%SmartyHeaderCode:1161388233515b4ffb868136-95591935%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a533d8326752a7368277d67d2cdda73078921517' => 
    array (
      0 => './chroot/report/test.html',
      1 => 1362068134,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1161388233515b4ffb868136-95591935',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'fromDate' => 0,
    'toDate' => 0,
    'clientName' => 0,
    'totalSpend' => 0,
    'Clicks' => 0,
    'Imp' => 0,
    'ctr' => 0,
    'cpc' => 0,
    'conv' => 0,
    'convRate' => 0,
    'highNum' => 0,
    'bar1' => 0,
    'bar2' => 0,
    'bar3' => 0,
    'bar4' => 0,
    'bar5' => 0,
    'bar6' => 0,
    'bar7' => 0,
    'bar8' => 0,
    'bar9' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_515b4ffb9a8353_85942250',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_515b4ffb9a8353_85942250')) {function content_515b4ffb9a8353_85942250($_smarty_tpl) {?><html>
<head>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>
$('document').ready(function() {
	$('#top').click(function(){
		$("html, body").animate({ scrollTop: 0 }, 600);
			return false;
    });
});
</script>
<link rel="stylesheet" href="css/gff.css"/ media="screen">
</head>
<body>
<div id="top">
<span>Top</span>
</div>
<div class="content">
<header>

</header>

<div class="logo"><img src="" height="75" width="225"/></div>

<h1 class="title">90 Day PPC Audit</h1>

<?php $_smarty_tpl->tpl_vars['fromDate'] = new Smarty_variable('2/20/13', null, 0);?>
<?php $_smarty_tpl->tpl_vars['toDate'] = new Smarty_variable('5/20/13', null, 0);?>
<span class="dates"><?php echo $_smarty_tpl->tpl_vars['fromDate']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['toDate']->value;?>
</span>

<footer>
<img class="gffLogo" src="http://css.getfoundfirstseo.com/large-white-gff.png" />
</footer>

</div><!-- ###END CONTENT 1###-->
<div class="content">
<div class="left"></div>
<div class="right">

<h2>Table of Contents</h2>
<div class="contentsList">
<ul>
<li>Acount Summary</li>
<li>Search</li>
<ul>
<li> Campaign Dimension/Sementation</li>
<li>Current Keyword review</li>
</ul>
<li>Scope of Solution</li>
<li>Proposal</li>
</ul>
</div>
</div>
<div class="rightBottom">
<img class="footerGffLogo" src="http://css.getfoundfirstseo.com/dark-gff.jpg" />
</div>
</div><!-- ###END CONTENT 2###-->
<div class="content">
<div class="left"></div>
<div class="right">
<?php $_smarty_tpl->tpl_vars['clientName'] = new Smarty_variable('New_client', null, 0);?>
<h2><?php echo $_smarty_tpl->tpl_vars['clientName']->value;?>
 Account Summary</h2>
<?php $_smarty_tpl->tpl_vars['totalSpend'] = new Smarty_variable(13492.90, null, 0);?>
<?php $_smarty_tpl->tpl_vars['Clicks'] = new Smarty_variable(45067, null, 0);?>
<?php $_smarty_tpl->tpl_vars['Imp'] = new Smarty_variable(134256, null, 0);?>
<?php $_smarty_tpl->tpl_vars['ctr'] = new Smarty_variable(2.13, null, 0);?>
<?php $_smarty_tpl->tpl_vars['cpc'] = new Smarty_variable(5.56, null, 0);?>
<?php $_smarty_tpl->tpl_vars['conv'] = new Smarty_variable(5671, null, 0);?>
<?php $_smarty_tpl->tpl_vars['convRate'] = new Smarty_variable(3.65, null, 0);?>
<div class="statsTable">
<h3>Account Overview</h3>
<table>
<tr>
<th>Total Spend</th>
<th>Clicks</th>
<th>Impressions</th>
<th>CTR</th>
<th>Cost per Click</th>
<th>Conversions</th>
<th>Conversion Rate</th>
</tr>
<tr>
<td><?php echo $_smarty_tpl->tpl_vars['totalSpend']->value;?>
</td>
<td><?php echo $_smarty_tpl->tpl_vars['Clicks']->value;?>
</td>
<td><?php echo $_smarty_tpl->tpl_vars['Imp']->value;?>
</td>
<td><?php echo $_smarty_tpl->tpl_vars['ctr']->value;?>
%</td>
<td>$<?php echo $_smarty_tpl->tpl_vars['cpc']->value;?>
</td>
<td><?php echo $_smarty_tpl->tpl_vars['conv']->value;?>
</td>
<td><?php echo $_smarty_tpl->tpl_vars['convRate']->value;?>
%</td>
</tr>
</table>

</div>

</div>
<div class="rightBottom">
<img class="footerGffLogo" src="http://css.getfoundfirstseo.com/dark-gff.jpg" />
</div>
</div><!-- ###END CONTENT 3###-->
<div class="content">
<div class="left"></div>
<div class="right">

<h2>Awesome Graph</h2>

<?php $_smarty_tpl->tpl_vars['highNum'] = new Smarty_variable(5, null, 0);?>

<div class="graph"><!--Start Graph-->
<div class="graph1">
<table>
<tr>

</tr>
<tr>
<td><?php echo $_smarty_tpl->tpl_vars['highNum']->value;?>
</td>
<td></td>
</tr>
<tr>
<td><?php echo $_smarty_tpl->tpl_vars['highNum']->value*.75;?>
</td>
<td></td>
</tr>
<tr>
<td><?php echo $_smarty_tpl->tpl_vars['highNum']->value*.5;?>
</td>
<td></td>
</tr>
<tr>
<td><?php echo $_smarty_tpl->tpl_vars['highNum']->value*.25;?>
</td>
<td></td>
</tr>
<tr>
<td>0</td>
<td></td>
</tr>

<?php $_smarty_tpl->tpl_vars['bar1'] = new Smarty_variable(60, null, 0);?>
<?php $_smarty_tpl->tpl_vars['bar2'] = new Smarty_variable(70, null, 0);?>
<?php $_smarty_tpl->tpl_vars['bar3'] = new Smarty_variable(10, null, 0);?>
<?php $_smarty_tpl->tpl_vars['bar4'] = new Smarty_variable(40, null, 0);?>
<?php $_smarty_tpl->tpl_vars['bar5'] = new Smarty_variable(50, null, 0);?>
<?php $_smarty_tpl->tpl_vars['bar6'] = new Smarty_variable(60, null, 0);?>
<?php $_smarty_tpl->tpl_vars['bar7'] = new Smarty_variable(90, null, 0);?>
<?php $_smarty_tpl->tpl_vars['bar8'] = new Smarty_variable(40, null, 0);?>
<?php $_smarty_tpl->tpl_vars['bar9'] = new Smarty_variable(60, null, 0);?>

<div class="graphBars">
<div class="bar" style="height: <?php echo $_smarty_tpl->tpl_vars['bar1']->value;?>
%;top: <?php echo 100-$_smarty_tpl->tpl_vars['bar1']->value;?>
%;"></div>
<div class="bar" style="height: <?php echo $_smarty_tpl->tpl_vars['bar2']->value;?>
%;top: <?php echo 100-$_smarty_tpl->tpl_vars['bar2']->value;?>
%;"></div>
<div class="bar" style="height: <?php echo $_smarty_tpl->tpl_vars['bar3']->value;?>
%;top: <?php echo 100-$_smarty_tpl->tpl_vars['bar3']->value;?>
%;"></div>
<div class="bar" style="height: <?php echo $_smarty_tpl->tpl_vars['bar4']->value;?>
%;top: <?php echo 100-$_smarty_tpl->tpl_vars['bar4']->value;?>
%;"></div>
<div class="bar" style="height: <?php echo $_smarty_tpl->tpl_vars['bar5']->value;?>
%;top: <?php echo 100-$_smarty_tpl->tpl_vars['bar5']->value;?>
%;"></div>
<div class="bar" style="height: <?php echo $_smarty_tpl->tpl_vars['bar6']->value;?>
%;top: <?php echo 100-$_smarty_tpl->tpl_vars['bar6']->value;?>
%;"></div>
<div class="bar" style="height: <?php echo $_smarty_tpl->tpl_vars['bar7']->value;?>
%;top: <?php echo 100-$_smarty_tpl->tpl_vars['bar7']->value;?>
%;"></div>
<div class="bar" style="height: <?php echo $_smarty_tpl->tpl_vars['bar8']->value;?>
%;top: <?php echo 100-$_smarty_tpl->tpl_vars['bar8']->value;?>
%;"></div>
<div class="bar" style="height: <?php echo $_smarty_tpl->tpl_vars['bar9']->value;?>
%;top: <?php echo 100-$_smarty_tpl->tpl_vars['bar9']->value;?>
%;"></div>
</div>

</table>
</div>
<div class="graph2">
<table>
<tr>
<td></td>
<td>1</td>
<td>2</td>
<td>3</td>
<td>4</td>
<td>5</td>
<td>6</td>
<td>7</td>
<td>8</td>
<td>9</td>
</tr>
</table>
</div>
</div><!--End Graph-->

</div>
<div class="rightBottom">
<img class="footerGffLogo" src="http://css.getfoundfirstseo.com/dark-gff.jpg" />
</div>
</div><!-- ###END CONTENT 4###-->
<div class="content">
<div class="left"></div>
<div class="right">
<h2>Title</h2>

</div>
<div class="rightBottom">
<img class="footerGffLogo" src="http://css.getfoundfirstseo.com/dark-gff.jpg" />
</div>
</div><!-- ###END CONTENT 5###-->
</body>
</html><?php }} ?>