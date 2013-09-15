<?php /* Smarty version Smarty-3.1.12, created on 2013-09-09 09:37:59
         compiled from "/apps/mip/oxwall/ow_plugins/groups/views/controllers/groups_edit.html" */ ?>
<?php /*%%SmartyHeaderCode:1599480347522d7ad7632568-55084979%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c7ac61dcce6343b242a52a97be593f3b873ea3ee' => 
    array (
      0 => '/apps/mip/oxwall/ow_plugins/groups/views/controllers/groups_edit.html',
      1 => 1359700750,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1599480347522d7ad7632568-55084979',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'imageUrl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_522d7ad76e4398_62059824',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522d7ad76e4398_62059824')) {function content_522d7ad76e4398_62059824($_smarty_tpl) {?><?php if (!is_callable('smarty_function_decorator')) include '/apps/mip/oxwall/ow_smarty/plugin/function.decorator.php';
if (!is_callable('smarty_block_form')) include '/apps/mip/oxwall/ow_smarty/plugin/block.form.php';
if (!is_callable('smarty_function_label')) include '/apps/mip/oxwall/ow_smarty/plugin/function.label.php';
if (!is_callable('smarty_function_input')) include '/apps/mip/oxwall/ow_smarty/plugin/function.input.php';
if (!is_callable('smarty_function_error')) include '/apps/mip/oxwall/ow_smarty/plugin/function.error.php';
if (!is_callable('smarty_function_submit')) include '/apps/mip/oxwall/ow_smarty/plugin/function.submit.php';
?><div class="ow_create_group clearfix">

    <div class="ow_superwide ow_automargin">
        <div class="ow_stdmargin">
	       <?php echo smarty_function_decorator(array('name'=>"button",'class'=>"ow_ic_left_arrow",'langLabel'=>"groups+edit_back_label",'id'=>"groups-back_btn"),$_smarty_tpl);?>

	    </div>

        <?php $_smarty_tpl->smarty->_tag_stack[] = array('form', array('name'=>'GROUPS_EditGroupForm')); $_block_repeat=true; echo smarty_block_form(array('name'=>'GROUPS_EditGroupForm'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


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
                    <td class="ow_value">
                        <?php if ($_smarty_tpl->tpl_vars['imageUrl']->value){?>
                            <div class="ow_smallmargin">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['imageUrl']->value;?>
" height="100" />
                            </div>
                        <?php }?>
                        <?php echo smarty_function_input(array('name'=>'image'),$_smarty_tpl);?>

                        <br />
                        <?php echo smarty_function_error(array('name'=>'image'),$_smarty_tpl);?>
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
			<div class="clearfix ow_stdmargin">
                <div class="ow_right">
                <?php echo smarty_function_decorator(array('name'=>"button",'class'=>"ow_ic_delete ow_red ow_negative",'langLabel'=>"groups+delete_group_label",'id'=>"groups-delete_btn"),$_smarty_tpl);?>

                <?php echo smarty_function_submit(array('name'=>'save','class'=>'ow_ic_save ow_positive'),$_smarty_tpl);?>

                </div>
	`		</div>

        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>'GROUPS_EditGroupForm'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </div>

</div>


<?php }} ?>