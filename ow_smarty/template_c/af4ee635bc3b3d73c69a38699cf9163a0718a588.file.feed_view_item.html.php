<?php /* Smarty version Smarty-3.1.12, created on 2013-09-07 06:02:32
         compiled from "/apps/mip/oxwall/ow_plugins/newsfeed/views/controllers/feed_view_item.html" */ ?>
<?php /*%%SmartyHeaderCode:513186796522b23e887ec32-80114263%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'af4ee635bc3b3d73c69a38699cf9163a0718a588' => 
    array (
      0 => '/apps/mip/oxwall/ow_plugins/newsfeed/views/controllers/feed_view_item.html',
      1 => 1364205649,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '513186796522b23e887ec32-80114263',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_522b23e88f0903_13558531',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522b23e88f0903_13558531')) {function content_522b23e88f0903_13558531($_smarty_tpl) {?><?php if (!is_callable('smarty_block_style')) include '/apps/mip/oxwall/ow_smarty/plugin/block.style.php';
if (!is_callable('smarty_function_add_content')) include '/apps/mip/oxwall/ow_smarty/plugin/function.add_content.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('style', array()); $_block_repeat=true; echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


.newsfeed_item_view
{
    width: 600px;
}

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_style(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<div class="clearfix">
    <div class="newsfeed_item_view ow_left">
        <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

    </div>
    <div class="ow_right"><?php echo smarty_function_add_content(array('key'=>'socialsharing.get_sharing_buttons'),$_smarty_tpl);?>
</div>
    <div class="ow_right"><?php echo smarty_function_add_content(array('key'=>'newsfeed.item.content.right'),$_smarty_tpl);?>
</div>
</div><?php }} ?>