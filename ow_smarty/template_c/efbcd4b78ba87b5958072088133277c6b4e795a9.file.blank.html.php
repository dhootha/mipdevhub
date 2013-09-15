<?php /* Smarty version Smarty-3.1.12, created on 2013-09-05 23:28:01
         compiled from "/apps/mip/oxwall/ow_themes/origin/master_pages/blank.html" */ ?>
<?php /*%%SmartyHeaderCode:245682462522975f13883d2-26734389%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'efbcd4b78ba87b5958072088133277c6b4e795a9' => 
    array (
      0 => '/apps/mip/oxwall/ow_themes/origin/master_pages/blank.html',
      1 => 1359700752,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '245682462522975f13883d2-26734389',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_522975f16bc602_67381134',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522975f16bc602_67381134')) {function content_522975f16bc602_67381134($_smarty_tpl) {?><?php if (!is_callable('smarty_block_style')) include '/apps/mip/oxwall/ow_smarty/plugin/block.style.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('style', array()); $_block_repeat=true; echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


body,html {background:#fff;min-width:0;}

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_style(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php echo $_smarty_tpl->tpl_vars['content']->value;?>
<?php }} ?>