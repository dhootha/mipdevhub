<?php /* Smarty version Smarty-3.1.12, created on 2013-09-06 11:20:49
         compiled from "/apps/mip/oxwall/ow_system_plugins/admin/views/controllers/questions_settings.html" */ ?>
<?php /*%%SmartyHeaderCode:443733154522a1d0156fef4-29127391%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2b92735e19a4388465b430d368193190168d5da5' => 
    array (
      0 => '/apps/mip/oxwall/ow_system_plugins/admin/views/controllers/questions_settings.html',
      1 => 1359700751,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '443733154522a1d0156fef4-29127391',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'contentMenu' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_522a1d01619c60_20364156',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522a1d01619c60_20364156')) {function content_522a1d01619c60_20364156($_smarty_tpl) {?><?php if (!is_callable('smarty_block_form')) include '/apps/mip/oxwall/ow_smarty/plugin/block.form.php';
if (!is_callable('smarty_function_cycle')) include '/apps/mip/oxwall/ow_libraries/smarty3/plugins/function.cycle.php';
if (!is_callable('smarty_function_label')) include '/apps/mip/oxwall/ow_smarty/plugin/function.label.php';
if (!is_callable('smarty_function_input')) include '/apps/mip/oxwall/ow_smarty/plugin/function.input.php';
if (!is_callable('smarty_function_error')) include '/apps/mip/oxwall/ow_smarty/plugin/function.error.php';
if (!is_callable('smarty_function_desc')) include '/apps/mip/oxwall/ow_smarty/plugin/function.desc.php';
if (!is_callable('smarty_function_submit')) include '/apps/mip/oxwall/ow_smarty/plugin/function.submit.php';
?><?php echo $_smarty_tpl->tpl_vars['contentMenu']->value;?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('form', array('name'=>'questionSettings')); $_block_repeat=true; echo smarty_block_form(array('name'=>'questionSettings'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <table class="ow_form ow_full ow_automargin ow_center ow_table_1">
        <tr class="<?php echo smarty_function_cycle(array('values'=>'ow_alt2,alt1'),$_smarty_tpl);?>
 ow_tr_first ow_tr_last">
            <td class="ow_label" ><?php echo smarty_function_label(array('name'=>'user_view_presentation'),$_smarty_tpl);?>
</td>
            <td class="ow_value" style="text-align:left;padding-left:40px;"><?php echo smarty_function_input(array('name'=>'user_view_presentation'),$_smarty_tpl);?>
<br/><?php echo smarty_function_error(array('name'=>'user_view_presentation'),$_smarty_tpl);?>
</td>
            <td class="ow_desc ow_small" style="text-align:left"><?php echo smarty_function_desc(array('name'=>'user_view_presentation'),$_smarty_tpl);?>
</td>
        </tr>
    </table>
    <div class="clearfix ow_stdmargin">
       <div class="ow_right">
            <?php echo smarty_function_submit(array('name'=>'save','class'=>"ow_ic_save"),$_smarty_tpl);?>

       </div>
   </div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>'questionSettings'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>