<?php /* Smarty version Smarty-3.1.12, created on 2013-09-06 06:51:31
         compiled from "/apps/mip/oxwall/ow_plugins/photo/views/components/photo_list.html" */ ?>
<?php /*%%SmartyHeaderCode:5441227895229dde3112de3-58211165%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b11ce1f1ffa77de02c96144202bfc7b3a4e2e225' => 
    array (
      0 => '/apps/mip/oxwall/ow_plugins/photo/views/components/photo_list.html',
      1 => 1340356762,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5441227895229dde3112de3-58211165',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'no_content' => 0,
    'photos' => 0,
    'cnt' => 0,
    'count' => 0,
    'alt1' => 0,
    'photo' => 0,
    'listType' => 0,
    'usernames' => 0,
    'names' => 0,
    'widthConfig' => 0,
    'heightConfig' => 0,
    'privacy' => 0,
    'paging' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5229dde32470c4_17653666',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5229dde32470c4_17653666')) {function content_5229dde32470c4_17653666($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url_for_route')) include '/apps/mip/oxwall/ow_smarty/plugin/function.url_for_route.php';
if (!is_callable('smarty_function_text')) include '/apps/mip/oxwall/ow_smarty/plugin/function.text.php';
if (!is_callable('smarty_function_user_link')) include '/apps/mip/oxwall/ow_smarty/plugin/function.user_link.php';
if (!is_callable('smarty_function_decorator')) include '/apps/mip/oxwall/ow_smarty/plugin/function.decorator.php';
?>
<?php if (!$_smarty_tpl->tpl_vars['no_content']->value){?>

	<div class="ow_photo_list ow_stdmargin clearfix">
	
	<?php $_smarty_tpl->tpl_vars['alt1'] = new Smarty_variable(false, null, 0);?>
	<?php $_smarty_tpl->tpl_vars['cnt'] = new Smarty_variable(0, null, 0);?>
	
	<?php  $_smarty_tpl->tpl_vars['photo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['photo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['photos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['photo']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['photo']->iteration=0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['p']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['photo']->key => $_smarty_tpl->tpl_vars['photo']->value){
$_smarty_tpl->tpl_vars['photo']->_loop = true;
 $_smarty_tpl->tpl_vars['photo']->iteration++;
 $_smarty_tpl->tpl_vars['photo']->last = $_smarty_tpl->tpl_vars['photo']->iteration === $_smarty_tpl->tpl_vars['photo']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['p']['iteration']++;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['p']['last'] = $_smarty_tpl->tpl_vars['photo']->last;
?>

	    <?php if ($_smarty_tpl->tpl_vars['cnt']->value==$_smarty_tpl->tpl_vars['count']->value){?>
	        <?php if ($_smarty_tpl->tpl_vars['alt1']->value){?><?php $_smarty_tpl->tpl_vars['alt1'] = new Smarty_variable(false, null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['alt1'] = new Smarty_variable(true, null, 0);?><?php }?>
	        <?php $_smarty_tpl->tpl_vars['cnt'] = new Smarty_variable(0, null, 0);?>
	    <?php }?>
	    
	    <?php $_smarty_tpl->tpl_vars['cnt'] = new Smarty_variable($_smarty_tpl->tpl_vars['cnt']->value+1, null, 0);?>
	
	    <?php $_smarty_tpl->_capture_stack[0][] = array('href', null, null); ob_start(); ?><?php echo smarty_function_url_for_route(array('for'=>"view_photo:[id=>".((string)$_smarty_tpl->tpl_vars['photo']->value['id'])."]"),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
	
	    <?php $_smarty_tpl->_capture_stack[0][] = array('infoStr', null, null); ob_start(); ?>
	        <div class="ow_photo_rate"><?php if ($_smarty_tpl->tpl_vars['listType']->value=='toprated'){?><?php if ($_smarty_tpl->tpl_vars['photo']->value['score']){?><?php echo BASE_CTRL_Rate::displayRate(array('avg_rate'=>$_smarty_tpl->tpl_vars['photo']->value['score']),$_smarty_tpl);?>
<?php }?><?php }?></div>
	        <?php echo smarty_function_text(array('key'=>'base+by'),$_smarty_tpl);?>
 <?php echo smarty_function_user_link(array('username'=>$_smarty_tpl->tpl_vars['usernames']->value[$_smarty_tpl->tpl_vars['photo']->value['userId']],'name'=>$_smarty_tpl->tpl_vars['names']->value[$_smarty_tpl->tpl_vars['photo']->value['userId']]),$_smarty_tpl);?>

	    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
	    
	    <?php if ($_smarty_tpl->tpl_vars['cnt']->value==1){?>
	        <div class="clearfix <?php if ($_smarty_tpl->tpl_vars['alt1']->value){?>ow_alt1<?php }else{ ?>ow_alt2<?php }?>">
	    <?php }?> 

        <?php if ($_smarty_tpl->tpl_vars['listType']->value=='latest'){?><?php $_smarty_tpl->tpl_vars['privacy'] = new Smarty_variable(1, null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['privacy'] = new Smarty_variable(0, null, 0);?><?php }?> 	
	    <?php echo smarty_function_decorator(array('name'=>'photo_list_item','data'=>$_smarty_tpl->tpl_vars['photo']->value,'href'=>Smarty::$_smarty_vars['capture']['href'],'url'=>$_smarty_tpl->tpl_vars['photo']->value['url'],'width'=>$_smarty_tpl->tpl_vars['widthConfig']->value,'height'=>$_smarty_tpl->tpl_vars['heightConfig']->value,'infoString'=>Smarty::$_smarty_vars['capture']['infoStr'],'set_class'=>"ow_item_set".((string)$_smarty_tpl->tpl_vars['count']->value),'displayPrivacy'=>$_smarty_tpl->tpl_vars['privacy']->value),$_smarty_tpl);?>

	    
	    <?php if ($_smarty_tpl->tpl_vars['cnt']->value==$_smarty_tpl->tpl_vars['count']->value&&$_smarty_tpl->getVariable('smarty')->value['foreach']['p']['iteration']!=1||$_smarty_tpl->getVariable('smarty')->value['foreach']['p']['last']){?>
	        </div>
	    <?php }?>
	    
	<?php } ?>
	
	</div>
	
	<?php echo $_smarty_tpl->tpl_vars['paging']->value;?>


<?php }else{ ?>
    <div class="ow_nocontent"><?php echo smarty_function_text(array('key'=>'photo+no_photo_found'),$_smarty_tpl);?>
</div>
<?php }?><?php }} ?>