<?php /* Smarty version Smarty-3.1.12, created on 2013-09-06 06:22:27
         compiled from "/apps/mip/oxwall/ow_plugins/groups/views/components/user_list_widget.html" */ ?>
<?php /*%%SmartyHeaderCode:359383705229d713b31da7-08554781%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a5d0fee1d304466a7b30baa6beb2dc86966a30cb' => 
    array (
      0 => '/apps/mip/oxwall/ow_plugins/groups/views/components/user_list_widget.html',
      1 => 1331814144,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '359383705229d713b31da7-08554781',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'userIdList' => 0,
    'id' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5229d713b57584_69927467',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5229d713b57584_69927467')) {function content_5229d713b57584_69927467($_smarty_tpl) {?><?php if (!is_callable('smarty_function_decorator')) include '/apps/mip/oxwall/ow_smarty/plugin/function.decorator.php';
if (!is_callable('smarty_function_text')) include '/apps/mip/oxwall/ow_smarty/plugin/function.text.php';
?><div class="ow_lp_avatars">
        <?php  $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['id']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['userIdList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['id']->key => $_smarty_tpl->tpl_vars['id']->value){
$_smarty_tpl->tpl_vars['id']->_loop = true;
?>
            <?php echo smarty_function_decorator(array('name'=>"avatar_item",'data'=>$_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['id']->value]),$_smarty_tpl);?>

        <?php }
if (!$_smarty_tpl->tpl_vars['id']->_loop) {
?>
            <div class="ow_nocontent"><?php echo smarty_function_text(array('key'=>'groups+user_list_widget_empty'),$_smarty_tpl);?>
</div>
        <?php } ?>
</div>
<?php }} ?>