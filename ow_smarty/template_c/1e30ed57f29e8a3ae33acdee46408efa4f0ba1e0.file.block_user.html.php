<?php /* Smarty version Smarty-3.1.12, created on 2013-09-06 05:43:52
         compiled from "/apps/mip/oxwall/ow_system_plugins/base/views/components/block_user.html" */ ?>
<?php /*%%SmartyHeaderCode:10777438785229ce0833a175-40619919%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1e30ed57f29e8a3ae33acdee46408efa4f0ba1e0' => 
    array (
      0 => '/apps/mip/oxwall/ow_system_plugins/base/views/components/block_user.html',
      1 => 1331814144,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10777438785229ce0833a175-40619919',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5229ce08375864_81917333',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5229ce08375864_81917333')) {function content_5229ce08375864_81917333($_smarty_tpl) {?><?php if (!is_callable('smarty_block_block_decorator')) include '/apps/mip/oxwall/ow_smarty/plugin/block.block_decorator.php';
if (!is_callable('smarty_function_text')) include '/apps/mip/oxwall/ow_smarty/plugin/function.text.php';
if (!is_callable('smarty_function_decorator')) include '/apps/mip/oxwall/ow_smarty/plugin/function.decorator.php';
?><div style="display: none;">
<div id="base_user_block_cmp">
<?php $_smarty_tpl->smarty->_tag_stack[] = array('block_decorator', array('name'=>"box",'type'=>"empty")); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>"box",'type'=>"empty"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<div class="ow_stdmargin" style="text-align: center;">
        <?php echo smarty_function_text(array('key'=>"base+user_block_confirm_message"),$_smarty_tpl);?>
<br /><br /><br />
        <?php echo smarty_function_decorator(array('name'=>"button",'id'=>"baseBlockButton",'type'=>"submit",'buttonName'=>"user_block_btn",'class'=>"ow_ic_delete ow_red",'langLabel'=>"base+user_block_btn_lbl"),$_smarty_tpl);?>

        </div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>"box",'type'=>"empty"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

</div>
</div><?php }} ?>