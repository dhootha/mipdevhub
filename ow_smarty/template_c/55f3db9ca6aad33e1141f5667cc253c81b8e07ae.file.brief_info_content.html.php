<?php /* Smarty version Smarty-3.1.12, created on 2013-09-06 06:22:27
         compiled from "/apps/mip/oxwall/ow_plugins/groups/views/components/brief_info_content.html" */ ?>
<?php /*%%SmartyHeaderCode:13363114145229d71390dc88-11413269%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '55f3db9ca6aad33e1141f5667cc253c81b8e07ae' => 
    array (
      0 => '/apps/mip/oxwall/ow_plugins/groups/views/components/brief_info_content.html',
      1 => 1364292533,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13363114145229d71390dc88-11413269',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'toolbar' => 0,
    'group' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5229d7139e26b7_93706800',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5229d7139e26b7_93706800')) {function content_5229d7139e26b7_93706800($_smarty_tpl) {?><?php if (!is_callable('smarty_block_style')) include '/apps/mip/oxwall/ow_smarty/plugin/block.style.php';
if (!is_callable('smarty_block_block_decorator')) include '/apps/mip/oxwall/ow_smarty/plugin/block.block_decorator.php';
if (!is_callable('smarty_modifier_autolink')) include '/apps/mip/oxwall/ow_smarty/plugin/modifier.autolink.php';
if (!is_callable('smarty_function_add_content')) include '/apps/mip/oxwall/ow_smarty/plugin/function.add_content.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('style', array()); $_block_repeat=true; echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


.ow_group_brief_info .image
{
    width: 100px;
    margin-right: -100px;
}

.ow_group_brief_info .image img
{
    width: 100px;
}

.ow_group_brief_info .details
{
    padding-left: 5px;
    position: relative;
    overflow-x: hidden;
}

.ow_group_brief_info .details .controls
{
    position: absolute;
    right: 0;
    top: 0;
}

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_style(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php $_smarty_tpl->smarty->_tag_stack[] = array('block_decorator', array('name'=>"box",'type'=>"empty",'toolbar'=>$_smarty_tpl->tpl_vars['toolbar']->value)); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>"box",'type'=>"empty",'toolbar'=>$_smarty_tpl->tpl_vars['toolbar']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<div class="ow_group_brief_info clearfix ow_smallmargin">
    <?php if ($_smarty_tpl->tpl_vars['group']->value['imgUrl']){?>
        <div class="image ow_left">
            <a href="<?php echo $_smarty_tpl->tpl_vars['group']->value['url'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['group']->value['imgUrl'];?>
" /></a>
        </div>
        <div class="details" style="margin-left: 100px;">
    <?php }else{ ?>
        <div class="details">
    <?php }?>

        <h3 class="title">
            <a href="<?php echo $_smarty_tpl->tpl_vars['group']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['group']->value['title'];?>
</a>
        </h3>

        <div class="body">
            <?php echo smarty_modifier_autolink($_smarty_tpl->tpl_vars['group']->value['description']);?>

        </div>
    </div>

</div>
<div class="clearfix">
    <?php echo smarty_function_add_content(array('key'=>'socialsharing.get_sharing_buttons','title'=>$_smarty_tpl->tpl_vars['group']->value['title']),$_smarty_tpl);?>

</div>
<div class="clearfix">
    <?php echo smarty_function_add_content(array('key'=>'groups.brief_info.content.after_group_description'),$_smarty_tpl);?>

</div>
  
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>"box",'type'=>"empty",'toolbar'=>$_smarty_tpl->tpl_vars['toolbar']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>