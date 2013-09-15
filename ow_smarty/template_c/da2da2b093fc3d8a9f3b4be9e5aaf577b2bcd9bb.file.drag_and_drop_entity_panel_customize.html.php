<?php /* Smarty version Smarty-3.1.12, created on 2013-09-06 06:54:18
         compiled from "/apps/mip/oxwall/ow_system_plugins/base/views/components/drag_and_drop_entity_panel_customize.html" */ ?>
<?php /*%%SmartyHeaderCode:12264723785229de8ab7f848-76061135%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'da2da2b093fc3d8a9f3b4be9e5aaf577b2bcd9bb' => 
    array (
      0 => '/apps/mip/oxwall/ow_system_plugins/base/views/components/drag_and_drop_entity_panel_customize.html',
      1 => 1363759970,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12264723785229de8ab7f848-76061135',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'disableJs' => 0,
    'componentList' => 0,
    'component' => 0,
    'activeScheme' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5229de8ad516e7_42867394',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5229de8ad516e7_42867394')) {function content_5229de8ad516e7_42867394($_smarty_tpl) {?><?php if (!is_callable('smarty_block_style')) include '/apps/mip/oxwall/ow_smarty/plugin/block.style.php';
if (!is_callable('smarty_function_add_content')) include '/apps/mip/oxwall/ow_smarty/plugin/function.add_content.php';
if (!is_callable('smarty_function_text')) include '/apps/mip/oxwall/ow_smarty/plugin/function.text.php';
if (!is_callable('smarty_function_decorator')) include '/apps/mip/oxwall/ow_smarty/plugin/function.decorator.php';
if (!is_callable('smarty_block_block_decorator')) include '/apps/mip/oxwall/ow_smarty/plugin/block.block_decorator.php';
?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('style', array()); $_block_repeat=true; echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	.hidden-placeholder {
		display: none;
	}

	.dd_handle {
	   cursor: move;
	}

	.ow_dnd_freezed .dd_handle {
       cursor: default;
    }

	.component .action {
	       display: none;
	}

	.component .action .dd_delete {
	       display: none;
	}

	#place_components .clone .action .dd_delete {
	       display: inline-block;
	}

	.place_section .component .action .dd_delete {
	       display: inline-block;
	}

	#place_components .component {
		float: left;
	}

	.place_section .component {

	}

	.place_section {
	   min-height: 60px;
       padding-top: 10px;
	}

	.ow_dragndrop_panel .ow_dnd_schem_item{
	   width: 150px;
	}

	.ow_dnd_locked_section {
	    opacity: 0.5;
	    filter: alpha(opacity=50)
	}

	.ow_dnd_locked_section .ow_dnd_placeholder {
	    display: none;
	}

	.add_btn_cont {
        position: absolute;
        right: 0px;
        top: 0px;
	}

 <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_style(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php echo smarty_function_add_content(array('key'=>'base.`$placeName`_customize.content.top'),$_smarty_tpl);?>

 <div style="display: none" id="fb_settings">
     <div class="settings_title">
        <?php echo smarty_function_text(array('key'=>"base+widgets_fb_setting_box_title"),$_smarty_tpl);?>

     </div>
     <div class="settings_content component_settings" style="min-height: 300px;"></div>
     <div class="settings_controls component_controls">
         <?php echo smarty_function_decorator(array('name'=>"button",'class'=>"dd_save ow_ic_save",'langLabel'=>"base+edit_button"),$_smarty_tpl);?>

     </div>
 </div>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('block_decorator', array('name'=>'box','addClass'=>'ow_highbox ow_stdmargin customize_box')); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>'box','addClass'=>'ow_highbox ow_stdmargin customize_box'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


    <div class="ow_center" style="position: relative">
        <?php echo smarty_function_decorator(array('name'=>'button','langLabel'=>'base+widgets_finish_customize_btn','class'=>'ow_ic_ok ow_positive','id'=>"goto_normal_btn"),$_smarty_tpl);?>

        <div class="add_btn_cont">
            <form style="display: inline;">
                <?php if ($_smarty_tpl->tpl_vars['disableJs']->value){?>
                    <input type="hidden" name="disable-js" value="0" />
                    <?php echo smarty_function_decorator(array('name'=>'button','type'=>"submit",'langLabel'=>'base+widgets_enable_js','class'=>'ow_ic_unlock'),$_smarty_tpl);?>

                <?php }else{ ?>
	                <input type="hidden" name="disable-js" value="1" />
	                <?php echo smarty_function_decorator(array('name'=>'button','type'=>"submit",'langLabel'=>'base+widgets_disable_js','class'=>'ow_ic_restrict ow_negative'),$_smarty_tpl);?>

                <?php }?>
            </form>
            <?php echo smarty_function_decorator(array('name'=>'button','langLabel'=>'base+widgets_reset_customization','class'=>'ow_ic_delete ow_negative','id'=>"reset_position_btn"),$_smarty_tpl);?>

        </div>
    </div>

    <div class="ow_dragndrop_panel">
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('block_decorator', array('name'=>'box','iconClass'=>'ow_ic_add','langLabel'=>'base+widgets_section_box_title','addClass'=>'ow_smallmargin')); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>'box','iconClass'=>'ow_ic_add','langLabel'=>'base+widgets_section_box_title','addClass'=>'ow_smallmargin'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


	       <div class="clearfix">
	            <div class="ow_dnd_content_components ow_left clearfix" id="place_components">
	                <?php  $_smarty_tpl->tpl_vars["component"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["component"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['componentList']->value['place']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["component"]->key => $_smarty_tpl->tpl_vars["component"]->value){
$_smarty_tpl->tpl_vars["component"]->_loop = true;
?>
	                    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dd_component'][0][0]->tplComponent(array('uniqName'=>$_smarty_tpl->tpl_vars['component']->value['uniqName']),$_smarty_tpl);?>

	                <?php } ?>
			   </div>
			   <div class="ow_dnd_clonable_components ow_right" id="clonable_components">
			        <?php  $_smarty_tpl->tpl_vars["component"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["component"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['componentList']->value['clonable']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["component"]->key => $_smarty_tpl->tpl_vars["component"]->value){
$_smarty_tpl->tpl_vars["component"]->_loop = true;
?>
			            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dd_component'][0][0]->tplComponent(array('uniqName'=>$_smarty_tpl->tpl_vars['component']->value['uniqName']),$_smarty_tpl);?>

			        <?php } ?>
			   </div>
	        </div>

        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>'box','iconClass'=>'ow_ic_add','langLabel'=>'base+widgets_section_box_title','addClass'=>'ow_smallmargin'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </div>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>'box','addClass'=>'ow_highbox ow_stdmargin customize_box'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<div class="ow_dragndrop_sections ow_stdmargin" id="place_sections">

    <div class="clearfix">

		<div class="ow_highbox place_section top_section" ow_place_section="top">

		    <?php if (isset($_smarty_tpl->tpl_vars['componentList']->value['section']['top'])){?>
		        <?php  $_smarty_tpl->tpl_vars["component"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["component"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['componentList']->value['section']['top']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["component"]->key => $_smarty_tpl->tpl_vars["component"]->value){
$_smarty_tpl->tpl_vars["component"]->_loop = true;
?>
		            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dd_component'][0][0]->tplComponent(array('uniqName'=>$_smarty_tpl->tpl_vars['component']->value['uniqName'],'render'=>true),$_smarty_tpl);?>

		        <?php } ?>
		    <?php }?>

		</div>

         <div class="clearfix" style="overflow: hidden;">

	        <div class="ow_left ow_highbox place_section ow_column_equal_fix left_section <?php if (isset($_smarty_tpl->tpl_vars['activeScheme']->value['leftCssClass'])){?><?php echo $_smarty_tpl->tpl_vars['activeScheme']->value['leftCssClass'];?>
<?php }?>" ow_scheme_class="<?php if (isset($_smarty_tpl->tpl_vars['activeScheme']->value['leftCssClass'])){?><?php echo $_smarty_tpl->tpl_vars['activeScheme']->value['leftCssClass'];?>
<?php }?>"  ow_place_section="left">

	            <?php if (isset($_smarty_tpl->tpl_vars['componentList']->value['section']['left'])){?>
                    <?php  $_smarty_tpl->tpl_vars["component"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["component"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['componentList']->value['section']['left']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["component"]->key => $_smarty_tpl->tpl_vars["component"]->value){
$_smarty_tpl->tpl_vars["component"]->_loop = true;
?>
                        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dd_component'][0][0]->tplComponent(array('uniqName'=>$_smarty_tpl->tpl_vars['component']->value['uniqName'],'render'=>true),$_smarty_tpl);?>

                    <?php } ?>
                <?php }?>

            </div>

            <div class="ow_right ow_highbox place_section ow_column_equal_fix right_section <?php if (isset($_smarty_tpl->tpl_vars['activeScheme']->value['rightCssClass'])){?><?php echo $_smarty_tpl->tpl_vars['activeScheme']->value['rightCssClass'];?>
<?php }?>" ow_scheme_class="<?php if (isset($_smarty_tpl->tpl_vars['activeScheme']->value['rightCssClass'])){?><?php echo $_smarty_tpl->tpl_vars['activeScheme']->value['rightCssClass'];?>
<?php }?>"  ow_place_section="right">

                <?php if (isset($_smarty_tpl->tpl_vars['componentList']->value['section']['right'])){?>
                    <?php  $_smarty_tpl->tpl_vars["component"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["component"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['componentList']->value['section']['right']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["component"]->key => $_smarty_tpl->tpl_vars["component"]->value){
$_smarty_tpl->tpl_vars["component"]->_loop = true;
?>
                        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dd_component'][0][0]->tplComponent(array('uniqName'=>$_smarty_tpl->tpl_vars['component']->value['uniqName'],'render'=>true),$_smarty_tpl);?>

                    <?php } ?>
                <?php }?>

            </div>

         </div>

	    <div class="ow_highbox place_section bottom_section" ow_place_section="bottom">

            <?php if (isset($_smarty_tpl->tpl_vars['componentList']->value['section']['bottom'])){?>
                <?php  $_smarty_tpl->tpl_vars["component"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["component"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['componentList']->value['section']['bottom']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["component"]->key => $_smarty_tpl->tpl_vars["component"]->value){
$_smarty_tpl->tpl_vars["component"]->_loop = true;
?>
                    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dd_component'][0][0]->tplComponent(array('uniqName'=>$_smarty_tpl->tpl_vars['component']->value['uniqName'],'render'=>true),$_smarty_tpl);?>

                <?php } ?>
            <?php }?>

        </div>

	</div>

</div>
<?php echo smarty_function_add_content(array('key'=>'base.`$placeName`_customize.content.bottom'),$_smarty_tpl);?>

<?php }} ?>