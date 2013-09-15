<?php /* Smarty version Smarty-3.1.12, created on 2013-09-05 23:28:54
         compiled from "/apps/mip/oxwall/ow_system_plugins/base/views/components/join_now_widget.html" */ ?>
<?php /*%%SmartyHeaderCode:149342677052297626241dc8-64661131%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '07e1786c0c4690c47f76f59be5584dfac8733580' => 
    array (
      0 => '/apps/mip/oxwall/ow_system_plugins/base/views/components/join_now_widget.html',
      1 => 1331814144,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '149342677052297626241dc8-64661131',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5229762626c370_70238747',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5229762626c370_70238747')) {function content_5229762626c370_70238747($_smarty_tpl) {?><?php if (!is_callable('smarty_function_text')) include '/apps/mip/oxwall/ow_smarty/plugin/function.text.php';
?><div class="ow_highbox ow_center join_now_widget">
    <h3>
        <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" >
           <?php echo smarty_function_text(array('key'=>'base+join_index_join_button'),$_smarty_tpl);?>

        </a>
    </h3>
</div><?php }} ?>