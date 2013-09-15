<?php /* Smarty version Smarty-3.1.12, created on 2013-09-10 20:57:54
         compiled from "/apps/mip/oxwall/ow_plugins/questions/views/controllers/admin_main.html" */ ?>
<?php /*%%SmartyHeaderCode:1386151920522f6bb20f0861-87990182%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9cf849befd48e3092d3fcf64fec5f3d5adfa5a9c' => 
    array (
      0 => '/apps/mip/oxwall/ow_plugins/questions/views/controllers/admin_main.html',
      1 => 1340267900,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1386151920522f6bb20f0861-87990182',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'menu' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_522f6bb21ae531_92634702',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522f6bb21ae531_92634702')) {function content_522f6bb21ae531_92634702($_smarty_tpl) {?><?php if (!is_callable('smarty_block_style')) include '/apps/mip/oxwall/ow_smarty/plugin/block.style.php';
if (!is_callable('smarty_block_form')) include '/apps/mip/oxwall/ow_smarty/plugin/block.form.php';
if (!is_callable('smarty_function_text')) include '/apps/mip/oxwall/ow_smarty/plugin/function.text.php';
if (!is_callable('smarty_function_label')) include '/apps/mip/oxwall/ow_smarty/plugin/function.label.php';
if (!is_callable('smarty_function_input')) include '/apps/mip/oxwall/ow_smarty/plugin/function.input.php';
if (!is_callable('smarty_function_submit')) include '/apps/mip/oxwall/ow_smarty/plugin/function.submit.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('style', array()); $_block_repeat=true; echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


.q-extended-tab
{

}

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_style(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php echo $_smarty_tpl->tpl_vars['menu']->value;?>


<?php $_smarty_tpl->smarty->_tag_stack[] = array('form', array('name'=>'QUESTIONS_ConfigSaveForm')); $_block_repeat=true; echo smarty_block_form(array('name'=>'QUESTIONS_ConfigSaveForm'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<table class="ow_table_1 ow_form">
    <tr>
        <th class="ow_name ow_txtleft" colspan="3">
            <span class="ow_section_icon ow_ic_gear_wheel"><?php echo smarty_function_text(array('key'=>'questions+admin_main_settings_title'),$_smarty_tpl);?>
</span>
        </th>
    </tr>

    <tr class="ow_alt1">
        <td class="ow_label"><?php echo smarty_function_label(array('name'=>'enable_follow'),$_smarty_tpl);?>
</td>
        <td class="ow_value"><?php echo smarty_function_input(array('name'=>'enable_follow'),$_smarty_tpl);?>
</td>
        <td class="ow_desc ow_small"><?php echo smarty_function_text(array('key'=>"questions+admin_enable_follow_desc"),$_smarty_tpl);?>
</td>
    </tr>

    <tr class="ow_alt2">
        <td class="ow_label"><?php echo smarty_function_label(array('name'=>'allow_comments'),$_smarty_tpl);?>
</td>
        <td class="ow_value"><?php echo smarty_function_input(array('name'=>'allow_comments'),$_smarty_tpl);?>
</td>
        <td class="ow_desc ow_small"></td>
    </tr>

    <tr class="ow_alt1">
        <td class="ow_label"><?php echo smarty_function_label(array('name'=>'list_order'),$_smarty_tpl);?>
</td>
        <td class="ow_value"><?php echo smarty_function_input(array('name'=>'list_order'),$_smarty_tpl);?>
</td>
        <td class="ow_desc ow_small"></td>
    </tr>

    <tr class="ow_alt2">
        <td class="ow_label"><?php echo smarty_function_label(array('name'=>'allow_popups'),$_smarty_tpl);?>
</td>
        <td class="ow_value"><?php echo smarty_function_input(array('name'=>'allow_popups'),$_smarty_tpl);?>
</td>
        <td class="ow_desc ow_small"><?php echo smarty_function_text(array('key'=>"questions+admin_allow_popups_desc"),$_smarty_tpl);?>
</td>
    </tr>

    <tr><td colspan="3" class="ow_submit"><?php echo smarty_function_submit(array('name'=>'save','class'=>'ow_ic_save'),$_smarty_tpl);?>
</td></tr>
</table>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>'QUESTIONS_ConfigSaveForm'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>