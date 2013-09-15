<?php /* Smarty version Smarty-3.1.12, created on 2013-09-06 21:08:02
         compiled from "/apps/mip/oxwall/ow_plugins/notifications/views/components/notification_txt.html" */ ?>
<?php /*%%SmartyHeaderCode:1453522404522a28121f72f8-57358893%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cab270c0fc36be0734b607e06ed8666e384ec330' => 
    array (
      0 => '/apps/mip/oxwall/ow_plugins/notifications/views/components/notification_txt.html',
      1 => 1359700751,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1453522404522a28121f72f8-57358893',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'userName' => 0,
    'nl' => 0,
    'items' => 0,
    'time' => 0,
    'section' => 0,
    'tab' => 0,
    'item' => 0,
    'space' => 0,
    'single' => 0,
    'unsubscribeUrl' => 0,
    'settingsUrl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_522a28124fc620_42212290',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522a28124fc620_42212290')) {function content_522a28124fc620_42212290($_smarty_tpl) {?><?php if (!is_callable('smarty_function_text')) include '/apps/mip/oxwall/ow_smarty/plugin/function.text.php';
if (!is_callable('smarty_modifier_simple_date')) include '/apps/mip/oxwall/ow_smarty/plugin/modifier.simple_date.php';
?><?php echo smarty_function_text(array('key'=>"notifications+email_txt_head",'userName'=>$_smarty_tpl->tpl_vars['userName']->value),$_smarty_tpl);?>
<?php echo $_smarty_tpl->tpl_vars['nl']->value;?>
<?php echo $_smarty_tpl->tpl_vars['nl']->value;?>
<?php  $_smarty_tpl->tpl_vars['section'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['section']->_loop = false;
 $_smarty_tpl->tpl_vars['time'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['section']->key => $_smarty_tpl->tpl_vars['section']->value){
$_smarty_tpl->tpl_vars['section']->_loop = true;
 $_smarty_tpl->tpl_vars['time']->value = $_smarty_tpl->tpl_vars['section']->key;
?><?php echo $_smarty_tpl->tpl_vars['nl']->value;?>
<?php echo smarty_modifier_simple_date($_smarty_tpl->tpl_vars['time']->value,$_smarty_tpl->tpl_vars['time']->value,true);?>
<?php echo $_smarty_tpl->tpl_vars['nl']->value;?>
<?php echo $_smarty_tpl->tpl_vars['nl']->value;?>
<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['section']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['tab']->value;?>
 <?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['item']->value['string']);?>
: <?php echo $_smarty_tpl->tpl_vars['space']->value;?>
<?php echo $_smarty_tpl->tpl_vars['space']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
 <?php echo $_smarty_tpl->tpl_vars['nl']->value;?>
<?php if ($_smarty_tpl->tpl_vars['item']->value['content']){?><?php echo $_smarty_tpl->tpl_vars['tab']->value;?>
<?php echo $_smarty_tpl->tpl_vars['tab']->value;?>
 <?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['item']->value['content']);?>
<?php echo $_smarty_tpl->tpl_vars['nl']->value;?>
<?php echo $_smarty_tpl->tpl_vars['nl']->value;?>
<?php }?><?php } ?><?php } ?><?php echo smarty_function_text(array('key'=>"notifications+email_txt_bottom"),$_smarty_tpl);?>
<?php echo $_smarty_tpl->tpl_vars['nl']->value;?>
<?php echo $_smarty_tpl->tpl_vars['nl']->value;?>
<?php if ($_smarty_tpl->tpl_vars['single']->value){?><?php echo smarty_function_text(array('key'=>"notifications+unsubscribe_one_label"),$_smarty_tpl);?>
:<?php echo $_smarty_tpl->tpl_vars['space']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['unsubscribeUrl']->value;?>
<?php echo $_smarty_tpl->tpl_vars['nl']->value;?>
<?php }?><?php echo smarty_function_text(array('key'=>"notifications+settings_edit_label"),$_smarty_tpl);?>
:<?php echo $_smarty_tpl->tpl_vars['space']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['settingsUrl']->value;?>
<?php echo $_smarty_tpl->tpl_vars['nl']->value;?>
<?php echo smarty_function_text(array('key'=>"notifications+unsubscribe_all_label"),$_smarty_tpl);?>
:<?php echo $_smarty_tpl->tpl_vars['space']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['unsubscribeUrl']->value;?>
<?php }} ?>