<?php /* Smarty version Smarty-3.1.19, created on 2016-07-18 14:48:37
         compiled from "/Users/thomas/Desktop/LOCAL-HOST/PHP_avance_II_My_Presta/prestashop_1.6.1.6_fr/prestashop/admin/themes/default/template/controllers/cart_rules/product_rule_itemlist.tpl" */ ?>
<?php /*%%SmartyHeaderCode:848512233578cd0252bc525-13620696%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7ccf830f70ae73a59aaaa1bd4aa1229577ffa4f0' => 
    array (
      0 => '/Users/thomas/Desktop/LOCAL-HOST/PHP_avance_II_My_Presta/prestashop_1.6.1.6_fr/prestashop/admin/themes/default/template/controllers/cart_rules/product_rule_itemlist.tpl',
      1 => 1465995674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '848512233578cd0252bc525-13620696',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_rule_group_id' => 0,
    'product_rule_id' => 0,
    'product_rule_itemlist' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_578cd0252ffb41_67178096',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_578cd0252ffb41_67178096')) {function content_578cd0252ffb41_67178096($_smarty_tpl) {?><div class="col-lg-12 bootstrap">
	<div class="col-lg-6">
		<?php echo smartyTranslate(array('s'=>'Unselected'),$_smarty_tpl);?>

		<select multiple size="10" id="product_rule_select_<?php echo intval($_smarty_tpl->tpl_vars['product_rule_group_id']->value);?>
_<?php echo intval($_smarty_tpl->tpl_vars['product_rule_id']->value);?>
_1">
			<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product_rule_itemlist']->value['unselected']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
				<option value="<?php echo intval($_smarty_tpl->tpl_vars['item']->value['id']);?>
" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
">&nbsp;<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</option>
			<?php } ?>
		</select>
		<div class="clearfix">&nbsp;</div>
		<a id="product_rule_select_<?php echo intval($_smarty_tpl->tpl_vars['product_rule_group_id']->value);?>
_<?php echo intval($_smarty_tpl->tpl_vars['product_rule_id']->value);?>
_add" class="btn btn-default btn-block" >
			<?php echo smartyTranslate(array('s'=>'Add'),$_smarty_tpl);?>

			<i class="icon-arrow-right"></i>
		</a>
	</div>
	<div class="col-lg-6">
		<?php echo smartyTranslate(array('s'=>'Selected'),$_smarty_tpl);?>

		<select multiple size="10" name="product_rule_select_<?php echo intval($_smarty_tpl->tpl_vars['product_rule_group_id']->value);?>
_<?php echo intval($_smarty_tpl->tpl_vars['product_rule_id']->value);?>
[]" id="product_rule_select_<?php echo intval($_smarty_tpl->tpl_vars['product_rule_group_id']->value);?>
_<?php echo intval($_smarty_tpl->tpl_vars['product_rule_id']->value);?>
_2" class="product_rule_toselect" >
			<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product_rule_itemlist']->value['selected']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
				<option value="<?php echo intval($_smarty_tpl->tpl_vars['item']->value['id']);?>
" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
">&nbsp;<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</option>
			<?php } ?>
		</select>
		<div class="clearfix">&nbsp;</div>
		<a id="product_rule_select_<?php echo $_smarty_tpl->tpl_vars['product_rule_group_id']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['product_rule_id']->value;?>
_remove" class="btn btn-default btn-block" >
			<i class="icon-arrow-left"></i>
			<?php echo smartyTranslate(array('s'=>'Remove'),$_smarty_tpl);?>

		</a>
	</div>
</div>
			
<script type="text/javascript">
	$('#product_rule_select_<?php echo intval($_smarty_tpl->tpl_vars['product_rule_group_id']->value);?>
_<?php echo intval($_smarty_tpl->tpl_vars['product_rule_id']->value);?>
_remove').click(function() { removeCartRuleOption(this); updateProductRuleShortDescription(this); });
	$('#product_rule_select_<?php echo intval($_smarty_tpl->tpl_vars['product_rule_group_id']->value);?>
_<?php echo intval($_smarty_tpl->tpl_vars['product_rule_id']->value);?>
_add').click(function() { addCartRuleOption(this); updateProductRuleShortDescription(this); });
	$(document).ready(function() { updateProductRuleShortDescription($('#product_rule_select_<?php echo intval($_smarty_tpl->tpl_vars['product_rule_group_id']->value);?>
_<?php echo intval($_smarty_tpl->tpl_vars['product_rule_id']->value);?>
_add')); });
</script>
<?php }} ?>
