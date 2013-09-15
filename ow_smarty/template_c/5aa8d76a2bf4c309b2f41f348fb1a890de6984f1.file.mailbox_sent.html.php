<?php /* Smarty version Smarty-3.1.12, created on 2013-09-06 11:42:05
         compiled from "/apps/mip/oxwall/ow_plugins/mailbox/views/controllers/mailbox_sent.html" */ ?>
<?php /*%%SmartyHeaderCode:298167964522a21fda21913-97849214%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5aa8d76a2bf4c309b2f41f348fb1a890de6984f1' => 
    array (
      0 => '/apps/mip/oxwall/ow_plugins/mailbox/views/controllers/mailbox_sent.html',
      1 => 1364892593,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '298167964522a21fda21913-97849214',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'mailbox_menu' => 0,
    'record' => 0,
    'conversationList' => 0,
    'conversation' => 0,
    'opponentsAvatar' => 0,
    'opponentsDisplayNames' => 0,
    'attachments' => 0,
    'paging' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_522a21fdbcc985_81331051',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522a21fdbcc985_81331051')) {function content_522a21fdbcc985_81331051($_smarty_tpl) {?><?php if (!is_callable('smarty_block_style')) include '/apps/mip/oxwall/ow_smarty/plugin/block.style.php';
if (!is_callable('smarty_block_script')) include '/apps/mip/oxwall/ow_smarty/plugin/block.script.php';
if (!is_callable('smarty_function_text')) include '/apps/mip/oxwall/ow_smarty/plugin/function.text.php';
if (!is_callable('smarty_function_decorator')) include '/apps/mip/oxwall/ow_smarty/plugin/function.decorator.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('style', array()); $_block_repeat=true; echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


    .ow_mailbox_attachment_icon {
        display: inline-block;
        background-repeat: no-repeat;
        cursor: pointer;
        width: 14px;
        height: 17px;
        padding-right:5px;
    }
    .mailbox_attachments_label {
        margin: 15px 0 5px;
        padding-left: 5px;
        font-weight: bold;
    }

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_style(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php $_smarty_tpl->smarty->_tag_stack[] = array('script', array()); $_block_repeat=true; echo smarty_block_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


    DND_InterfaceFix.fix($(".ow_content"));

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php echo $_smarty_tpl->tpl_vars['mailbox_menu']->value;?>

<?php if ($_smarty_tpl->tpl_vars['record']->value['total']>0){?>
    <div style="text-align: right; margin-bottom: 10px;">
            <?php echo smarty_function_text(array('key'=>'mailbox+conversation_box_info','showing'=>"<span class='outline'>".((string)$_smarty_tpl->tpl_vars['record']->value['start'])."-".((string)$_smarty_tpl->tpl_vars['record']->value['end'])."</span>",'total'=>"<span class='outline'>".((string)$_smarty_tpl->tpl_vars['record']->value['total'])."</span>",'new'=>"<span class='outline'>".((string)$_smarty_tpl->tpl_vars['record']->value['new'])."</span>"),$_smarty_tpl);?>

    </div>
<?php }?>
<form id="mailbox-conversation-list-form" method="POST" action="" >
	<table class="ow_table_1 ow_mailbox" style="width="100%"; table-layout:fixed;">
           <?php if ($_smarty_tpl->tpl_vars['record']->value['total']>0){?>
		<?php  $_smarty_tpl->tpl_vars['conversation'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['conversation']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['conversationList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["conversation_list"]['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['conversation']->key => $_smarty_tpl->tpl_vars['conversation']->value){
$_smarty_tpl->tpl_vars['conversation']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["conversation_list"]['index']++;
?>
			<tr class="<?php if ($_smarty_tpl->tpl_vars['conversation']->value['read']==false&&$_smarty_tpl->tpl_vars['conversation']->value['isOpponentLastMessage']==true){?>ow_high2<?php }else{ ?>ow_high1<?php }?> <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['conversation_list']['index']==0){?>ow_tr_first<?php }?>">
				<td width="4%" class="icons">
					<?php if ($_smarty_tpl->tpl_vars['conversation']->value['isOpponentLastMessage']==true){?>
						<a href="javascript://" class="ow_lbutton ow_green mailbox_new" <?php if ($_smarty_tpl->tpl_vars['conversation']->value['read']==true){?>style="display:none;"<?php }?>><?php echo smarty_function_text(array('key'=>'mailbox+new_conversation_link'),$_smarty_tpl);?>
</a>
					<?php }else{ ?>
						<span class="ic_reply"><span> 
					<?php }?>
				</td>
				<td width="2%"><input type="checkbox" name="conversation[<?php echo $_smarty_tpl->tpl_vars['conversation']->value['conversationId'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['conversation']->value['conversationId'];?>
"></td>
				<td width="7%"><?php echo smarty_function_decorator(array('name'=>'avatar_item','data'=>$_smarty_tpl->tpl_vars['opponentsAvatar']->value[$_smarty_tpl->tpl_vars['conversation']->value['opponentId']]),$_smarty_tpl);?>
</td>
				<td width="27%" class="mail_info" style="white-space: nowrap;"><?php echo $_smarty_tpl->tpl_vars['opponentsDisplayNames']->value[$_smarty_tpl->tpl_vars['conversation']->value['opponentId']];?>

				<div class="ow_small ow_remark"><?php echo $_smarty_tpl->tpl_vars['conversation']->value['timeStamp'];?>
</div>
				</td>
				<td width="53%"><?php if (!empty($_smarty_tpl->tpl_vars['attachments']->value[$_smarty_tpl->tpl_vars['conversation']->value['conversationId']]['attachments'])&&$_smarty_tpl->tpl_vars['attachments']->value[$_smarty_tpl->tpl_vars['conversation']->value['conversationId']]['attachments']>0){?><span class="ow_mailbox_attachment_icon ow_ic_attach" >&nbsp;</span><?php }?><a href="<?php echo $_smarty_tpl->tpl_vars['conversation']->value['url'];?>
" class="mail_title"><?php echo $_smarty_tpl->tpl_vars['conversation']->value['subject'];?>
</a>
					<div class="ow_mailbox_message text ow_remark"><?php echo $_smarty_tpl->tpl_vars['conversation']->value['text'];?>
</div>
				</td>
				<td width="7%" class="ow_bordertop" style="text-align:center;"><a href="javascript://" url='<?php echo $_smarty_tpl->tpl_vars['conversation']->value['deleteUrl'];?>
' class="ow_lbutton mailbox_delete" style="display:none;"><?php echo smarty_function_text(array('key'=>'mailbox+delete_conversation_link'),$_smarty_tpl);?>
</a></td>
			</tr>
		<?php } ?>
         <?php }else{ ?>
             <td colspan="7" class="ow_center">
                    <div style="padding:20px;"><?php echo smarty_function_text(array('key'=>'mailbox+no_conversations'),$_smarty_tpl);?>
</div>
             </td>
         <?php }?>
		<tr class="ow_small ow_tr_last">
			<td class="ow_center"><?php echo smarty_function_text(array('key'=>'mailbox+select_all_checkbox'),$_smarty_tpl);?>
:</td>
			<td><input type="checkbox" name="all" /></td>
			<td colspan="5">
                        <span class="ow_mailbox_selected_label"><?php echo smarty_function_text(array('key'=>'mailbox+selected_label'),$_smarty_tpl);?>
</span>
                        <?php echo smarty_function_decorator(array('name'=>"button_list_item",'type'=>"submit",'buttonName'=>"mark_as_read",'class'=>"mailbox_mark_as_read",'langLabel'=>"mailbox+mark_as_read_button"),$_smarty_tpl);?>
<?php echo smarty_function_decorator(array('name'=>"button_list_item",'type'=>"submit",'buttonName'=>"mark_as_unread",'class'=>"mailbox_mark_as_unread",'langLabel'=>"mailbox+mark_as_unread_button"),$_smarty_tpl);?>
<?php echo smarty_function_decorator(array('name'=>"button_list_item",'type'=>"submit",'buttonName'=>"delete",'class'=>"mailbox_delete ow_red",'langLabel'=>"mailbox+delete_button"),$_smarty_tpl);?>

            </td>
		</tr>
	
	</table>
</form>
<?php echo $_smarty_tpl->tpl_vars['paging']->value;?>

<!-- End of Content Area --><?php }} ?>