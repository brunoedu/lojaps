<?php /* Smarty version Smarty-3.1.19, created on 2018-02-03 17:44:34
         compiled from "/var/www/html/ps/themes/classic/modules/ps_specials/views/templates/hook/ps_specials.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10129769765a75e6f2c821d2-68676131%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '70d1f4bda030d6521ac8fa8f747abce38301991d' => 
    array (
      0 => '/var/www/html/ps/themes/classic/modules/ps_specials/views/templates/hook/ps_specials.tpl',
      1 => 1517676224,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10129769765a75e6f2c821d2-68676131',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
    'product' => 0,
    'allSpecialProductsLink' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a75e6f2c8b043_18527153',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a75e6f2c8b043_18527153')) {function content_5a75e6f2c8b043_18527153($_smarty_tpl) {?>

<section class="featured-products clearfix mt-3">
  <h1 class="h1 products-section-title text-uppercase">
    <?php echo smartyTranslate(array('s'=>'On sale','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>

  </h1>
  <div class="products">
    <?php  $_smarty_tpl->tpl_vars["product"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["product"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["product"]->key => $_smarty_tpl->tpl_vars["product"]->value) {
$_smarty_tpl->tpl_vars["product"]->_loop = true;
?>
      <?php echo $_smarty_tpl->getSubTemplate ("catalog/_partials/miniatures/product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0);?>

    <?php } ?>
  </div>
  <a class="all-product-link float-xs-left float-md-right h4" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['allSpecialProductsLink']->value, ENT_QUOTES, 'UTF-8');?>
">
    <?php echo smartyTranslate(array('s'=>'All sale products','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>
<i class="material-icons">&#xE315;</i>
  </a>
</section>
<?php }} ?>
