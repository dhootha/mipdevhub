<?php /* Smarty version Smarty-3.1.12, created on 2013-09-10 12:09:47
         compiled from "/apps/mip/oxwall/ow_system_plugins/base/views/controllers/email_verify_verify.html" */ ?>
<?php /*%%SmartyHeaderCode:480395495522eefeb714ec9-60934196%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4b322a0223c42cb83dcdd66ef72fa50dc77ddaa0' => 
    array (
      0 => '/apps/mip/oxwall/ow_system_plugins/base/views/controllers/email_verify_verify.html',
      1 => 1331814144,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '480395495522eefeb714ec9-60934196',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_522eefeb7819d0_33787037',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522eefeb7819d0_33787037')) {function content_522eefeb7819d0_33787037($_smarty_tpl) {?><?php if (!is_callable('smarty_block_block_decorator')) include '/apps/mip/oxwall/ow_smarty/plugin/block.block_decorator.php';
if (!is_callable('smarty_function_text')) include '/apps/mip/oxwall/ow_smarty/plugin/function.text.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('block_decorator', array('name'=>"box",'type'=>"empty",'style'=>"padding-left:20px;")); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>"box",'type'=>"empty",'style'=>"padding-left:20px;"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php echo smarty_function_text(array('key'=>"base+email_verify_email_verify_fail"),$_smarty_tpl);?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>"box",'type'=>"empty",'style'=>"padding-left:20px;"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>