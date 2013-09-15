<?php /* Smarty version Smarty-3.1.12, created on 2013-09-07 06:03:13
         compiled from "/apps/mip/oxwall/ow_themes/showcase/decorators/button.html" */ ?>
<?php /*%%SmartyHeaderCode:1940221241522b24119a7b24-03577382%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '63ae4b66d364dcc2492df444e7ecac99d0bb4a74' => 
    array (
      0 => '/apps/mip/oxwall/ow_themes/showcase/decorators/button.html',
      1 => 1359700752,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1940221241522b24119a7b24-03577382',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_522b2411a8f993_68704221',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522b2411a8f993_68704221')) {function content_522b2411a8f993_68704221($_smarty_tpl) {?><?php if (!is_callable('smarty_function_text')) include '/apps/mip/oxwall/ow_smarty/plugin/function.text.php';
?>
<span class="ow_button"><span class="<?php if (!empty($_smarty_tpl->tpl_vars['data']->value['class'])){?> <?php echo $_smarty_tpl->tpl_vars['data']->value['class'];?>
<?php }?>"><input type="<?php if (!empty($_smarty_tpl->tpl_vars['data']->value['type'])&&$_smarty_tpl->tpl_vars['data']->value['type']=='submit'){?>submit<?php }else{ ?>button<?php }?>"  value="<?php if (!empty($_smarty_tpl->tpl_vars['data']->value['langLabel'])){?><?php echo smarty_function_text(array('key'=>$_smarty_tpl->tpl_vars['data']->value['langLabel']),$_smarty_tpl);?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['data']->value['label'];?>
<?php }?>"<?php if (!empty($_smarty_tpl->tpl_vars['data']->value['buttonName'])){?> name="<?php echo $_smarty_tpl->tpl_vars['data']->value['buttonName'];?>
"<?php }?><?php if (!empty($_smarty_tpl->tpl_vars['data']->value['id'])){?> id="<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
"<?php }?><?php if (!empty($_smarty_tpl->tpl_vars['data']->value['class'])){?> class="<?php echo $_smarty_tpl->tpl_vars['data']->value['class'];?>
"<?php }?><?php if (!empty($_smarty_tpl->tpl_vars['data']->value['extraString'])){?><?php echo $_smarty_tpl->tpl_vars['data']->value['extraString'];?>
<?php }?> <?php if (!empty($_smarty_tpl->tpl_vars['data']->value['onclick'])){?>onclick="<?php echo $_smarty_tpl->tpl_vars['data']->value['onclick'];?>
"<?php }?> /></span></span><?php }} ?>