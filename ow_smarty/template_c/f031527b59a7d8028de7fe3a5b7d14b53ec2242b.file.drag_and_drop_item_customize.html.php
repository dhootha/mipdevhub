<?php /* Smarty version Smarty-3.1.12, created on 2013-09-06 06:42:00
         compiled from "/apps/mip/oxwall/ow_system_plugins/base/views/components/drag_and_drop_item_customize.html" */ ?>
<?php /*%%SmartyHeaderCode:17032236705229dba88ce1b7-72726812%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f031527b59a7d8028de7fe3a5b7d14b53ec2242b' => 
    array (
      0 => '/apps/mip/oxwall/ow_system_plugins/base/views/components/drag_and_drop_item_customize.html',
      1 => 1363759970,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17032236705229dba88ce1b7-72726812',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'box' => 0,
    'render' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5229dba898f458_65333815',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5229dba898f458_65333815')) {function content_5229dba898f458_65333815($_smarty_tpl) {?><?php if (!is_callable('smarty_function_text')) include '/apps/mip/oxwall/ow_smarty/plugin/function.text.php';
if (!is_callable('smarty_block_block_decorator')) include '/apps/mip/oxwall/ow_smarty/plugin/block.block_decorator.php';
?><div <?php if (!empty($_smarty_tpl->tpl_vars['box']->value['avaliable_sections'])){?>ow_avaliable_sections="<?php echo $_smarty_tpl->tpl_vars['box']->value['avaliable_sections'];?>
"<?php }?> class="<?php if ($_smarty_tpl->tpl_vars['box']->value['clone']){?>clone<?php }?><?php if ($_smarty_tpl->tpl_vars['box']->value['freeze']){?> ow_dnd_freezed<?php }?> access_<?php echo $_smarty_tpl->tpl_vars['box']->value['access'];?>
 clearfix component" id="<?php echo $_smarty_tpl->tpl_vars['box']->value['uniqName'];?>
">
    <div class="schem_component dd_handle" <?php if ($_smarty_tpl->tpl_vars['render']->value){?> style="display: none" <?php }?>>
        <div class="ow_dnd_schem_item schem_component <?php echo $_smarty_tpl->tpl_vars['box']->value['icon'];?>
" >
            <span class="ow_label dd_title">
                <?php echo $_smarty_tpl->tpl_vars['box']->value['title'];?>

            </span>
            <span class="action" style="display: none">
                <a class="ow_lbutton dd_edit" href="javascript://"><?php echo smarty_function_text(array('key'=>"base+widgets_action_edit"),$_smarty_tpl);?>
</a>
                <a class="ow_lbutton ow_red dd_delete" href="javascript://"><?php echo smarty_function_text(array('key'=>"base+widgets_action_delete"),$_smarty_tpl);?>
</a>
            </span>
        </div>
    </div>

    <?php if ($_smarty_tpl->tpl_vars['render']->value){?>
        <div class="view_component ow_dnd_widget ow_dnd_widget_customize <?php echo $_smarty_tpl->tpl_vars['box']->value['uniqName'];?>
">
            <?php $_smarty_tpl->_capture_stack[0][] = array("boxCap", null, null); ob_start(); ?>
                <?php if (!$_smarty_tpl->tpl_vars['box']->value['freeze']){?>
                    <div class="ow_box_icons actions">
                        <a href="javascript://;" class="ow_ic_gear_wheel control dd_edit">&nbsp;</a>
                        <a href="javascript://;" class="ow_ic_delete control dd_delete">&nbsp;</a>
                    </div>
                <?php }?>
            <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

            <?php $_smarty_tpl->smarty->_tag_stack[] = array('block_decorator', array('name'=>'box','iconClass'=>$_smarty_tpl->tpl_vars['box']->value['icon'],'label'=>$_smarty_tpl->tpl_vars['box']->value['title'],'capAddClass'=>"ow_dnd_configurable_component dd_handle clearfix",'capContent'=>Smarty::$_smarty_vars['capture']['boxCap'],'type'=>$_smarty_tpl->tpl_vars['box']->value['type'],'addClass'=>"ow_stdmargin clearfix",'toolbar'=>$_smarty_tpl->tpl_vars['box']->value['toolbar'])); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>'box','iconClass'=>$_smarty_tpl->tpl_vars['box']->value['icon'],'label'=>$_smarty_tpl->tpl_vars['box']->value['title'],'capAddClass'=>"ow_dnd_configurable_component dd_handle clearfix",'capContent'=>Smarty::$_smarty_vars['capture']['boxCap'],'type'=>$_smarty_tpl->tpl_vars['box']->value['type'],'addClass'=>"ow_stdmargin clearfix",'toolbar'=>$_smarty_tpl->tpl_vars['box']->value['toolbar']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


                <?php echo $_smarty_tpl->tpl_vars['content']->value;?>


            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>'box','iconClass'=>$_smarty_tpl->tpl_vars['box']->value['icon'],'label'=>$_smarty_tpl->tpl_vars['box']->value['title'],'capAddClass'=>"ow_dnd_configurable_component dd_handle clearfix",'capContent'=>Smarty::$_smarty_vars['capture']['boxCap'],'type'=>$_smarty_tpl->tpl_vars['box']->value['type'],'addClass'=>"ow_stdmargin clearfix",'toolbar'=>$_smarty_tpl->tpl_vars['box']->value['toolbar']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </div>
    <?php }?>

</div><?php }} ?>