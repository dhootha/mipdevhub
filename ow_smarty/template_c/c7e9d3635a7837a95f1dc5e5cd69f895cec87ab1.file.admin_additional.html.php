<?php /* Smarty version Smarty-3.1.12, created on 2013-09-06 06:42:07
         compiled from "/apps/mip/oxwall/ow_plugins/groups/views/controllers/admin_additional.html" */ ?>
<?php /*%%SmartyHeaderCode:11609363625229dbaf3359e4-82277406%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c7e9d3635a7837a95f1dc5e5cd69f895cec87ab1' => 
    array (
      0 => '/apps/mip/oxwall/ow_plugins/groups/views/controllers/admin_additional.html',
      1 => 1346776079,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11609363625229dbaf3359e4-82277406',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'menu' => 0,
    'isForumAvailable' => 0,
    'isForumConnected' => 0,
    'onclick' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5229dbaf414277_73680598',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5229dbaf414277_73680598')) {function content_5229dbaf414277_73680598($_smarty_tpl) {?><?php if (!is_callable('smarty_block_block_decorator')) include '/apps/mip/oxwall/ow_smarty/plugin/block.block_decorator.php';
if (!is_callable('smarty_function_text')) include '/apps/mip/oxwall/ow_smarty/plugin/function.text.php';
if (!is_callable('smarty_function_url_for')) include '/apps/mip/oxwall/ow_smarty/plugin/function.url_for.php';
if (!is_callable('smarty_function_decorator')) include '/apps/mip/oxwall/ow_smarty/plugin/function.decorator.php';
?><?php echo $_smarty_tpl->tpl_vars['menu']->value;?>


<?php if ($_smarty_tpl->tpl_vars['isForumAvailable']->value){?>
    <?php if ($_smarty_tpl->tpl_vars['isForumConnected']->value){?>
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('block_decorator', array('name'=>'box','iconClass'=>"ow_ic_forum",'langLabel'=>'forum+forum_settings','addClass'=>'ow_center','type'=>'empty')); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>'box','iconClass'=>"ow_ic_forum",'langLabel'=>'forum+forum_settings','addClass'=>'ow_center','type'=>'empty'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <p><?php echo smarty_function_text(array('key'=>"forum+forum_already_connected"),$_smarty_tpl);?>
</p>

        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>'box','iconClass'=>"ow_ic_forum",'langLabel'=>'forum+forum_settings','addClass'=>'ow_center','type'=>'empty'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


    <?php }else{ ?>
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('block_decorator', array('name'=>'box','iconClass'=>"ow_ic_forum",'langLabel'=>'forum+forum_settings','addClass'=>'ow_center','type'=>'empty')); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>'box','iconClass'=>"ow_ic_forum",'langLabel'=>'forum+forum_settings','addClass'=>'ow_center','type'=>'empty'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <p><?php echo smarty_function_text(array('key'=>"forum+connect_forum_to_entity"),$_smarty_tpl);?>
</p>

            <?php $_smarty_tpl->_capture_stack[0][] = array('default', 'onclick', null); ob_start(); ?>window.location.href='<?php echo smarty_function_url_for(array('for'=>"GROUPS_CTRL_Admin:connect_forum"),$_smarty_tpl);?>
?isForumConnected=yes'<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
            <?php echo smarty_function_decorator(array('name'=>'button','type'=>'button','id'=>'btn-connect-forum','langLabel'=>'forum+connect_forum_button','class'=>'ow_ic_add','onclick'=>$_smarty_tpl->tpl_vars['onclick']->value),$_smarty_tpl);?>


        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>'box','iconClass'=>"ow_ic_forum",'langLabel'=>'forum+forum_settings','addClass'=>'ow_center','type'=>'empty'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


    <?php }?>
<?php }else{ ?>

        <?php $_smarty_tpl->smarty->_tag_stack[] = array('block_decorator', array('name'=>'box','addClass'=>'ow_center','type'=>'empty')); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>'box','addClass'=>'ow_center','type'=>'empty'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <p><?php echo smarty_function_text(array('key'=>"base+empty_list"),$_smarty_tpl);?>
</p>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>'box','addClass'=>'ow_center','type'=>'empty'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php }?>
<?php }} ?>