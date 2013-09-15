<?php /* Smarty version Smarty-3.1.12, created on 2013-09-06 00:15:44
         compiled from "/apps/mip/oxwall/ow_system_plugins/admin/views/controllers/questions_add.html" */ ?>
<?php /*%%SmartyHeaderCode:176932464052298120bceda7-41803998%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9bb97f4c0d666ba405c0687da147b944d7f7f006' => 
    array (
      0 => '/apps/mip/oxwall/ow_system_plugins/admin/views/controllers/questions_add.html',
      1 => 1359700751,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '176932464052298120bceda7-41803998',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'contentMenu' => 0,
    'formData' => 0,
    'formEl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_52298120cac687_65513834',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52298120cac687_65513834')) {function content_52298120cac687_65513834($_smarty_tpl) {?><?php if (!is_callable('smarty_block_script')) include '/apps/mip/oxwall/ow_smarty/plugin/block.script.php';
if (!is_callable('smarty_block_form')) include '/apps/mip/oxwall/ow_smarty/plugin/block.form.php';
if (!is_callable('smarty_function_cycle')) include '/apps/mip/oxwall/ow_libraries/smarty3/plugins/function.cycle.php';
if (!is_callable('smarty_function_label')) include '/apps/mip/oxwall/ow_smarty/plugin/function.label.php';
if (!is_callable('smarty_function_input')) include '/apps/mip/oxwall/ow_smarty/plugin/function.input.php';
if (!is_callable('smarty_function_error')) include '/apps/mip/oxwall/ow_smarty/plugin/function.error.php';
if (!is_callable('smarty_function_desc')) include '/apps/mip/oxwall/ow_smarty/plugin/function.desc.php';
if (!is_callable('smarty_function_submit')) include '/apps/mip/oxwall/ow_smarty/plugin/function.submit.php';
if (!is_callable('smarty_function_text')) include '/apps/mip/oxwall/ow_smarty/plugin/function.text.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('script', array()); $_block_repeat=true; echo smarty_block_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    
      $(function(){
            $("form[name='qst_add_form'] select[name='qst_answer_type']").change(
               function(){ this.form.submit(); }
            );
       });
   
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php echo $_smarty_tpl->tpl_vars['contentMenu']->value;?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('form', array('name'=>'qst_add_form')); $_block_repeat=true; echo smarty_block_form(array('name'=>'qst_add_form'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	<table class="ow_table_1 ow_form ow_admin_add_profile_question">
		<?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_smarty_tpl->tpl_vars['formEl'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['formData']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['field']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['field']->iteration=0;
 $_smarty_tpl->tpl_vars['field']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value){
$_smarty_tpl->tpl_vars['field']->_loop = true;
 $_smarty_tpl->tpl_vars['formEl']->value = $_smarty_tpl->tpl_vars['field']->key;
 $_smarty_tpl->tpl_vars['field']->iteration++;
 $_smarty_tpl->tpl_vars['field']->index++;
 $_smarty_tpl->tpl_vars['field']->first = $_smarty_tpl->tpl_vars['field']->index === 0;
 $_smarty_tpl->tpl_vars['field']->last = $_smarty_tpl->tpl_vars['field']->iteration === $_smarty_tpl->tpl_vars['field']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['f']['first'] = $_smarty_tpl->tpl_vars['field']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['f']['last'] = $_smarty_tpl->tpl_vars['field']->last;
?>
                    <tr class="<?php echo smarty_function_cycle(array('values'=>'ow_alt2,ow_alt1'),$_smarty_tpl);?>
 tr_<?php echo $_smarty_tpl->tpl_vars['formEl']->value;?>
 <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['f']['first']){?>ow_tr_first<?php }?> <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['f']['last']){?>ow_tr_last<?php }?>">
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
		<?php } ?>

	</table>
    <div class="clearfix ow_stdmargin">
        <div class="ow_right">
             <?php echo smarty_function_submit(array('name'=>'qst_submit'),$_smarty_tpl);?>
 <?php echo smarty_function_text(array('key'=>'admin+or'),$_smarty_tpl);?>
 <?php echo smarty_function_submit(array('name'=>'qst_submit_and_add'),$_smarty_tpl);?>

        </div>
    </div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>'qst_add_form'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>