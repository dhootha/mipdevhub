<?php /* Smarty version Smarty-3.1.12, created on 2013-09-06 00:09:23
         compiled from "/apps/mip/oxwall/ow_system_plugins/base/views/controllers/user_standard_sign_in.html" */ ?>
<?php /*%%SmartyHeaderCode:194097486652297fa34f1284-79079089%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e5e6cff8e6c0cdcfdabf1e0850f42c241285ca26' => 
    array (
      0 => '/apps/mip/oxwall/ow_system_plugins/base/views/controllers/user_standard_sign_in.html',
      1 => 1359700751,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '194097486652297fa34f1284-79079089',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sign_in_form' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_52297fa3551eb2_17435858',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52297fa3551eb2_17435858')) {function content_52297fa3551eb2_17435858($_smarty_tpl) {?><?php if (!is_callable('smarty_block_style')) include '/apps/mip/oxwall/ow_smarty/plugin/block.style.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('style', array()); $_block_repeat=true; echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


.ow_sign_in_wrap {
	position:absolute;
	top:200px;
	left:50%;
	margin:0 0 0 -351px;
}

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_style(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<div class="ow_sign_in_cont">
    <?php echo $_smarty_tpl->tpl_vars['sign_in_form']->value;?>

</div>
<?php }} ?>