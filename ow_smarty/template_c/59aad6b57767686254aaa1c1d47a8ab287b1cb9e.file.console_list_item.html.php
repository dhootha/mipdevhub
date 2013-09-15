<?php /* Smarty version Smarty-3.1.12, created on 2013-09-06 06:52:52
         compiled from "/apps/mip/oxwall/ow_system_plugins/base/views/components/console_list_item.html" */ ?>
<?php /*%%SmartyHeaderCode:5700448685229de34ee9189-68027500%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '59aad6b57767686254aaa1c1d47a8ab287b1cb9e' => 
    array (
      0 => '/apps/mip/oxwall/ow_system_plugins/base/views/components/console_list_item.html',
      1 => 1359700751,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5700448685229de34ee9189-68027500',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5229de34f1aed7_54637300',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5229de34f1aed7_54637300')) {function content_5229de34f1aed7_54637300($_smarty_tpl) {?><li class="ow_console_list_item<?php if (!empty($_smarty_tpl->tpl_vars['item']->value['class'])){?> <?php echo $_smarty_tpl->tpl_vars['item']->value['class'];?>
<?php }?>" id="<?php echo $_smarty_tpl->tpl_vars['item']->value['key'];?>
">
    <?php echo $_smarty_tpl->tpl_vars['item']->value['content'];?>

</li><?php }} ?>