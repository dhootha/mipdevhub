<?php /* Smarty version Smarty-3.1.12, created on 2013-09-10 10:51:28
         compiled from "/apps/mip/oxwall/ow_plugins/event/views/controllers/base_view.html" */ ?>
<?php /*%%SmartyHeaderCode:2061538951522edd90049ee1-69930563%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dfe119d819670d465cfbe2c21342202bb07d12f6' => 
    array (
      0 => '/apps/mip/oxwall/ow_plugins/event/views/controllers/base_view.html',
      1 => 1365495322,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2061538951522edd90049ee1-69930563',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'authErrorText' => 0,
    'editArray' => 0,
    'contId' => 0,
    'no_attend_form' => 0,
    'currentStatus' => 0,
    'info' => 0,
    'inviteLink' => 0,
    'userListCmp' => 0,
    'comments' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_522edd90181ab8_00603723',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522edd90181ab8_00603723')) {function content_522edd90181ab8_00603723($_smarty_tpl) {?><?php if (!is_callable('smarty_block_style')) include '/apps/mip/oxwall/ow_smarty/plugin/block.style.php';
if (!is_callable('smarty_function_text')) include '/apps/mip/oxwall/ow_smarty/plugin/function.text.php';
if (!is_callable('smarty_block_form')) include '/apps/mip/oxwall/ow_smarty/plugin/block.form.php';
if (!is_callable('smarty_function_decorator')) include '/apps/mip/oxwall/ow_smarty/plugin/function.decorator.php';
if (!is_callable('smarty_block_block_decorator')) include '/apps/mip/oxwall/ow_smarty/plugin/block.block_decorator.php';
if (!is_callable('smarty_function_add_content')) include '/apps/mip/oxwall/ow_smarty/plugin/function.add_content.php';
?><?php if (!empty($_smarty_tpl->tpl_vars['authErrorText']->value)){?>
    <div class="ow_anno ow_center">
        <?php echo $_smarty_tpl->tpl_vars['authErrorText']->value;?>

    </div>
<?php }else{ ?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('style', array()); $_block_repeat=true; echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


.attend_buttons{
text-align:right;
margin-bottom:7px;
}
.attend_buttons input{

}
.current_status{
	padding-bottom:4px;
}

.inviteLink{
    text-align:center;    
}

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_style(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php if (!empty($_smarty_tpl->tpl_vars['editArray']->value)){?>
<div class="ow_stdmargin ow_txtright">
    <ul class="ow_bl clearfix ow_small ow_stdmargin">
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['editArray']->value['delete']['url'];?>
" class="ow_mild_red" onclick="return confirm('<?php echo $_smarty_tpl->tpl_vars['editArray']->value['delete']['confirmMessage'];?>
');"><?php echo $_smarty_tpl->tpl_vars['editArray']->value['delete']['label'];?>
</a></li>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['editArray']->value['edit']['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['editArray']->value['edit']['label'];?>
</a></li>
    </ul>
</div>
<?php }?>
<div class="clearfix" id="<?php echo $_smarty_tpl->tpl_vars['contId']->value;?>
">
	<?php if (empty($_smarty_tpl->tpl_vars['no_attend_form']->value)){?>
    <div class="attend_buttons">
	    <div class="current_status"><span class="status"><?php if (!empty($_smarty_tpl->tpl_vars['currentStatus']->value)){?><?php echo $_smarty_tpl->tpl_vars['currentStatus']->value;?>
<?php }?></span> <span class="link"<?php if (empty($_smarty_tpl->tpl_vars['currentStatus']->value)){?> style="display:none;"<?php }?>>(<a href="javascript://"><?php echo smarty_function_text(array('key'=>'event+current_status_change_label'),$_smarty_tpl);?>
</a>)</span></div>
        <div class="buttons"<?php if (!empty($_smarty_tpl->tpl_vars['currentStatus']->value)){?> style="display:none;"<?php }?>>
             <?php $_smarty_tpl->smarty->_tag_stack[] = array('form', array('name'=>'event_attend')); $_block_repeat=true; echo smarty_block_form(array('name'=>'event_attend'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                 <?php echo smarty_function_decorator(array('name'=>'button_list_item','type'=>'submit','langLabel'=>'event+attend_yes_btn_label','id'=>'event_attend_yes_btn'),$_smarty_tpl);?>

                 <?php echo smarty_function_decorator(array('name'=>'button_list_item','type'=>'submit','langLabel'=>'event+attend_maybe_btn_label','id'=>'event_attend_maybe_btn'),$_smarty_tpl);?>

                 <?php echo smarty_function_decorator(array('name'=>'button_list_item','type'=>'submit','langLabel'=>'event+attend_no_btn_label','id'=>'event_attend_no_btn'),$_smarty_tpl);?>

             <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>'event_attend'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </div>
</div>
<?php }?>
<div class="ow_left ow_supernarrow">
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('block_decorator', array('name'=>'box','addClass'=>'ow_std_margin','iconClass'=>'ow_ic_info','langLabel'=>'event+view_page_details_block_cap_label')); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>'box','addClass'=>'ow_std_margin','iconClass'=>'ow_ic_info','langLabel'=>'event+view_page_details_block_cap_label'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <table class="ow_table_3">
        <tr class="ow_tr_first">
            <td class="ow_label" style="width: 25%"><?php echo smarty_function_text(array('key'=>'event+view_page_date_label'),$_smarty_tpl);?>
</td>
            <td class="ow_value"><?php echo $_smarty_tpl->tpl_vars['info']->value['date'];?>
</td>
        </tr>
        <?php if (!empty($_smarty_tpl->tpl_vars['info']->value['endDate'])){?>
        <tr>
            <td class="ow_label" style="width: 25%"><?php echo smarty_function_text(array('key'=>'event+view_page_end_date_label'),$_smarty_tpl);?>
</td>
            <td class="ow_value"><?php echo $_smarty_tpl->tpl_vars['info']->value['endDate'];?>
</td>
        </tr>
        <?php }?>
        <tr>
            <td class="ow_label" style="width: 25%"><?php echo smarty_function_text(array('key'=>'event+view_page_location_label'),$_smarty_tpl);?>
</td>
            <td class="ow_value"><div style="width:90px;"><?php echo $_smarty_tpl->tpl_vars['info']->value['location'];?>
</div></td>
        </tr>
        <tr class="ow_tr_last">
            <td class="ow_label" style="width: 25%"><?php echo smarty_function_text(array('key'=>'event+view_page_created_label'),$_smarty_tpl);?>
</td>
            <td class="ow_value"><a href="<?php echo $_smarty_tpl->tpl_vars['info']->value['creatorLink'];?>
"><?php echo $_smarty_tpl->tpl_vars['info']->value['creatorName'];?>
</td>
        </tr>
    </table>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>'box','addClass'=>'ow_std_margin','iconClass'=>'ow_ic_info','langLabel'=>'event+view_page_details_block_cap_label'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    
    <?php echo smarty_function_add_content(array('key'=>'events.view.content.after_event_description'),$_smarty_tpl);?>

    
    <?php if (!empty($_smarty_tpl->tpl_vars['inviteLink']->value)){?><div class="inviteLink ow_std_margin"><?php echo smarty_function_decorator(array('name'=>'button','class'=>'ow_ic_add','type'=>'button','langLabel'=>'event+invite_btn_label','id'=>'inviteLink'),$_smarty_tpl);?>
</div><?php }?>
    <div class="userList"><?php echo $_smarty_tpl->tpl_vars['userListCmp']->value;?>
</div>
</div>
<div class="ow_right ow_superwide">

    <?php $_smarty_tpl->smarty->_tag_stack[] = array('block_decorator', array('name'=>'box','type'=>'empty','iconClass'=>'ow_ic_picture','langLabel'=>'event+view_page_image_block_cap_label','addClass'=>"ow_std_margin clearfix")); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>'box','type'=>'empty','iconClass'=>'ow_ic_picture','langLabel'=>'event+view_page_image_block_cap_label','addClass'=>"ow_std_margin clearfix"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php if (!empty($_smarty_tpl->tpl_vars['info']->value['image'])){?><img src="<?php echo $_smarty_tpl->tpl_vars['info']->value['image'];?>
" alt="" style="float: right;margin: 5px;" /><?php }?><?php echo $_smarty_tpl->tpl_vars['info']->value['desc'];?>

    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>'box','type'=>'empty','iconClass'=>'ow_ic_picture','langLabel'=>'event+view_page_image_block_cap_label','addClass'=>"ow_std_margin clearfix"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php echo smarty_function_add_content(array('key'=>'socialsharing.get_sharing_buttons'),$_smarty_tpl);?>

    <?php echo smarty_function_add_content(array('key'=>'events.view.content.between_description_and_wall'),$_smarty_tpl);?>

    <?php echo $_smarty_tpl->tpl_vars['comments']->value;?>

</div>
</div>
<?php }?>
<?php }} ?>