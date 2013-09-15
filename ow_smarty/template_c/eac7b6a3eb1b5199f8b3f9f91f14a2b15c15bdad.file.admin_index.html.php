<?php /* Smarty version Smarty-3.1.12, created on 2013-09-06 11:26:09
         compiled from "/apps/mip/oxwall/ow_plugins/mailbox/views/controllers/admin_index.html" */ ?>
<?php /*%%SmartyHeaderCode:1320151980522a1e41be0492-00355842%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eac7b6a3eb1b5199f8b3f9f91f14a2b15c15bdad' => 
    array (
      0 => '/apps/mip/oxwall/ow_plugins/mailbox/views/controllers/admin_index.html',
      1 => 1359700750,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1320151980522a1e41be0492-00355842',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'maxUploadMaxFilesize' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_522a1e41cf1af2_66890423',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522a1e41cf1af2_66890423')) {function content_522a1e41cf1af2_66890423($_smarty_tpl) {?><?php if (!is_callable('smarty_block_form')) include '/apps/mip/oxwall/ow_smarty/plugin/block.form.php';
if (!is_callable('smarty_function_text')) include '/apps/mip/oxwall/ow_smarty/plugin/function.text.php';
if (!is_callable('smarty_function_input')) include '/apps/mip/oxwall/ow_smarty/plugin/function.input.php';
if (!is_callable('smarty_function_error')) include '/apps/mip/oxwall/ow_smarty/plugin/function.error.php';
if (!is_callable('smarty_function_submit')) include '/apps/mip/oxwall/ow_smarty/plugin/function.submit.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('form', array('name'=>'configSaveForm')); $_block_repeat=true; echo smarty_block_form(array('name'=>'configSaveForm'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


<table class="ow_table_1 ow_form">
    <tr class="ow_tr_first">
        <th class="ow_name ow_txtleft" colspan="3">
            <span class="ow_section_icon ow_ic_gear_wheel"><?php echo smarty_function_text(array('key'=>'mailbox+general_settings'),$_smarty_tpl);?>
</span>
        </th>
    </tr>
    <tr class="ow_alt1">
        <td class="ow_label"><?php echo smarty_function_text(array('key'=>'mailbox+enable_attachments'),$_smarty_tpl);?>
</td>
        <td class="ow_value">
            <?php echo smarty_function_input(array('name'=>'enableAttachments'),$_smarty_tpl);?>
<br /> <?php echo smarty_function_error(array('name'=>'enableAttachments'),$_smarty_tpl);?>

        </td>
        <td class="ow_desc ow_small"></td>
    </tr>
    <tr class="ow_alt1 ow_tr_last">
        <td class="ow_label"><?php echo smarty_function_text(array('key'=>'mailbox+upload_max_file_size'),$_smarty_tpl);?>
</td>
        <td class="ow_value">
            <?php echo smarty_function_input(array('name'=>'uploadMaxFileSize'),$_smarty_tpl);?>
 <?php echo smarty_function_text(array('key'=>'mailbox+mb'),$_smarty_tpl);?>
 <span class="ow_small"><?php echo smarty_function_text(array('key'=>'base+max_upload_filesize','value'=>$_smarty_tpl->tpl_vars['maxUploadMaxFilesize']->value),$_smarty_tpl);?>
</span><br /> <?php echo smarty_function_error(array('name'=>'uploadMaxFileSize'),$_smarty_tpl);?>

        </td>
        <td class="ow_desc ow_small"></td>
    </tr>
</table>
<div class="clearfix ow_submit ow_smallmargin"><div class="ow_right"><?php echo smarty_function_submit(array('name'=>'save','class'=>'ow_ic_save ow_positive'),$_smarty_tpl);?>
</div></div>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>'configSaveForm'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>