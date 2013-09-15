<?php /* Smarty version Smarty-3.1.12, created on 2013-09-06 06:22:58
         compiled from "/apps/mip/oxwall/ow_plugins/groups/views/components/leave_button_widget.html" */ ?>
<?php /*%%SmartyHeaderCode:10293998045229d7323c8fd7-47697630%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0e1b4fef36ba89205673190b018054e593886153' => 
    array (
      0 => '/apps/mip/oxwall/ow_plugins/groups/views/components/leave_button_widget.html',
      1 => 1331814144,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10293998045229d7323c8fd7-47697630',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'actionUrl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5229d732448f81_56877222',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5229d732448f81_56877222')) {function content_5229d732448f81_56877222($_smarty_tpl) {?><?php if (!is_callable('smarty_function_text')) include '/apps/mip/oxwall/ow_smarty/plugin/function.text.php';
?><div class="ow_center">
    <h3>
        <a href="<?php echo $_smarty_tpl->tpl_vars['actionUrl']->value;?>
" >
           <?php echo smarty_function_text(array('key'=>'groups+widget_leave_button'),$_smarty_tpl);?>

        </a>
    </h3>
</div><?php }} ?>