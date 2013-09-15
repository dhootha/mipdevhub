<?php /* Smarty version Smarty-3.1.12, created on 2013-09-06 06:53:05
         compiled from "/apps/mip/oxwall/ow_plugins/forum/views/controllers/edit_post_index.html" */ ?>
<?php /*%%SmartyHeaderCode:14571718115229de41c39535-40521789%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ed6532b5b27a8040f36acdb2ce5afc9f546aa483' => 
    array (
      0 => '/apps/mip/oxwall/ow_plugins/forum/views/controllers/edit_post_index.html',
      1 => 1359700750,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14571718115229de41c39535-40521789',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'isHidden' => 0,
    'componentForumCaption' => 0,
    'breadcrumb' => 0,
    'enableAttachments' => 0,
    'postId' => 0,
    'attachments' => 0,
    'attm' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5229de41d3f105_29103150',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5229de41d3f105_29103150')) {function content_5229de41d3f105_29103150($_smarty_tpl) {?><?php if (!is_callable('smarty_block_style')) include '/apps/mip/oxwall/ow_smarty/plugin/block.style.php';
if (!is_callable('smarty_block_script')) include '/apps/mip/oxwall/ow_smarty/plugin/block.script.php';
if (!is_callable('smarty_function_url_for_route')) include '/apps/mip/oxwall/ow_smarty/plugin/function.url_for_route.php';
if (!is_callable('smarty_block_form')) include '/apps/mip/oxwall/ow_smarty/plugin/block.form.php';
if (!is_callable('smarty_function_cycle')) include '/apps/mip/oxwall/ow_libraries/smarty3/plugins/function.cycle.php';
if (!is_callable('smarty_function_text')) include '/apps/mip/oxwall/ow_smarty/plugin/function.text.php';
if (!is_callable('smarty_function_input')) include '/apps/mip/oxwall/ow_smarty/plugin/function.input.php';
if (!is_callable('smarty_function_error')) include '/apps/mip/oxwall/ow_smarty/plugin/function.error.php';
if (!is_callable('smarty_function_submit')) include '/apps/mip/oxwall/ow_smarty/plugin/function.submit.php';
?>


<?php $_smarty_tpl->smarty->_tag_stack[] = array('style', array()); $_block_repeat=true; echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


    .ow_forum_attachment_icon {
        display: inline-block;
        background-repeat: no-repeat;
        cursor: pointer;
        width: 14px;
        height: 17px;
    }
    .forum_attachments_label {
        margin: 15px 0 5px;
        padding-left: 5px;
        font-weight: bold;
    }

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_style(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php $_smarty_tpl->smarty->_tag_stack[] = array('script', array()); $_block_repeat=true; echo smarty_block_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


    $('#toggle_attach_link').click(function(){
        $('#attach_file_inputs').toggle();
    });
    $('#toggle_attach_edit_link').click(function(){
        $('#attach_edit_file_inputs').toggle();
    });
    
    $(".ow_forum_attachment").hover(
        function(){
            $(this).find("a.forum_delete_attachment").show();
        },
        function(){
            $(this).find("a.forum_delete_attachment").hide();
        }
    );
    
    $("a.forum_delete_attachment").each(function(){
        
        var container_handler = $(this).parent();
        
        $(this).click(function(){            
            
            if ( confirm(OW.getLanguageText('forum', 'confirm_delete_attachment')) )
            {
               var attachment_id = $(this).attr("rel");
               
               var params = {};
               var url = '<?php echo smarty_function_url_for_route(array('for'=>'forum_delete_attachment'),$_smarty_tpl);?>
';
               params['attachmentId'] = attachment_id;
               
               $.ajaxSetup({dataType: 'json'});
               
               $.post(url, params, function(data){
                    
                    if ( data.result == true )
                    {
                        OW.info(data.msg);
                        
                        container_handler.remove();
                    }
                    else if (data.error != undefined)
                    {
                        OW.warning(data.error);
                    }
               });             
            }
            else
            {
                return false;
            }
        });
    });

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php if ($_smarty_tpl->tpl_vars['isHidden']->value){?>
    <div class="ow_stdmargin">
        <?php echo $_smarty_tpl->tpl_vars['componentForumCaption']->value;?>

    </div>
<?php }?>
<?php echo $_smarty_tpl->tpl_vars['breadcrumb']->value;?>



<?php $_smarty_tpl->smarty->_tag_stack[] = array('form', array('name'=>'edit-post-form')); $_block_repeat=true; echo smarty_block_form(array('name'=>'edit-post-form'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <table class="ow_form ow_table_1" width="100%">
    <tbody>
        <tr class="ow_alt<?php echo smarty_function_cycle(array('values'=>'2,1'),$_smarty_tpl);?>
 ow_tr_first <?php if (!$_smarty_tpl->tpl_vars['enableAttachments']->value){?>ow_tr_last<?php }?>">
            <td class="ow_label"><?php echo smarty_function_text(array('key'=>'forum+new_topic_body'),$_smarty_tpl);?>
</td>
            <td class="ow_value">
                <?php echo smarty_function_input(array('name'=>'text','class'=>"ow_smallmargin",'id'=>'post_body'),$_smarty_tpl);?>
<br />
                <?php echo smarty_function_error(array('name'=>'text'),$_smarty_tpl);?>

            </td>
        </tr>
        <?php if ($_smarty_tpl->tpl_vars['enableAttachments']->value){?>
        <tr class="ow_alt<?php echo smarty_function_cycle(array('values'=>'2,1'),$_smarty_tpl);?>
 ow_tr_last">
            <td class="ow_label"><?php echo smarty_function_text(array('key'=>'forum+attachments'),$_smarty_tpl);?>
</td>
            <td class="ow_value ow_txtleft ow_small">
                <?php if (isset($_smarty_tpl->tpl_vars['attachments']->value[$_smarty_tpl->tpl_vars['postId']->value])){?>
	            <?php  $_smarty_tpl->tpl_vars['attm'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['attm']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['attachments']->value[$_smarty_tpl->tpl_vars['postId']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['attm']->key => $_smarty_tpl->tpl_vars['attm']->value){
$_smarty_tpl->tpl_vars['attm']->_loop = true;
?>
	            <span class="ow_forum_attachment">
	                <span class="ow_forum_attachment_icon ow_ic_attach">&nbsp;</span>
	                <?php if ($_smarty_tpl->tpl_vars['attm']->value['downloadUrl']!=''){?><a href="<?php echo $_smarty_tpl->tpl_vars['attm']->value['downloadUrl'];?>
"><?php echo $_smarty_tpl->tpl_vars['attm']->value['fileName'];?>
</a><?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['attm']->value['fileName'];?>
<?php }?> (<?php echo $_smarty_tpl->tpl_vars['attm']->value['fileSize'];?>
Kb)
	                <a href="javascript://" class="forum_delete_attachment ow_lbutton ow_hidden" rel="<?php echo $_smarty_tpl->tpl_vars['attm']->value['id'];?>
"><?php echo smarty_function_text(array('key'=>'base+delete'),$_smarty_tpl);?>
</a>
	            </span><br />
	            <?php } ?>
	            <?php }?>
	            
	            <span class="ow_forum_attachment_icon ow_ic_attach">&nbsp;</span>
                <a href="javascript://" id="toggle_attach_edit_link"><?php echo smarty_function_text(array('key'=>'forum+attach_files'),$_smarty_tpl);?>
</a><br /><br />
                <div class="ow_hidden ow_smallmargin" id="attach_edit_file_inputs">
                    <?php echo smarty_function_input(array('name'=>'attachments'),$_smarty_tpl);?>

                </div>
            </td>
        </tr>
        <?php }?>
    </tbody>
    </table>  
    <div class="clearfix ow_stdmargin">
        <div class="ow_right">
        <?php echo smarty_function_submit(array('name'=>'save','class'=>'ow_ic_save ow_positive'),$_smarty_tpl);?>
   
        </div>     
    </div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>'edit-post-form'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>