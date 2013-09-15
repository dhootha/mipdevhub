<?php /* Smarty version Smarty-3.1.12, created on 2013-09-06 06:22:27
         compiled from "/apps/mip/oxwall/ow_plugins/groups/views/controllers/groups_view.html" */ ?>
<?php /*%%SmartyHeaderCode:6092678135229d713b96410-63366676%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8ca56fb601381722dc261f8387a1dbbbad9e009f' => 
    array (
      0 => '/apps/mip/oxwall/ow_plugins/groups/views/controllers/groups_view.html',
      1 => 1331814144,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6092678135229d713b96410-63366676',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'permissionMessage' => 0,
    'componentPanel' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5229d713bb2577_65745229',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5229d713bb2577_65745229')) {function content_5229d713bb2577_65745229($_smarty_tpl) {?><?php if (!empty($_smarty_tpl->tpl_vars['permissionMessage']->value)){?>
    <div class="ow_anno ow_center">
        <?php echo $_smarty_tpl->tpl_vars['permissionMessage']->value;?>

    </div>
<?php }else{ ?>
    <?php echo $_smarty_tpl->tpl_vars['componentPanel']->value;?>

<?php }?><?php }} ?>