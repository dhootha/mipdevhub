<?php /* Smarty version Smarty-3.1.12, created on 2013-09-06 06:50:24
         compiled from "/apps/mip/oxwall/ow_plugins/event/views/controllers/base_events_list.html" */ ?>
<?php /*%%SmartyHeaderCode:21417277115229dda0349ff6-09530791%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fa9edb40e9fae6ac0e6e6f24e132b0decba91cb8' => 
    array (
      0 => '/apps/mip/oxwall/ow_plugins/event/views/controllers/base_events_list.html',
      1 => 1359700750,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21417277115229dda0349ff6-09530791',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'noButton' => 0,
    'contentMenu' => 0,
    'no_events' => 0,
    'events' => 0,
    'event' => 0,
    'paging' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5229dda0406289_77579663',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5229dda0406289_77579663')) {function content_5229dda0406289_77579663($_smarty_tpl) {?><?php if (!is_callable('smarty_block_style')) include '/apps/mip/oxwall/ow_smarty/plugin/block.style.php';
if (!is_callable('smarty_function_decorator')) include '/apps/mip/oxwall/ow_smarty/plugin/function.decorator.php';
if (!is_callable('smarty_function_text')) include '/apps/mip/oxwall/ow_smarty/plugin/function.text.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('style', array()); $_block_repeat=true; echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>



<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_style(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php if (empty($_smarty_tpl->tpl_vars['noButton']->value)){?><div class="ow_right"><?php echo smarty_function_decorator(array('name'=>'button','onclick'=>"window.location='".((string)$_smarty_tpl->tpl_vars['add_new_url']->value)."'",'class'=>'ow_ic_add','langLabel'=>'event+add_new_button_label'),$_smarty_tpl);?>
</div><?php }?>
<?php if (!empty($_smarty_tpl->tpl_vars['contentMenu']->value)){?><?php echo $_smarty_tpl->tpl_vars['contentMenu']->value;?>
<?php }?>
<div class="ow_event_list clearfix">
    <div class="ow_automargin ow_superwide">
      <?php if (!empty($_smarty_tpl->tpl_vars['no_events']->value)){?>
        <div class="ow_nocontent"><?php echo smarty_function_text(array('key'=>"event+no_events_label"),$_smarty_tpl);?>
</div>
      <?php }else{ ?>
          <?php  $_smarty_tpl->tpl_vars['event'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['event']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['events']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['event']->key => $_smarty_tpl->tpl_vars['event']->value){
$_smarty_tpl->tpl_vars['event']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['event']->key;
?>
                <?php echo smarty_function_decorator(array('name'=>'ipc','addClass'=>'ow_smallmargin','data'=>$_smarty_tpl->tpl_vars['event']->value,'infoString'=>"<a href=\"".((string)$_smarty_tpl->tpl_vars['event']->value['eventUrl'])."\">".((string)$_smarty_tpl->tpl_vars['event']->value['title'])."</a>"),$_smarty_tpl);?>

          <?php } ?>
          <br />
          <?php echo $_smarty_tpl->tpl_vars['paging']->value;?>

      <?php }?>
    </div>
</div><?php }} ?>