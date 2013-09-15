<?php /* Smarty version Smarty-3.1.12, created on 2013-09-05 23:29:06
         compiled from "/apps/mip/oxwall/ow_system_plugins/base/decorators/user_list_item.html" */ ?>
<?php /*%%SmartyHeaderCode:190745718852297632d56125-61754097%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '77aebfebca6c9d689f5363950ae755e4bd8a87eb' => 
    array (
      0 => '/apps/mip/oxwall/ow_system_plugins/base/decorators/user_list_item.html',
      1 => 1359700751,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '190745718852297632d56125-61754097',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_52297632e66817_72937146',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52297632e66817_72937146')) {function content_52297632e66817_72937146($_smarty_tpl) {?><?php if (!is_callable('smarty_function_decorator')) include '/apps/mip/oxwall/ow_smarty/plugin/function.decorator.php';
if (!is_callable('smarty_function_user_link')) include '/apps/mip/oxwall/ow_smarty/plugin/function.user_link.php';
?><div class="ow_user_list_item clearfix<?php if (isset($_smarty_tpl->tpl_vars['data']->value['set_class'])){?> <?php echo $_smarty_tpl->tpl_vars['data']->value['set_class'];?>
<?php }?>"<?php if (!empty($_smarty_tpl->tpl_vars['data']->value['contId'])){?> id="<?php echo $_smarty_tpl->tpl_vars['data']->value['contId'];?>
"<?php }?>>

    <?php if (!empty($_smarty_tpl->tpl_vars['data']->value['contextMenu'])){?>
        <div class="ow_uli_context_menu">
            <?php echo $_smarty_tpl->tpl_vars['data']->value['contextMenu'];?>

	</div>
    <?php }?>
    <div class="ow_user_list_picture">
        <?php echo smarty_function_decorator(array('name'=>'avatar_item','data'=>$_smarty_tpl->tpl_vars['data']->value['avatar']),$_smarty_tpl);?>

    </div>
    <div class="ow_user_list_data">
        <?php if (!empty($_smarty_tpl->tpl_vars['data']->value['userUrl'])){?>
        <a href="<?php echo $_smarty_tpl->tpl_vars['data']->value['userUrl'];?>
"><?php echo $_smarty_tpl->tpl_vars['data']->value['displayName'];?>
</a>
        <?php }else{ ?>
            <?php if (!empty($_smarty_tpl->tpl_vars['data']->value['noUserLink'])){?><?php echo $_smarty_tpl->tpl_vars['data']->value['displayName'];?>
<?php }else{ ?><?php echo smarty_function_user_link(array('username'=>$_smarty_tpl->tpl_vars['data']->value['username'],'name'=>$_smarty_tpl->tpl_vars['data']->value['displayName']),$_smarty_tpl);?>
<?php }?>
        <?php }?>
        <div class="ow_small">
            <?php if (!empty($_smarty_tpl->tpl_vars['data']->value['content'])){?><div class="ow_remark ow_user_list_content"><?php echo $_smarty_tpl->tpl_vars['data']->value['content'];?>
</div><?php }?>
            <?php if (!empty($_smarty_tpl->tpl_vars['data']->value['fields'])){?><?php echo $_smarty_tpl->tpl_vars['data']->value['fields'];?>
<?php }?>
            <?php if (!empty($_smarty_tpl->tpl_vars['data']->value['activity'])){?><?php echo $_smarty_tpl->tpl_vars['data']->value['activity'];?>
<?php }?>
        </div>
    </div>
        <?php if (!empty($_smarty_tpl->tpl_vars['data']->value['toolbar'])){?>
			<?php echo $_smarty_tpl->tpl_vars['data']->value['toolbar'];?>

        <?php }?>
</div><?php }} ?>