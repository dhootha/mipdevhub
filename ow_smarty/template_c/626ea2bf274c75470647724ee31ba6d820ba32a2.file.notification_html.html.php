<?php /* Smarty version Smarty-3.1.12, created on 2013-09-06 21:08:02
         compiled from "/apps/mip/oxwall/ow_plugins/notifications/views/components/notification_html.html" */ ?>
<?php /*%%SmartyHeaderCode:509778543522a281250e0f6-10973787%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '626ea2bf274c75470647724ee31ba6d820ba32a2' => 
    array (
      0 => '/apps/mip/oxwall/ow_plugins/notifications/views/components/notification_html.html',
      1 => 1359700751,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '509778543522a281250e0f6-10973787',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'userName' => 0,
    'items' => 0,
    'time' => 0,
    'section' => 0,
    'item' => 0,
    'single' => 0,
    'unsubscribeUrl' => 0,
    'settingsUrl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_522a28126704b2_35102887',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522a28126704b2_35102887')) {function content_522a28126704b2_35102887($_smarty_tpl) {?><?php if (!is_callable('smarty_function_text')) include '/apps/mip/oxwall/ow_smarty/plugin/function.text.php';
if (!is_callable('smarty_modifier_simple_date')) include '/apps/mip/oxwall/ow_smarty/plugin/modifier.simple_date.php';
?><div style="font-size:13px;font-family:Lucida Grande,Verdana;">
    <p>
       <?php echo smarty_function_text(array('key'=>"notifications+email_html_head",'userName'=>$_smarty_tpl->tpl_vars['userName']->value),$_smarty_tpl);?>

    </p>
    <p>
      <?php echo smarty_function_text(array('key'=>"notifications+email_html_description"),$_smarty_tpl);?>

    </p>
    <?php  $_smarty_tpl->tpl_vars['section'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['section']->_loop = false;
 $_smarty_tpl->tpl_vars['time'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['section']->key => $_smarty_tpl->tpl_vars['section']->value){
$_smarty_tpl->tpl_vars['section']->_loop = true;
 $_smarty_tpl->tpl_vars['time']->value = $_smarty_tpl->tpl_vars['section']->key;
?>
        <div style="font-weight: bold"><?php echo smarty_modifier_simple_date($_smarty_tpl->tpl_vars['time']->value,$_smarty_tpl->tpl_vars['time']->value,true);?>
</div>
        <ul>
            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['section']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                <li style="padding: 3px; list-style-type: none; margin-left: 5px; list-style-position: outside; width: 490px;">
                    <div style="display: inline-block; width: 40px; vertical-align: top;">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['avatar']['url'];?>
" style="text-decoration: none;" <?php if (!empty($_smarty_tpl->tpl_vars['item']->value['avatar']['title'])){?>title="<?php echo $_smarty_tpl->tpl_vars['item']->value['avatar']['title'];?>
"<?php }?>>
                            <img width="40" height="40" src="<?php echo $_smarty_tpl->tpl_vars['item']->value['avatar']['src'];?>
">
                        </a>
                    </div>
                    <div style="display: inline-block; word-wrap: break-word; vertical-align: top; width: 400px;">
                        <div><?php echo $_smarty_tpl->tpl_vars['item']->value['string'];?>
</div>
                        <?php if ($_smarty_tpl->tpl_vars['item']->value['content']){?>
                            <div style="font-size:11px;color:#666;"><?php echo $_smarty_tpl->tpl_vars['item']->value['content'];?>
</div>
                        <?php }?>
                    </div>

                    <div style="display: inline-block; width: 40px; word-wrap: break-word; vertical-align: top;">
                        <?php if (!empty($_smarty_tpl->tpl_vars['item']->value['contentImage']['src'])){?>
                            <?php if (!empty($_smarty_tpl->tpl_vars['item']->value['contentImage']['url'])){?>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['contentImage']['url'];?>
">
                            <?php }?>
                            <img src="<?php echo $_smarty_tpl->tpl_vars['item']->value['contentImage']['src'];?>
" width="40" <?php if (!empty($_smarty_tpl->tpl_vars['item']->value['contentImage']['title'])){?>title="<?php echo $_smarty_tpl->tpl_vars['item']->value['contentImage']['title'];?>
"<?php }?>>
                            <?php if (!empty($_smarty_tpl->tpl_vars['item']->value['contentImage']['url'])){?>
                                </a>
                            <?php }?>
                        <?php }?>
                    </div>
                </li>
            <?php } ?>
        </ul>
    <?php } ?>

<p>
<?php echo smarty_function_text(array('key'=>"notifications+email_html_bottom"),$_smarty_tpl);?>

</p>
<?php if ($_smarty_tpl->tpl_vars['single']->value){?>
    <a href="<?php echo $_smarty_tpl->tpl_vars['unsubscribeUrl']->value;?>
"><?php echo smarty_function_text(array('key'=>"notifications+unsubscribe_one_label"),$_smarty_tpl);?>
</a>
<?php }?>
<a href="<?php echo $_smarty_tpl->tpl_vars['settingsUrl']->value;?>
"><?php echo smarty_function_text(array('key'=>"notifications+settings_edit_label"),$_smarty_tpl);?>
</a> |
<a href="<?php echo $_smarty_tpl->tpl_vars['unsubscribeUrl']->value;?>
"><?php echo smarty_function_text(array('key'=>"notifications+unsubscribe_all_label"),$_smarty_tpl);?>
</a>
</div>
<?php }} ?>