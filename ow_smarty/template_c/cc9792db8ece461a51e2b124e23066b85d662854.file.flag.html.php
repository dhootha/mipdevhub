<?php /* Smarty version Smarty-3.1.12, created on 2013-09-06 12:02:52
         compiled from "/apps/mip/oxwall/ow_system_plugins/base/views/components/flag.html" */ ?>
<?php /*%%SmartyHeaderCode:1886967919522a26dc5ac563-08193517%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cc9792db8ece461a51e2b124e23066b85d662854' => 
    array (
      0 => '/apps/mip/oxwall/ow_system_plugins/base/views/components/flag.html',
      1 => 1340356762,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1886967919522a26dc5ac563-08193517',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_522a26dc7a7a42_60412849',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522a26dc7a7a42_60412849')) {function content_522a26dc7a7a42_60412849($_smarty_tpl) {?><?php if (!is_callable('smarty_block_style')) include '/apps/mip/oxwall/ow_smarty/plugin/block.style.php';
if (!is_callable('smarty_block_form')) include '/apps/mip/oxwall/ow_smarty/plugin/block.form.php';
if (!is_callable('smarty_function_input')) include '/apps/mip/oxwall/ow_smarty/plugin/function.input.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('style', array()); $_block_repeat=true; echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


.foo ul li{
	float: left;
	width: 100px !important;
}

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_style(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<div  style="min-height: 40px; text-align: center;" class="flags-container">
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('form', array('name'=>"flag",'style'=>"border: 1px solid green;")); $_block_repeat=true; echo smarty_block_form(array('name'=>"flag",'style'=>"border: 1px solid green;"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<div class="foo clearfix flags-input" style="margin-top: 10px;">
			<?php echo smarty_function_input(array('name'=>"reason",'onchange'=>"$"."(this.form).submit(); "."$"."('.flags-input').hide(); "."$"."('.flags-container').addClass('ow_preloader_content');"),$_smarty_tpl);?>

		</div>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>"flag",'style'=>"border: 1px solid green;"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

</div><?php }} ?>