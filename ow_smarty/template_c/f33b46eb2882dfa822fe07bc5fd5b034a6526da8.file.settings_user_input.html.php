<?php /* Smarty version Smarty-3.1.12, created on 2013-09-06 11:23:09
         compiled from "/apps/mip/oxwall/ow_system_plugins/admin/views/controllers/settings_user_input.html" */ ?>
<?php /*%%SmartyHeaderCode:709150766522a1d8d6bcc11-41595440%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f33b46eb2882dfa822fe07bc5fd5b034a6526da8' => 
    array (
      0 => '/apps/mip/oxwall/ow_system_plugins/admin/views/controllers/settings_user_input.html',
      1 => 1359700751,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '709150766522a1d8d6bcc11-41595440',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'menu' => 0,
    'maxUploadMaxFilesize' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_522a1d8d7d1902_72687213',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522a1d8d7d1902_72687213')) {function content_522a1d8d7d1902_72687213($_smarty_tpl) {?><?php if (!is_callable('smarty_block_form')) include '/apps/mip/oxwall/ow_smarty/plugin/block.form.php';
if (!is_callable('smarty_function_text')) include '/apps/mip/oxwall/ow_smarty/plugin/function.text.php';
if (!is_callable('smarty_function_cycle')) include '/apps/mip/oxwall/ow_libraries/smarty3/plugins/function.cycle.php';
if (!is_callable('smarty_function_label')) include '/apps/mip/oxwall/ow_smarty/plugin/function.label.php';
if (!is_callable('smarty_function_input')) include '/apps/mip/oxwall/ow_smarty/plugin/function.input.php';
if (!is_callable('smarty_function_error')) include '/apps/mip/oxwall/ow_smarty/plugin/function.error.php';
if (!is_callable('smarty_function_desc')) include '/apps/mip/oxwall/ow_smarty/plugin/function.desc.php';
if (!is_callable('smarty_function_submit')) include '/apps/mip/oxwall/ow_smarty/plugin/function.submit.php';
?><?php echo $_smarty_tpl->tpl_vars['menu']->value;?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('form', array('name'=>'input_settings')); $_block_repeat=true; echo smarty_block_form(array('name'=>'input_settings'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <table class="ow_table_1 ow_form">
        <tr class="ow_tr_first">
            <th class="ow_name ow_txtleft" colspan="3">
                <span class="ow_section_icon ow_ic_file"><?php echo smarty_function_text(array('key'=>'admin+user_input_settings_user_content'),$_smarty_tpl);?>
</span>
            </th>
        </tr>
        <tr class="<?php echo smarty_function_cycle(array('name'=>"user_input",'values'=>"ow_alt1,ow_alt2"),$_smarty_tpl);?>
">
            <td class="ow_label" style="width: 30%;"><?php echo smarty_function_label(array('name'=>'user_custom_html'),$_smarty_tpl);?>
</td>
            <td class="ow_value"><?php echo smarty_function_input(array('name'=>'user_custom_html'),$_smarty_tpl);?>
 <?php echo smarty_function_error(array('name'=>'user_custom_html'),$_smarty_tpl);?>
</td>
            <td class="ow_desc"><?php echo smarty_function_desc(array('name'=>'user_custom_html'),$_smarty_tpl);?>
</td>
        </tr>
        <tr class="<?php echo smarty_function_cycle(array('name'=>"user_input",'values'=>"ow_alt1,ow_alt2"),$_smarty_tpl);?>
 ow_tr_last">
            <td class="ow_label"><?php echo smarty_function_label(array('name'=>'user_rich_media'),$_smarty_tpl);?>
</td>
            <td class="ow_value"><?php echo smarty_function_input(array('name'=>'user_rich_media'),$_smarty_tpl);?>
 <?php echo smarty_function_error(array('name'=>'user_rich_media'),$_smarty_tpl);?>
</td>
            <td class="ow_desc"><?php echo smarty_function_desc(array('name'=>'user_rich_media'),$_smarty_tpl);?>
</td>
        </tr>
        <tr class="ow_tr_delimiter"><td></td></tr>
        <tr class="ow_tr_first">
            <th class="ow_name ow_txtleft" colspan="3">
                <span class="ow_section_icon ow_ic_comment"><?php echo smarty_function_text(array('key'=>'admin+user_input_settings_comments'),$_smarty_tpl);?>
</span>
            </th>
        </tr>
        <tr class="<?php echo smarty_function_cycle(array('name'=>"comments",'values'=>"ow_alt1,ow_alt2"),$_smarty_tpl);?>
 ow_tr_last">
            <td class="ow_label"><?php echo smarty_function_label(array('name'=>'comments_rich_media'),$_smarty_tpl);?>
</td>
            <td class="ow_value"><?php echo smarty_function_input(array('name'=>'comments_rich_media'),$_smarty_tpl);?>
 <?php echo smarty_function_error(array('name'=>'comments_rich_media'),$_smarty_tpl);?>
</td>
            <td class="ow_desc"><?php echo smarty_function_desc(array('name'=>'comments_rich_media'),$_smarty_tpl);?>
</td>
        </tr>
        <tr class="ow_tr_delimiter"><td></td></tr>
        <tr class="ow_tr_first">
            <th class="ow_name ow_txtleft" colspan="3">
                <span class="ow_section_icon ow_ic_picture"><?php echo smarty_function_text(array('key'=>'admin+user_input_settings_rich_media'),$_smarty_tpl);?>
</span>
            </th>
        </tr>
        <tr class="<?php echo smarty_function_cycle(array('name'=>"rm",'values'=>"ow_alt1,ow_alt2"),$_smarty_tpl);?>
">
            <td class="ow_label"><?php echo smarty_function_label(array('name'=>'allow_photo_upload'),$_smarty_tpl);?>
</td>
            <td class="ow_value"><?php echo smarty_function_input(array('name'=>'allow_photo_upload'),$_smarty_tpl);?>
<br /><?php echo smarty_function_error(array('name'=>'allow_photo_upload'),$_smarty_tpl);?>
</td>
            <td class="ow_desc"></td>
        </tr>
        <tr class="<?php echo smarty_function_cycle(array('name'=>"rm",'values'=>"ow_alt1,ow_alt2"),$_smarty_tpl);?>
">
            <td class="ow_label"><?php echo smarty_function_label(array('name'=>'max_upload_size'),$_smarty_tpl);?>
</td>
            <td class="ow_value"><?php echo smarty_function_input(array('name'=>'max_upload_size','style'=>"width:30px;"),$_smarty_tpl);?>
 MB  <span class="ow_small"><?php echo smarty_function_text(array('key'=>'base+max_upload_filesize','value'=>$_smarty_tpl->tpl_vars['maxUploadMaxFilesize']->value),$_smarty_tpl);?>
</span><br /><?php echo smarty_function_error(array('name'=>'max_upload_size'),$_smarty_tpl);?>
</td>
            <td class="ow_desc"></td>
        </tr>
        <tr class=" ow_tr_last <?php echo smarty_function_cycle(array('name'=>"rm",'values'=>"ow_alt1,ow_alt2"),$_smarty_tpl);?>
">
            <td class="ow_label"><?php echo smarty_function_label(array('name'=>'resource_list'),$_smarty_tpl);?>
</td>
            <td class="ow_value"><?php echo smarty_function_input(array('name'=>'resource_list'),$_smarty_tpl);?>
 <?php echo smarty_function_error(array('name'=>'resource_list'),$_smarty_tpl);?>
</td>
            <td class="ow_desc"><?php echo smarty_function_desc(array('name'=>'resource_list'),$_smarty_tpl);?>
</td>
        </tr>
        
    </table>
    <div class="clearfix ow_stdmargin"><div class="ow_right"><?php echo smarty_function_submit(array('name'=>'save','class'=>'ow_ic_save ow_positive'),$_smarty_tpl);?>
</div></div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>'input_settings'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>