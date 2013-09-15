<?php /* Smarty version Smarty-3.1.12, created on 2013-09-06 06:49:30
         compiled from "/apps/mip/oxwall/ow_plugins/questions/views/components/option_list.html" */ ?>
<?php /*%%SmartyHeaderCode:3334847635229dd6a2c6c81-40959941%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9c52d14d8322675fa8aa9992221a486ef6ca6331' => 
    array (
      0 => '/apps/mip/oxwall/ow_plugins/questions/views/components/option_list.html',
      1 => 1322727254,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3334847635229dd6a2c6c81-40959941',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'list' => 0,
    'opt' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5229dd6a314da7_48968758',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5229dd6a314da7_48968758')) {function content_5229dd6a314da7_48968758($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars["opt"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["opt"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["opt"]->key => $_smarty_tpl->tpl_vars["opt"]->value){
$_smarty_tpl->tpl_vars["opt"]->_loop = true;
?>
    <?php echo $_smarty_tpl->tpl_vars['opt']->value;?>

<?php } ?><?php }} ?>