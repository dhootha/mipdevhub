<?php /* Smarty version Smarty-3.1.12, created on 2013-09-10 07:18:28
         compiled from "/apps/mip/oxwall/ow_system_plugins/base/views/controllers/user_forgot_password.html" */ ?>
<?php /*%%SmartyHeaderCode:1216471123522eaba480d8d9-35219758%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '87f823ad31fdc003eabb2b50d8b7a3da592342a0' => 
    array (
      0 => '/apps/mip/oxwall/ow_system_plugins/base/views/controllers/user_forgot_password.html',
      1 => 1359700751,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1216471123522eaba480d8d9-35219758',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_522eaba49cf031_54952356',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522eaba49cf031_54952356')) {function content_522eaba49cf031_54952356($_smarty_tpl) {?><?php if (!is_callable('smarty_block_style')) include '/apps/mip/oxwall/ow_smarty/plugin/block.style.php';
if (!is_callable('smarty_block_block_decorator')) include '/apps/mip/oxwall/ow_smarty/plugin/block.block_decorator.php';
if (!is_callable('smarty_function_text')) include '/apps/mip/oxwall/ow_smarty/plugin/function.text.php';
if (!is_callable('smarty_block_form')) include '/apps/mip/oxwall/ow_smarty/plugin/block.form.php';
if (!is_callable('smarty_function_input')) include '/apps/mip/oxwall/ow_smarty/plugin/function.input.php';
if (!is_callable('smarty_function_submit')) include '/apps/mip/oxwall/ow_smarty/plugin/function.submit.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('style', array()); $_block_repeat=true; echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


.ow_forgot_password{
    margin:0 auto;
    padding:100px;
    width:350px;
}

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_style(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<div class="ow_forgot_password">
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('block_decorator', array('name'=>'box','style'=>'text-align:center;','langLabel'=>'base+forgot_password_cap_label')); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>'box','style'=>'text-align:center;','langLabel'=>'base+forgot_password_cap_label'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <div style="padding: 0 5px 5px;"><?php echo smarty_function_text(array('key'=>'base+forgot_password_form_text'),$_smarty_tpl);?>
</div>
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('form', array('name'=>'forgot-password')); $_block_repeat=true; echo smarty_block_form(array('name'=>'forgot-password'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <?php echo smarty_function_input(array('name'=>'email','class'=>'ow_smallmargin'),$_smarty_tpl);?>

            <div class="clearfix"><div class="ow_right"><?php echo smarty_function_submit(array('name'=>'submit','class'=>'ow_positive'),$_smarty_tpl);?>
</div></div>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>'forgot-password'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>'box','style'=>'text-align:center;','langLabel'=>'base+forgot_password_cap_label'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

</div><?php }} ?>