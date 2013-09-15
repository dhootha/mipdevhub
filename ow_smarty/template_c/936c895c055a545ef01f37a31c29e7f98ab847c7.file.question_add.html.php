<?php /* Smarty version Smarty-3.1.12, created on 2013-09-06 00:01:41
         compiled from "/apps/mip/oxwall/ow_plugins/questions/views/components/question_add.html" */ ?>
<?php /*%%SmartyHeaderCode:48978961852297dd51dcaf7-42418767%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '936c895c055a545ef01f37a31c29e7f98ab847c7' => 
    array (
      0 => '/apps/mip/oxwall/ow_plugins/questions/views/components/question_add.html',
      1 => 1356080389,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '48978961852297dd51dcaf7-42418767',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'uniqId' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_52297dd525d332_71150234',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52297dd525d332_71150234')) {function content_52297dd525d332_71150234($_smarty_tpl) {?><?php if (!is_callable('smarty_block_form')) include '/apps/mip/oxwall/ow_smarty/plugin/block.form.php';
if (!is_callable('smarty_function_input')) include '/apps/mip/oxwall/ow_smarty/plugin/function.input.php';
if (!is_callable('smarty_block_block_decorator')) include '/apps/mip/oxwall/ow_smarty/plugin/block.block_decorator.php';
if (!is_callable('smarty_function_text')) include '/apps/mip/oxwall/ow_smarty/plugin/function.text.php';
if (!is_callable('smarty_function_label')) include '/apps/mip/oxwall/ow_smarty/plugin/function.label.php';
if (!is_callable('smarty_function_submit')) include '/apps/mip/oxwall/ow_smarty/plugin/function.submit.php';
?><div class="questions-add clearfix" id="<?php echo $_smarty_tpl->tpl_vars['uniqId']->value;?>
">
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('form', array('name'=>"questions_add")); $_block_repeat=true; echo smarty_block_form(array('name'=>"questions_add"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <div class="form_auto_click">
        <div class="questions-add-question">
            <?php echo smarty_function_input(array('name'=>"question",'class'=>"questions-input"),$_smarty_tpl);?>

        </div>
        <div class="ow_submit_auto_click" style="display: none;">

            <div class="questions-add-answers" style="display: none;">
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('block_decorator', array('name'=>'tooltip','addClass'=>'qaa-tooltip ow_small ')); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>'tooltip','addClass'=>'qaa-tooltip ow_small '), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <div class="q-add-answers-field">
                        <div class="ow_smallmargin">
                            <div class="qaa-label-c">
                                <span class="qaa-label"><strong><?php echo smarty_function_text(array('key'=>"questions+question_add_answers_label"),$_smarty_tpl);?>
</strong></span>
                            </div>
                        </div>

                        <?php echo smarty_function_input(array('name'=>"answers"),$_smarty_tpl);?>

                    </div>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>'tooltip','addClass'=>'qaa-tooltip ow_small '), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </div>

            <div class="clearfix qa-submit-c ow_border">
                <div class="ow_left questions-add-answers-btn-c">
                    <a href="javascript://" class="questions-add-answers-btn"><?php echo smarty_function_text(array('key'=>"questions+question_add_show_options_btn"),$_smarty_tpl);?>
</a>
                    <div class="questions-add-answers-options" style="display: none;">
                        <?php echo smarty_function_input(array('name'=>"allowAddOprions"),$_smarty_tpl);?>
<?php echo smarty_function_label(array('name'=>"allowAddOprions"),$_smarty_tpl);?>

                    </div>
                </div>

                <div class="ow_right q-save-c">
                    <span class="ow_attachment_btn"><?php echo smarty_function_submit(array('name'=>"save"),$_smarty_tpl);?>
</span>
                </div>
            </div>
        </div>
    </div>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>"questions_add"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

</div><?php }} ?>