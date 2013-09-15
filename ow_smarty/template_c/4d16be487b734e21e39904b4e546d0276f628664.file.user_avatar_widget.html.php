<?php /* Smarty version Smarty-3.1.12, created on 2013-09-06 00:07:20
         compiled from "/apps/mip/oxwall/ow_system_plugins/base/views/components/user_avatar_widget.html" */ ?>
<?php /*%%SmartyHeaderCode:56323477952297f28723169-24051780%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4d16be487b734e21e39904b4e546d0276f628664' => 
    array (
      0 => '/apps/mip/oxwall/ow_system_plugins/base/views/components/user_avatar_widget.html',
      1 => 1359700751,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '56323477952297f28723169-24051780',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'owner' => 0,
    'avatarSize' => 0,
    'avatar' => 0,
    'changeAvatarUrl' => 0,
    'role' => 0,
    'isUserOnline' => 0,
    'userId' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_52297f287eded8_82538705',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52297f287eded8_82538705')) {function content_52297f287eded8_82538705($_smarty_tpl) {?><?php if (!is_callable('smarty_block_style')) include '/apps/mip/oxwall/ow_smarty/plugin/block.style.php';
if (!is_callable('smarty_block_script')) include '/apps/mip/oxwall/ow_smarty/plugin/block.script.php';
if (!is_callable('smarty_function_text')) include '/apps/mip/oxwall/ow_smarty/plugin/function.text.php';
if (!is_callable('smarty_function_online_now')) include '/apps/mip/oxwall/ow_smarty/plugin/function.online_now.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('style', array()); $_block_repeat=true; echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    .ow_avatar_console .ow_avatar_label {
        bottom: 5px;
        right: 5px;
        -moz-border-radius: 3px;
        -webkit-border-radius: 3px;
    }
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_style(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php if ($_smarty_tpl->tpl_vars['owner']->value){?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('script', array()); $_block_repeat=true; echo smarty_block_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        
        (function(){
            $("#avatar-console").hover(
              function(){
                $("#avatar-change").fadeIn("fast");
              },
              function(){
                $("#avatar-change").fadeOut("fast");
              }
          );    		
       }());
       
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>


	<div class="ow_avatar_console ow_center" id="avatar-console">
		<div style="height: <?php echo $_smarty_tpl->tpl_vars['avatarSize']->value;?>
px; background: url(<?php echo $_smarty_tpl->tpl_vars['avatar']->value;?>
) no-repeat center center; width: 100%">
		    <?php if ($_smarty_tpl->tpl_vars['owner']->value){?>
		    <div class="ow_avatar_change" id="avatar-change" style="display: none">
		        <a class="ow_lbutton" href="<?php echo $_smarty_tpl->tpl_vars['changeAvatarUrl']->value;?>
"><?php echo smarty_function_text(array('key'=>'base+avatar_change'),$_smarty_tpl);?>
</a>
		    </div>
		    <?php }?>
		    <?php if (isset($_smarty_tpl->tpl_vars['role']->value['label'])){?><span class="ow_avatar_label <?php if ($_smarty_tpl->tpl_vars['isUserOnline']->value){?>avatar_console_label<?php }?>"<?php if (isset($_smarty_tpl->tpl_vars['role']->value['custom'])){?> style="background-color: <?php echo $_smarty_tpl->tpl_vars['role']->value['custom'];?>
"<?php }?>><?php echo $_smarty_tpl->tpl_vars['role']->value['label'];?>
</span><?php }?>
		</div>
		<div class="user_online_wrap"><?php if ($_smarty_tpl->tpl_vars['isUserOnline']->value){?><?php echo smarty_function_online_now(array('userId'=>$_smarty_tpl->tpl_vars['userId']->value),$_smarty_tpl);?>
<?php }?></div>
	</div><?php }} ?>