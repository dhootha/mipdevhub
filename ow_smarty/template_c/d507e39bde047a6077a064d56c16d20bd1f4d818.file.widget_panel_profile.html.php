<?php /* Smarty version Smarty-3.1.12, created on 2013-09-06 05:43:52
         compiled from "/apps/mip/oxwall/ow_system_plugins/base/views/controllers/widget_panel_profile.html" */ ?>
<?php /*%%SmartyHeaderCode:9320240815229ce084dd5a7-42140121%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd507e39bde047a6077a064d56c16d20bd1f4d818' => 
    array (
      0 => '/apps/mip/oxwall/ow_system_plugins/base/views/controllers/widget_panel_profile.html',
      1 => 1331814144,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9320240815229ce084dd5a7-42140121',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'isSuspended' => 0,
    'isAdminViewer' => 0,
    'profileActionToolbar' => 0,
    'componentPanel' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5229ce0851b284_27251184',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5229ce0851b284_27251184')) {function content_5229ce0851b284_27251184($_smarty_tpl) {?><?php if (!is_callable('smarty_function_text')) include '/apps/mip/oxwall/ow_smarty/plugin/function.text.php';
?><?php if ($_smarty_tpl->tpl_vars['isSuspended']->value&&!$_smarty_tpl->tpl_vars['isAdminViewer']->value){?>
	<?php echo smarty_function_text(array('key'=>"base+user_page_suspended"),$_smarty_tpl);?>

<?php }else{ ?>
	<?php echo $_smarty_tpl->tpl_vars['profileActionToolbar']->value;?>

	<?php echo $_smarty_tpl->tpl_vars['componentPanel']->value;?>

<?php }?><?php }} ?>