<?php /* Smarty version Smarty-3.1.19, created on 2018-02-03 17:44:33
         compiled from "/var/www/html/ps/admin/themes/default/template/content-legacy.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7498336965a75e6f1c854f3-13639055%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '89cc2f5e36cb8e4b6cb898af2b5eb55ef83637e4' => 
    array (
      0 => '/var/www/html/ps/admin/themes/default/template/content-legacy.tpl',
      1 => 1517676219,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7498336965a75e6f1c854f3-13639055',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a75e6f1c89c72_27526900',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a75e6f1c89c72_27526900')) {function content_5a75e6f1c89c72_27526900($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }} ?>
