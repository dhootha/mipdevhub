<?php /* Smarty version Smarty-3.1.12, created on 2013-09-10 13:19:55
         compiled from "/apps/mip/oxwall/ow_plugins/links/views/components/user_links_widget.html" */ ?>
<?php /*%%SmartyHeaderCode:1825705562522f005b3362b9-32911054%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b328b746f95b73a6eab8f3ffd46256bcfaed94d6' => 
    array (
      0 => '/apps/mip/oxwall/ow_plugins/links/views/components/user_links_widget.html',
      1 => 1331814144,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1825705562522f005b3362b9-32911054',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'list' => 0,
    'item' => 0,
    'info' => 0,
    'id' => 0,
    'tb' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_522f005b3e1364_20599513',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522f005b3e1364_20599513')) {function content_522f005b3e1364_20599513($_smarty_tpl) {?><?php if (!is_callable('smarty_function_decorator')) include '/apps/mip/oxwall/ow_smarty/plugin/function.decorator.php';
?>	<?php  $_smarty_tpl->tpl_vars["item"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["item"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars["item"]->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars["item"]->iteration=0;
 $_smarty_tpl->tpl_vars["item"]->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars["item"]->key => $_smarty_tpl->tpl_vars["item"]->value){
$_smarty_tpl->tpl_vars["item"]->_loop = true;
 $_smarty_tpl->tpl_vars["item"]->iteration++;
 $_smarty_tpl->tpl_vars["item"]->index++;
 $_smarty_tpl->tpl_vars["item"]->first = $_smarty_tpl->tpl_vars["item"]->index === 0;
 $_smarty_tpl->tpl_vars["item"]->last = $_smarty_tpl->tpl_vars["item"]->iteration === $_smarty_tpl->tpl_vars["item"]->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['links']['first'] = $_smarty_tpl->tpl_vars["item"]->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['links']['last'] = $_smarty_tpl->tpl_vars["item"]->last;
?>
	<?php $_smarty_tpl->tpl_vars['id'] = new Smarty_variable($_smarty_tpl->tpl_vars['item']->value->id, null, 0);?>
			<?php $_smarty_tpl->_capture_stack[0][] = array('default', 'info', null); ob_start(); ?>
					<?php echo $_smarty_tpl->tpl_vars['item']->value->description;?>

			<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
		<?php echo smarty_function_decorator(array('name'=>'ic','titleHref'=>$_smarty_tpl->tpl_vars['item']->value->url,'title'=>$_smarty_tpl->tpl_vars['item']->value->title,'info'=>$_smarty_tpl->tpl_vars['info']->value,'toolbar'=>$_smarty_tpl->tpl_vars['tb']->value[$_smarty_tpl->tpl_vars['id']->value],'first'=>$_smarty_tpl->getVariable('smarty')->value['foreach']['links']['first'],'last'=>$_smarty_tpl->getVariable('smarty')->value['foreach']['links']['last']),$_smarty_tpl);?>

	<?php } ?><?php }} ?>