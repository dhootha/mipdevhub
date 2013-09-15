<?php /* Smarty version Smarty-3.1.12, created on 2013-09-06 00:01:41
         compiled from "/apps/mip/oxwall/ow_plugins/questions/views/components/tabs.html" */ ?>
<?php /*%%SmartyHeaderCode:131222735152297dd526e924-50787490%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ede53cfa46d88668fd9a27b9099f488e63108379' => 
    array (
      0 => '/apps/mip/oxwall/ow_plugins/questions/views/components/tabs.html',
      1 => 1371449659,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '131222735152297dd526e924-50787490',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'uniqId' => 0,
    'tabs' => 0,
    't' => 0,
    'k' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_52297dd52c26b7_88254373',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52297dd52c26b7_88254373')) {function content_52297dd52c26b7_88254373($_smarty_tpl) {?><div class="gtabs" id="<?php echo $_smarty_tpl->tpl_vars['uniqId']->value;?>
">

    <div class="gtabs-tabs-c ow_smallmargin clearfix">
    <?php  $_smarty_tpl->tpl_vars["t"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["t"]->_loop = false;
 $_smarty_tpl->tpl_vars["k"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['tabs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["t"]->key => $_smarty_tpl->tpl_vars["t"]->value){
$_smarty_tpl->tpl_vars["t"]->_loop = true;
 $_smarty_tpl->tpl_vars["k"]->value = $_smarty_tpl->tpl_vars["t"]->key;
?>
        <a class="gtabs-tab <?php echo $_smarty_tpl->tpl_vars['t']->value['icon'];?>
 <?php if ($_smarty_tpl->tpl_vars['t']->value['active']){?>gtabs-active<?php }?>" href="javascript://" data-key="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
">
            <?php echo $_smarty_tpl->tpl_vars['t']->value['label'];?>

        </a>
    <?php } ?>
    </div>

    <div class="gtabs-contents-c">
    <?php  $_smarty_tpl->tpl_vars["t"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["t"]->_loop = false;
 $_smarty_tpl->tpl_vars["k"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['tabs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["t"]->key => $_smarty_tpl->tpl_vars["t"]->value){
$_smarty_tpl->tpl_vars["t"]->_loop = true;
 $_smarty_tpl->tpl_vars["k"]->value = $_smarty_tpl->tpl_vars["t"]->key;
?>
        <div class="gtabs-contents" data-key="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" <?php if (!$_smarty_tpl->tpl_vars['t']->value['active']){?>style="display: none;"<?php }?>>
            <?php echo $_smarty_tpl->tpl_vars['t']->value['content'];?>

        </div>
    <?php } ?>
    </div>

</div><?php }} ?>