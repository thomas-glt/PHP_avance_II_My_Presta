<?php /* Smarty version Smarty-3.1.19, created on 2016-07-18 14:48:39
         compiled from "/Users/thomas/Desktop/LOCAL-HOST/PHP_avance_II_My_Presta/prestashop_1.6.1.6_fr/prestashop/themes/default-bootstrap/modules/loyalty/views/templates/hook/product.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2076915721578cd0271af8d8-41469440%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c9ae22c6f1378df6bbc21180757f0975f287f75f' => 
    array (
      0 => '/Users/thomas/Desktop/LOCAL-HOST/PHP_avance_II_My_Presta/prestashop_1.6.1.6_fr/prestashop/themes/default-bootstrap/modules/loyalty/views/templates/hook/product.tpl',
      1 => 1465995674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2076915721578cd0271af8d8-41469440',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'points' => 0,
    'total_points' => 0,
    'voucher' => 0,
    'no_pts_discounted' => 0,
    'point_rate' => 0,
    'point_value' => 0,
    'points_in_cart' => 0,
    'none_award' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_578cd0271ee9b6_05171323',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_578cd0271ee9b6_05171323')) {function content_578cd0271ee9b6_05171323($_smarty_tpl) {?>
<p id="loyalty" class="align_justify">
	<?php if ($_smarty_tpl->tpl_vars['points']->value) {?>
		<?php echo smartyTranslate(array('s'=>'By buying this product you can collect up to','mod'=>'loyalty'),$_smarty_tpl);?>
 <b><span id="loyalty_points"><?php echo $_smarty_tpl->tpl_vars['points']->value;?>
</span> 
		<?php if ($_smarty_tpl->tpl_vars['points']->value>1) {?><?php echo smartyTranslate(array('s'=>'loyalty points','mod'=>'loyalty'),$_smarty_tpl);?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'loyalty point','mod'=>'loyalty'),$_smarty_tpl);?>
<?php }?></b>. 
		<?php echo smartyTranslate(array('s'=>'Your cart will total','mod'=>'loyalty'),$_smarty_tpl);?>
 <b><span id="total_loyalty_points"><?php echo $_smarty_tpl->tpl_vars['total_points']->value;?>
</span> 
		<?php if ($_smarty_tpl->tpl_vars['total_points']->value>1) {?><?php echo smartyTranslate(array('s'=>'loyalty points','mod'=>'loyalty'),$_smarty_tpl);?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'loyalty point','mod'=>'loyalty'),$_smarty_tpl);?>
<?php }?></b> <?php echo smartyTranslate(array('s'=>'that can be converted into a voucher of','mod'=>'loyalty'),$_smarty_tpl);?>
 
		<span id="loyalty_price"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['voucher']->value),$_smarty_tpl);?>
</span>.
	<?php } else { ?>
		<?php if (isset($_smarty_tpl->tpl_vars['no_pts_discounted']->value)&&$_smarty_tpl->tpl_vars['no_pts_discounted']->value==1) {?>
			<?php echo smartyTranslate(array('s'=>'No reward points for this product because there\'s already a discount.','mod'=>'loyalty'),$_smarty_tpl);?>

		<?php } else { ?>
			<?php echo smartyTranslate(array('s'=>'No reward points for this product.','mod'=>'loyalty'),$_smarty_tpl);?>

		<?php }?>
	<?php }?>
</p>
<br class="clear" />
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('point_rate'=>$_smarty_tpl->tpl_vars['point_rate']->value),$_smarty_tpl);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('point_value'=>$_smarty_tpl->tpl_vars['point_value']->value),$_smarty_tpl);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('points_in_cart'=>$_smarty_tpl->tpl_vars['points_in_cart']->value),$_smarty_tpl);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('none_award'=>$_smarty_tpl->tpl_vars['none_award']->value),$_smarty_tpl);?>


<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'loyalty_willcollect')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'loyalty_willcollect'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'By buying this product you can collect up to','mod'=>'loyalty','js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'loyalty_willcollect'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'loyalty_already')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'loyalty_already'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'No reward points for this product because there\'s already a discount.','mod'=>'loyalty','js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'loyalty_already'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'loyalty_nopoints')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'loyalty_nopoints'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'No reward points for this product.','mod'=>'loyalty','js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'loyalty_nopoints'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'loyalty_points')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'loyalty_points'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'loyalty points','mod'=>'loyalty','js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'loyalty_points'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'loyalty_point')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'loyalty_point'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'loyalty point','mod'=>'loyalty','js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'loyalty_point'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'loyalty_total')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'loyalty_total'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Your cart will total','mod'=>'loyalty','js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'loyalty_total'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'loyalty_converted')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'loyalty_converted'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'that can be converted into a voucher of','mod'=>'loyalty','js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'loyalty_converted'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>