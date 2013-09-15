<?php /* Smarty version Smarty-3.1.12, created on 2013-09-10 08:31:26
         compiled from "/apps/mip/oxwall/ow_plugins/gconnect/views/controllers/admin_index.html" */ ?>
<?php /*%%SmartyHeaderCode:720683063522ebcbe9bd923-60262827%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c2edf33838a764bc63fc387e1f003ed5a3570b70' => 
    array (
      0 => '/apps/mip/oxwall/ow_plugins/gconnect/views/controllers/admin_index.html',
      1 => 1324565448,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '720683063522ebcbe9bd923-60262827',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'returnUrl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_522ebcbea6c0b9_19903608',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522ebcbea6c0b9_19903608')) {function content_522ebcbea6c0b9_19903608($_smarty_tpl) {?><?php if (!is_callable('smarty_block_form')) include '/apps/mip/oxwall/ow_smarty/plugin/block.form.php';
if (!is_callable('smarty_block_block_decorator')) include '/apps/mip/oxwall/ow_smarty/plugin/block.block_decorator.php';
if (!is_callable('smarty_function_text')) include '/apps/mip/oxwall/ow_smarty/plugin/function.text.php';
if (!is_callable('smarty_function_cycle')) include '/apps/mip/oxwall/ow_libraries/smarty3/plugins/function.cycle.php';
if (!is_callable('smarty_function_input')) include '/apps/mip/oxwall/ow_smarty/plugin/function.input.php';
if (!is_callable('smarty_function_error')) include '/apps/mip/oxwall/ow_smarty/plugin/function.error.php';
if (!is_callable('smarty_function_submit')) include '/apps/mip/oxwall/ow_smarty/plugin/function.submit.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('form', array('name'=>'GCONNECT_AccessForm')); $_block_repeat=true; echo smarty_block_form(array('name'=>'GCONNECT_AccessForm'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	<?php $_smarty_tpl->smarty->_tag_stack[] = array('block_decorator', array('name'=>'box','addClass'=>'ow_stdmargin','type'=>"empty")); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>'box','addClass'=>'ow_stdmargin','type'=>"empty"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	 <?php echo smarty_function_text(array('key'=>"GConnect+register_app_desc"),$_smarty_tpl);?>

	 <br /><span class="ow_desc"><?php echo smarty_function_text(array('key'=>'GConnect+app_return_url_desc'),$_smarty_tpl);?>
: <br /><br/><strong><?php echo $_smarty_tpl->tpl_vars['returnUrl']->value;?>
</strong></span>

	 <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>'box','addClass'=>'ow_stdmargin','type'=>"empty"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	
	<table class="ow_table_1 ow_form">
    <tr>
        <th class="ow_name ow_txtleft" colspan="3">
            <span class="ow_section_icon ow_ic_key"><?php echo smarty_function_text(array('key'=>'GConnect+app_register_title'),$_smarty_tpl);?>
</span>

        </th>
    </tr>

    <tr class="<?php echo smarty_function_cycle(array('name'=>"install",'values'=>"ow_alt1,ow_alt2"),$_smarty_tpl);?>
">
        <td class="ow_label"><?php echo smarty_function_text(array('key'=>'GConnect+access_settings_client_id_label'),$_smarty_tpl);?>
</td>
        <td class="ow_value"><?php echo smarty_function_input(array('name'=>'clientId'),$_smarty_tpl);?>
 <?php echo smarty_function_error(array('name'=>'clientId'),$_smarty_tpl);?>
</td>
        <td class="ow_desc"></td>
    </tr>
    <tr class="<?php echo smarty_function_cycle(array('name'=>"install",'values'=>"ow_alt1,ow_alt2"),$_smarty_tpl);?>
">
        <td class="ow_label"><?php echo smarty_function_text(array('key'=>'GConnect+access_settings_client_secret_label'),$_smarty_tpl);?>
</td>
        <td class="ow_value"><?php echo smarty_function_input(array('name'=>'clientSecret'),$_smarty_tpl);?>
 <?php echo smarty_function_error(array('name'=>'clientId'),$_smarty_tpl);?>
</td>
        <td class="ow_desc"></td>
    </tr>

    <tr><td colspan="3" class="ow_submit"><?php echo smarty_function_submit(array('name'=>'save','class'=>'ow_ic_save'),$_smarty_tpl);?>
</td></tr>
</table>
<br><br><?php echo smarty_function_text(array('key'=>'GConnect+gapi_customize_main'),$_smarty_tpl);?>
	
	
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>'GCONNECT_AccessForm'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <?php }} ?>