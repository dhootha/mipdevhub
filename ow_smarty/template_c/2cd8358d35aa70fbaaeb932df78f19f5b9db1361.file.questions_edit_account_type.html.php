<?php /* Smarty version Smarty-3.1.12, created on 2013-09-06 11:20:50
         compiled from "/apps/mip/oxwall/ow_system_plugins/admin/views/controllers/questions_edit_account_type.html" */ ?>
<?php /*%%SmartyHeaderCode:1513345730522a1d02e58a23-80155102%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2cd8358d35aa70fbaaeb932df78f19f5b9db1361' => 
    array (
      0 => '/apps/mip/oxwall/ow_system_plugins/admin/views/controllers/questions_edit_account_type.html',
      1 => 1363085419,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1513345730522a1d02e58a23-80155102',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'contentMenu' => 0,
    'accountTypes' => 0,
    'accountType' => 0,
    'accountTypeCount' => 0,
    'deleteUrlList' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_522a1d0306cef6_18346797',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522a1d0306cef6_18346797')) {function content_522a1d0306cef6_18346797($_smarty_tpl) {?><?php if (!is_callable('smarty_block_script')) include '/apps/mip/oxwall/ow_smarty/plugin/block.script.php';
if (!is_callable('smarty_function_url_for')) include '/apps/mip/oxwall/ow_smarty/plugin/function.url_for.php';
if (!is_callable('smarty_function_text')) include '/apps/mip/oxwall/ow_smarty/plugin/function.text.php';
if (!is_callable('smarty_function_cycle')) include '/apps/mip/oxwall/ow_libraries/smarty3/plugins/function.cycle.php';
if (!is_callable('smarty_function_account_type_lang')) include '/apps/mip/oxwall/ow_smarty/plugin/function.account_type_lang.php';
if (!is_callable('smarty_block_block_decorator')) include '/apps/mip/oxwall/ow_smarty/plugin/block.block_decorator.php';
if (!is_callable('smarty_block_form')) include '/apps/mip/oxwall/ow_smarty/plugin/block.form.php';
if (!is_callable('smarty_function_input')) include '/apps/mip/oxwall/ow_smarty/plugin/function.input.php';
if (!is_callable('smarty_function_submit')) include '/apps/mip/oxwall/ow_smarty/plugin/function.submit.php';
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


            document['ajaxLangValueEditForms'][_prefix+'-'+_key] = new OW_FloatBox({$title: '<?php echo smarty_function_text(array('key'=>"admin+questions_edit_account_type_name_title"),$_smarty_tpl);?>
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


<div class="ow_automargin">
<table class="ow_table_2 ow_stdmargin account_type">
     <tr class="ow_tr_first">
        <th><?php echo smarty_function_text(array('key'=>'admin+question_column_account_type'),$_smarty_tpl);?>
</th>
        <th><?php echo smarty_function_text(array('key'=>'admin+question_column_exclusive_questions'),$_smarty_tpl);?>
</th>
        <th width="40"></th>
    </tr>
    <?php  $_smarty_tpl->tpl_vars['accountType'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['accountType']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['accountTypes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['accountType']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['accountType']->iteration=0;
 $_smarty_tpl->tpl_vars['accountType']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['accountType']->key => $_smarty_tpl->tpl_vars['accountType']->value){
$_smarty_tpl->tpl_vars['accountType']->_loop = true;
 $_smarty_tpl->tpl_vars['accountType']->iteration++;
 $_smarty_tpl->tpl_vars['accountType']->index++;
 $_smarty_tpl->tpl_vars['accountType']->first = $_smarty_tpl->tpl_vars['accountType']->index === 0;
 $_smarty_tpl->tpl_vars['accountType']->last = $_smarty_tpl->tpl_vars['accountType']->iteration === $_smarty_tpl->tpl_vars['accountType']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['accountType']['first'] = $_smarty_tpl->tpl_vars['accountType']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['accountType']['last'] = $_smarty_tpl->tpl_vars['accountType']->last;
?>
        <?php $_smarty_tpl->_capture_stack[0][] = array("evenstyle", null, null); ob_start(); ?><?php echo smarty_function_cycle(array('values'=>"ow_alt1,ow_alt2"),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
            <tr  width="100%" class="<?php echo Smarty::$_smarty_vars['capture']['evenstyle'];?>
 account_type_tr ow_admin_profile_question_dnd_cursor <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['accountType']['last']){?>ow_tr_last<?php }?>" account_type_name="<?php echo $_smarty_tpl->tpl_vars['accountType']->value['name'];?>
">
                <td width="70%" class="<?php echo Smarty::$_smarty_vars['capture']['evenstyle'];?>
 ow_txtleft account_type_value"><?php echo smarty_function_account_type_lang(array('name'=>$_smarty_tpl->tpl_vars['accountType']->value['name']),$_smarty_tpl);?>
 <a class="ow_lbutton ow_green default_account_type_button" <?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['accountType']['first']){?>style="display:none;"<?php }?> href="javascript://">default</a></td>
                <td width="15%"  class="<?php echo Smarty::$_smarty_vars['capture']['evenstyle'];?>
"><?php echo $_smarty_tpl->tpl_vars['accountType']->value['questionCount'];?>
</td>
                <td width="15%"  class="<?php echo Smarty::$_smarty_vars['capture']['evenstyle'];?>
 ow_nowrap">
                    <div class="quest_buttons" style="height:20px;">
                         <a class="ow_lbutton ow_lbutton edit_accont_type" style="display:none;" href="javascript://"><?php echo smarty_function_text(array('key'=>'admin+btn_label_edit'),$_smarty_tpl);?>
</a>
                        <?php if ($_smarty_tpl->tpl_vars['accountTypeCount']->value>1){?>
                            <a class="ow_lbutton ow_red delete_accont_type <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['accountType']['first']){?>default_account_type<?php }?>" style="display:none;" href="<?php echo $_smarty_tpl->tpl_vars['deleteUrlList']->value[$_smarty_tpl->tpl_vars['accountType']->value['name']];?>
" ><?php echo smarty_function_text(array('key'=>'admin+btn_label_delete'),$_smarty_tpl);?>
</a>
                        <?php }?>
                    </div>
                </td>
            </tr>
    <?php } ?>
</table>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('block_decorator', array('name'=>"box",'style'=>"text-align:center;",'type'=>'empty','iconClass'=>"ow_ic_add",'langLabel'=>'admin+questions_add_new_account_type')); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>"box",'style'=>"text-align:center;",'type'=>'empty','iconClass'=>"ow_ic_add",'langLabel'=>'admin+questions_add_new_account_type'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php $_smarty_tpl->smarty->_tag_stack[] = array('form', array('name'=>"add_account_type_form")); $_block_repeat=true; echo smarty_block_form(array('name'=>"add_account_type_form"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php echo smarty_function_input(array('name'=>'account_type','style'=>"width:auto;"),$_smarty_tpl);?>
&nbsp;<?php echo smarty_function_submit(array('class'=>"ow_ic_add",'name'=>'account_type_submit'),$_smarty_tpl);?>

    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>"add_account_type_form"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>"box",'style'=>"text-align:center;",'type'=>'empty','iconClass'=>"ow_ic_add",'langLabel'=>'admin+questions_add_new_account_type'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

</div>
<?php }} ?>