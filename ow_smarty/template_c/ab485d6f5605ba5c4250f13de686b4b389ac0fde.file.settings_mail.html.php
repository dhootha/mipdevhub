<?php /* Smarty version Smarty-3.1.12, created on 2013-09-06 00:02:37
         compiled from "/apps/mip/oxwall/ow_system_plugins/admin/views/controllers/settings_mail.html" */ ?>
<?php /*%%SmartyHeaderCode:211811488452297e0ddbeb10-64710180%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ab485d6f5605ba5c4250f13de686b4b389ac0fde' => 
    array (
      0 => '/apps/mip/oxwall/ow_system_plugins/admin/views/controllers/settings_mail.html',
      1 => 1359700751,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '211811488452297e0ddbeb10-64710180',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'menu' => 0,
    'smtpEnabled' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_52297e0dec46d3_18424253',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52297e0dec46d3_18424253')) {function content_52297e0dec46d3_18424253($_smarty_tpl) {?><?php if (!is_callable('smarty_block_form')) include '/apps/mip/oxwall/ow_smarty/plugin/block.form.php';
if (!is_callable('smarty_function_cycle')) include '/apps/mip/oxwall/ow_libraries/smarty3/plugins/function.cycle.php';
if (!is_callable('smarty_function_text')) include '/apps/mip/oxwall/ow_smarty/plugin/function.text.php';
if (!is_callable('smarty_function_input')) include '/apps/mip/oxwall/ow_smarty/plugin/function.input.php';
if (!is_callable('smarty_function_error')) include '/apps/mip/oxwall/ow_smarty/plugin/function.error.php';
if (!is_callable('smarty_function_submit')) include '/apps/mip/oxwall/ow_smarty/plugin/function.submit.php';
if (!is_callable('smarty_block_block_decorator')) include '/apps/mip/oxwall/ow_smarty/plugin/block.block_decorator.php';
if (!is_callable('smarty_function_decorator')) include '/apps/mip/oxwall/ow_smarty/plugin/function.decorator.php';
?><?php echo $_smarty_tpl->tpl_vars['menu']->value;?>


<?php $_smarty_tpl->smarty->_tag_stack[] = array('form', array('name'=>'mailSettingsForm')); $_block_repeat=true; echo smarty_block_form(array('name'=>'mailSettingsForm'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


<table class="ow_table_1 ow_form">
    <!-- Smtp Settings -->

    
    <tr class="<?php echo smarty_function_cycle(array('name'=>"install",'values'=>"ow_alt2, ow_alt1"),$_smarty_tpl);?>
 ow_tr_first">
        <td class="ow_label"><?php echo smarty_function_text(array('key'=>'admin+mail_smtp_title_enabled'),$_smarty_tpl);?>
</td>
        <td class="ow_value"><?php echo smarty_function_input(array('name'=>'mailSmtpEnabled'),$_smarty_tpl);?>
 <?php echo smarty_function_error(array('name'=>'mailSmtpEnabled'),$_smarty_tpl);?>
</td>
        <td class="ow_desc"><?php echo smarty_function_text(array('key'=>'admin+mail_smtp_title_enabled_desc'),$_smarty_tpl);?>
</td>
    </tr>
    <tr class="<?php echo smarty_function_cycle(array('name'=>"install",'values'=>"ow_alt2, ow_alt1"),$_smarty_tpl);?>
">
        <td class="ow_label"><?php echo smarty_function_text(array('key'=>'admin+mail_smtp_title_host'),$_smarty_tpl);?>
</td>
        <td class="ow_value"><?php echo smarty_function_input(array('name'=>'mailSmtpHost','style'=>"width: 172px"),$_smarty_tpl);?>
:<?php echo smarty_function_input(array('name'=>'mailSmtpPort','maxlength'=>5,'style'=>"width: 60px"),$_smarty_tpl);?>
<?php echo smarty_function_error(array('name'=>'mailSmtpHost'),$_smarty_tpl);?>
</td>
        <td class="ow_desc"></td>
    </tr>
    <tr class="<?php echo smarty_function_cycle(array('name'=>"install",'values'=>"ow_alt2, ow_alt1"),$_smarty_tpl);?>
">
        <td class="ow_label"><?php echo smarty_function_text(array('key'=>'admin+mail_smtp_title_user'),$_smarty_tpl);?>
</td>
        <td class="ow_value"><?php echo smarty_function_input(array('name'=>'mailSmtpUser'),$_smarty_tpl);?>
 <?php echo smarty_function_error(array('name'=>'mailSmtpUser'),$_smarty_tpl);?>
</td>
        <td class="ow_desc ow_small"></td>
    </tr>
    <tr class="<?php echo smarty_function_cycle(array('name'=>"install",'values'=>"ow_alt2, ow_alt1"),$_smarty_tpl);?>
">
        <td class="ow_label"><?php echo smarty_function_text(array('key'=>'admin+mail_smtp_title_password'),$_smarty_tpl);?>
</td>
        <td class="ow_value"><?php echo smarty_function_input(array('name'=>'mailSmtpPassword'),$_smarty_tpl);?>
 <?php echo smarty_function_error(array('name'=>'mailSmtpPassword'),$_smarty_tpl);?>
</td>
        <td class="ow_desc ow_small"></td>
    </tr>
    
    <tr class="<?php echo smarty_function_cycle(array('name'=>"install",'values'=>"ow_alt2, ow_alt1"),$_smarty_tpl);?>
 ow_tr_las">
        <td class="ow_label"><?php echo smarty_function_text(array('key'=>'admin+mail_smtp_connection_prefix'),$_smarty_tpl);?>
</td>
        <td class="ow_value"><?php echo smarty_function_input(array('name'=>'mailSmtpConnectionPrefix'),$_smarty_tpl);?>
 <?php echo smarty_function_error(array('name'=>'mailSmtpConnectionPrefix'),$_smarty_tpl);?>
</td>
        <td class="ow_desc ow_small"><?php echo smarty_function_text(array('key'=>'admin+mail_smtp_connection_prefix_desc'),$_smarty_tpl);?>
</td>
    </tr>

    <!-- / Smtp Settings -->

</table>
<div class="clearfix ow_stdmargin"><div class="ow_right">
<?php echo smarty_function_submit(array('name'=>'save','class'=>'ow_ic_save'),$_smarty_tpl);?>

</div></div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>'mailSettingsForm'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php if ($_smarty_tpl->tpl_vars['smtpEnabled']->value){?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('block_decorator', array('name'=>"box",'iconClass'=>"ow_ic_mail",'langLabel'=>'admin+mail_smtp_test_connection_title')); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>"box",'iconClass'=>"ow_ic_mail",'langLabel'=>'admin+mail_smtp_test_connection_title'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	<?php echo smarty_function_text(array('key'=>"admin+mail_smtp_connection_desc"),$_smarty_tpl);?>

	<div class="clearfix" style="padding: 5px;">
    <div class="ow_right">
            <?php echo smarty_function_decorator(array('name'=>"button",'id'=>"smtp_test_connection",'langLabel'=>"admin+mail_smtp_test_connection_btn"),$_smarty_tpl);?>

	</div>
    </div>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>"box",'iconClass'=>"ow_ic_mail",'langLabel'=>'admin+mail_smtp_test_connection_title'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?><?php }} ?>