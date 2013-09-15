<?php /* Smarty version Smarty-3.1.12, created on 2013-09-08 21:15:28
         compiled from "/apps/mip/oxwall/ow_plugins/questions/views/components/index_widget.html" */ ?>
<?php /*%%SmartyHeaderCode:1705991899522cccd08398a4-07847782%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fdf10ced18bfb5954a3dcd35211c65ea64dcb8d3' => 
    array (
      0 => '/apps/mip/oxwall/ow_plugins/questions/views/components/index_widget.html',
      1 => 1336456511,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1705991899522cccd08398a4-07847782',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'add' => 0,
    'feed' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_522cccd088d046_86771805',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522cccd088d046_86771805')) {function content_522cccd088d046_86771805($_smarty_tpl) {?><div class="questions-widget questions-all">
    <?php if (!empty($_smarty_tpl->tpl_vars['add']->value)){?>
        <div class="qw-add ow_smallmargin">
            <?php echo $_smarty_tpl->tpl_vars['add']->value;?>

        </div>
    <?php }?>
    <div class="qw-list">
        <?php echo $_smarty_tpl->tpl_vars['feed']->value;?>

    </div>
</div><?php }} ?>