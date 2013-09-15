<?php /* Smarty version Smarty-3.1.12, created on 2013-09-05 23:28:35
         compiled from "/apps/mip/oxwall/ow_plugins/photo/views/components/photo_list_widget.html" */ ?>
<?php /*%%SmartyHeaderCode:1481897423522976135d19e8-54283498%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '112282790a774ff38917c5ecb478966b1714fe0c' => 
    array (
      0 => '/apps/mip/oxwall/ow_plugins/photo/views/components/photo_list_widget.html',
      1 => 1340356762,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1481897423522976135d19e8-54283498',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'latest' => 0,
    'featured' => 0,
    'toprated' => 0,
    'menu' => 0,
    'items' => 0,
    'p' => 0,
    'nocontent' => 0,
    'toolbars' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5229761371cd14_68878165',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5229761371cd14_68878165')) {function content_5229761371cd14_68878165($_smarty_tpl) {?><?php if (!is_callable('smarty_block_script')) include '/apps/mip/oxwall/ow_smarty/plugin/block.script.php';
if (!is_callable('smarty_function_text')) include '/apps/mip/oxwall/ow_smarty/plugin/function.text.php';
if (!is_callable('smarty_function_url_for')) include '/apps/mip/oxwall/ow_smarty/plugin/function.url_for.php';
if (!is_callable('smarty_function_url_for_route')) include '/apps/mip/oxwall/ow_smarty/plugin/function.url_for_route.php';
if (!is_callable('smarty_function_decorator')) include '/apps/mip/oxwall/ow_smarty/plugin/function.decorator.php';
?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('script', array()); $_block_repeat=true; echo smarty_block_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


    $(document).ready(function(){
        var $tb_container = $(".ow_box_toolbar_cont", $("#photo_list_widget").parents('.ow_box, .ow_box_empty').get(0));

        $("#photo-widget-menu-featured").click(function(){
        	$tb_container.html($("div#photo-widget-toolbar-featured").html());
        });

        $("#photo-widget-menu-latest").click(function(){
            $tb_container.html($("div#photo-widget-toolbar-latest").html());
        });

        $("#photo-widget-menu-top-rated").click(function(){
            $tb_container.html($("div#photo-widget-toolbar-top-rated").html());
        });
    });

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<div id="photo_list_widget">

	<?php if ($_smarty_tpl->tpl_vars['latest']->value||$_smarty_tpl->tpl_vars['featured']->value||$_smarty_tpl->tpl_vars['toprated']->value){?> <?php if (isset($_smarty_tpl->tpl_vars['menu']->value)){?><?php echo $_smarty_tpl->tpl_vars['menu']->value;?>
<?php }?> <?php }?>
	
	<?php $_smarty_tpl->_capture_stack[0][] = array('default', 'nocontent', null); ob_start(); ?>
	   <div class="ow_nocontent"><?php echo smarty_function_text(array('key'=>'photo+no_photo'),$_smarty_tpl);?>
, <a href="<?php echo smarty_function_url_for(array('for'=>"PHOTO_CTRL_Upload:index"),$_smarty_tpl);?>
"><?php echo smarty_function_text(array('key'=>'photo+add_new'),$_smarty_tpl);?>
</a></div>
	<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
	
	<div class="ow_lp_photos ow_center" id="<?php echo $_smarty_tpl->tpl_vars['items']->value['latest']['contId'];?>
">
		<?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['latest']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value){
$_smarty_tpl->tpl_vars['p']->_loop = true;
?><a class="ow_lp_wrapper" rel="<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
" href="<?php echo smarty_function_url_for_route(array('for'=>"view_photo:[id=>".((string)$_smarty_tpl->tpl_vars['p']->value['id'])."]"),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['p']->value['url'];?>
" /></a><?php }
if (!$_smarty_tpl->tpl_vars['p']->_loop) {
?>
            <?php echo $_smarty_tpl->tpl_vars['nocontent']->value;?>

		<?php } ?>
	</div>

    <?php if ($_smarty_tpl->tpl_vars['featured']->value){?>
	<div class="ow_lp_photos ow_center" id="<?php echo $_smarty_tpl->tpl_vars['items']->value['featured']['contId'];?>
" style="display: none">
		<?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['featured']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value){
$_smarty_tpl->tpl_vars['p']->_loop = true;
?><a class="ow_lp_wrapper" rel="<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
" href="<?php echo smarty_function_url_for_route(array('for'=>"view_photo:[id=>".((string)$_smarty_tpl->tpl_vars['p']->value['id'])."]"),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['p']->value['url'];?>
" /></a><?php }
if (!$_smarty_tpl->tpl_vars['p']->_loop) {
?>
            <?php echo $_smarty_tpl->tpl_vars['nocontent']->value;?>
  
		<?php } ?>
	</div>
	<?php }?>
	
	<div class="ow_lp_photos ow_center" id="<?php echo $_smarty_tpl->tpl_vars['items']->value['toprated']['contId'];?>
" style="display: none">
	    <?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['toprated']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value){
$_smarty_tpl->tpl_vars['p']->_loop = true;
?><a class="ow_lp_wrapper" rel="<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
" href="<?php echo smarty_function_url_for_route(array('for'=>"view_photo:[id=>".((string)$_smarty_tpl->tpl_vars['p']->value['id'])."]"),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['p']->value['url'];?>
" /></a><?php }
if (!$_smarty_tpl->tpl_vars['p']->_loop) {
?>
            <?php echo $_smarty_tpl->tpl_vars['nocontent']->value;?>
   
	    <?php } ?>
	</div>

    <?php if ($_smarty_tpl->tpl_vars['latest']->value){?><div id="photo-widget-toolbar-latest" style="display: none"><?php echo smarty_function_decorator(array('name'=>'box_toolbar','itemList'=>$_smarty_tpl->tpl_vars['toolbars']->value['latest']),$_smarty_tpl);?>
</div><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['featured']->value){?><div id="photo-widget-toolbar-featured" style="display: none"><?php echo smarty_function_decorator(array('name'=>'box_toolbar','itemList'=>$_smarty_tpl->tpl_vars['toolbars']->value['featured']),$_smarty_tpl);?>
</div><?php }?>	
    <?php if ($_smarty_tpl->tpl_vars['toprated']->value){?><div id="photo-widget-toolbar-top-rated" style="display: none"><?php echo smarty_function_decorator(array('name'=>'box_toolbar','itemList'=>$_smarty_tpl->tpl_vars['toolbars']->value['toprated']),$_smarty_tpl);?>
</div><?php }?>
    
</div><?php }} ?>