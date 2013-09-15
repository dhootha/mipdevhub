<?php /* Smarty version Smarty-3.1.12, created on 2013-09-06 00:07:20
         compiled from "/apps/mip/oxwall/ow_system_plugins/base/views/components/user_view_widget_table.html" */ ?>
<?php /*%%SmartyHeaderCode:18029502552297f289628e3-64675042%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b3ad5955fc8c8015ea7b23d778408009c6a2709d' => 
    array (
      0 => '/apps/mip/oxwall/ow_system_plugins/base/views/components/user_view_widget_table.html',
      1 => 1359700751,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18029502552297f289628e3-64675042',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ownerMode' => 0,
    'adminMode' => 0,
    'superAdminProfile' => 0,
    'profileEditUrl' => 0,
    'questionArray' => 0,
    'section' => 0,
    'questions' => 0,
    'question' => 0,
    'questionData' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_52297f28a1a293_61253639',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52297f28a1a293_61253639')) {function content_52297f28a1a293_61253639($_smarty_tpl) {?><?php if (!is_callable('smarty_block_style')) include '/apps/mip/oxwall/ow_smarty/plugin/block.style.php';
if (!is_callable('smarty_block_script')) include '/apps/mip/oxwall/ow_smarty/plugin/block.script.php';
if (!is_callable('smarty_function_text')) include '/apps/mip/oxwall/ow_smarty/plugin/function.text.php';
?><?php if ($_smarty_tpl->tpl_vars['ownerMode']->value||($_smarty_tpl->tpl_vars['adminMode']->value&&!$_smarty_tpl->tpl_vars['superAdminProfile']->value)){?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('style', array()); $_block_repeat=true; echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        

            .ow_edit_profile_link
            {
                position: absolute;
                right: 0px;
                top: 0px;
            }
        
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_style(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php $_smarty_tpl->smarty->_tag_stack[] = array('script', array()); $_block_repeat=true; echo smarty_block_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        
            (function(){
                $(".user_profile_data").hover(
                  function(){
                    $("#edit-profile").fadeIn();
                  },
                  function(){
                    $("#edit-profile").fadeOut();
                  }
              );
           }());
       
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>

<div class="user_profile_data" style="position:relative">
 <?php if ($_smarty_tpl->tpl_vars['ownerMode']->value||($_smarty_tpl->tpl_vars['adminMode']->value&&!$_smarty_tpl->tpl_vars['superAdminProfile']->value)){?>
     <div style="display: none;" id="edit-profile" class="ow_edit_profile_link">
            <a class="ow_lbutton" href="<?php echo $_smarty_tpl->tpl_vars['profileEditUrl']->value;?>
"><?php echo smarty_function_text(array('key'=>'base+edit_profile_link'),$_smarty_tpl);?>
</a>
     </div>
 <?php }?>
 <table class="ow_table_3 ow_nomargin">
    <?php  $_smarty_tpl->tpl_vars['questions'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['questions']->_loop = false;
 $_smarty_tpl->tpl_vars['section'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['questionArray']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['questions']->key => $_smarty_tpl->tpl_vars['questions']->value){
$_smarty_tpl->tpl_vars['questions']->_loop = true;
 $_smarty_tpl->tpl_vars['section']->value = $_smarty_tpl->tpl_vars['questions']->key;
?>
        <?php if (!empty($_smarty_tpl->tpl_vars['section']->value)){?><tr class="ow_tr_first"><th colspan="2" class="ow_section"><span><?php echo smarty_function_text(array('key'=>"base+questions_section_".((string)$_smarty_tpl->tpl_vars['section']->value)."_label"),$_smarty_tpl);?>
</span></th></tr><?php }?>
        <?php  $_smarty_tpl->tpl_vars['question'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['question']->_loop = false;
 $_smarty_tpl->tpl_vars['sort'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['questions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['question']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['question']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['question']->key => $_smarty_tpl->tpl_vars['question']->value){
$_smarty_tpl->tpl_vars['question']->_loop = true;
 $_smarty_tpl->tpl_vars['sort']->value = $_smarty_tpl->tpl_vars['question']->key;
 $_smarty_tpl->tpl_vars['question']->iteration++;
 $_smarty_tpl->tpl_vars['question']->last = $_smarty_tpl->tpl_vars['question']->iteration === $_smarty_tpl->tpl_vars['question']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['question']['last'] = $_smarty_tpl->tpl_vars['question']->last;
?>
            <?php if (isset($_smarty_tpl->tpl_vars['questionData']->value[$_smarty_tpl->tpl_vars['question']->value['name']])){?>
                <tr class="<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['question']['last']){?>ow_tr_last<?php }?>">
                    <td class="ow_label" style="width: 20%"><?php echo smarty_function_text(array('key'=>"base+questions_question_".((string)$_smarty_tpl->tpl_vars['question']->value['name'])."_label"),$_smarty_tpl);?>
</td>
                    <td class="ow_value"><span class="<?php if (!empty($_smarty_tpl->tpl_vars['question']->value['hidden'])){?>ow_field_eye ow_remark profile_hidden_field<?php }?>"><?php echo $_smarty_tpl->tpl_vars['questionData']->value[$_smarty_tpl->tpl_vars['question']->value['name']];?>
</span></td>
                </tr>
            <?php }?>
        <?php } ?>
    <?php } ?>
 </table>
 </div>
<?php }} ?>