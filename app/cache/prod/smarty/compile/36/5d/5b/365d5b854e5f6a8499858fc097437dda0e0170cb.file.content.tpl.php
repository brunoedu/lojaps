<?php /* Smarty version Smarty-3.1.19, created on 2018-02-03 17:44:30
         compiled from "/var/www/html/ps/admin/themes/default/template/controllers/currencies/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16592882125a75e6ee87ebb4-83722936%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '365d5b854e5f6a8499858fc097437dda0e0170cb' => 
    array (
      0 => '/var/www/html/ps/admin/themes/default/template/controllers/currencies/content.tpl',
      1 => 1517676219,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16592882125a75e6ee87ebb4-83722936',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
    'isForm' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a75e6ee8879f5_45543399',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a75e6ee8879f5_45543399')) {function content_5a75e6ee8879f5_45543399($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-10 col-xs-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
	<div class="col-lg-2 col-xs-12">
		<?php if (isset($_smarty_tpl->tpl_vars['isForm']->value)) {?>
			<?php echo $_smarty_tpl->getSubTemplate ('controllers/currencies/status.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<?php } else { ?>
			<?php echo $_smarty_tpl->getSubTemplate ('controllers/currencies/conversion_rate.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<?php }?>
	</div>
</div>
<?php }} ?>
