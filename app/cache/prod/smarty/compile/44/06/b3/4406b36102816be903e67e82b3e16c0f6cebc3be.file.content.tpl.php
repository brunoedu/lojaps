<?php /* Smarty version Smarty-3.1.19, created on 2018-02-03 17:44:29
         compiled from "/var/www/html/ps/admin/themes/default/template/controllers/shop/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:405644115a75e6edc22644-65321249%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4406b36102816be903e67e82b3e16c0f6cebc3be' => 
    array (
      0 => '/var/www/html/ps/admin/themes/default/template/controllers/shop/content.tpl',
      1 => 1517676219,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '405644115a75e6edc22644-65321249',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'shops_tree' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a75e6edc25498_10978143',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a75e6edc25498_10978143')) {function content_5a75e6edc25498_10978143($_smarty_tpl) {?>

<div class="row">
	<div class="col-lg-4">
		<?php echo $_smarty_tpl->tpl_vars['shops_tree']->value;?>

	</div>
	<div class="col-lg-8"><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</div>
</div>
<?php }} ?>
