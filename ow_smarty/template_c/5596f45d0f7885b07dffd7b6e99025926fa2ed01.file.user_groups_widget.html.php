<?php /* Smarty version Smarty-3.1.12, created on 2013-09-06 06:46:44
         compiled from "/apps/mip/oxwall/ow_plugins/groups/views/components/user_groups_widget.html" */ ?>
<?php /*%%SmartyHeaderCode:17049220235229dcc4469122-25757359%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5596f45d0f7885b07dffd7b6e99025926fa2ed01' => 
    array (
      0 => '/apps/mip/oxwall/ow_plugins/groups/views/components/user_groups_widget.html',
      1 => 1331814144,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17049220235229dcc4469122-25757359',
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
  'unifunc' => 'content_5229dcc450a4a6_96942997',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5229dcc450a4a6_96942997')) {function content_5229dcc450a4a6_96942997($_smarty_tpl) {?><?php if (!is_callable('smarty_function_text')) include '/apps/mip/oxwall/ow_smarty/plugin/function.text.php';
?><div class="ow_lp_avatars">
        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
            <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
" class="ow_lp_wrapper" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
">
                <img src="<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
" width="45" />
            </a>
        <?php }
if (!$_smarty_tpl->tpl_vars['item']->_loop) {
?>
            <div class="ow_nocontent">
                <?php echo smarty_function_text(array('key'=>'groups+user_groups_widget_empty'),$_smarty_tpl);?>

            </div>
        <?php } ?>
</div>
<?php }} ?>