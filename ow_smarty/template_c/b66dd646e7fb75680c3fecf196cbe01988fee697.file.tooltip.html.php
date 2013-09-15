<?php /* Smarty version Smarty-3.1.12, created on 2013-09-05 23:28:36
         compiled from "/apps/mip/oxwall/ow_system_plugins/base/decorators/tooltip.html" */ ?>
<?php /*%%SmartyHeaderCode:102135643652297614351d76-42007950%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b66dd646e7fb75680c3fecf196cbe01988fee697' => 
    array (
      0 => '/apps/mip/oxwall/ow_system_plugins/base/decorators/tooltip.html',
      1 => 1359700751,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '102135643652297614351d76-42007950',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_522976143b1e51_54835050',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522976143b1e51_54835050')) {function content_522976143b1e51_54835050($_smarty_tpl) {?>
<div class="ow_tooltip <?php if (!empty($_smarty_tpl->tpl_vars['data']->value['addClass'])){?> <?php echo $_smarty_tpl->tpl_vars['data']->value['addClass'];?>
<?php }?>">
    <div class="ow_tooltip_tail">
        <span></span>
    </div>
    <div class="ow_tooltip_body">
        <?php echo $_smarty_tpl->tpl_vars['data']->value['content'];?>

    </div>
</div><?php }} ?>