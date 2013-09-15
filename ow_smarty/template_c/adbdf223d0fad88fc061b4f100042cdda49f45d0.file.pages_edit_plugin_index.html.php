<?php /* Smarty version Smarty-3.1.12, created on 2013-09-06 05:47:08
         compiled from "/apps/mip/oxwall/ow_system_plugins/admin/views/controllers/pages_edit_plugin_index.html" */ ?>
<?php /*%%SmartyHeaderCode:8722191855229cecc733881-19068061%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'adbdf223d0fad88fc061b4f100042cdda49f45d0' => 
    array (
      0 => '/apps/mip/oxwall/ow_system_plugins/admin/views/controllers/pages_edit_plugin_index.html',
      1 => 1359700751,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8722191855229cecc733881-19068061',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'back_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5229cecc815735_26712822',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5229cecc815735_26712822')) {function content_5229cecc815735_26712822($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url_for_route')) include '/apps/mip/oxwall/ow_smarty/plugin/function.url_for_route.php';
if (!is_callable('smarty_function_decorator')) include '/apps/mip/oxwall/ow_smarty/plugin/function.decorator.php';
if (!is_callable('smarty_block_form')) include '/apps/mip/oxwall/ow_smarty/plugin/block.form.php';
if (!is_callable('smarty_function_cycle')) include '/apps/mip/oxwall/ow_libraries/smarty3/plugins/function.cycle.php';
if (!is_callable('smarty_function_label')) include '/apps/mip/oxwall/ow_smarty/plugin/function.label.php';
if (!is_callable('smarty_function_input')) include '/apps/mip/oxwall/ow_smarty/plugin/function.input.php';
if (!is_callable('smarty_function_error')) include '/apps/mip/oxwall/ow_smarty/plugin/function.error.php';
if (!is_callable('smarty_function_submit')) include '/apps/mip/oxwall/ow_smarty/plugin/function.submit.php';
?><?php $_smarty_tpl->_capture_stack[0][] = array('default', "back_url", null); ob_start(); ?><?php echo smarty_function_url_for_route(array('for'=>"admin_pages_main"),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<div class="ow_stdmargin"><?php echo smarty_function_decorator(array('name'=>"button",'class'=>"ow_ic_left_arrow",'onclick'=>"location.href='".((string)$_smarty_tpl->tpl_vars['back_url']->value)."';",'langLabel'=>"base+pages_back"),$_smarty_tpl);?>
</div>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('form', array('name'=>"edit-form")); $_block_repeat=true; echo smarty_block_form(array('name'=>"edit-form"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<div class="ow_superwide ow_automargin">
<table class="ow_table_1 ow_form">

    <tr id="title-tr" class="<?php echo smarty_function_cycle(array('values'=>"ow_alt2, ow_alt1"),$_smarty_tpl);?>
 ow_tr_first">
        <td class="ow_label">
        	<?php echo smarty_function_label(array('name'=>"name"),$_smarty_tpl);?>

       	</td>
        <td class="ow_value">
        	<?php echo smarty_function_input(array('name'=>"name"),$_smarty_tpl);?>

        	<br /><?php echo smarty_function_error(array('name'=>"name"),$_smarty_tpl);?>

        </td>        
    </tr>

    <tr class="<?php echo smarty_function_cycle(array('values'=>"ow_alt2, ow_alt1"),$_smarty_tpl);?>
 ow_tr_last" >
        <td class="ow_label"><?php echo smarty_function_label(array('name'=>"visible-for"),$_smarty_tpl);?>
</td>
        <td class="ow_value">
        	<?php echo smarty_function_input(array('name'=>"visible-for"),$_smarty_tpl);?>

        	<br /><?php echo smarty_function_error(array('name'=>"visible-for"),$_smarty_tpl);?>

       </td>
    </tr>

</table>
<div class="clearfix ow_stdmargin"><div class="ow_right"><?php echo smarty_function_submit(array('name'=>"save",'class'=>"ow_positive"),$_smarty_tpl);?>
</div></div>
</div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>"edit-form"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>