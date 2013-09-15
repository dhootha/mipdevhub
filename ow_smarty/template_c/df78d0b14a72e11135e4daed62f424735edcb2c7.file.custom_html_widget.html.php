<?php /* Smarty version Smarty-3.1.12, created on 2013-09-05 23:28:34
         compiled from "/apps/mip/oxwall/ow_system_plugins/base/views/components/custom_html_widget.html" */ ?>
<?php /*%%SmartyHeaderCode:206039571752297612ca0749-23793655%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'df78d0b14a72e11135e4daed62f424735edcb2c7' => 
    array (
      0 => '/apps/mip/oxwall/ow_system_plugins/base/views/components/custom_html_widget.html',
      1 => 1346776079,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '206039571752297612ca0749-23793655',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_52297612cdb639_98654626',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52297612cdb639_98654626')) {function content_52297612cdb639_98654626($_smarty_tpl) {?><?php if (!is_callable('smarty_function_text')) include '/apps/mip/oxwall/ow_smarty/plugin/function.text.php';
?><div class="ow_custom_html_widget">
	<?php if ($_smarty_tpl->tpl_vars['content']->value){?>
		<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

	<?php }else{ ?>
            <div class="ow_nocontent">
                <?php echo smarty_function_text(array('key'=>"base+custom_html_widget_no_content"),$_smarty_tpl);?>

            </div>
	<?php }?>
</div><?php }} ?>