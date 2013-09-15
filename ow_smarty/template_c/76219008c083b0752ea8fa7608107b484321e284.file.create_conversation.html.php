<?php /* Smarty version Smarty-3.1.12, created on 2013-09-06 05:43:52
         compiled from "/apps/mip/oxwall/ow_plugins/mailbox/views/components/create_conversation.html" */ ?>
<?php /*%%SmartyHeaderCode:16553282535229ce08417e05-09370577%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '76219008c083b0752ea8fa7608107b484321e284' => 
    array (
      0 => '/apps/mip/oxwall/ow_plugins/mailbox/views/components/create_conversation.html',
      1 => 1359700750,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16553282535229ce08417e05-09370577',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'interlocutorAvatarUrl' => 0,
    'interlocutorDisplayName' => 0,
    'enableAttachments' => 0,
    'displayCaptcha' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5229ce084a8b72_72010705',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5229ce084a8b72_72010705')) {function content_5229ce084a8b72_72010705($_smarty_tpl) {?><?php if (!is_callable('smarty_block_style')) include '/apps/mip/oxwall/ow_smarty/plugin/block.style.php';
if (!is_callable('smarty_block_script')) include '/apps/mip/oxwall/ow_smarty/plugin/block.script.php';
if (!is_callable('smarty_block_form')) include '/apps/mip/oxwall/ow_smarty/plugin/block.form.php';
if (!is_callable('smarty_function_text')) include '/apps/mip/oxwall/ow_smarty/plugin/function.text.php';
if (!is_callable('smarty_function_decorator')) include '/apps/mip/oxwall/ow_smarty/plugin/function.decorator.php';
if (!is_callable('smarty_function_label')) include '/apps/mip/oxwall/ow_smarty/plugin/function.label.php';
if (!is_callable('smarty_function_input')) include '/apps/mip/oxwall/ow_smarty/plugin/function.input.php';
if (!is_callable('smarty_function_error')) include '/apps/mip/oxwall/ow_smarty/plugin/function.error.php';
if (!is_callable('smarty_function_submit')) include '/apps/mip/oxwall/ow_smarty/plugin/function.submit.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('style', array()); $_block_repeat=true; echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


    .ow_mailbox_attachment_icon {
        display: inline-block;
        background-repeat: no-repeat;
        cursor: pointer;
        width: 14px;
        height: 17px;
    }
    .mailbox_attachments_label {
        margin: 15px 0 5px;
        padding-left: 5px;
        font-weight: bold;
    }

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_style(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php $_smarty_tpl->smarty->_tag_stack[] = array('script', array()); $_block_repeat=true; echo smarty_block_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


    $('#toggle_attach_link').click(function(){
        $('#attach_file_inputs').toggle();
    });

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>






<div id="create-conversation-div" style="display:none;">
    
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('form', array('name'=>"mailbox-create-conversation-form")); $_block_repeat=true; echo smarty_block_form(array('name'=>"mailbox-create-conversation-form"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <div id="uploadOutput"></div>
                <table class="ow_table_1 ow_form">
                    <tr class="ow_alt2 mailbox_conversation ow_tr_first">
                        <td class="ow_label"><?php echo smarty_function_text(array('key'=>'mailbox+to'),$_smarty_tpl);?>
</td>
                        <td style="width:15%"><?php echo smarty_function_decorator(array('name'=>'avatar_item','data'=>$_smarty_tpl->tpl_vars['interlocutorAvatarUrl']->value),$_smarty_tpl);?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['interlocutorDisplayName']->value;?>
</td>
                    </tr>
                    <tr class="ow_alt2 mailbox_conversation">
                        <td class="ow_label"><?php echo smarty_function_label(array('name'=>'subject'),$_smarty_tpl);?>
</td>
                        <td class="ow_value" colspan="2" ><?php echo smarty_function_input(array('name'=>"subject"),$_smarty_tpl);?>
<br/><?php echo smarty_function_error(array('name'=>"subject"),$_smarty_tpl);?>
</td>
                    </tr>
                    <tr class="ow_alt2 mailbox_conversation">
                        <td class="ow_label"><?php echo smarty_function_label(array('name'=>'message'),$_smarty_tpl);?>
</td>
                        <td class="ow_value" colspan="2">
                            <?php echo smarty_function_input(array('name'=>"message"),$_smarty_tpl);?>
<?php echo smarty_function_error(array('name'=>"message"),$_smarty_tpl);?>

         
                        </td>
                    </tr>
                    <tr class="ow_alt2 mailbox_conversation ow_tr_last">
                        <td class="ow_label"></td>
                        <td class="ow_value" colspan="2">
                            <?php if ($_smarty_tpl->tpl_vars['enableAttachments']->value){?>
                                <div class="ow_submit_auto_click" style="padding-top:5px;">
                                    <span class="ow_mailbox_attachment_icon ow_ic_attach"></span>
                                    <a href="javascript://" id="toggle_attach_link" ><?php echo smarty_function_text(array('key'=>'mailbox+attach_files'),$_smarty_tpl);?>
</a><br /><br />
                                    <div class="ow_hidden ow_smallmargin" id="attach_file_inputs">
                                        <?php echo smarty_function_input(array('name'=>'attachments'),$_smarty_tpl);?>

                                    </div>
                                </div>
                            <?php }?>
                        </td>
                    </tr>
                    <tr class="captcha" <?php if ($_smarty_tpl->tpl_vars['displayCaptcha']->value==false){?> style='display:none;' <?php }?>>
                        <td colspan="3" class="ow_center">
                            <div style="padding:10px;"><?php echo smarty_function_text(array('key'=>'mailbox+please_enter_captcha'),$_smarty_tpl);?>
</div>
                        </td>
                    </tr>
                    <tr class="ow_alt1 captcha" <?php if ($_smarty_tpl->tpl_vars['displayCaptcha']->value==false){?> style='display:none;' <?php }?>>
                        <td colspan="3" class="ow_center">
                            <?php echo smarty_function_input(array('name'=>"captcha"),$_smarty_tpl);?>
<br/><?php echo smarty_function_error(array('name'=>"captcha"),$_smarty_tpl);?>

                        </td>
                    </tr>
                </table>
                
				<div class="clearfix ow_submit">
					<div class="ow_right"><?php echo smarty_function_submit(array('name'=>"send",'class'=>"ow_left ow_positive"),$_smarty_tpl);?>
</div>
				</div>
         <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>"mailbox-create-conversation-form"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    
</div><?php }} ?>