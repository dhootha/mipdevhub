<?php /* Smarty version Smarty-3.1.12, created on 2013-09-08 21:12:00
         compiled from "/apps/mip/oxwall/ow_system_plugins/base/views/components/rss_widget.html" */ ?>
<?php /*%%SmartyHeaderCode:416788435522ccc00df4c64-66019141%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3d547db45280ca0167ad2e9b81e51b12e5ece3f8' => 
    array (
      0 => '/apps/mip/oxwall/ow_system_plugins/base/views/components/rss_widget.html',
      1 => 1362477213,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '416788435522ccc00df4c64-66019141',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'rss' => 0,
    'titleOnly' => 0,
    'item' => 0,
    'index' => 0,
    'toolbars' => 0,
    'info' => 0,
    'toolbar' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_522ccc00eb46e5_83751652',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522ccc00eb46e5_83751652')) {function content_522ccc00eb46e5_83751652($_smarty_tpl) {?><?php if (!is_callable('smarty_function_decorator')) include '/apps/mip/oxwall/ow_smarty/plugin/function.decorator.php';
if (!is_callable('smarty_function_text')) include '/apps/mip/oxwall/ow_smarty/plugin/function.text.php';
?>
<?php  $_smarty_tpl->tpl_vars["item"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["item"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rss']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars["item"]->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars["item"]->iteration=0;
 $_smarty_tpl->tpl_vars["item"]->index=-1;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['feed']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars["item"]->key => $_smarty_tpl->tpl_vars["item"]->value){
$_smarty_tpl->tpl_vars["item"]->_loop = true;
 $_smarty_tpl->tpl_vars["item"]->iteration++;
 $_smarty_tpl->tpl_vars["item"]->index++;
 $_smarty_tpl->tpl_vars["item"]->first = $_smarty_tpl->tpl_vars["item"]->index === 0;
 $_smarty_tpl->tpl_vars["item"]->last = $_smarty_tpl->tpl_vars["item"]->iteration === $_smarty_tpl->tpl_vars["item"]->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['feed']['first'] = $_smarty_tpl->tpl_vars["item"]->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['feed']['iteration']++;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['feed']['last'] = $_smarty_tpl->tpl_vars["item"]->last;
?>
    <?php $_smarty_tpl->_capture_stack[0][] = array('default', 'info', null); ob_start(); ?>
        <?php if (!$_smarty_tpl->tpl_vars['titleOnly']->value){?>
            <?php echo $_smarty_tpl->tpl_vars['item']->value['description'];?>

        <?php }?>
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

    <?php $_smarty_tpl->tpl_vars['index'] = new Smarty_variable($_smarty_tpl->getVariable('smarty')->value['foreach']['feed']['iteration']-1, null, 0);?>
    <?php if (empty($_smarty_tpl->tpl_vars['toolbars']->value[$_smarty_tpl->tpl_vars['index']->value])){?>
        <?php $_smarty_tpl->tpl_vars['toolbar'] = new Smarty_variable('', null, 0);?>
    <?php }else{ ?>
        <?php $_smarty_tpl->tpl_vars['toolbar'] = new Smarty_variable($_smarty_tpl->tpl_vars['toolbars']->value[$_smarty_tpl->tpl_vars['index']->value], null, 0);?>
    <?php }?>

    <?php echo smarty_function_decorator(array('name'=>"ic",'titleHref'=>$_smarty_tpl->tpl_vars['item']->value['link'],'titleHrefBlank'=>true,'title'=>$_smarty_tpl->tpl_vars['item']->value['title'],'info'=>$_smarty_tpl->tpl_vars['info']->value,'toolbar'=>$_smarty_tpl->tpl_vars['toolbar']->value,'first'=>$_smarty_tpl->getVariable('smarty')->value['foreach']['feed']['first'],'last'=>$_smarty_tpl->getVariable('smarty')->value['foreach']['feed']['last']),$_smarty_tpl);?>

<?php }
if (!$_smarty_tpl->tpl_vars["item"]->_loop) {
?>
	<div class="ow_nocontent">
	    <?php echo smarty_function_text(array('key'=>"base+widgets_no_content"),$_smarty_tpl);?>

        </div>
<?php } ?><?php }} ?>