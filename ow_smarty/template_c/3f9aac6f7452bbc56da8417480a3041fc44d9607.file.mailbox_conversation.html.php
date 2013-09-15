<?php /* Smarty version Smarty-3.1.12, created on 2013-09-06 12:10:17
         compiled from "/apps/mip/oxwall/ow_plugins/mailbox/views/controllers/mailbox_conversation.html" */ ?>
<?php /*%%SmartyHeaderCode:1234067477522a2899eaf045-21766143%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3f9aac6f7452bbc56da8417480a3041fc44d9607' => 
    array (
      0 => '/apps/mip/oxwall/ow_plugins/mailbox/views/controllers/mailbox_conversation.html',
      1 => 1359700750,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1234067477522a2899eaf045-21766143',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'mailbox_menu' => 0,
    'conversation' => 0,
    'messageList' => 0,
    'message' => 0,
    'avatars' => 0,
    'attachmentList' => 0,
    'attm' => 0,
    'writeMessage' => 0,
    'enableAttachments' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_522a289a1ad304_03261419',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522a289a1ad304_03261419')) {function content_522a289a1ad304_03261419($_smarty_tpl) {?><?php if (!is_callable('smarty_block_style')) include '/apps/mip/oxwall/ow_smarty/plugin/block.style.php';
if (!is_callable('smarty_block_script')) include '/apps/mip/oxwall/ow_smarty/plugin/block.script.php';
if (!is_callable('smarty_function_text')) include '/apps/mip/oxwall/ow_smarty/plugin/function.text.php';
if (!is_callable('smarty_block_block_decorator')) include '/apps/mip/oxwall/ow_smarty/plugin/block.block_decorator.php';
if (!is_callable('smarty_function_decorator')) include '/apps/mip/oxwall/ow_smarty/plugin/function.decorator.php';
if (!is_callable('smarty_block_form')) include '/apps/mip/oxwall/ow_smarty/plugin/block.form.php';
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

DND_InterfaceFix.fix($(".ow_mailbox_message"));

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php echo $_smarty_tpl->tpl_vars['mailbox_menu']->value;?>


<div class="ow_superwide ow_automargin ow_mailbox_conversation">
    <table class="ow_table_3 ow_form" style="text-align:center;width:100%;">
        <tr class="ow_tr_first">
            <td class="ow_label" style="width:30%;"><?php echo smarty_function_text(array('key'=>'mailbox+conversation_label'),$_smarty_tpl);?>
</td>
            <td class="ow_value" style="text-align:left;"><h3><?php echo $_smarty_tpl->tpl_vars['conversation']->value['subject'];?>
</h3></td>
        </tr>
        <tr class="ow_tr_last">
            <td class="ow_label"><?php echo smarty_function_text(array('key'=>'mailbox+between'),$_smarty_tpl);?>
</td>
            <td class="ow_value" style="text-align:left;"><a <?php if ($_smarty_tpl->tpl_vars['conversation']->value['userUrl']){?>href="<?php echo $_smarty_tpl->tpl_vars['conversation']->value['userUrl'];?>
"<?php }?>><?php echo smarty_function_text(array('key'=>'mailbox+you'),$_smarty_tpl);?>
</a> <?php echo smarty_function_text(array('key'=>'mailbox+and'),$_smarty_tpl);?>
 <a <?php if ($_smarty_tpl->tpl_vars['conversation']->value['opponentUrl']){?>href="<?php echo $_smarty_tpl->tpl_vars['conversation']->value['opponentUrl'];?>
"<?php }?>><?php echo $_smarty_tpl->tpl_vars['conversation']->value['opponentDisplayName'];?>
</a></td>
        </tr>
    </table>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('block_decorator', array('name'=>"box",'type'=>"empty",'addClass'=>"ow_stdmargin")); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>"box",'type'=>"empty",'addClass'=>"ow_stdmargin"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

 	<?php  $_smarty_tpl->tpl_vars['message'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['message']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['messageList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['message']->key => $_smarty_tpl->tpl_vars['message']->value){
$_smarty_tpl->tpl_vars['message']->_loop = true;
?>
        <?php if ($_smarty_tpl->tpl_vars['message']->value['senderUrl']){?>
            <?php echo smarty_function_decorator(array('name'=>'ipc','addClass'=>'ow_smallmargin ow_mailbox_message','avatar'=>$_smarty_tpl->tpl_vars['avatars']->value[$_smarty_tpl->tpl_vars['message']->value['senderId']],'data'=>$_smarty_tpl->tpl_vars['message']->value,'infoString'=>"<a href='".((string)$_smarty_tpl->tpl_vars['message']->value['senderUrl'])."'>".((string)$_smarty_tpl->tpl_vars['message']->value['senderDisplayName'])."</a>&nbsp;<span class='ow_tiny ow_ipc_date'>".((string)$_smarty_tpl->tpl_vars['message']->value['timeStamp'])."</span>"),$_smarty_tpl);?>

        <?php }else{ ?>
            <?php echo smarty_function_decorator(array('name'=>'ipc','addClass'=>'ow_smallmargin ow_mailbox_message','avatar'=>$_smarty_tpl->tpl_vars['avatars']->value[$_smarty_tpl->tpl_vars['message']->value['senderId']],'data'=>$_smarty_tpl->tpl_vars['message']->value,'infoString'=>"<a>".((string)$_smarty_tpl->tpl_vars['message']->value['senderDisplayName'])."</a>&nbsp;<span class='ow_tiny ow_ipc_date'>".((string)$_smarty_tpl->tpl_vars['message']->value['timeStamp'])."</span>"),$_smarty_tpl);?>

        <?php }?>

        <?php if (!empty($_smarty_tpl->tpl_vars['attachmentList']->value[$_smarty_tpl->tpl_vars['message']->value['id']])){?>
            <div class='ow_ipc_info ow_small ow_smallmargin'>
                <div class='mailbox_attachments_label'><?php echo smarty_function_text(array('key'=>'mailbox+attachments'),$_smarty_tpl);?>
:</div>
                <?php  $_smarty_tpl->tpl_vars['attm'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['attm']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['attachmentList']->value[$_smarty_tpl->tpl_vars['message']->value['id']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['attm']->key => $_smarty_tpl->tpl_vars['attm']->value){
$_smarty_tpl->tpl_vars['attm']->_loop = true;
?>
                <span class='ow_mailbox_attachment'>
                    <span class='ow_mailbox_attachment_icon ow_ic_attach'>&nbsp;</span>
                    <?php if ($_smarty_tpl->tpl_vars['attm']->value['downloadUrl']!=''){?><a href='<?php echo $_smarty_tpl->tpl_vars['attm']->value['downloadUrl'];?>
'><?php echo $_smarty_tpl->tpl_vars['attm']->value['fileName'];?>
</a><?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['attm']->value['fileName'];?>
<?php }?> (<?php echo $_smarty_tpl->tpl_vars['attm']->value['fileSize']/sprintf("%.1f",1024);?>
Kb)
                </span><br />
                <?php } ?>
            </div>
        <?php }?>
    <?php } ?>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>"box",'type'=>"empty",'addClass'=>"ow_stdmargin"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


    <?php if ($_smarty_tpl->tpl_vars['writeMessage']->value==true){?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('block_decorator', array('name'=>"box",'addClass'=>'ow_stdmargin','iconClass'=>"ow_ic_write",'langLabel'=>'mailbox+compose_message')); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>"box",'addClass'=>'ow_stdmargin','iconClass'=>"ow_ic_write",'langLabel'=>'mailbox+compose_message'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <div class="form_auto_click" style="text-align:center;">
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('form', array('name'=>"mailbox-add-message-form")); $_block_repeat=true; echo smarty_block_form(array('name'=>"mailbox-add-message-form"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <div>
            <?php echo smarty_function_input(array('name'=>"message"),$_smarty_tpl);?>
<br />
            <?php echo smarty_function_error(array('name'=>"message"),$_smarty_tpl);?>

        </div>

        <?php if ($_smarty_tpl->tpl_vars['enableAttachments']->value){?>
        <div class="ow_submit_auto_click">
            <span class="ow_mailbox_attachment_icon ow_ic_attach"></span>
            <span><a href="javascript://" id="toggle_attach_link"><?php echo smarty_function_text(array('key'=>'mailbox+attach_files'),$_smarty_tpl);?>
</span></a><br /><br />
            <div class="ow_hidden ow_smallmargin" id="attach_file_inputs">
                <?php echo smarty_function_input(array('name'=>'attachments'),$_smarty_tpl);?>

            </div>
        </div>
        <?php }?>
        <div class="clearfix"><div class="ow_right ow_submit_auto_click"><?php echo smarty_function_submit(array('name'=>"add",'class'=>"ow_positive"),$_smarty_tpl);?>
</div></div>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>"mailbox-add-message-form"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </div>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>"box",'addClass'=>'ow_stdmargin','iconClass'=>"ow_ic_write",'langLabel'=>'mailbox+compose_message'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php }?>
	 <?php $_smarty_tpl->smarty->_tag_stack[] = array('block_decorator', array('name'=>"box",'type'=>"empty",'addClass'=>"ow_txtright",'style'=>"padding:5px 0;")); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>"box",'type'=>"empty",'addClass'=>"ow_txtright",'style'=>"padding:5px 0;"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <form id="mailbox-conversation-form" method="POST" action="<?php echo $_smarty_tpl->tpl_vars['conversation']->value['deleteUrl'];?>
" >
        <div class="clearfix ow_btn_delimiter">
			<div class="ow_right">
                <input type="hidden" name="conversation" value="<?php echo $_smarty_tpl->tpl_vars['conversation']->value['conversationId'];?>
" />
                <span class="mailbox_delete"><?php echo smarty_function_decorator(array('name'=>"button",'type'=>"submit",'buttonName'=>"delete",'class'=>"ow_red ow_negative",'langLabel'=>"mailbox+delete_conversation_button"),$_smarty_tpl);?>
</span>

                <?php if ($_smarty_tpl->tpl_vars['conversation']->value['isOpponentLastMessage']==true){?>
                <span class="mailbox_mark_unread"><?php echo smarty_function_decorator(array('name'=>"button",'buttonName'=>"mark_unread",'class'=>"ow_ic_push_pin ow_positive",'langLabel'=>"mailbox+keep_unread_button"),$_smarty_tpl);?>
</span>
                <!-- input type="button" name="mark_unread" class="ow_ic_push_pin mailbox_mark_unread" value="<?php echo smarty_function_text(array('key'=>'mailbox+keep_unread_button'),$_smarty_tpl);?>
" -->
                <?php }?>
			</div>
        </div>
    </form>
	 <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>"box",'type'=>"empty",'addClass'=>"ow_txtright",'style'=>"padding:5px 0;"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

</div>


<!-- End of Content Area --><?php }} ?>