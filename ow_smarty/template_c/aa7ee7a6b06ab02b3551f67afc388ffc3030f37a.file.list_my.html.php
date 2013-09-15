<?php /* Smarty version Smarty-3.1.12, created on 2013-09-08 21:16:07
         compiled from "/apps/mip/oxwall/ow_plugins/questions/views/controllers/list_my.html" */ ?>
<?php /*%%SmartyHeaderCode:2059740209522cccf7df52d7-88564234%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aa7ee7a6b06ab02b3551f67afc388ffc3030f37a' => 
    array (
      0 => '/apps/mip/oxwall/ow_plugins/questions/views/controllers/list_my.html',
      1 => 1327905972,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2059740209522cccf7df52d7-88564234',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'menu' => 0,
    'add' => 0,
    'list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_522cccf7e4b136_61476069',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522cccf7e4b136_61476069')) {function content_522cccf7e4b136_61476069($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['menu']->value;?>

<div class="questions-page questions-my">
    <?php if (!empty($_smarty_tpl->tpl_vars['add']->value)){?>
        <div class="qp-add ow_smallmargin">
            <?php echo $_smarty_tpl->tpl_vars['add']->value;?>

        </div>
    <?php }?>
    <div class="qp-list">
        <?php echo $_smarty_tpl->tpl_vars['list']->value;?>

    </div>
</div><?php }} ?>