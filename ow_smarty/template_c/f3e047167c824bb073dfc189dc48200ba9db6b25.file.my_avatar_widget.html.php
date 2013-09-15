<?php /* Smarty version Smarty-3.1.12, created on 2013-09-05 23:28:34
         compiled from "/apps/mip/oxwall/ow_system_plugins/base/views/components/my_avatar_widget.html" */ ?>
<?php /*%%SmartyHeaderCode:220673207522976128972b6-10934423%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f3e047167c824bb073dfc189dc48200ba9db6b25' => 
    array (
      0 => '/apps/mip/oxwall/ow_system_plugins/base/views/components/my_avatar_widget.html',
      1 => 1359700751,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '220673207522976128972b6-10934423',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'avatar' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_522976128d6a37_26842558',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522976128d6a37_26842558')) {function content_522976128d6a37_26842558($_smarty_tpl) {?><?php if (!is_callable('smarty_function_decorator')) include '/apps/mip/oxwall/ow_smarty/plugin/function.decorator.php';
?>
<div class="ow_my_avatar_widget clearfix">
	<div class="ow_left ow_my_avatar_img"><?php echo smarty_function_decorator(array('name'=>'avatar_item','data'=>$_smarty_tpl->tpl_vars['avatar']->value),$_smarty_tpl);?>
</div>
    <div class="ow_my_avatar_cont">
    	<a href="<?php echo $_smarty_tpl->tpl_vars['avatar']->value['url'];?>
" class="ow_my_avatar_username"><span><?php echo $_smarty_tpl->tpl_vars['avatar']->value['title'];?>
</span></a>
    </div>
</div><?php }} ?>