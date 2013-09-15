<?php /* Smarty version Smarty-3.1.12, created on 2013-09-08 20:57:55
         compiled from "/apps/mip/oxwall/ow_plugins/blogs/views/controllers/admin_index.html" */ ?>
<?php /*%%SmartyHeaderCode:1185843041522cc8b3c5ca99-28720805%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '46823ff47f4e110764b86f78516e97047237b3dc' => 
    array (
      0 => '/apps/mip/oxwall/ow_plugins/blogs/views/controllers/admin_index.html',
      1 => 1359700750,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1185843041522cc8b3c5ca99-28720805',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_522cc8b3cc5150_07851287',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522cc8b3cc5150_07851287')) {function content_522cc8b3cc5150_07851287($_smarty_tpl) {?><?php if (!is_callable('smarty_block_form')) include '/apps/mip/oxwall/ow_smarty/plugin/block.form.php';
if (!is_callable('smarty_function_text')) include '/apps/mip/oxwall/ow_smarty/plugin/function.text.php';
if (!is_callable('smarty_function_cycle')) include '/apps/mip/oxwall/ow_libraries/smarty3/plugins/function.cycle.php';
if (!is_callable('smarty_function_input')) include '/apps/mip/oxwall/ow_smarty/plugin/function.input.php';
if (!is_callable('smarty_function_error')) include '/apps/mip/oxwall/ow_smarty/plugin/function.error.php';
if (!is_callable('smarty_function_submit')) include '/apps/mip/oxwall/ow_smarty/plugin/function.submit.php';
?><div class="ow_automargin ow_wide">
<?php $_smarty_tpl->smarty->_tag_stack[] = array('form', array('name'=>"form")); $_block_repeat=true; echo smarty_block_form(array('name'=>"form"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	<table class="ow_table_1 ow_form">
	    <tr class="ow_tr_first">
	        <th class="ow_name ow_txtleft" colspan="2">
	            <span class="ow_section_icon ow_ic_gear_wheel"><?php echo smarty_function_text(array('key'=>"blogs+settings"),$_smarty_tpl);?>
</span>
	        </th>
	    </tr>
	    
	    <tr class="<?php echo smarty_function_cycle(array('values'=>'ow_alt1, ow_alt2'),$_smarty_tpl);?>
 ow_tr_last">
	    	<td style="width: 50%">
	    		<?php echo smarty_function_text(array('key'=>"blogs+admin_settings_results_per_page"),$_smarty_tpl);?>

	    	</td>
	    	<td>
	    		<?php echo smarty_function_input(array('name'=>'results_per_page','style'=>"width: 50px;"),$_smarty_tpl);?>
<br />
	    		<?php echo smarty_function_error(array('name'=>'results_per_page'),$_smarty_tpl);?>

	    	</td>
	    </tr>
	</table>
    <div class="clearfix ow_submit ow_stdmargin">
    	<div class="ow_right">
    	<?php echo smarty_function_submit(array('name'=>"submit"),$_smarty_tpl);?>

    	</div>
    </div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>"form"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

</div>
<?php }} ?>