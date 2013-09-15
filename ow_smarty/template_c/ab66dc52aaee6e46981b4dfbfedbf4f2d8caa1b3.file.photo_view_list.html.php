<?php /* Smarty version Smarty-3.1.12, created on 2013-09-06 06:51:31
         compiled from "/apps/mip/oxwall/ow_plugins/photo/views/controllers/photo_view_list.html" */ ?>
<?php /*%%SmartyHeaderCode:6751303145229dde3009172-63006434%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ab66dc52aaee6e46981b4dfbfedbf4f2d8caa1b3' => 
    array (
      0 => '/apps/mip/oxwall/ow_plugins/photo/views/controllers/photo_view_list.html',
      1 => 1331814144,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6751303145229dde3009172-63006434',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'photoMenu' => 0,
    'listType' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5229dde30c4957_92996695',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5229dde30c4957_92996695')) {function content_5229dde30c4957_92996695($_smarty_tpl) {?><?php if (!is_callable('smarty_function_decorator')) include '/apps/mip/oxwall/ow_smarty/plugin/function.decorator.php';
if (!is_callable('smarty_function_component')) include '/apps/mip/oxwall/ow_smarty/plugin/function.component.php';
?>
<div class="ow_right"><?php echo smarty_function_decorator(array('name'=>'button','class'=>'ow_ic_add','id'=>'btn-add-new-photo','langLabel'=>'photo+add_new'),$_smarty_tpl);?>
</div>

<?php echo $_smarty_tpl->tpl_vars['photoMenu']->value;?>


<?php echo smarty_function_component(array('class'=>'PHOTO_CMP_PhotoList','type'=>$_smarty_tpl->tpl_vars['listType']->value,'count'=>5),$_smarty_tpl);?>
<?php }} ?>