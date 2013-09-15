<?php /* Smarty version Smarty-3.1.12, created on 2013-09-08 21:10:26
         compiled from "/apps/mip/oxwall/ow_plugins/links/views/components/links_widget.html" */ ?>
<?php /*%%SmartyHeaderCode:44395385522ccba20b0037-74034291%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1407322fc18437029bc82ae599c87c839a026ebd' => 
    array (
      0 => '/apps/mip/oxwall/ow_plugins/links/views/components/links_widget.html',
      1 => 1346776079,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '44395385522ccba20b0037-74034291',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'list' => 0,
    'link' => 0,
    'dto' => 0,
    'id' => 0,
    'commentInfo' => 0,
    'moreLink' => 0,
    'info_string' => 0,
    'content' => 0,
    'userId' => 0,
    'avatars' => 0,
    'tbars' => 0,
    'addnewurl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_522ccba2177f66_77480721',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522ccba2177f66_77480721')) {function content_522ccba2177f66_77480721($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url_for_route')) include '/apps/mip/oxwall/ow_smarty/plugin/function.url_for_route.php';
if (!is_callable('smarty_function_text')) include '/apps/mip/oxwall/ow_smarty/plugin/function.text.php';
if (!is_callable('smarty_modifier_truncate')) include '/apps/mip/oxwall/ow_libraries/smarty3/plugins/modifier.truncate.php';
if (!is_callable('smarty_function_decorator')) include '/apps/mip/oxwall/ow_smarty/plugin/function.decorator.php';
?><?php if (!empty($_smarty_tpl->tpl_vars['list']->value)){?>
	<?php  $_smarty_tpl->tpl_vars['link'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['link']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['link']->key => $_smarty_tpl->tpl_vars['link']->value){
$_smarty_tpl->tpl_vars['link']->_loop = true;
?>
	
		
		<?php $_smarty_tpl->tpl_vars["dto"] = new Smarty_variable($_smarty_tpl->tpl_vars['link']->value['dto'], null, 0);?>
		<?php $_smarty_tpl->tpl_vars['userId'] = new Smarty_variable($_smarty_tpl->tpl_vars['dto']->value->getUserId(), null, 0);?>
		<?php $_smarty_tpl->tpl_vars['id'] = new Smarty_variable($_smarty_tpl->tpl_vars['dto']->value->id, null, 0);?>
		
		<?php $_smarty_tpl->_capture_stack[0][] = array('default', 'info_string', null); ob_start(); ?>
			<a href="<?php echo $_smarty_tpl->tpl_vars['dto']->value->url;?>
"><?php echo $_smarty_tpl->tpl_vars['link']->value['dto']->getTitle();?>
</a>
		<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
	
		<?php $_smarty_tpl->_capture_stack[0][] = array('default', 'content', null); ob_start(); ?>
			<?php $_smarty_tpl->_capture_stack[0][] = array('default', "moreLink", null); ob_start(); ?><a class="ow_lbutton" href="<?php echo smarty_function_url_for_route(array('for'=>"link:[id=>".((string)$_smarty_tpl->tpl_vars['id']->value)."]"),$_smarty_tpl);?>
"><?php echo smarty_function_text(array('key'=>'links+more'),$_smarty_tpl);?>
</a><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
			<div class="ow_small ow_smallmargin">
				<span class="ow_txt_value">
					<?php echo $_smarty_tpl->tpl_vars['commentInfo']->value[$_smarty_tpl->tpl_vars['id']->value];?>

				</span>
				<a href="<?php echo smarty_function_url_for_route(array('for'=>"link:[id=>".((string)$_smarty_tpl->tpl_vars['id']->value)."]"),$_smarty_tpl);?>
">
					<?php echo smarty_function_text(array('key'=>'links+comments'),$_smarty_tpl);?>

				</a>
			</div>
			<div class="ow_smallmargin"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['dto']->value->description,100,"... ".((string)$_smarty_tpl->tpl_vars['moreLink']->value));?>
</div>

		<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
	
		
	
		<?php echo smarty_function_decorator(array('name'=>'ipc','addClass'=>'ow_smallmargin','infoString'=>$_smarty_tpl->tpl_vars['info_string']->value,'content'=>$_smarty_tpl->tpl_vars['content']->value,'avatar'=>$_smarty_tpl->tpl_vars['avatars']->value[$_smarty_tpl->tpl_vars['userId']->value],'toolbar'=>$_smarty_tpl->tpl_vars['tbars']->value[$_smarty_tpl->tpl_vars['id']->value]),$_smarty_tpl);?>

	<?php } ?>
<?php }else{ ?>
	<div class="ow_nocontent">
		<?php $_smarty_tpl->_capture_stack[0][] = array('default', 'addnewurl', null); ob_start(); ?><?php echo smarty_function_url_for_route(array('for'=>'link-save-new'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
		<?php echo smarty_function_text(array('key'=>"links+index_widget_empty"),$_smarty_tpl);?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['addnewurl']->value;?>
"><?php echo smarty_function_text(array('key'=>'links+add_new'),$_smarty_tpl);?>
</a>
	</div>
<?php }?><?php }} ?>