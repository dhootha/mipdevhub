<?php /* Smarty version Smarty-3.1.12, created on 2013-09-05 23:28:35
         compiled from "/apps/mip/oxwall/ow_plugins/event/views/components/upcoming_events.html" */ ?>
<?php /*%%SmartyHeaderCode:294679027522976139d4043-10480171%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ca74d2e68747caf7452641c7449662129c4f7eef' => 
    array (
      0 => '/apps/mip/oxwall/ow_plugins/event/views/components/upcoming_events.html',
      1 => 1331814143,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '294679027522976139d4043-10480171',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'events' => 0,
    'no_content_message' => 0,
    'event' => 0,
    'toolbar' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_52297613a1c886_31898325',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52297613a1c886_31898325')) {function content_52297613a1c886_31898325($_smarty_tpl) {?><?php if (!is_callable('smarty_function_decorator')) include '/apps/mip/oxwall/ow_smarty/plugin/function.decorator.php';
?><?php if (empty($_smarty_tpl->tpl_vars['events']->value)){?>
<div class="ow_nocontent"><?php echo $_smarty_tpl->tpl_vars['no_content_message']->value;?>
</div>
<?php }else{ ?>
<?php  $_smarty_tpl->tpl_vars['event'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['event']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['events']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['event']->key => $_smarty_tpl->tpl_vars['event']->value){
$_smarty_tpl->tpl_vars['event']->_loop = true;
?>
    <?php echo smarty_function_decorator(array('name'=>'ipc','addClass'=>'ow_smallmargin','data'=>$_smarty_tpl->tpl_vars['event']->value,'infoString'=>"<a href=\"".((string)$_smarty_tpl->tpl_vars['event']->value['eventUrl'])."\">".((string)$_smarty_tpl->tpl_vars['event']->value['title'])."</a>"),$_smarty_tpl);?>

<?php } ?>
<?php if (!empty($_smarty_tpl->tpl_vars['toolbar']->value)){?><?php echo smarty_function_decorator(array('name'=>'box_toolbar','itemList'=>$_smarty_tpl->tpl_vars['toolbar']->value),$_smarty_tpl);?>
<?php }?>
<?php }?><?php }} ?>