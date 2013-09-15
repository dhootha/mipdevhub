<?php /* Smarty version Smarty-3.1.12, created on 2013-09-06 11:40:01
         compiled from "/apps/mip/oxwall/ow_plugins/questions/views/components/avatars.html" */ ?>
<?php /*%%SmartyHeaderCode:1149179070522a2181d30665-43441013%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '69b47765fcca50360c892cf2c923875729b56ea8' => 
    array (
      0 => '/apps/mip/oxwall/ow_plugins/questions/views/components/avatars.html',
      1 => 1356083409,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1149179070522a2181d30665-43441013',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'hiddenUser' => 0,
    'users' => 0,
    'userId' => 0,
    'user' => 0,
    'otherCount' => 0,
    'staticUrl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_522a2181dd8084_69201690',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522a2181dd8084_69201690')) {function content_522a2181dd8084_69201690($_smarty_tpl) {?><?php if (!is_callable('smarty_function_decorator')) include '/apps/mip/oxwall/ow_smarty/plugin/function.decorator.php';
if (!is_callable('smarty_function_text')) include '/apps/mip/oxwall/ow_smarty/plugin/function.text.php';
?><div class="ow_lp_avatars ow_mini_avatar qa-avatar clearfix">
    <div class="qa-hidden-users-c" style="display: none;"><?php if (!empty($_smarty_tpl->tpl_vars['hiddenUser']->value)){?><div class="qa-user user-<?php echo $_smarty_tpl->tpl_vars['hiddenUser']->value['id'];?>
" rel="<?php echo $_smarty_tpl->tpl_vars['hiddenUser']->value['id'];?>
"><?php echo smarty_function_decorator(array('name'=>'avatar_item','data'=>$_smarty_tpl->tpl_vars['hiddenUser']->value,'class'=>"qa-user_avatar"),$_smarty_tpl);?>
</div><?php }?></div><div class="qa-users-c"><?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_smarty_tpl->tpl_vars["userId"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['users']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value){
$_smarty_tpl->tpl_vars['user']->_loop = true;
 $_smarty_tpl->tpl_vars["userId"]->value = $_smarty_tpl->tpl_vars['user']->key;
?><div class="qa-user user-<?php echo $_smarty_tpl->tpl_vars['userId']->value;?>
" rel="<?php echo $_smarty_tpl->tpl_vars['userId']->value;?>
"><?php echo smarty_function_decorator(array('name'=>'avatar_item','data'=>$_smarty_tpl->tpl_vars['user']->value,'class'=>"qa-user_avatar"),$_smarty_tpl);?>
</div><?php } ?></div><a href="javascript://" <?php if (!$_smarty_tpl->tpl_vars['otherCount']->value){?>style="display: none"<?php }?> class="ow_border q-opacity10 qaa-view-more-btn"><img q-title="<?php echo smarty_function_text(array('key'=>'questions+more_users_title'),$_smarty_tpl);?>
" src="<?php echo $_smarty_tpl->tpl_vars['staticUrl']->value;?>
more.png" /></a>
</div><?php }} ?>