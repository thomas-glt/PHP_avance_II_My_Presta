<?php /* Smarty version Smarty-3.1.19, created on 2016-07-18 16:02:38
         compiled from "/Users/thomas/Desktop/LOCAL-HOST/PHP_avance_II_My_Presta/prestashop_1.6.1.6_fr/prestashop/modules/blockfacebook/blockfacebook.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1243410705578ce17ed61852-62288673%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b5716e6eb600f4f258fd002269b2da41526bc27c' => 
    array (
      0 => '/Users/thomas/Desktop/LOCAL-HOST/PHP_avance_II_My_Presta/prestashop_1.6.1.6_fr/prestashop/modules/blockfacebook/blockfacebook.tpl',
      1 => 1465995676,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1243410705578ce17ed61852-62288673',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'facebookurl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_578ce17ed6d314_49254706',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_578ce17ed6d314_49254706')) {function content_578ce17ed6d314_49254706($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['facebookurl']->value!='') {?>
<div id="fb-root"></div>
<div id="facebook_block" class="col-xs-4">
	<h4 ><?php echo smartyTranslate(array('s'=>'Follow us on Facebook','mod'=>'blockfacebook'),$_smarty_tpl);?>
</h4>
	<div class="facebook-fanbox">
		<div class="fb-like-box" data-href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['facebookurl']->value, ENT_QUOTES, 'UTF-8', true);?>
" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false">
		</div>
	</div>
</div>
<?php }?>
<?php }} ?>
