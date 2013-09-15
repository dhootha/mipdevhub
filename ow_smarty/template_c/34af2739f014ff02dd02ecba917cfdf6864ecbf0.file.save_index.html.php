<?php /* Smarty version Smarty-3.1.12, created on 2013-09-06 11:44:11
         compiled from "/apps/mip/oxwall/ow_plugins/links/views/controllers/save_index.html" */ ?>
<?php /*%%SmartyHeaderCode:1696812086522a227b7f3a04-53263491%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '34af2739f014ff02dd02ecba917cfdf6864ecbf0' => 
    array (
      0 => '/apps/mip/oxwall/ow_plugins/links/views/controllers/save_index.html',
      1 => 1359700750,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1696812086522a227b7f3a04-53263491',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'authMsg' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_522a227b8c3361_20140485',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522a227b8c3361_20140485')) {function content_522a227b8c3361_20140485($_smarty_tpl) {?><?php if (!is_callable('smarty_block_form')) include '/apps/mip/oxwall/ow_smarty/plugin/block.form.php';
if (!is_callable('smarty_function_cycle')) include '/apps/mip/oxwall/ow_libraries/smarty3/plugins/function.cycle.php';
if (!is_callable('smarty_function_label')) include '/apps/mip/oxwall/ow_smarty/plugin/function.label.php';
if (!is_callable('smarty_function_input')) include '/apps/mip/oxwall/ow_smarty/plugin/function.input.php';
if (!is_callable('smarty_function_error')) include '/apps/mip/oxwall/ow_smarty/plugin/function.error.php';
if (!is_callable('smarty_function_submit')) include '/apps/mip/oxwall/ow_smarty/plugin/function.submit.php';
?>
<div class="ow_link_add clearfix">

<?php if (!$_smarty_tpl->tpl_vars['authMsg']->value){?>
    <div class="ow_superwide ow_automargin">
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('form', array('name'=>"save")); $_block_repeat=true; echo smarty_block_form(array('name'=>"save"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <table class="ow_table_1 ow_form ow_stdmargin">
           	<tr class="<?php echo smarty_function_cycle(array('values'=>'ow_alt2,ow_alt1'),$_smarty_tpl);?>
 ow_tr_first">
               	<td>
                    <?php echo smarty_function_label(array('name'=>"url"),$_smarty_tpl);?>
<br />
                    <?php echo smarty_function_input(array('name'=>"url"),$_smarty_tpl);?>
<br />
                    <?php echo smarty_function_error(array('name'=>"url"),$_smarty_tpl);?>

                </td>
            </tr>
            <tr class="<?php echo smarty_function_cycle(array('values'=>'ow_alt2,ow_alt1'),$_smarty_tpl);?>
">
                <td>
                    <?php echo smarty_function_label(array('name'=>"title"),$_smarty_tpl);?>
<br />
                    <?php echo smarty_function_input(array('name'=>"title"),$_smarty_tpl);?>
<br />
                    <?php echo smarty_function_error(array('name'=>"title"),$_smarty_tpl);?>

                </td>
            </tr>
            <tr class="<?php echo smarty_function_cycle(array('values'=>'ow_alt2,ow_alt1'),$_smarty_tpl);?>
">
                <td>
                    <?php echo smarty_function_label(array('name'=>"description"),$_smarty_tpl);?>
<br />
                    <?php echo smarty_function_input(array('name'=>"description"),$_smarty_tpl);?>
<br />
                    <?php echo smarty_function_error(array('name'=>"description"),$_smarty_tpl);?>

                </td>
            </tr>
            <tr class="<?php echo smarty_function_cycle(array('values'=>'ow_alt2,ow_alt1'),$_smarty_tpl);?>
 ow_tr_last">
                <td>
                    <?php echo smarty_function_label(array('name'=>"tags"),$_smarty_tpl);?>
<br />
                    <?php echo smarty_function_input(array('name'=>"tags"),$_smarty_tpl);?>
<br />
                    <?php echo smarty_function_error(array('name'=>"tags"),$_smarty_tpl);?>

                </td>
            </tr>
        </table>
		<div class="clearfix ow_submit ow_stdmargin">
			<div class="ow_right"><?php echo smarty_function_submit(array('name'=>"submit",'class'=>"ow_button ow_ic_add ow_green ow_positive"),$_smarty_tpl);?>
</div>
		</div>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>"save"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </div>
<?php }else{ ?>
    <div class="ow_anno ow_std_margin ow_nocontent"><?php echo $_smarty_tpl->tpl_vars['authMsg']->value;?>
</div>
<?php }?>
</div><?php }} ?>