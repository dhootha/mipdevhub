<?php /* Smarty version Smarty-3.1.12, created on 2013-09-06 06:40:14
         compiled from "/apps/mip/oxwall/ow_plugins/newsfeed/views/templates/activity.html" */ ?>
<?php /*%%SmartyHeaderCode:7747403905229db3e7708f1-54922256%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd3ba74a8ea0f886653e19139c1f399dc7f41d5ba' => 
    array (
      0 => '/apps/mip/oxwall/ow_plugins/newsfeed/views/templates/activity.html',
      1 => 1359700751,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7747403905229db3e7708f1-54922256',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5229db3e7c4539_85457076',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5229db3e7c4539_85457076')) {function content_5229db3e7c4539_85457076($_smarty_tpl) {?><div class="ow_small ow_newsfeed_activity">
    <?php if (isset($_smarty_tpl->tpl_vars['title']->value)){?>
       <div class="ow_newsfeed_activity_title"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</div>
    <?php }?>

    <div class="ow_border ow_newsfeed_activity_content"><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</div>
</div>
<?php }} ?>