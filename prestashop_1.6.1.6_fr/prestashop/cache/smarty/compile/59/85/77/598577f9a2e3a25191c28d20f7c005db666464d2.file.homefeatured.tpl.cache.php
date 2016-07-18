<?php /* Smarty version Smarty-3.1.19, created on 2016-07-18 16:02:39
         compiled from "/Users/thomas/Desktop/LOCAL-HOST/PHP_avance_II_My_Presta/prestashop_1.6.1.6_fr/prestashop/themes/default-bootstrap/modules/homefeatured/homefeatured.tpl" */ ?>
<?php /*%%SmartyHeaderCode:965306284578ce17f2aa6a5-61703100%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '598577f9a2e3a25191c28d20f7c005db666464d2' => 
    array (
      0 => '/Users/thomas/Desktop/LOCAL-HOST/PHP_avance_II_My_Presta/prestashop_1.6.1.6_fr/prestashop/themes/default-bootstrap/modules/homefeatured/homefeatured.tpl',
      1 => 1465995674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '965306284578ce17f2aa6a5-61703100',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_578ce17f2b7022_25539050',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_578ce17f2b7022_25539050')) {function content_578ce17f2b7022_25539050($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['products']->value)&&$_smarty_tpl->tpl_vars['products']->value) {?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('class'=>'homefeatured tab-pane','id'=>'homefeatured'), 0);?>

<?php } else { ?>
<ul id="homefeatured" class="homefeatured tab-pane">
	<li class="alert alert-info"><?php echo smartyTranslate(array('s'=>'No featured products at this time.','mod'=>'homefeatured'),$_smarty_tpl);?>
</li>
</ul>
<?php }?><?php }} ?>
