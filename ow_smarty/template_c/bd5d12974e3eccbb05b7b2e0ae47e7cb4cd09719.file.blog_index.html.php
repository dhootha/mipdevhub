<?php /* Smarty version Smarty-3.1.12, created on 2013-09-05 23:29:10
         compiled from "/apps/mip/oxwall/ow_plugins/blogs/views/controllers/blog_index.html" */ ?>
<?php /*%%SmartyHeaderCode:191296112052297636aaf3f5-98569286%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bd5d12974e3eccbb05b7b2e0ae47e7cb4cd09719' => 
    array (
      0 => '/apps/mip/oxwall/ow_plugins/blogs/views/controllers/blog_index.html',
      1 => 1363086877,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '191296112052297636aaf3f5-98569286',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'addNew_isAuthorized' => 0,
    'url_new_post' => 0,
    'menu' => 0,
    'isBrowseByTagCase' => 0,
    'tag' => 0,
    'tagCloud' => 0,
    'showList' => 0,
    'list' => 0,
    'post' => 0,
    'dto' => 0,
    'info_string' => 0,
    'content' => 0,
    'id' => 0,
    'toolbars' => 0,
    'userId' => 0,
    'avatars' => 0,
    'paging' => 0,
    'tagSearch' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_52297636bed186_73346092',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52297636bed186_73346092')) {function content_52297636bed186_73346092($_smarty_tpl) {?><?php if (!is_callable('smarty_block_style')) include '/apps/mip/oxwall/ow_smarty/plugin/block.style.php';
if (!is_callable('smarty_function_decorator')) include '/apps/mip/oxwall/ow_smarty/plugin/function.decorator.php';
if (!is_callable('smarty_function_text')) include '/apps/mip/oxwall/ow_smarty/plugin/function.text.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('style', array()); $_block_repeat=true; echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

.ow_wrap_normal{
    white-space: normal;
}
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_style(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php if ($_smarty_tpl->tpl_vars['addNew_isAuthorized']->value){?>
    <div class="ow_right"><?php echo smarty_function_decorator(array('name'=>'button','class'=>'ow_ic_add','id'=>'btn-add-new-post','langLabel'=>'blogs+add_new','onclick'=>"location.href='".((string)$_smarty_tpl->tpl_vars['url_new_post']->value)."'"),$_smarty_tpl);?>
</div>
<?php }?>
	<?php echo $_smarty_tpl->tpl_vars['menu']->value;?>

      <div class="ow_blogs_list clearfix">

         <div class="ow_superwide" style="float:left;">

			<?php if ($_smarty_tpl->tpl_vars['isBrowseByTagCase']->value){?>       
				<?php if ($_smarty_tpl->tpl_vars['tag']->value){?>
	         	<div class="ow_anno ow_stdmargin ow_center ow_ic_warning">
					<?php echo smarty_function_text(array('key'=>"blogs+results_by_tag",'tag'=>$_smarty_tpl->tpl_vars['tag']->value),$_smarty_tpl);?>

				</div>
				<?php }else{ ?>
					<?php echo $_smarty_tpl->tpl_vars['tagCloud']->value;?>
				
				<?php }?>
         	<?php }?>
                
            <?php if ($_smarty_tpl->tpl_vars['showList']->value){?>
            <?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['post']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value){
$_smarty_tpl->tpl_vars['post']->_loop = true;
?>
            
				<?php $_smarty_tpl->tpl_vars['dto'] = new Smarty_variable($_smarty_tpl->tpl_vars['post']->value['dto'], null, 0);?>

				

				<?php $_smarty_tpl->tpl_vars['userId'] = new Smarty_variable($_smarty_tpl->tpl_vars['dto']->value->getAuthorId(), null, 0);?>

				<?php $_smarty_tpl->_capture_stack[0][] = array('default', 'info_string', null); ob_start(); ?>
					<a href="<?php echo $_smarty_tpl->tpl_vars['post']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['dto']->value->getTitle();?>
</a>
				<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

				<?php $_smarty_tpl->_capture_stack[0][] = array('default', 'content', null); ob_start(); ?>
					<?php echo $_smarty_tpl->tpl_vars['post']->value['text'];?>
<?php if ($_smarty_tpl->tpl_vars['post']->value['showMore']){?>... <a class="ow_lbutton" href="<?php echo $_smarty_tpl->tpl_vars['post']->value['url'];?>
"><?php echo smarty_function_text(array('key'=>'blogs+more'),$_smarty_tpl);?>
</a><?php }?>
				<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
				<?php $_smarty_tpl->tpl_vars['id'] = new Smarty_variable($_smarty_tpl->tpl_vars['dto']->value->getId(), null, 0);?>

				

            	<?php echo smarty_function_decorator(array('name'=>'ipc','infoString'=>$_smarty_tpl->tpl_vars['info_string']->value,'addClass'=>"ow_stdmargin",'content'=>$_smarty_tpl->tpl_vars['content']->value,'toolbar'=>$_smarty_tpl->tpl_vars['toolbars']->value[$_smarty_tpl->tpl_vars['id']->value],'avatar'=>$_smarty_tpl->tpl_vars['avatars']->value[$_smarty_tpl->tpl_vars['userId']->value]),$_smarty_tpl);?>

            <?php }
if (!$_smarty_tpl->tpl_vars['post']->_loop) {
?>
            	<?php echo smarty_function_text(array('key'=>'base+empty_list'),$_smarty_tpl);?>

            <?php } ?>

            <?php if ($_smarty_tpl->tpl_vars['paging']->value){?><center><?php echo $_smarty_tpl->tpl_vars['paging']->value;?>
</center><?php }?>
            <?php }?>
        </div>    

         <div class="ow_supernarrow" style="float:right;">
         	<?php echo $_smarty_tpl->tpl_vars['tagSearch']->value;?>

         	<?php if (count($_smarty_tpl->tpl_vars['list']->value)>0){?>
	         	<?php echo $_smarty_tpl->tpl_vars['tagCloud']->value;?>

         	<?php }?>
         </div>

      </div><?php }} ?>