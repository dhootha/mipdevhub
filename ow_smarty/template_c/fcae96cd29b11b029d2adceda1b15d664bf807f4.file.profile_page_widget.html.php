<?php /* Smarty version Smarty-3.1.12, created on 2013-09-10 11:34:34
         compiled from "/apps/mip/oxwall/ow_plugins/event/views/components/profile_page_widget.html" */ ?>
<?php /*%%SmartyHeaderCode:228411246522ee7aa5209d4-12230368%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fcae96cd29b11b029d2adceda1b15d664bf807f4' => 
    array (
      0 => '/apps/mip/oxwall/ow_plugins/event/views/components/profile_page_widget.html',
      1 => 1331814143,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '228411246522ee7aa5209d4-12230368',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'my_events' => 0,
    'event' => 0,
    'toolbars' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_522ee7aa5ee433_80763239',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522ee7aa5ee433_80763239')) {function content_522ee7aa5ee433_80763239($_smarty_tpl) {?><?php if (!is_callable('smarty_function_text')) include '/apps/mip/oxwall/ow_smarty/plugin/function.text.php';
if (!is_callable('smarty_function_decorator')) include '/apps/mip/oxwall/ow_smarty/plugin/function.decorator.php';
?><?php if (empty($_smarty_tpl->tpl_vars['my_events']->value)){?>
<div class="ow_nocontent"><?php echo smarty_function_text(array('key'=>"event+no_events_label"),$_smarty_tpl);?>
</div>
<?php }else{ ?>
<?php  $_smarty_tpl->tpl_vars['event'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['event']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['my_events']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['event']->key => $_smarty_tpl->tpl_vars['event']->value){
$_smarty_tpl->tpl_vars['event']->_loop = true;
?>
    <?php echo smarty_function_decorator(array('name'=>'ipc','addClass'=>'ow_smallmargin','data'=>$_smarty_tpl->tpl_vars['event']->value,'infoString'=>"<a href=\"".((string)$_smarty_tpl->tpl_vars['event']->value['eventUrl'])."\">".((string)$_smarty_tpl->tpl_vars['event']->value['title'])."</a>"),$_smarty_tpl);?>

<?php } ?>
<?php if (!empty($_smarty_tpl->tpl_vars['toolbars']->value)){?><?php echo smarty_function_decorator(array('name'=>'box_toolbar','itemList'=>$_smarty_tpl->tpl_vars['toolbars']->value),$_smarty_tpl);?>
<?php }?>
<?php }?>
<?php }} ?>