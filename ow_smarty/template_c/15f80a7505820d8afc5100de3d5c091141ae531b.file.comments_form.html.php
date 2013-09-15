<?php /* Smarty version Smarty-3.1.12, created on 2013-09-06 11:40:31
         compiled from "/apps/mip/oxwall/ow_system_plugins/base/views/components/comments_form.html" */ ?>
<?php /*%%SmartyHeaderCode:794059590522a219fa5fcf0-23607189%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '15f80a7505820d8afc5100de3d5c091141ae531b' => 
    array (
      0 => '/apps/mip/oxwall/ow_system_plugins/base/views/components/comments_form.html',
      1 => 1359700751,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '794059590522a219fa5fcf0-23607189',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'currentUserInfo' => 0,
    'attachment' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_522a219fae0e11_37304096',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522a219fae0e11_37304096')) {function content_522a219fae0e11_37304096($_smarty_tpl) {?><?php if (!is_callable('smarty_block_form')) include '/apps/mip/oxwall/ow_smarty/plugin/block.form.php';
if (!is_callable('smarty_function_decorator')) include '/apps/mip/oxwall/ow_smarty/plugin/function.decorator.php';
if (!is_callable('smarty_function_input')) include '/apps/mip/oxwall/ow_smarty/plugin/function.input.php';
if (!is_callable('smarty_function_submit')) include '/apps/mip/oxwall/ow_smarty/plugin/function.submit.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('form', array('name'=>"comment-add-".((string)$_smarty_tpl->tpl_vars['id']->value))); $_block_repeat=true; echo smarty_block_form(array('name'=>"comment-add-".((string)$_smarty_tpl->tpl_vars['id']->value)), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<div class="clearfix">
    <div class="ow_comments_item_picture"><?php echo smarty_function_decorator(array('name'=>'avatar_item','data'=>$_smarty_tpl->tpl_vars['currentUserInfo']->value),$_smarty_tpl);?>
</div>
    <div class="ow_comments_item_info clearfix"><span class="comment_add_arr"></span><?php echo smarty_function_input(array('name'=>'commentText','class'=>'ow_smallmargin ow_comment_textarea'),$_smarty_tpl);?>
</div>
</div>
<div>
    <?php if (!empty($_smarty_tpl->tpl_vars['attachment']->value)){?><div id="attachment_preview_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"></div><?php }?>
    <div class="clearfix ow_comments_btn_block">
    <span class="ow_attachment_btn"><?php echo smarty_function_submit(array('name'=>'comment-submit'),$_smarty_tpl);?>
</span>
    <?php if (!empty($_smarty_tpl->tpl_vars['attachment']->value)){?><span class="ow_attachment_icons"><?php echo $_smarty_tpl->tpl_vars['attachment']->value;?>
</span><?php }?>
    <span class="ow_side_preloader_wrap"><span class="ow_side_preloader ow_inprogress comments-preloader" style="display: none;"></span></span>
    </div>
</div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>"comment-add-".((string)$_smarty_tpl->tpl_vars['id']->value)), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>