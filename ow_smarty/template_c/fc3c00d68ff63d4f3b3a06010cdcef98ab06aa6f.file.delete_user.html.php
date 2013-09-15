<?php /* Smarty version Smarty-3.1.12, created on 2013-09-06 05:43:57
         compiled from "/apps/mip/oxwall/ow_system_plugins/base/views/components/delete_user.html" */ ?>
<?php /*%%SmartyHeaderCode:1241798465229ce0d6c5a40-72114975%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fc3c00d68ff63d4f3b3a06010cdcef98ab06aa6f' => 
    array (
      0 => '/apps/mip/oxwall/ow_system_plugins/base/views/components/delete_user.html',
      1 => 1359700751,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1241798465229ce0d6c5a40-72114975',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5229ce0d76b5f7_73178363',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5229ce0d76b5f7_73178363')) {function content_5229ce0d76b5f7_73178363($_smarty_tpl) {?><?php if (!is_callable('smarty_block_block_decorator')) include '/apps/mip/oxwall/ow_smarty/plugin/block.block_decorator.php';
if (!is_callable('smarty_function_text')) include '/apps/mip/oxwall/ow_smarty/plugin/function.text.php';
if (!is_callable('smarty_function_decorator')) include '/apps/mip/oxwall/ow_smarty/plugin/function.decorator.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('block_decorator', array('name'=>"box",'type'=>"empty")); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>"box",'type'=>"empty"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <div class="ow_stdmargin" style="text-align: center;">
        <?php echo smarty_function_text(array('key'=>"base+admin_delete_user_text"),$_smarty_tpl);?>
<br /><br /><br />
        <?php echo smarty_function_decorator(array('name'=>"button",'id'=>"baseDCButton",'type'=>"submit",'buttonName'=>"delete_user_button",'class'=>"ow_ic_delete ow_red",'langLabel'=>"base+delete_user_delete_button"),$_smarty_tpl);?>

    </div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>"box",'type'=>"empty"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>