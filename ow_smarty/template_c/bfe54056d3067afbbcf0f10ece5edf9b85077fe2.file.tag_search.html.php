<?php /* Smarty version Smarty-3.1.12, created on 2013-09-05 23:29:10
         compiled from "/apps/mip/oxwall/ow_system_plugins/base/views/components/tag_search.html" */ ?>
<?php /*%%SmartyHeaderCode:8322487725229763699b871-95800035%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bfe54056d3067afbbcf0f10ece5edf9b85077fe2' => 
    array (
      0 => '/apps/mip/oxwall/ow_system_plugins/base/views/components/tag_search.html',
      1 => 1346776079,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8322487725229763699b871-95800035',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'form_id' => 0,
    'el_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_52297636a794b6_64291308',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52297636a794b6_64291308')) {function content_52297636a794b6_64291308($_smarty_tpl) {?><?php if (!is_callable('smarty_block_block_decorator')) include '/apps/mip/oxwall/ow_smarty/plugin/block.block_decorator.php';
?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('block_decorator', array('name'=>'box','addClass'=>'ow_stdmargin','iconClass'=>'ow_ic_tag','langLabel'=>'base+tag_search')); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>'box','addClass'=>'ow_stdmargin','iconClass'=>'ow_ic_tag','langLabel'=>'base+tag_search'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	<form id="<?php echo $_smarty_tpl->tpl_vars['form_id']->value;?>
">
   	<input type="text" id="<?php echo $_smarty_tpl->tpl_vars['el_id']->value;?>
" />
   </form>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>'box','addClass'=>'ow_stdmargin','iconClass'=>'ow_ic_tag','langLabel'=>'base+tag_search'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>