<?php /* Smarty version Smarty-3.1.12, created on 2013-09-06 06:22:53
         compiled from "/apps/mip/oxwall/ow_plugins/groups/views/components/join_button_widget.html" */ ?>
<?php /*%%SmartyHeaderCode:3758716185229d72dc97701-18129531%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c54bae791953a441360b704c5e8e12f84bea4e47' => 
    array (
      0 => '/apps/mip/oxwall/ow_plugins/groups/views/components/join_button_widget.html',
      1 => 1331814144,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3758716185229d72dc97701-18129531',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'actionUrl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5229d72dd13265_91992082',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5229d72dd13265_91992082')) {function content_5229d72dd13265_91992082($_smarty_tpl) {?><?php if (!is_callable('smarty_function_text')) include '/apps/mip/oxwall/ow_smarty/plugin/function.text.php';
?><div class="ow_highbox ow_center">
    <h3>
        <a href="<?php echo $_smarty_tpl->tpl_vars['actionUrl']->value;?>
" >
           <?php echo smarty_function_text(array('key'=>'groups+widget_join_button'),$_smarty_tpl);?>

        </a>
    </h3>
</div><?php }} ?>