<?php /*%%SmartyHeaderCode:1191105672578ce17f420711-48465655%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ee9cafaa0dd28ea1e5e29d65081d72dc72ae8c4d' => 
    array (
      0 => '/Users/thomas/Desktop/LOCAL-HOST/PHP_avance_II_My_Presta/prestashop_1.6.1.6_fr/prestashop/themes/default-bootstrap/modules/blockcms/blockcms.tpl',
      1 => 1465995674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1191105672578ce17f420711-48465655',
  'variables' => 
  array (
    'block' => 0,
    'cms_titles' => 0,
    'cms_key' => 0,
    'cms_title' => 0,
    'cms_page' => 0,
    'link' => 0,
    'show_price_drop' => 0,
    'PS_CATALOG_MODE' => 0,
    'show_new_products' => 0,
    'show_best_sales' => 0,
    'display_stores_footer' => 0,
    'show_contact' => 0,
    'contact_url' => 0,
    'cmslinks' => 0,
    'cmslink' => 0,
    'show_sitemap' => 0,
    'footer_text' => 0,
    'display_poweredby' => 0,
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_578ce17f4dd493_63737170',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_578ce17f4dd493_63737170')) {function content_578ce17f4dd493_63737170($_smarty_tpl) {?>
	<!-- Block CMS module footer -->
	<section class="footer-block col-xs-12 col-sm-2" id="block_various_links_footer">
		<h4>Informations</h4>
		<ul class="toggle-footer">
							<li class="item">
					<a href="http://localhost:8888/PHP_avance_II_My_Presta/prestashop_1.6.1.6_fr/prestashop/promotions" title="Promotions">
						Promotions
					</a>
				</li>
									<li class="item">
				<a href="http://localhost:8888/PHP_avance_II_My_Presta/prestashop_1.6.1.6_fr/prestashop/nouveaux-produits" title="Nouveaux produits">
					Nouveaux produits
				</a>
			</li>
										<li class="item">
					<a href="http://localhost:8888/PHP_avance_II_My_Presta/prestashop_1.6.1.6_fr/prestashop/meilleures-ventes" title="Meilleures ventes">
						Meilleures ventes
					</a>
				</li>
										<li class="item">
					<a href="http://localhost:8888/PHP_avance_II_My_Presta/prestashop_1.6.1.6_fr/prestashop/magasins" title="Nos magasins">
						Nos magasins
					</a>
				</li>
									<li class="item">
				<a href="http://localhost:8888/PHP_avance_II_My_Presta/prestashop_1.6.1.6_fr/prestashop/nous-contacter" title="Contactez-nous">
					Contactez-nous
				</a>
			</li>
															<li class="item">
						<a href="http://localhost:8888/PHP_avance_II_My_Presta/prestashop_1.6.1.6_fr/prestashop/content/3-conditions-utilisation" title="Conditions d&#039;utilisation">
							Conditions d&#039;utilisation
						</a>
					</li>
																<li class="item">
						<a href="http://localhost:8888/PHP_avance_II_My_Presta/prestashop_1.6.1.6_fr/prestashop/content/4-a-propos" title="A propos">
							A propos
						</a>
					</li>
													<li>
				<a href="http://localhost:8888/PHP_avance_II_My_Presta/prestashop_1.6.1.6_fr/prestashop/plan-site" title="sitemap">
					sitemap
				</a>
			</li>
					</ul>
		
	</section>
		<section class="bottom-footer col-xs-12">
		<div>
			<?php echo smartyTranslate(array('s'=>'[1] %3$s %2$s - Ecommerce software by %1$s [/1]','mod'=>'blockcms','sprintf'=>array('PrestaShop™',date('Y'),'©'),'tags'=>array('<a class="_blank" href="http://www.prestashop.com">')),$_smarty_tpl);?>

		</div>
	</section>
		<!-- /Block CMS module footer -->
<?php }} ?>
