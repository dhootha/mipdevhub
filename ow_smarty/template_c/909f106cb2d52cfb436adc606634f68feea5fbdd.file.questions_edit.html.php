<?php /* Smarty version Smarty-3.1.12, created on 2013-09-06 00:12:00
         compiled from "/apps/mip/oxwall/ow_system_plugins/admin/views/controllers/questions_edit.html" */ ?>
<?php /*%%SmartyHeaderCode:1781864601522980409d5360-38025631%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '909f106cb2d52cfb436adc606634f68feea5fbdd' => 
    array (
      0 => '/apps/mip/oxwall/ow_system_plugins/admin/views/controllers/questions_edit.html',
      1 => 1359700751,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1781864601522980409d5360-38025631',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'contentMenu' => 0,
    'question' => 0,
    'questionLabel' => 0,
    'questionDescription' => 0,
    'formData' => 0,
    'formEl' => 0,
    'questionValues' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_52298040b72a61_10489845',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52298040b72a61_10489845')) {function content_52298040b72a61_10489845($_smarty_tpl) {?><?php if (!is_callable('smarty_block_script')) include '/apps/mip/oxwall/ow_smarty/plugin/block.script.php';
if (!is_callable('smarty_function_url_for')) include '/apps/mip/oxwall/ow_smarty/plugin/function.url_for.php';
if (!is_callable('smarty_function_text')) include '/apps/mip/oxwall/ow_smarty/plugin/function.text.php';
if (!is_callable('smarty_block_form')) include '/apps/mip/oxwall/ow_smarty/plugin/block.form.php';
if (!is_callable('smarty_function_cycle')) include '/apps/mip/oxwall/ow_libraries/smarty3/plugins/function.cycle.php';
if (!is_callable('smarty_function_label')) include '/apps/mip/oxwall/ow_smarty/plugin/function.label.php';
if (!is_callable('smarty_function_input')) include '/apps/mip/oxwall/ow_smarty/plugin/function.input.php';
if (!is_callable('smarty_function_error')) include '/apps/mip/oxwall/ow_smarty/plugin/function.error.php';
if (!is_callable('smarty_function_desc')) include '/apps/mip/oxwall/ow_smarty/plugin/function.desc.php';
if (!is_callable('smarty_function_decorator')) include '/apps/mip/oxwall/ow_smarty/plugin/function.decorator.php';
if (!is_callable('smarty_function_submit')) include '/apps/mip/oxwall/ow_smarty/plugin/function.submit.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('script', array()); $_block_repeat=true; echo smarty_block_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


window.editLangValue = function editLangValue(_prefix, _key, title,_callback)
{
    if ( !window.question_langs_floatbox_display )
    {
        window.question_langs_floatbox_display = true;
        $.post( '<?php echo smarty_function_url_for(array('for'=>"ADMIN_CTRL_Languages:ajaxEditLanguageValuesForm"),$_smarty_tpl);?>
?prefix='+_prefix+'&key='+_key, {}, function(json)
        {
            if(document['ajaxLangValueEditForms'] == undefined)
            {
                document['ajaxLangValueEditForms'] = [];
            }

            document['ajaxLangValueEditForms'][_prefix+'-'+_key] = new OW_FloatBox({$title: title, $contents: json['markup'], width: 556});
                    document['ajaxLangValueEditForms'][_prefix+'-'+_key+'callback'] = _callback;


            document['ajaxLangValueEditForms'][_prefix+'-'+_key].bind("close", function() {
                window.question_langs_floatbox_display = false;
            });

            OW.addScriptFiles(json['include_js'], function(){ OW.addScript(json['js']); });

        }, 'json');
    }
}

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('script', array()); $_block_repeat=true; echo smarty_block_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


        $(function(){
            $("#edit_question_add_value_button").click(
                function() {
                        window.addValueBox = new OW_FloatBox({$title: '<?php echo smarty_function_text(array('key'=>'admin+questions_add_question_values_title'),$_smarty_tpl);?>
',
                        $contents: $('#add-qst-values-div'),
                        height: '300px',
                        width: '480px'});
                }
            ) 
       });

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('script', array()); $_block_repeat=true; echo smarty_block_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    
        $("form[name='qst_edit_form'] select[name='qst_answer_type']").change(
           function(){ this.form.submit(); }
        );
   
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php echo $_smarty_tpl->tpl_vars['contentMenu']->value;?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('form', array('name'=>'qst_edit_form')); $_block_repeat=true; echo smarty_block_form(array('name'=>'qst_edit_form'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<input type="hidden" id="edit_questionId" name="questionId" value="<?php echo $_smarty_tpl->tpl_vars['question']->value->id;?>
">
<input type="hidden" id="edit_questionName" name="questionName" value="<?php echo $_smarty_tpl->tpl_vars['question']->value->name;?>
">
	<table class="ow_table_1 ow_form ow_admin_edit_profile_question">
            
         <tr class="<?php echo smarty_function_cycle(array('values'=>'ow_alt2,ow_alt1'),$_smarty_tpl);?>
 tr_qst_name ow_tr_first">
		        <td class="ow_label">
                            <?php echo smarty_function_text(array('key'=>"admin+questions_question_name_label"),$_smarty_tpl);?>

		        </td>
		        <td class="ow_value">
                            <a href="javascript://" id="edit_questionNameLang"><?php echo $_smarty_tpl->tpl_vars['questionLabel']->value;?>
</a>
		        </td>
		        <td class="ow_desc ow_small">
		        </td>
		 </tr>

          <tr class="<?php echo smarty_function_cycle(array('values'=>'ow_alt2,ow_alt1'),$_smarty_tpl);?>
 tr_qst_name">
		        <td class="ow_label">
                            <?php echo smarty_function_text(array('key'=>"admin+questions_edit_question_description_label"),$_smarty_tpl);?>

		        </td>
		        <td class="ow_value">
                            <a href="javascript://"  id="edit_questionDescriptionLang" ><?php echo $_smarty_tpl->tpl_vars['questionDescription']->value;?>
</a>
		        </td>
		        <td class="ow_desc ow_small">
		        </td>
		 </tr>

		<?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_smarty_tpl->tpl_vars['formEl'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['formData']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['field']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['field']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value){
$_smarty_tpl->tpl_vars['field']->_loop = true;
 $_smarty_tpl->tpl_vars['formEl']->value = $_smarty_tpl->tpl_vars['field']->key;
 $_smarty_tpl->tpl_vars['field']->iteration++;
 $_smarty_tpl->tpl_vars['field']->last = $_smarty_tpl->tpl_vars['field']->iteration === $_smarty_tpl->tpl_vars['field']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['f']['last'] = $_smarty_tpl->tpl_vars['field']->last;
?>
		    <tr class="<?php echo smarty_function_cycle(array('values'=>'ow_alt2,ow_alt1'),$_smarty_tpl);?>
 tr_<?php echo $_smarty_tpl->tpl_vars['formEl']->value;?>
 <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['f']['last']){?>ow_tr_last<?php }?>">
		        <td class="ow_label">
		            <?php echo smarty_function_label(array('name'=>$_smarty_tpl->tpl_vars['formEl']->value),$_smarty_tpl);?>

		        </td>
		        <td class="ow_value">
                            <?php echo smarty_function_input(array('name'=>$_smarty_tpl->tpl_vars['formEl']->value),$_smarty_tpl);?>

                            <br/>
                            <?php echo smarty_function_error(array('name'=>$_smarty_tpl->tpl_vars['formEl']->value),$_smarty_tpl);?>

		        </td>
		        <td class="ow_desc ow_small"><?php echo smarty_function_desc(array('name'=>$_smarty_tpl->tpl_vars['formEl']->value),$_smarty_tpl);?>
</td>
		    </tr>
        <?php if ($_smarty_tpl->tpl_vars['formEl']->value=='qst_answer_type'&&($_smarty_tpl->tpl_vars['question']->value->type=='select'||$_smarty_tpl->tpl_vars['question']->value->type=='multiselect')&&$_smarty_tpl->tpl_vars['question']->value->presentation!='date'){?>
            <tr class="<?php echo smarty_function_cycle(array('values'=>'ow_alt2,ow_alt1'),$_smarty_tpl);?>
 tr_<?php echo $_smarty_tpl->tpl_vars['formEl']->value;?>
 ">
                            <td class="ow_label">
                                <label><?php echo smarty_function_text(array('key'=>'admin+question_possible_values_label'),$_smarty_tpl);?>
</label>
                            </td>
                            <td class="ow_value">
                                <div class="ow_smallmargin"><?php echo smarty_function_text(array('key'=>'admin+questions_admin_existing_values'),$_smarty_tpl);?>
: <span class="ow_highlight ow_small" style="padding: 1px 3px;"><?php echo smarty_function_text(array('key'=>'admin+questions_admin_dragndrop_reorder'),$_smarty_tpl);?>
</span></div>
                                <div class="question_values ow_smallmargin" >
                                     <div style="cursor:move; display:none;" class="clearfix question_value_block_template">
                                              <div class="quest_value ow_left" style="max-width:335px;" >
                                              </div>
                                               <div class="quest_buttons ow_left">
                                                    <a class="ow_lbutton question_value_edit" href="javascript://"><?php echo smarty_function_text(array('key'=>'admin+btn_label_edit'),$_smarty_tpl);?>
</a>
                                                    <a class="ow_lbutton ow_red question_value_delete" href="javascript://"  ><?php echo smarty_function_text(array('key'=>'admin+btn_label_delete'),$_smarty_tpl);?>
</a>
                                               </div>
                                    </div>
                                    <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['questionValues']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>


                                        <div style="cursor:move;" class="clearfix question_value_block" question_value="<?php echo $_smarty_tpl->tpl_vars['value']->value->value;?>
">
                                              <div class="quest_value ow_left" style="max-width:335px;" >
                                                  <?php echo smarty_function_text(array('key'=>"base+questions_question_".((string)$_smarty_tpl->tpl_vars['value']->value->questionName)."_value_".((string)$_smarty_tpl->tpl_vars['value']->value->value)),$_smarty_tpl);?>

                                              </div>
                                               <div class="quest_buttons ow_left">
                                                    <a class="ow_lbutton question_value_edit"  href="javascript://"><?php echo smarty_function_text(array('key'=>'admin+btn_label_edit'),$_smarty_tpl);?>
</a>
                                                    <a class="ow_lbutton ow_red question_value_delete" href="javascript://"  ><?php echo smarty_function_text(array('key'=>'admin+btn_label_delete'),$_smarty_tpl);?>
</a>
                                               </div>
                                        </div>
                                    <?php } ?>
                                </div>
               
                                <?php echo smarty_function_decorator(array('name'=>"button",'id'=>"edit_question_add_value_button",'class'=>"ow_ic_add",'langLabel'=>'admin+questions_admin_add_new_values'),$_smarty_tpl);?>

                                <input type="hidden" id="question_values_order" name="question_values_order" />
                            </td>
                            <td class="ow_desc ow_small"></td>
               </tr>
                    <?php }?>
                <?php } ?>
		</table>
    <div class="clearfix ow_stdmargin ow_submit"><div class="ow_right">
    <?php echo smarty_function_submit(array('name'=>'qst_submit'),$_smarty_tpl);?>

    </div></div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>'qst_edit_form'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<div style="display:none;">
    <div id="add-qst-values-div"> 
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('form', array('name'=>'add_qst_values_form')); $_block_repeat=true; echo smarty_block_form(array('name'=>'add_qst_values_form'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <table class="ow_table_1 ow_form" style="margin:0px;">
                <tr class="ow_tr_first ow_tr_last">
                    <td class="ow_label" style="width:25%;">
                        <?php echo smarty_function_label(array('name'=>'qst_add_values'),$_smarty_tpl);?>

                    </td>
                    <td class="ow_value">
                        <div class="ow_small ow_smallmargin">
                            <?php echo smarty_function_desc(array('name'=>'qst_add_values'),$_smarty_tpl);?>

                        </div>
                        <?php echo smarty_function_input(array('name'=>'qst_add_values'),$_smarty_tpl);?>

                        <br/>
                        <?php echo smarty_function_error(array('name'=>'qst_add_values'),$_smarty_tpl);?>

                    </td>
                </tr>
            </table>
            <div class="clearfix ow_stdmargin ow_submit">
               <div class="ow_right">
                    <?php echo smarty_function_submit(array('name'=>'add_qst_submit'),$_smarty_tpl);?>

               </div>
           </div>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>'add_qst_values_form'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </div>
</div>
<?php }} ?>