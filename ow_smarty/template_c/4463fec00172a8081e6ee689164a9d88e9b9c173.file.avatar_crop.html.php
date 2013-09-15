<?php /* Smarty version Smarty-3.1.12, created on 2013-09-07 04:08:11
         compiled from "/apps/mip/oxwall/ow_system_plugins/base/views/controllers/avatar_crop.html" */ ?>
<?php /*%%SmartyHeaderCode:1041466971522b091b99de12-26357024%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4463fec00172a8081e6ee689164a9d88e9b9c173' => 
    array (
      0 => '/apps/mip/oxwall/ow_system_plugins/base/views/controllers/avatar_crop.html',
      1 => 1362477213,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1041466971522b091b99de12-26357024',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'hasAvatar' => 0,
    'avatar' => 0,
    'default' => 0,
    'original' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_522b091bc47528_86988752',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522b091bc47528_86988752')) {function content_522b091bc47528_86988752($_smarty_tpl) {?><?php if (!is_callable('smarty_function_decorator')) include '/apps/mip/oxwall/ow_smarty/plugin/function.decorator.php';
if (!is_callable('smarty_function_text')) include '/apps/mip/oxwall/ow_smarty/plugin/function.text.php';
if (!is_callable('smarty_block_block_decorator')) include '/apps/mip/oxwall/ow_smarty/plugin/block.block_decorator.php';
if (!is_callable('smarty_block_form')) include '/apps/mip/oxwall/ow_smarty/plugin/block.form.php';
if (!is_callable('smarty_function_input')) include '/apps/mip/oxwall/ow_smarty/plugin/function.input.php';
if (!is_callable('smarty_function_submit')) include '/apps/mip/oxwall/ow_smarty/plugin/function.submit.php';
?>
<div class="ow_change_avatar ow_stdmargin clearfix">
<div class="clearfix ow_stdmargin">
		<div class="ow_left"><?php echo smarty_function_decorator(array('name'=>'button','langLabel'=>'base+avatar_back_profile_edit','class'=>'ow_ic_left_arrow','id'=>'button-profile-edit'),$_smarty_tpl);?>
</div>
	</div>

    <p class="ow_smallmargin"><?php echo smarty_function_text(array('key'=>'base+avatar_avatar_is'),$_smarty_tpl);?>
</p>
    
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('block_decorator', array('name'=>'box','addClass'=>'ow_wide ow_automargin ow_stdmargin clearfix')); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>'box','addClass'=>'ow_wide ow_automargin ow_stdmargin clearfix'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <div class="clearfix">
        <div class="avatar_current ow_left ow_supernarrow ow_center">
            <h4><?php echo smarty_function_text(array('key'=>'base+avatar_current'),$_smarty_tpl);?>
</h4>
            <?php if ($_smarty_tpl->tpl_vars['hasAvatar']->value){?>
                <img width="100" src="<?php echo $_smarty_tpl->tpl_vars['avatar']->value;?>
" alt="" />
                
            <?php }else{ ?>
                <img width="100" src="<?php echo $_smarty_tpl->tpl_vars['default']->value;?>
" alt="" />    
            <?php }?>
        </div>
        <div class="ow_right ow_superwide">
            <h4><?php echo smarty_function_text(array('key'=>'base+avatar_new'),$_smarty_tpl);?>
</h4>
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('form', array('name'=>'avatarUploadForm')); $_block_repeat=true; echo smarty_block_form(array('name'=>'avatarUploadForm'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <p><?php echo smarty_function_input(array('name'=>'avatar'),$_smarty_tpl);?>
</p>
                <p class="ow_smallmargin"><?php echo smarty_function_text(array('key'=>'base+avatar_upload_types'),$_smarty_tpl);?>
</p>
                <p><?php echo smarty_function_submit(array('name'=>'upload','class'=>'ow_ic_up_arrow'),$_smarty_tpl);?>
</p>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>'avatarUploadForm'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            
        </div>
    </div>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>'box','addClass'=>'ow_wide ow_automargin ow_stdmargin clearfix'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    
    <?php if ($_smarty_tpl->tpl_vars['hasAvatar']->value){?>
    <div class="ow_avatar_crop ow_stdmargin">
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('block_decorator', array('name'=>'box','type'=>'empty','iconClass'=>'ow_ic_cut','langLabel'=>'base+avatar_crop','addClass'=>'ow_smallmargin clearfix')); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>'box','type'=>'empty','iconClass'=>'ow_ic_cut','langLabel'=>'base+avatar_crop','addClass'=>'ow_smallmargin clearfix'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <p><?php echo smarty_function_text(array('key'=>'base+avatar_crop_instructions'),$_smarty_tpl);?>
</p>
            
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('block_decorator', array('name'=>'box','addClass'=>'ow_wide ow_automargin ow_smallmargin clearfix')); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>'box','addClass'=>'ow_wide ow_automargin ow_smallmargin clearfix'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <div class="clearfix">        
                <div class="ow_left ow_superwide ow_center">
                    <h4><?php echo smarty_function_text(array('key'=>'base+avatar_picture'),$_smarty_tpl);?>
</h4>
                    <img id="jcrop-target" width="220" class="ow_smallmargin" src="<?php echo $_smarty_tpl->tpl_vars['original']->value;?>
" alt="" />
                    <br /><?php echo smarty_function_decorator(array('name'=>'button','langLabel'=>'base+avatar_apply_crop','class'=>'ow_ic_cut','id'=>'crop-btn'),$_smarty_tpl);?>

                </div>
                <div class="ow_avatar_preview ow_right ow_supernarrow ow_center">
                    <h4><?php echo smarty_function_text(array('key'=>'base+avatar_preview'),$_smarty_tpl);?>
</h4>
                    <div style="width: 100px; height: 100px; overflow: hidden"><img id="preview" src="<?php echo $_smarty_tpl->tpl_vars['original']->value;?>
" alt="" /></div>
                </div>
            </div>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>'box','addClass'=>'ow_wide ow_automargin ow_smallmargin clearfix'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>'box','type'=>'empty','iconClass'=>'ow_ic_cut','langLabel'=>'base+avatar_crop','addClass'=>'ow_smallmargin clearfix'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </div>
    <?php }?>
    
</div><?php }} ?>