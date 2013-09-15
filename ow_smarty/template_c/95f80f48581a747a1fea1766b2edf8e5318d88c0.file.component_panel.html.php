<?php /* Smarty version Smarty-3.1.12, created on 2013-09-05 23:28:35
         compiled from "/apps/mip/oxwall/ow_system_plugins/base/views/controllers/component_panel.html" */ ?>
<?php /*%%SmartyHeaderCode:165184579052297613ed38a3-38473229%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '95f80f48581a747a1fea1766b2edf8e5318d88c0' => 
    array (
      0 => '/apps/mip/oxwall/ow_system_plugins/base/views/controllers/component_panel.html',
      1 => 1331814144,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '165184579052297613ed38a3-38473229',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'permissionMessage' => 0,
    'profileActionToolbar' => 0,
    'componentPanel' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_52297613f34199_98024650',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52297613f34199_98024650')) {function content_52297613f34199_98024650($_smarty_tpl) {?><?php if (!empty($_smarty_tpl->tpl_vars['permissionMessage']->value)){?>
    <div class="ow_anno ow_center">
        <?php echo $_smarty_tpl->tpl_vars['permissionMessage']->value;?>

    </div>
<?php }else{ ?>
	<?php if (isset($_smarty_tpl->tpl_vars['profileActionToolbar']->value)){?>
		<?php echo $_smarty_tpl->tpl_vars['profileActionToolbar']->value;?>

	<?php }?>

	<?php echo $_smarty_tpl->tpl_vars['componentPanel']->value;?>

<?php }?><?php }} ?>