<?php /* Smarty version Smarty-3.1.12, created on 2013-09-05 23:27:59
         compiled from "/apps/mip/oxwall/ow_system_plugins/base/views/controllers/base_document_install_completed.html" */ ?>
<?php /*%%SmartyHeaderCode:189540819522975ef986a07-12133631%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a6c1e45d375c5b85881a5f6f243586261046416e' => 
    array (
      0 => '/apps/mip/oxwall/ow_system_plugins/base/views/controllers/base_document_install_completed.html',
      1 => 1331814144,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '189540819522975ef986a07-12133631',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_522975efd51a75_83858930',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522975efd51a75_83858930')) {function content_522975efd51a75_83858930($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url_for_route')) include '/apps/mip/oxwall/ow_smarty/plugin/function.url_for_route.php';
?><div class="ow_txtcenter" style="margin-top:200px;">
    <h1 class="ow_icon_control ow_ic_ok ow_smallmargin">
       Installation complete
    </h1>
    <p>
       Go to the
       <a href="<?php echo smarty_function_url_for_route(array('for'=>'base_index'),$_smarty_tpl);?>
">main page</a> or to the <a href="<?php echo smarty_function_url_for_route(array('for'=>'admin_default'),$_smarty_tpl);?>
">admin area</a>
    </p>
</div>
<?php }} ?>