<?php /* Smarty version Smarty-3.1.12, created on 2013-09-08 18:36:39
         compiled from "/apps/mip/oxwall/ow_system_plugins/base/views/controllers/base_document_page404.html" */ ?>
<?php /*%%SmartyHeaderCode:82472501522ca79715f6b4-03436774%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '625754524f453b409d2966d1d3a884107bffd39e' => 
    array (
      0 => '/apps/mip/oxwall/ow_system_plugins/base/views/controllers/base_document_page404.html',
      1 => 1331814144,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '82472501522ca79715f6b4-03436774',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'base404RedirectMessage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_522ca7971b6088_28169266',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522ca7971b6088_28169266')) {function content_522ca7971b6088_28169266($_smarty_tpl) {?><?php if (!is_callable('smarty_function_text')) include '/apps/mip/oxwall/ow_smarty/plugin/function.text.php';
?><?php if (!empty($_smarty_tpl->tpl_vars['base404RedirectMessage']->value)){?><?php echo $_smarty_tpl->tpl_vars['base404RedirectMessage']->value;?>
<?php }else{ ?><?php echo smarty_function_text(array('key'=>'base+base_document_404'),$_smarty_tpl);?>
<?php }?>
<?php }} ?>