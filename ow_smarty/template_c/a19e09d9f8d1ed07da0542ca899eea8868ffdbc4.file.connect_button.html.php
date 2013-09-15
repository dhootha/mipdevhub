<?php /* Smarty version Smarty-3.1.12, created on 2013-09-10 08:39:37
         compiled from "/apps/mip/oxwall/ow_plugins/gconnect/views/components/connect_button.html" */ ?>
<?php /*%%SmartyHeaderCode:1021558555522ebea9354897-89364348%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a19e09d9f8d1ed07da0542ca899eea8868ffdbc4' => 
    array (
      0 => '/apps/mip/oxwall/ow_plugins/gconnect/views/components/connect_button.html',
      1 => 1322064280,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1021558555522ebea9354897-89364348',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'icons' => 0,
    'clientid' => 0,
    'backurl' => 0,
    'scope' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_522ebea93bfc85_15772278',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522ebea93bfc85_15772278')) {function content_522ebea93bfc85_15772278($_smarty_tpl) {?>
<img src="<?php echo $_smarty_tpl->tpl_vars['icons']->value;?>
" onclick="glogin('<?php echo $_smarty_tpl->tpl_vars['clientid']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['backurl']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['scope']->value;?>
')"  style="cursor:pointer;margin-bottom:2px;" />

<!-- --> <?php }} ?>