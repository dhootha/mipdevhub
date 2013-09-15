<?php /* Smarty version Smarty-3.1.12, created on 2013-09-14 22:43:07
         compiled from "/apps/mip/oxwall/ow_plugins/virtual_gifts/views/controllers/admin_categories.html" */ ?>
<?php /*%%SmartyHeaderCode:651050745234ca5b142837-98322345%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd4454ff024aafec54dfc6f7c404a05a08640595f' => 
    array (
      0 => '/apps/mip/oxwall/ow_plugins/virtual_gifts/views/controllers/admin_categories.html',
      1 => 1359700751,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '651050745234ca5b142837-98322345',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'menu' => 0,
    'categories' => 0,
    'catId' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5234ca5b20adf2_03900905',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5234ca5b20adf2_03900905')) {function content_5234ca5b20adf2_03900905($_smarty_tpl) {?><?php if (!is_callable('smarty_block_block_decorator')) include '/apps/mip/oxwall/ow_smarty/plugin/block.block_decorator.php';
if (!is_callable('smarty_function_text_edit')) include '/apps/mip/oxwall/ow_smarty/plugin/function.text_edit.php';
if (!is_callable('smarty_function_url_for')) include '/apps/mip/oxwall/ow_smarty/plugin/function.url_for.php';
if (!is_callable('smarty_function_text')) include '/apps/mip/oxwall/ow_smarty/plugin/function.text.php';
if (!is_callable('smarty_block_form')) include '/apps/mip/oxwall/ow_smarty/plugin/block.form.php';
if (!is_callable('smarty_function_label')) include '/apps/mip/oxwall/ow_smarty/plugin/function.label.php';
if (!is_callable('smarty_function_input')) include '/apps/mip/oxwall/ow_smarty/plugin/function.input.php';
if (!is_callable('smarty_function_submit')) include '/apps/mip/oxwall/ow_smarty/plugin/function.submit.php';
?>
<?php echo $_smarty_tpl->tpl_vars['menu']->value;?>


<div class="ow_wide ow_automargin">
    <?php if ($_smarty_tpl->tpl_vars['categories']->value){?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('block_decorator', array('name'=>'box','type'=>'empty','iconClass'=>'ow_ic_folder','langLabel'=>'virtualgifts+category_list')); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>'box','type'=>'empty','iconClass'=>'ow_ic_folder','langLabel'=>'virtualgifts+category_list'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <table class="ow_table_2" id="categories_tbl">
        <tbody>
        <?php  $_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cat']->_loop = false;
 $_smarty_tpl->tpl_vars['catId'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['cat']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['cat']->iteration=0;
 $_smarty_tpl->tpl_vars['cat']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->key => $_smarty_tpl->tpl_vars['cat']->value){
$_smarty_tpl->tpl_vars['cat']->_loop = true;
 $_smarty_tpl->tpl_vars['catId']->value = $_smarty_tpl->tpl_vars['cat']->key;
 $_smarty_tpl->tpl_vars['cat']->iteration++;
 $_smarty_tpl->tpl_vars['cat']->index++;
 $_smarty_tpl->tpl_vars['cat']->first = $_smarty_tpl->tpl_vars['cat']->index === 0;
 $_smarty_tpl->tpl_vars['cat']->last = $_smarty_tpl->tpl_vars['cat']->iteration === $_smarty_tpl->tpl_vars['cat']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['cat']['first'] = $_smarty_tpl->tpl_vars['cat']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['cat']['last'] = $_smarty_tpl->tpl_vars['cat']->last;
?>
        <tr rel="<?php echo $_smarty_tpl->tpl_vars['catId']->value;?>
" class="ow_alt1 <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['cat']['first']){?>ow_tr_first<?php }?> <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['cat']['last']){?>ow_tr_last<?php }?>" onmouseover="$('span.del-cont', this).show();" onmouseout="$('span.del-cont', this).hide();">
            <td style="width: 90%;">
                <div class="ow_txtleft" style="padding: 2px 0px;"><?php echo smarty_function_text_edit(array('key'=>"virtualgifts+category_".((string)$_smarty_tpl->tpl_vars['catId']->value)),$_smarty_tpl);?>
</div>
            </td>
            <td class="ns-hover-block">
                <div style="width: 50px;">
                    <span class="del-cont" style="display: none;">
                        <a class="ow_lbutton ow_red" href="<?php echo smarty_function_url_for(array('for'=>"VIRTUALGIFTS_CTRL_Admin:categories"),$_smarty_tpl);?>
?catId=<?php echo $_smarty_tpl->tpl_vars['catId']->value;?>
"
                            onclick="return(confirm('<?php echo smarty_function_text(array('key'=>"admin+are_you_sure"),$_smarty_tpl);?>
'));"><?php echo smarty_function_text(array('key'=>"admin+delete"),$_smarty_tpl);?>
</a>
                    </span>
                </div>
            </td>
        </tr>
        <?php } ?>
        </tbody>
    </table>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>'box','type'=>'empty','iconClass'=>'ow_ic_folder','langLabel'=>'virtualgifts+category_list'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php }?>

    <?php $_smarty_tpl->smarty->_tag_stack[] = array('block_decorator', array('name'=>'box','langLabel'=>'virtualgifts+add_category','iconClass'=>'ow_ic_add')); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>'box','langLabel'=>'virtualgifts+add_category','iconClass'=>'ow_ic_add'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php $_smarty_tpl->smarty->_tag_stack[] = array('form', array('name'=>'add-category-form')); $_block_repeat=true; echo smarty_block_form(array('name'=>'add-category-form'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <div class="ow_smallmargin ow_center">
                <?php echo smarty_function_label(array('name'=>'catTitle'),$_smarty_tpl);?>
 <?php echo smarty_function_input(array('name'=>'catTitle','style'=>'width: 210px;'),$_smarty_tpl);?>
 <?php echo smarty_function_submit(array('name'=>'add','class'=>'ow_ic_add'),$_smarty_tpl);?>

            </div>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>'add-category-form'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>'box','langLabel'=>'virtualgifts+add_category','iconClass'=>'ow_ic_add'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

</div><?php }} ?>