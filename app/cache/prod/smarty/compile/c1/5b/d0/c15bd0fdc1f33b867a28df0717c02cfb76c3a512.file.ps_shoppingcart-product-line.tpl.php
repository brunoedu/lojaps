<?php /* Smarty version Smarty-3.1.19, created on 2018-02-03 17:44:34
         compiled from "/var/www/html/ps/themes/classic/modules/ps_shoppingcart/ps_shoppingcart-product-line.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7062967185a75e6f2bb1fb1-81978263%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c15bd0fdc1f33b867a28df0717c02cfb76c3a512' => 
    array (
      0 => '/var/www/html/ps/themes/classic/modules/ps_shoppingcart/ps_shoppingcart-product-line.tpl',
      1 => 1517676224,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7062967185a75e6f2bb1fb1-81978263',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product' => 0,
    'customization' => 0,
    'field' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a75e6f2bd2ab4_92990754',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a75e6f2bd2ab4_92990754')) {function content_5a75e6f2bd2ab4_92990754($_smarty_tpl) {?>
<span class="product-quantity"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['quantity'], ENT_QUOTES, 'UTF-8');?>
</span>
<span class="product-name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
</span>
<span class="product-price"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>
</span>
<a  class="remove-from-cart"
    rel="nofollow"
    href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['remove_from_cart_url'], ENT_QUOTES, 'UTF-8');?>
"
    data-link-action="remove-from-cart"
    title="<?php echo smartyTranslate(array('s'=>'remove from cart','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>
"
>
    <?php echo smartyTranslate(array('s'=>'Remove','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>

</a>
<?php if (count($_smarty_tpl->tpl_vars['product']->value['customizations'])) {?>
    <div class="customizations">
        <ul>
            <?php  $_smarty_tpl->tpl_vars['customization'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['customization']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['customizations']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['customization']->key => $_smarty_tpl->tpl_vars['customization']->value) {
$_smarty_tpl->tpl_vars['customization']->_loop = true;
?>
                <li>
                    <span class="product-quantity"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customization']->value['quantity'], ENT_QUOTES, 'UTF-8');?>
</span>
                    <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customization']->value['remove_from_cart_url'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo smartyTranslate(array('s'=>'remove from cart','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>
" class="remove-from-cart" rel="nofollow"><?php echo smartyTranslate(array('s'=>'Remove','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>
</a>
                    <ul>
                        <?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['customization']->value['fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->_loop = true;
?>
                            <li>
                                <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['label'], ENT_QUOTES, 'UTF-8');?>
</span>
                                <?php if ($_smarty_tpl->tpl_vars['field']->value['type']=='text') {?>
                                    <span><?php echo $_smarty_tpl->tpl_vars['field']->value['text'];?>
</span>
                                <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type']=='image') {?>
                                    <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['image']['small']['url'], ENT_QUOTES, 'UTF-8');?>
">
                                <?php }?>
                            </li>
                        <?php } ?>
                    </ul>
                </li>
            <?php } ?>
        </ul>
    </div>
<?php }?>
<?php }} ?>
