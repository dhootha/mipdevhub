<?php /* Smarty version Smarty-3.1.12, created on 2013-09-06 06:49:09
         compiled from "/apps/mip/oxwall/ow_plugins/questions/views/components/feed_menu.html" */ ?>
<?php /*%%SmartyHeaderCode:86794215229dd55a94335-23227408%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '021b11b41e7c89b783c876dbd208a105778fa9f2' => 
    array (
      0 => '/apps/mip/oxwall/ow_plugins/questions/views/components/feed_menu.html',
      1 => 1356082961,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '86794215229dd55a94335-23227408',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'menu' => 0,
    'sortControl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5229dd55aa0842_71574355',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5229dd55aa0842_71574355')) {function content_5229dd55aa0842_71574355($_smarty_tpl) {?><div class="questions-list-menu-wrap clearfix">
    <div class="ql-menu">
        <?php echo $_smarty_tpl->tpl_vars['menu']->value;?>

        <div class="ql-sort-wrap">
            <?php echo $_smarty_tpl->tpl_vars['sortControl']->value;?>

        </div>
    </div>
</div><?php }} ?>