<?php /* Smarty version Smarty-3.1.12, created on 2013-09-05 23:55:13
         compiled from "/apps/mip/oxwall/ow_system_plugins/base/views/controllers/widget_panel_dashboard.html" */ ?>
<?php /*%%SmartyHeaderCode:206890079252297c5198af52-88456125%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cec8ed9f313e586c25e7f6d772d1b5e5fc7b8a8c' => 
    array (
      0 => '/apps/mip/oxwall/ow_system_plugins/base/views/controllers/widget_panel_dashboard.html',
      1 => 1359700751,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '206890079252297c5198af52-88456125',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'isAdmin' => 0,
    'isModerator' => 0,
    'disaprvdCount' => 0,
    'flags' => 0,
    'flag' => 0,
    'componentPanel' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_52297c51a3c7d6_33106942',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52297c51a3c7d6_33106942')) {function content_52297c51a3c7d6_33106942($_smarty_tpl) {?><?php if (!is_callable('smarty_block_block_decorator')) include '/apps/mip/oxwall/ow_smarty/plugin/block.block_decorator.php';
if (!is_callable('smarty_function_text')) include '/apps/mip/oxwall/ow_smarty/plugin/function.text.php';
if (!is_callable('smarty_function_url_for_route')) include '/apps/mip/oxwall/ow_smarty/plugin/function.url_for_route.php';
if (!is_callable('smarty_function_url_for')) include '/apps/mip/oxwall/ow_smarty/plugin/function.url_for.php';
?><?php if (($_smarty_tpl->tpl_vars['isAdmin']->value||$_smarty_tpl->tpl_vars['isModerator']->value)&&($_smarty_tpl->tpl_vars['disaprvdCount']->value+count($_smarty_tpl->tpl_vars['flags']->value))>0){?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('block_decorator', array('name'=>'box','type'=>'empty','addClass'=>'ow_stdmargin','langLabel'=>'base+moderator_panel')); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>'box','type'=>'empty','addClass'=>'ow_stdmargin','langLabel'=>'base+moderator_panel'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<table width="100%">
			<tr>
				<?php if ($_smarty_tpl->tpl_vars['disaprvdCount']->value>0){?>
				<td>
					<div class="ow_smallmargin"><?php echo smarty_function_text(array('key'=>"base+for_approval"),$_smarty_tpl);?>
</div>
					<ul class="ow_regular">
						<li >
							<a href="<?php echo smarty_function_url_for_route(array('for'=>'users-waiting-for-approval'),$_smarty_tpl);?>
"><?php echo smarty_function_text(array('key'=>'base+users','count'=>$_smarty_tpl->tpl_vars['disaprvdCount']->value),$_smarty_tpl);?>
</a> <span class="ow_lbutton ow_green"><?php echo $_smarty_tpl->tpl_vars['disaprvdCount']->value;?>
</span>
						</li>
					</ul>							
				</td>
				<?php }?>
				<?php if (count($_smarty_tpl->tpl_vars['flags']->value)>0){?>
				<td>
					<div class="ow_smallmargin"><?php echo smarty_function_text(array('key'=>"base+flagged_content"),$_smarty_tpl);?>
</div>
					<ul class="ow_regular">
							<?php  $_smarty_tpl->tpl_vars['flag'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['flag']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['flags']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['flag']->key => $_smarty_tpl->tpl_vars['flag']->value){
$_smarty_tpl->tpl_vars['flag']->_loop = true;
?>
							<li>
								<a href="<?php echo smarty_function_url_for(array('for'=>"BASE_CTRL_Flags:index:[type =>".((string)$_smarty_tpl->tpl_vars['flag']->value['type'])."]"),$_smarty_tpl);?>
"><?php echo smarty_function_text(array('key'=>((string)$_smarty_tpl->tpl_vars['flag']->value['langKey'])),$_smarty_tpl);?>
</a> <span class="ow_lbutton ow_red"><?php echo $_smarty_tpl->tpl_vars['flag']->value['count'];?>
</span>
							</li>
						<?php } ?>
					</ul>			
				</td>
				<?php }?>
			</tr>
		</table>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>'box','type'=>'empty','addClass'=>'ow_stdmargin','langLabel'=>'base+moderator_panel'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>

<?php echo $_smarty_tpl->tpl_vars['componentPanel']->value;?>
<?php }} ?>