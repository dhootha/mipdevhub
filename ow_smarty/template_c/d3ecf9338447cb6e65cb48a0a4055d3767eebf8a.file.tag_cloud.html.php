<?php /* Smarty version Smarty-3.1.12, created on 2013-09-10 13:13:07
         compiled from "/apps/mip/oxwall/ow_system_plugins/base/views/components/tag_cloud.html" */ ?>
<?php /*%%SmartyHeaderCode:1340091409522efec35123d7-20482584%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd3ecf9338447cb6e65cb48a0a4055d3767eebf8a' => 
    array (
      0 => '/apps/mip/oxwall/ow_system_plugins/base/views/components/tag_cloud.html',
      1 => 1346776079,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1340091409522efec35123d7-20482584',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tags' => 0,
    'tag' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_522efec35bb2e9_81022121',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522efec35bb2e9_81022121')) {function content_522efec35bb2e9_81022121($_smarty_tpl) {?><?php if (!is_callable('smarty_block_block_decorator')) include '/apps/mip/oxwall/ow_smarty/plugin/block.block_decorator.php';
?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('block_decorator', array('name'=>'box','addClass'=>'ow_stdmargin','langLabel'=>'base+tags_cloud_cap_label','iconClass'=>'ow_ic_tag')); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>'box','addClass'=>'ow_stdmargin','langLabel'=>'base+tags_cloud_cap_label','iconClass'=>'ow_ic_tag'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<div class="ow_tags_cont">
<?php  $_smarty_tpl->tpl_vars['tag'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tag']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tags']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tag']->key => $_smarty_tpl->tpl_vars['tag']->value){
$_smarty_tpl->tpl_vars['tag']->_loop = true;
?>
    <a href="<?php echo $_smarty_tpl->tpl_vars['tag']->value['url'];?>
" style="font-size:<?php echo $_smarty_tpl->tpl_vars['tag']->value['size'];?>
px;line-height:<?php echo $_smarty_tpl->tpl_vars['tag']->value['lineHeight'];?>
px;"><?php echo $_smarty_tpl->tpl_vars['tag']->value['label'];?>
</a>
<?php } ?>
</div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>'box','addClass'=>'ow_stdmargin','langLabel'=>'base+tags_cloud_cap_label','iconClass'=>'ow_ic_tag'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>