<?php /* Smarty version Smarty-3.1.12, created on 2013-09-05 23:28:34
         compiled from "/apps/mip/oxwall/ow_system_plugins/base/views/components/add_new_content.html" */ ?>
<?php /*%%SmartyHeaderCode:53559818752297612b28ad4-43284692%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8788971e563429c512411434062854fb69ceaa7d' => 
    array (
      0 => '/apps/mip/oxwall/ow_system_plugins/base/views/components/add_new_content.html',
      1 => 1331814144,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '53559818752297612b28ad4-43284692',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'items' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_52297612bceb14_85754294',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52297612bceb14_85754294')) {function content_52297612bceb14_85754294($_smarty_tpl) {?>
<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
<a class="ow_add_content <?php echo $_smarty_tpl->tpl_vars['item']->value['iconClass'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['label'];?>
</a>
<?php } ?><?php }} ?>