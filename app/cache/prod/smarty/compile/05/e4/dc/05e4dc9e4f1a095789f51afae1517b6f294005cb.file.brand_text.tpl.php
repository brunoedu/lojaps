<?php /* Smarty version Smarty-3.1.19, created on 2018-02-03 17:44:34
         compiled from "/var/www/html/ps/themes/classic/modules/ps_brandlist/views/templates/_partials/brand_text.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9739354475a75e6f2c4be64-99280721%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '05e4dc9e4f1a095789f51afae1517b6f294005cb' => 
    array (
      0 => '/var/www/html/ps/themes/classic/modules/ps_brandlist/views/templates/_partials/brand_text.tpl',
      1 => 1517676224,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9739354475a75e6f2c4be64-99280721',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'brands' => 0,
    'text_list_nb' => 0,
    'brand' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a75e6f2c56c24_40779392',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a75e6f2c56c24_40779392')) {function content_5a75e6f2c56c24_40779392($_smarty_tpl) {?>

<ul>
  <?php  $_smarty_tpl->tpl_vars['brand'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['brand']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['brands']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['brand_list']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['brand']->key => $_smarty_tpl->tpl_vars['brand']->value) {
$_smarty_tpl->tpl_vars['brand']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['brand_list']['iteration']++;
?>
    <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['brand_list']['iteration']<=$_smarty_tpl->tpl_vars['text_list_nb']->value) {?>
      <li class="facet-label">
        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value['link'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
          <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value['name'], ENT_QUOTES, 'UTF-8');?>

        </a>
      </li>
    <?php }?>
  <?php } ?>
</ul>
<?php }} ?>
