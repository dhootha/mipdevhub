<?php /* Smarty version Smarty-3.1.12, created on 2013-09-06 06:22:27
         compiled from "/apps/mip/oxwall/ow_system_plugins/base/decorators/box_toolbar.html" */ ?>
<?php /*%%SmartyHeaderCode:14096341315229d7139fd923-54130109%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '54ff492eb8b979e27633d740a310e5d62b4c539e' => 
    array (
      0 => '/apps/mip/oxwall/ow_system_plugins/base/decorators/box_toolbar.html',
      1 => 1363759970,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14096341315229d7139fd923-54130109',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5229d713afc459_54294757',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5229d713afc459_54294757')) {function content_5229d713afc459_54294757($_smarty_tpl) {?><?php if (!is_callable('smarty_block_style')) include '/apps/mip/oxwall/ow_smarty/plugin/block.style.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('style', array()); $_block_repeat=true; echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


.ow_box_toolbar span{
    display:inline-block;
}

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_style(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<div class="ow_box_toolbar ow_remark">
<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['itemList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['item']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['item']->index++;
 $_smarty_tpl->tpl_vars['item']->first = $_smarty_tpl->tpl_vars['item']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['toolbar']['first'] = $_smarty_tpl->tpl_vars['item']->first;
?>    
    <?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['toolbar']['first']&&(empty($_smarty_tpl->tpl_vars['item']->value['class'])||(!strstr($_smarty_tpl->tpl_vars['item']->value['class'],'ow_ipc_date')))){?> <span class="ow_delimiter" <?php if (isset($_smarty_tpl->tpl_vars['item']->value['id'])){?>id="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
-delim"<?php }?> style="<?php if (isset($_smarty_tpl->tpl_vars['item']->value['display'])){?>display: <?php echo $_smarty_tpl->tpl_vars['item']->value['display'];?>
"<?php }?>">&middot;</span> <?php }?>
    <span <?php if (!empty($_smarty_tpl->tpl_vars['item']->value['id'])){?>id="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"<?php }?> style="<?php if (isset($_smarty_tpl->tpl_vars['item']->value['display'])){?>display: <?php echo $_smarty_tpl->tpl_vars['item']->value['display'];?>
"<?php }?>"  class="ow_nowrap<?php if (!empty($_smarty_tpl->tpl_vars['item']->value['class'])){?> <?php echo $_smarty_tpl->tpl_vars['item']->value['class'];?>
<?php }?>"<?php if (isset($_smarty_tpl->tpl_vars['item']->value['title'])){?> title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
"<?php }?>>
    <?php if (isset($_smarty_tpl->tpl_vars['item']->value['href'])){?>
    <a<?php if (isset($_smarty_tpl->tpl_vars['item']->value['click'])){?> onclick="<?php echo $_smarty_tpl->tpl_vars['item']->value['click'];?>
"<?php }?><?php if (isset($_smarty_tpl->tpl_vars['item']->value['rel'])){?> rel="<?php echo $_smarty_tpl->tpl_vars['item']->value['rel'];?>
"<?php }?> href="<?php echo $_smarty_tpl->tpl_vars['item']->value['href'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['label'];?>
</a>
    <?php }else{ ?>
    <?php echo $_smarty_tpl->tpl_vars['item']->value['label'];?>

    <?php }?>
    </span>
<?php } ?>
</div>

<?php }} ?>