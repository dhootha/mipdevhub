<?php /* Smarty version Smarty-3.1.12, created on 2013-09-06 00:34:12
         compiled from "/apps/mip/oxwall/ow_system_plugins/admin/views/controllers/settings_page.html" */ ?>
<?php /*%%SmartyHeaderCode:163520920452298574d65c11-23574304%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0d461e8b4cd66b2090acb3d55f21ca3acfded90b' => 
    array (
      0 => '/apps/mip/oxwall/ow_system_plugins/admin/views/controllers/settings_page.html',
      1 => 1359700751,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '163520920452298574d65c11-23574304',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'menu' => 0,
    'faviconEnabled' => 0,
    'faviconSrc' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_52298574e59c93_62272444',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52298574e59c93_62272444')) {function content_52298574e59c93_62272444($_smarty_tpl) {?><?php if (!is_callable('smarty_block_form')) include '/apps/mip/oxwall/ow_smarty/plugin/block.form.php';
if (!is_callable('smarty_function_label')) include '/apps/mip/oxwall/ow_smarty/plugin/function.label.php';
if (!is_callable('smarty_function_input')) include '/apps/mip/oxwall/ow_smarty/plugin/function.input.php';
if (!is_callable('smarty_function_error')) include '/apps/mip/oxwall/ow_smarty/plugin/function.error.php';
if (!is_callable('smarty_function_desc')) include '/apps/mip/oxwall/ow_smarty/plugin/function.desc.php';
if (!is_callable('smarty_function_text')) include '/apps/mip/oxwall/ow_smarty/plugin/function.text.php';
if (!is_callable('smarty_function_submit')) include '/apps/mip/oxwall/ow_smarty/plugin/function.submit.php';
?><?php echo $_smarty_tpl->tpl_vars['menu']->value;?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('form', array('name'=>'page_settings')); $_block_repeat=true; echo smarty_block_form(array('name'=>'page_settings'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<table class="ow_table_1 ow_form">
   <tr class="ow_alt2 ow_tr_first">
        <td class="ow_label"><?php echo smarty_function_label(array('name'=>'head_code'),$_smarty_tpl);?>
</td>
        <td class="ow_value"><?php echo smarty_function_input(array('name'=>'head_code'),$_smarty_tpl);?>
 <?php echo smarty_function_error(array('name'=>'head_code'),$_smarty_tpl);?>
</td>
        <td class="ow_desc ow_small">
            <?php echo smarty_function_desc(array('name'=>'head_code'),$_smarty_tpl);?>

        </td>
    </tr>
    <tr class="ow_alt1">
        <td class="ow_label"><?php echo smarty_function_label(array('name'=>'bottom_code'),$_smarty_tpl);?>
</td>
        <td class="ow_value"><?php echo smarty_function_input(array('name'=>'bottom_code'),$_smarty_tpl);?>
 <?php echo smarty_function_error(array('name'=>'bottom_code'),$_smarty_tpl);?>
</td>
        <td class="ow_desc ow_small">
            <?php echo smarty_function_desc(array('name'=>'bottom_code'),$_smarty_tpl);?>

        </td>
    </tr>
    <tr class="ow_alt2 ow_tr_last">
        <td class="ow_label"><label><?php echo smarty_function_label(array('name'=>'favicon'),$_smarty_tpl);?>
 <?php echo smarty_function_input(array('name'=>'enable_favicon'),$_smarty_tpl);?>
</label></td>
        <td class="ow_value">
            <div id="favicon_desabled"<?php if (!empty($_smarty_tpl->tpl_vars['faviconEnabled']->value)){?> style="display:none;"<?php }?>><?php echo smarty_function_text(array('key'=>'admin+page_settings_no_favicon_label'),$_smarty_tpl);?>
</div>
            <div id="favicon_enabled"<?php if (empty($_smarty_tpl->tpl_vars['faviconEnabled']->value)){?> style="display:none;"<?php }?>><img src="<?php echo $_smarty_tpl->tpl_vars['faviconSrc']->value;?>
" /> <?php echo smarty_function_input(array('name'=>'favicon'),$_smarty_tpl);?>
 <?php echo smarty_function_error(array('name'=>'favicon'),$_smarty_tpl);?>
</div>
        </td>
        <td class="ow_desc ow_small">
            <?php echo smarty_function_desc(array('name'=>'favicon'),$_smarty_tpl);?>

        </td>
    </tr>
</table>
<div class="clearfix ow_stdmargin"><div class="ow_right"><?php echo smarty_function_submit(array('name'=>'save','class'=>'ow_ic_save ow_positive'),$_smarty_tpl);?>
</div></div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>'page_settings'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>