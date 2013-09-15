<?php /* Smarty version Smarty-3.1.12, created on 2013-09-06 00:15:11
         compiled from "/apps/mip/oxwall/ow_system_plugins/base/views/components/language_value_edit.html" */ ?>
<?php /*%%SmartyHeaderCode:393649206522980ff6ffa54-50623024%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4af521006ba22f5fdb3ab03794ea9a0d1a612b3b' => 
    array (
      0 => '/apps/mip/oxwall/ow_system_plugins/base/views/components/language_value_edit.html',
      1 => 1359700751,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '393649206522980ff6ffa54-50623024',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'langs' => 0,
    'lang' => 0,
    'prefix' => 0,
    'key' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_522980ff7b48f7_95268021',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522980ff7b48f7_95268021')) {function content_522980ff7b48f7_95268021($_smarty_tpl) {?><?php if (!is_callable('smarty_block_block_decorator')) include '/apps/mip/oxwall/ow_smarty/plugin/block.block_decorator.php';
if (!is_callable('smarty_block_form')) include '/apps/mip/oxwall/ow_smarty/plugin/block.form.php';
if (!is_callable('smarty_function_cycle')) include '/apps/mip/oxwall/ow_libraries/smarty3/plugins/function.cycle.php';
if (!is_callable('smarty_function_input')) include '/apps/mip/oxwall/ow_smarty/plugin/function.input.php';
if (!is_callable('smarty_function_submit')) include '/apps/mip/oxwall/ow_smarty/plugin/function.submit.php';
?><div style="width: 510px;" class="ow_automargin">

	<?php $_smarty_tpl->smarty->_tag_stack[] = array('block_decorator', array('name'=>"box",'type'=>"empty")); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>"box",'type'=>"empty"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	<?php $_smarty_tpl->smarty->_tag_stack[] = array('form', array('name'=>"lang-values-edit")); $_block_repeat=true; echo smarty_block_form(array('name'=>"lang-values-edit"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<table class="ow_table_1 ow_form ow_smallmargin">
			<tr class="ow_center ow_tr_first">
				<th>Language</th>
				<th>Translation</th>
			</tr>
			<?php  $_smarty_tpl->tpl_vars['lang'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['lang']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['langs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['lang']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['lang']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['lang']->key => $_smarty_tpl->tpl_vars['lang']->value){
$_smarty_tpl->tpl_vars['lang']->_loop = true;
 $_smarty_tpl->tpl_vars['lang']->iteration++;
 $_smarty_tpl->tpl_vars['lang']->last = $_smarty_tpl->tpl_vars['lang']->iteration === $_smarty_tpl->tpl_vars['lang']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['lang']['last'] = $_smarty_tpl->tpl_vars['lang']->last;
?>
				<tr class="<?php echo smarty_function_cycle(array('values'=>"ow_alt1,ow_alt2"),$_smarty_tpl);?>
 <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['lang']['last']){?>ow_tr_last<?php }?>">
					<td class="ow_label"><?php echo $_smarty_tpl->tpl_vars['lang']->value->getLabel();?>
 (<?php echo $_smarty_tpl->tpl_vars['lang']->value->getTag();?>
)</td>
					<td class="ow_value"><?php echo smarty_function_input(array('name'=>"lang[".((string)$_smarty_tpl->tpl_vars['lang']->value->id)."][".((string)$_smarty_tpl->tpl_vars['prefix']->value)."][".((string)$_smarty_tpl->tpl_vars['key']->value)."]"),$_smarty_tpl);?>
</td>
				</tr>
			<?php } ?>
		</table>
			<div class="clearfix ow_smallmargin"><div class="ow_right">
					<?php echo smarty_function_submit(array('name'=>"submit"),$_smarty_tpl);?>

			</div></div>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>"lang-values-edit"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>"box",'type'=>"empty"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	
</div><?php }} ?>