<?php /* Smarty version Smarty-3.1.12, created on 2013-09-06 06:48:50
         compiled from "/apps/mip/oxwall/ow_system_plugins/base/views/components/sort_control.html" */ ?>
<?php /*%%SmartyHeaderCode:5737525245229dd42e49512-60910330%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4464d92296854474809120c28699f37c98222122' => 
    array (
      0 => '/apps/mip/oxwall/ow_system_plugins/base/views/components/sort_control.html',
      1 => 1359700751,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5737525245229dd42e49512-60910330',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'itemList' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5229dd42ec5942_73049974',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5229dd42ec5942_73049974')) {function content_5229dd42ec5942_73049974($_smarty_tpl) {?><?php if (!is_callable('smarty_function_text')) include '/apps/mip/oxwall/ow_smarty/plugin/function.text.php';
?>
<div class="ow_sort_control ow_smallmargin ow_small ow_alt2"><span class="ow_sort_control_label"><?php echo smarty_function_text(array('key'=>"base+sort_control_sortby"),$_smarty_tpl);?>
:</span><?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['itemList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
" <?php if ($_smarty_tpl->tpl_vars['item']->value['isActive']){?>class="active"<?php }?>><span><?php echo $_smarty_tpl->tpl_vars['item']->value['label'];?>
</span></a><?php } ?>
</div><?php }} ?>