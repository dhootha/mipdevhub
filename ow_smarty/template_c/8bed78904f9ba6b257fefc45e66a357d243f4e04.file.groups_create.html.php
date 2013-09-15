<?php /* Smarty version Smarty-3.1.12, created on 2013-09-06 06:21:56
         compiled from "/apps/mip/oxwall/ow_plugins/groups/views/controllers/groups_create.html" */ ?>
<?php /*%%SmartyHeaderCode:6921967555229d6f4e5d6d4-36285747%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8bed78904f9ba6b257fefc45e66a357d243f4e04' => 
    array (
      0 => '/apps/mip/oxwall/ow_plugins/groups/views/controllers/groups_create.html',
      1 => 1359700750,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6921967555229d6f4e5d6d4-36285747',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'permissionMessage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5229d6f4f1b425_19719238',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5229d6f4f1b425_19719238')) {function content_5229d6f4f1b425_19719238($_smarty_tpl) {?><?php if (!is_callable('smarty_block_form')) include '/apps/mip/oxwall/ow_smarty/plugin/block.form.php';
if (!is_callable('smarty_function_label')) include '/apps/mip/oxwall/ow_smarty/plugin/function.label.php';
if (!is_callable('smarty_function_input')) include '/apps/mip/oxwall/ow_smarty/plugin/function.input.php';
if (!is_callable('smarty_function_error')) include '/apps/mip/oxwall/ow_smarty/plugin/function.error.php';
if (!is_callable('smarty_function_submit')) include '/apps/mip/oxwall/ow_smarty/plugin/function.submit.php';
?><?php if (!empty($_smarty_tpl->tpl_vars['permissionMessage']->value)){?>
    <div class="ow_anno ow_center">
        <?php echo $_smarty_tpl->tpl_vars['permissionMessage']->value;?>

    </div>
<?php }else{ ?>
<div class="ow_create_group clearfix">

    <div class="ow_superwide ow_automargin">
	    <?php $_smarty_tpl->smarty->_tag_stack[] = array('form', array('name'=>'GROUPS_CreateGroupForm')); $_block_repeat=true; echo smarty_block_form(array('name'=>'GROUPS_CreateGroupForm'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


	        <table class="ow_table_1 ow_form">
	            <tr class="ow_alt2 ow_tr_first">
	                <td class="ow_label"><?php echo smarty_function_label(array('name'=>'title'),$_smarty_tpl);?>
</td>
	                <td class="ow_value"><?php echo smarty_function_input(array('name'=>'title'),$_smarty_tpl);?>
 <?php echo smarty_function_error(array('name'=>'title'),$_smarty_tpl);?>
</td>
	                <td class="ow_desc ow_small"></td>
	            </tr>
	            <tr class="ow_alt1">
	                <td class="ow_label"><?php echo smarty_function_label(array('name'=>'description'),$_smarty_tpl);?>
</td>
	                <td class="ow_value"><?php echo smarty_function_input(array('name'=>'description'),$_smarty_tpl);?>
<br /><?php echo smarty_function_error(array('name'=>'description'),$_smarty_tpl);?>
</td>
	                <td class="ow_desc ow_small"></td>
	            </tr>
	            <tr class="ow_alt2">
	                <td class="ow_label"><?php echo smarty_function_label(array('name'=>'image'),$_smarty_tpl);?>
</td>
	                <td class="ow_value"><?php echo smarty_function_input(array('name'=>'image'),$_smarty_tpl);?>
<br /><?php echo smarty_function_error(array('name'=>'image'),$_smarty_tpl);?>
</td>
	                <td class="ow_desc ow_small"></td>
	            </tr>
                    <tr class="ow_alt1">
	                <td class="ow_label"><?php echo smarty_function_label(array('name'=>'whoCanView'),$_smarty_tpl);?>
</td>
	                <td class="ow_value"><?php echo smarty_function_input(array('name'=>'whoCanView'),$_smarty_tpl);?>
<br /><?php echo smarty_function_error(array('name'=>'whoCanView'),$_smarty_tpl);?>
</td>
	                <td class="ow_desc ow_small"></td>
	            </tr>
                    <tr class="ow_alt2 ow_tr_last">
	                <td class="ow_label"><?php echo smarty_function_label(array('name'=>'whoCanInvite'),$_smarty_tpl);?>
</td>
	                <td class="ow_value"><?php echo smarty_function_input(array('name'=>'whoCanInvite'),$_smarty_tpl);?>
<br /><?php echo smarty_function_error(array('name'=>'whoCanInvite'),$_smarty_tpl);?>
</td>
	                <td class="ow_desc ow_small"></td>
	            </tr>
	        </table>
            <div class="clearfix ow_stdmargin"><div class="ow_right"><?php echo smarty_function_submit(array('name'=>'save','class'=>'ow_ic_new'),$_smarty_tpl);?>
</div></div>

	    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>'GROUPS_CreateGroupForm'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </div>

</div>
<?php }?>
<?php }} ?>