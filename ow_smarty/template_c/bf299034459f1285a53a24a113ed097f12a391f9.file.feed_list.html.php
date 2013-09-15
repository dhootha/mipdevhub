<?php /* Smarty version Smarty-3.1.12, created on 2013-09-06 06:49:09
         compiled from "/apps/mip/oxwall/ow_plugins/questions/views/components/feed_list.html" */ ?>
<?php /*%%SmartyHeaderCode:14517378605229dd559f71c7-40991779%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bf299034459f1285a53a24a113ed097f12a391f9' => 
    array (
      0 => '/apps/mip/oxwall/ow_plugins/questions/views/components/feed_list.html',
      1 => 1328692882,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14517378605229dd559f71c7-40991779',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'list' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5229dd55a4f257_19403461',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5229dd55a4f257_19403461')) {function content_5229dd55a4f257_19403461($_smarty_tpl) {?><?php if (!is_callable('smarty_function_text')) include '/apps/mip/oxwall/ow_smarty/plugin/function.text.php';
?><?php  $_smarty_tpl->tpl_vars["item"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["item"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["item"]->key => $_smarty_tpl->tpl_vars["item"]->value){
$_smarty_tpl->tpl_vars["item"]->_loop = true;
?>
    <?php echo $_smarty_tpl->tpl_vars['item']->value;?>

<?php }
if (!$_smarty_tpl->tpl_vars["item"]->_loop) {
?>
    <li class="ql_item ow_nocontent"><?php echo smarty_function_text(array('key'=>"questions+question_list_no_items"),$_smarty_tpl);?>
</li>
<?php } ?><?php }} ?>