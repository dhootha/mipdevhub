<?php /* Smarty version Smarty-3.1.12, created on 2013-09-06 00:11:33
         compiled from "/apps/mip/oxwall/ow_system_plugins/admin/views/controllers/questions_index.html" */ ?>
<?php /*%%SmartyHeaderCode:73264649052298025cf27e2-06495637%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '475b8e085bb969a75c315d33b122c3f4dbce0112' => 
    array (
      0 => '/apps/mip/oxwall/ow_system_plugins/admin/views/controllers/questions_index.html',
      1 => 1359700751,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '73264649052298025cf27e2-06495637',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'contentMenu' => 0,
    'editAccountTypeUrl' => 0,
    'questionsBySections' => 0,
    'section' => 0,
    'sectionDeleteUrlList' => 0,
    'questions' => 0,
    'question' => 0,
    'questionValues' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5229802605d455_68593542',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5229802605d455_68593542')) {function content_5229802605d455_68593542($_smarty_tpl) {?><?php if (!is_callable('smarty_block_script')) include '/apps/mip/oxwall/ow_smarty/plugin/block.script.php';
if (!is_callable('smarty_function_url_for')) include '/apps/mip/oxwall/ow_smarty/plugin/function.url_for.php';
if (!is_callable('smarty_function_text')) include '/apps/mip/oxwall/ow_smarty/plugin/function.text.php';
if (!is_callable('smarty_block_form')) include '/apps/mip/oxwall/ow_smarty/plugin/block.form.php';
if (!is_callable('smarty_block_block_decorator')) include '/apps/mip/oxwall/ow_smarty/plugin/block.block_decorator.php';
if (!is_callable('smarty_function_label')) include '/apps/mip/oxwall/ow_smarty/plugin/function.label.php';
if (!is_callable('smarty_function_input')) include '/apps/mip/oxwall/ow_smarty/plugin/function.input.php';
if (!is_callable('smarty_function_cycle')) include '/apps/mip/oxwall/ow_libraries/smarty3/plugins/function.cycle.php';
if (!is_callable('smarty_function_decorator')) include '/apps/mip/oxwall/ow_smarty/plugin/function.decorator.php';
if (!is_callable('smarty_function_error')) include '/apps/mip/oxwall/ow_smarty/plugin/function.error.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('script', array()); $_block_repeat=true; echo smarty_block_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


window.editLangValue = function editLangValue(_prefix, _key, _callback){

    if ( !window.question_langs_floatbox_display )
    {
        window.question_langs_floatbox_display = true;
        $.post( '<?php echo smarty_function_url_for(array('for'=>"ADMIN_CTRL_Languages:ajaxEditLanguageValuesForm"),$_smarty_tpl);?>
?prefix='+_prefix+'&key='+_key, {}, function(json){
            if(document['ajaxLangValueEditForms'] == undefined)
                    {
                        document['ajaxLangValueEditForms'] = [];
                    }

            document['ajaxLangValueEditForms'][_prefix+'-'+_key] = new OW_FloatBox({$title: '<?php echo smarty_function_text(array('key'=>"admin+questions_edit_section_name_title"),$_smarty_tpl);?>
', $contents: json['markup'], width: 556});
                    document['ajaxLangValueEditForms'][_prefix+'-'+_key+'callback'] = _callback;

            document['ajaxLangValueEditForms'][_prefix+'-'+_key].bind("close", function() {
                window.question_langs_floatbox_display = false;
            });

            OW.addScriptFiles(json['include_js'], function(){ OW.addScript(json['js']); });

        }, 'json');
    }
}

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php echo $_smarty_tpl->tpl_vars['contentMenu']->value;?>


<p><?php echo smarty_function_text(array('key'=>'admin+questions_index_info_txt'),$_smarty_tpl);?>
</p>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('form', array('name'=>'qst_account_type_select_form')); $_block_repeat=true; echo smarty_block_form(array('name'=>'qst_account_type_select_form'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php $_smarty_tpl->smarty->_tag_stack[] = array('block_decorator', array('name'=>"box",'type'=>"normal",'addClass'=>"ow_wide ow_center ow_automargin ow_stdmargin")); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>"box",'type'=>"normal",'addClass'=>"ow_wide ow_center ow_automargin ow_stdmargin"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php echo smarty_function_label(array('name'=>'accountType'),$_smarty_tpl);?>

        <?php echo smarty_function_input(array('name'=>'accountType'),$_smarty_tpl);?>

        <a href="<?php echo $_smarty_tpl->tpl_vars['editAccountTypeUrl']->value;?>
" class="ow_lbutton" style="margin-left:15px;" ><?php echo smarty_function_text(array('key'=>"admin+questions_edit_account_types_button"),$_smarty_tpl);?>
</a>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>"box",'type'=>"normal",'addClass'=>"ow_wide ow_center ow_automargin ow_stdmargin"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>'qst_account_type_select_form'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<p><?php echo smarty_function_text(array('key'=>'admin+questions_index_drag_n_drop_info_txt'),$_smarty_tpl);?>
</p>

<div class="ow_admin_profile_questions_list_div">
    <table class="ow_table_2 ow_smallmargin">
        <tr class="ow_tr_first ow_tr_last">
            <th class=""  style="width:150px;" ><div style="width:150px;overflow:hidden;"><?php echo smarty_function_text(array('key'=>'admin+question_column_question'),$_smarty_tpl);?>
</div></th>
            <th class="" style="width:60px;"><div style="width:60px;overflow:hidden;"><?php echo smarty_function_text(array('key'=>'admin+question_column_type'),$_smarty_tpl);?>
</div></th>
            <th class="" style="width:115px;"><div style="width:115px;overflow:hidden;"><?php echo smarty_function_text(array('key'=>'admin+question_column_values'),$_smarty_tpl);?>
</div></th>
            <th class=" ow_small ow_lightweigh"  style="width:50px;"><div style="width:50px;overflow:hidden;"><?php echo smarty_function_text(array('key'=>'admin+question_column_require'),$_smarty_tpl);?>
</div></th>
            <th class=" ow_small ow_lightweight" style="width:27px;"><div style="width:27px;overflow:hidden;"><?php echo smarty_function_text(array('key'=>'admin+question_column_sign_up'),$_smarty_tpl);?>
</div></th>
            <th class=" ow_small ow_lightweight" style="width:39px;"><div style="width:39px;overflow:hidden;"><?php echo smarty_function_text(array('key'=>'admin+question_column_profile_edit'),$_smarty_tpl);?>
</div></th>
            <th class=" ow_small ow_lightweight" style="width:29px;"><div style="width:29px;overflow:hidden;"><?php echo smarty_function_text(array('key'=>'admin+question_column_view'),$_smarty_tpl);?>
</div></th>
            <th class=" ow_small ow_lightweight" style="width:40px;"><div style="width:40px;overflow:hidden;"><?php echo smarty_function_text(array('key'=>'admin+question_column_search'),$_smarty_tpl);?>
</div></th>
            <th style="width:62px;"></th>
        </tr>
    </table>

    <?php  $_smarty_tpl->tpl_vars['questions'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['questions']->_loop = false;
 $_smarty_tpl->tpl_vars['section'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['questionsBySections']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['questions']->key => $_smarty_tpl->tpl_vars['questions']->value){
$_smarty_tpl->tpl_vars['questions']->_loop = true;
 $_smarty_tpl->tpl_vars['section']->value = $_smarty_tpl->tpl_vars['questions']->key;
?>
    <table class="ow_table_2 ow_smallmargin ow_admin_profile_questions_list <?php if (!$_smarty_tpl->tpl_vars['section']->value){?>no_section<?php }?>" sectionName=<?php if ($_smarty_tpl->tpl_vars['section']->value){?>"<?php echo $_smarty_tpl->tpl_vars['section']->value;?>
"<?php }else{ ?>"no_section"<?php }?>>
        <tr class="question_section_tr ow_tr_first">
            <th class="section_value <?php if ($_smarty_tpl->tpl_vars['section']->value){?>ow_admin_profile_question_dnd_cursor<?php }?>" colspan="8"><div style="width:700px;overflow:hidden;" ><?php if ($_smarty_tpl->tpl_vars['section']->value){?><?php echo smarty_function_text(array('key'=>"base+questions_section_".((string)$_smarty_tpl->tpl_vars['section']->value)."_label"),$_smarty_tpl);?>
<?php }else{ ?><?php echo smarty_function_text(array('key'=>"base+questions_no_section_label"),$_smarty_tpl);?>
<?php }?></div></th>
            <th class="ow_nowrap delete_edit_buttons" style="height:20px;width:75px;">

                <div class="quest_buttons" style="height:20px;width:75px;">
                    <?php if ($_smarty_tpl->tpl_vars['section']->value){?>
                        <a href="javascript://" class="ow_lbutton edit_sectionNameLang" style="display:none;" ><?php echo smarty_function_text(array('key'=>'admin+btn_label_edit'),$_smarty_tpl);?>
</a>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['sectionDeleteUrlList']->value[$_smarty_tpl->tpl_vars['section']->value];?>
" class="ow_lbutton ow_red section_delete_button" style="display:none;" ><?php echo smarty_function_text(array('key'=>'admin+btn_label_delete'),$_smarty_tpl);?>
</a>
                    <?php }?>
                </div>

            </th>
        </tr>
       <?php if (isset($_smarty_tpl->tpl_vars['questions']->value)){?>
           <?php  $_smarty_tpl->tpl_vars['question'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['question']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['questions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['question']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['question']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['question']->key => $_smarty_tpl->tpl_vars['question']->value){
$_smarty_tpl->tpl_vars['question']->_loop = true;
 $_smarty_tpl->tpl_vars['question']->iteration++;
 $_smarty_tpl->tpl_vars['question']->last = $_smarty_tpl->tpl_vars['question']->iteration === $_smarty_tpl->tpl_vars['question']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['question']['last'] = $_smarty_tpl->tpl_vars['question']->last;
?>
                  <?php $_smarty_tpl->_capture_stack[0][] = array("evenstyle", null, null); ob_start(); ?><?php echo smarty_function_cycle(array('name'=>"acc_".((string)$_smarty_tpl->tpl_vars['section']->value),'values'=>"ow_alt1,ow_alt2"),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
                  <tr class="question_tr ow_admin_profile_question_dnd_cursor <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['question']['last']){?>ow_tr_last<?php }?>" question_name="<?php echo $_smarty_tpl->tpl_vars['question']->value['name'];?>
" style="width:150px;">
                    <td class="<?php echo Smarty::$_smarty_vars['capture']['evenstyle'];?>
 ow_txtleft" style="width:150px;"><div style="width:150px;overflow:hidden;"  ><?php echo smarty_function_text(array('key'=>"base+questions_question_".((string)$_smarty_tpl->tpl_vars['question']->value['name'])."_label"),$_smarty_tpl);?>
</div></td>
                    <td class="<?php echo Smarty::$_smarty_vars['capture']['evenstyle'];?>
 ow_small"  style="width:60px;"><div  style="width:60px;"><?php echo smarty_function_text(array('key'=>"base+questions_question_presentation_".((string)$_smarty_tpl->tpl_vars['question']->value['presentation'])."_label"),$_smarty_tpl);?>
</div></td>
                    <td class="<?php echo Smarty::$_smarty_vars['capture']['evenstyle'];?>
 ow_small" style="width:115px;">
                        <?php if (isset($_smarty_tpl->tpl_vars['questionValues']->value[$_smarty_tpl->tpl_vars['question']->value['name']]['values'])){?>

                            <center><a class="question_values" href="javascript://"><?php echo smarty_function_text(array('key'=>"admin+questions_values_count",'count'=>$_smarty_tpl->tpl_vars['questionValues']->value[$_smarty_tpl->tpl_vars['question']->value['name']]['count']),$_smarty_tpl);?>
</a></center>

                            <div style="padding:0 0 0 15px;text-align:left;display:none;width:100px;overflow:hidden;"  >
                                <ul style="list-style-type:disc;">
                                    <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['questionValues']->value[$_smarty_tpl->tpl_vars['question']->value['name']]['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
                                            <li><?php echo smarty_function_text(array('key'=>"base+questions_question_".((string)$_smarty_tpl->tpl_vars['question']->value['name'])."_value_".((string)$_smarty_tpl->tpl_vars['value']->value->value)),$_smarty_tpl);?>
</li>
                                    <?php } ?>
                                </ul>
                            </div>
                        <?php }else{ ?>
                            <div style="width:115px;"></div>
                        <?php }?>
                    </td>
                    <td class="<?php echo Smarty::$_smarty_vars['capture']['evenstyle'];?>
" style="width:50px;"><div class="<?php if ($_smarty_tpl->tpl_vars['question']->value['required']){?>ow_marked_cell<?php }?>" style="width:50px;">&nbsp;</div></td>
                    <td class="<?php echo Smarty::$_smarty_vars['capture']['evenstyle'];?>
" style="width:27px;"><div class="<?php if ($_smarty_tpl->tpl_vars['question']->value['onJoin']){?>ow_marked_cell<?php }?>" style="width:27px;">&nbsp;</div></td>
                    <td class="<?php echo Smarty::$_smarty_vars['capture']['evenstyle'];?>
" style="width:39px;"><div class="<?php if ($_smarty_tpl->tpl_vars['question']->value['onEdit']){?>ow_marked_cell<?php }?>" style="width:39px;">&nbsp;</div></td>
                    <td class="<?php echo Smarty::$_smarty_vars['capture']['evenstyle'];?>
" style="width:29px;"><div class="<?php if ($_smarty_tpl->tpl_vars['question']->value['onView']){?>ow_marked_cell<?php }?>" style="width:29px;">&nbsp;</div></td>
                    <td class="<?php echo Smarty::$_smarty_vars['capture']['evenstyle'];?>
" style="width:40px;"><div class="<?php if ($_smarty_tpl->tpl_vars['question']->value['onSearch']){?>ow_marked_cell<?php }?>" style="width:40px;">&nbsp;</div></td>
                    <td class="<?php echo Smarty::$_smarty_vars['capture']['evenstyle'];?>
 ow_nowrap delete_edit_buttons ow_center" style="height:20px;width:75px;">
                        <div class="quest_buttons" style="height:20px;width:75px;">
                            <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['question']->value['id'];?>
">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['question']->value['questionEditUrl'];?>
" class="ow_lbutton question_edit_button" style="display:none;"><?php echo smarty_function_text(array('key'=>'admin+btn_label_edit'),$_smarty_tpl);?>
</a>
                            <?php if ($_smarty_tpl->tpl_vars['question']->value['base']!=1&&$_smarty_tpl->tpl_vars['question']->value['removable']==1){?><a href="<?php echo $_smarty_tpl->tpl_vars['question']->value['questionDeleteUrl'];?>
" class="ow_lbutton ow_red question_delete_button" style="display:none;"><?php echo smarty_function_text(array('key'=>'admin+btn_label_delete'),$_smarty_tpl);?>
</a><?php }?>
                        </div>
                    </td>
                 </tr>

           <?php } ?>
        <?php }?>
       
        <tr class="question_tr no_question" style="display:none;">
            <td colspan="9"></td>
        </tr>
        
        <tr class="ow_tr_delimiter"><td></td></tr>
    </table>
    <?php } ?>
</div>
<div class="clearfix ow_std_margin">
    <div class="ow_right">
        <?php echo smarty_function_decorator(array('name'=>'button','class'=>"ow_ic_add add_new_question_button ow_positive",'langLabel'=>'admin+questions_add_new_question_button'),$_smarty_tpl);?>

    </div>
</div>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('block_decorator', array('name'=>"box",'type'=>"empty",'langLabel'=>"admin+questions_profile_question_sections_title")); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>"box",'type'=>"empty",'langLabel'=>"admin+questions_profile_question_sections_title"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <p><?php echo smarty_function_text(array('key'=>'admin+questions_section_info_txt'),$_smarty_tpl);?>
</p>
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('block_decorator', array('name'=>"box",'type'=>"normal",'addClass'=>"ow_stdmargin ow_wide ow_automargin ow_center")); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>"box",'type'=>"normal",'addClass'=>"ow_stdmargin ow_wide ow_automargin ow_center"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <?php $_smarty_tpl->smarty->_tag_stack[] = array('form', array('name'=>"qst_add_section_form")); $_block_repeat=true; echo smarty_block_form(array('name'=>"qst_add_section_form"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <div style="display:inline;" ><?php echo smarty_function_label(array('name'=>'section_name'),$_smarty_tpl);?>
: </div><div style="display:inline;" ><?php echo smarty_function_input(array('name'=>'section_name'),$_smarty_tpl);?>
</div>
                    <?php echo smarty_function_decorator(array('name'=>'button','type'=>"submit",'buttonName'=>"qst_new_section",'class'=>"ow_ic_add",'langLabel'=>'admin+questions_add_new_section_button'),$_smarty_tpl);?>
<br><div style="color:red;"><?php echo smarty_function_error(array('name'=>'section_name'),$_smarty_tpl);?>
</div>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>"qst_add_section_form"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>"box",'type'=>"normal",'addClass'=>"ow_stdmargin ow_wide ow_automargin ow_center"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>"box",'type'=>"empty",'langLabel'=>"admin+questions_profile_question_sections_title"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>