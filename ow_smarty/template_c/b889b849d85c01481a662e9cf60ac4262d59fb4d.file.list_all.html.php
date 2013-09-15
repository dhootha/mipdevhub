<?php /* Smarty version Smarty-3.1.12, created on 2013-09-06 06:49:09
         compiled from "/apps/mip/oxwall/ow_plugins/questions/views/controllers/list_all.html" */ ?>
<?php /*%%SmartyHeaderCode:19530676365229dd55ac7871-09752095%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b889b849d85c01481a662e9cf60ac4262d59fb4d' => 
    array (
      0 => '/apps/mip/oxwall/ow_plugins/questions/views/controllers/list_all.html',
      1 => 1327564426,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19530676365229dd55ac7871-09752095',
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
  'unifunc' => 'content_5229dd55ae2232_43719937',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5229dd55ae2232_43719937')) {function content_5229dd55ae2232_43719937($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['menu']->value;?>

<div class="questions-page questions-all">
    <?php if (!empty($_smarty_tpl->tpl_vars['add']->value)){?>
        <div class="qp-add ow_smallmargin">
            <?php echo $_smarty_tpl->tpl_vars['add']->value;?>

        </div>
    <?php }?>
    <div class="qp-list">
        <?php echo $_smarty_tpl->tpl_vars['list']->value;?>

    </div>
</div><?php }} ?>