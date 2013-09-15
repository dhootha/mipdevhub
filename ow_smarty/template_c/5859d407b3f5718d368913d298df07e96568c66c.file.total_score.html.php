<?php /* Smarty version Smarty-3.1.12, created on 2013-09-10 10:27:30
         compiled from "/apps/mip/oxwall/ow_system_plugins/base/views/components/total_score.html" */ ?>
<?php /*%%SmartyHeaderCode:1909718911522ed7f29b8644-51138115%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5859d407b3f5718d368913d298df07e96568c66c' => 
    array (
      0 => '/apps/mip/oxwall/ow_system_plugins/base/views/components/total_score.html',
      1 => 1331814144,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1909718911522ed7f29b8644-51138115',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_522ed7f2a43e47_42240641',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522ed7f2a43e47_42240641')) {function content_522ed7f2a43e47_42240641($_smarty_tpl) {?><?php if (!is_callable('smarty_function_text')) include '/apps/mip/oxwall/ow_smarty/plugin/function.text.php';
?><div class="ow_smallmargin"><?php echo smarty_function_text(array('key'=>'base+total_score_label','ratesCount'=>$_smarty_tpl->tpl_vars['info']->value['ratesCount'],'avgScore'=>$_smarty_tpl->tpl_vars['info']->value['avgScore']),$_smarty_tpl);?>

<div style="width:65px;margin:0 auto;">
	<div class="inactive_rate_list">
   	<div class="active_rate_list" style="width:<?php if ($_smarty_tpl->tpl_vars['info']->value['width']){?><?php echo $_smarty_tpl->tpl_vars['info']->value['width'];?>
<?php }else{ ?>0<?php }?>%;">
      </div>
   </div>
</div>
</div>
<?php }} ?>