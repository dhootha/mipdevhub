<?php /* Smarty version Smarty-3.1.12, created on 2013-09-06 00:07:20
         compiled from "/apps/mip/oxwall/ow_system_plugins/base/views/components/profile_action_toolbar.html" */ ?>
<?php /*%%SmartyHeaderCode:66535896152297f28ab2236-86711932%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9edc5e5b5ec3c596347c6b37313d47fa300efb26' => 
    array (
      0 => '/apps/mip/oxwall/ow_system_plugins/base/views/components/profile_action_toolbar.html',
      1 => 1364205650,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '66535896152297f28ab2236-86711932',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'toolbar' => 0,
    'action' => 0,
    'cmpsMarkup' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_52297f28ae47d3_57793559',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52297f28ae47d3_57793559')) {function content_52297f28ae47d3_57793559($_smarty_tpl) {?><ul class="ow_bl ow_profile_action_toolbar clearfix ow_small ow_stdmargin">
    <?php  $_smarty_tpl->tpl_vars['action'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['action']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['toolbar']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['action']->key => $_smarty_tpl->tpl_vars['action']->value){
$_smarty_tpl->tpl_vars['action']->_loop = true;
?>
        <li>
            <a <?php echo $_smarty_tpl->tpl_vars['action']->value['attrs'];?>
 >
                <?php echo $_smarty_tpl->tpl_vars['action']->value['label'];?>

            </a>
        </li>
    <?php } ?>
</ul>
<?php echo $_smarty_tpl->tpl_vars['cmpsMarkup']->value;?>

<?php }} ?>