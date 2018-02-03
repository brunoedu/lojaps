<?php /* Smarty version Smarty-3.1.19, created on 2018-02-03 17:44:33
         compiled from "/var/www/html/ps/admin/themes/default/template/helpers/tree/tree_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8475224735a75e6f158dd01-90605772%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '197f7e5a9a965eaf5b225da2da594bf7d20b8c0c' => 
    array (
      0 => '/var/www/html/ps/admin/themes/default/template/helpers/tree/tree_header.tpl',
      1 => 1517676220,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8475224735a75e6f158dd01-90605772',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'toolbar' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a75e6f1596ce3_66075062',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a75e6f1596ce3_66075062')) {function content_5a75e6f1596ce3_66075062($_smarty_tpl) {?>
<div class="tree-panel-heading-controls clearfix">
	<?php if (isset($_smarty_tpl->tpl_vars['title']->value)) {?><i class="icon-tag"></i>&nbsp;<?php echo smartyTranslate(array('s'=>$_smarty_tpl->tpl_vars['title']->value),$_smarty_tpl);?>
<?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['toolbar']->value)) {?><?php echo $_smarty_tpl->tpl_vars['toolbar']->value;?>
<?php }?>
</div>
<?php }} ?>
