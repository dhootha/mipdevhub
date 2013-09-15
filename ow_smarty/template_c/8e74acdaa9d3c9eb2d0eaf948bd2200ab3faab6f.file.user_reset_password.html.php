<?php /* Smarty version Smarty-3.1.12, created on 2013-09-13 13:08:44
         compiled from "/apps/mip/oxwall/ow_system_plugins/base/views/controllers/user_reset_password.html" */ ?>
<?php /*%%SmartyHeaderCode:5034887195232f23cc64be0-28156384%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8e74acdaa9d3c9eb2d0eaf948bd2200ab3faab6f' => 
    array (
      0 => '/apps/mip/oxwall/ow_system_plugins/base/views/controllers/user_reset_password.html',
      1 => 1346776079,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5034887195232f23cc64be0-28156384',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'formText' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5232f23cd8a486_58116077',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5232f23cd8a486_58116077')) {function content_5232f23cd8a486_58116077($_smarty_tpl) {?><?php if (!is_callable('smarty_block_style')) include '/apps/mip/oxwall/ow_smarty/plugin/block.style.php';
if (!is_callable('smarty_block_block_decorator')) include '/apps/mip/oxwall/ow_smarty/plugin/block.block_decorator.php';
if (!is_callable('smarty_block_form')) include '/apps/mip/oxwall/ow_smarty/plugin/block.form.php';
if (!is_callable('smarty_function_label')) include '/apps/mip/oxwall/ow_smarty/plugin/function.label.php';
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
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('block_decorator', array('name'=>'box','langLabel'=>'base+reset_password_cap_label')); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>'box','langLabel'=>'base+reset_password_cap_label'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <div style="padding: 0 5px 5px;"><?php echo $_smarty_tpl->tpl_vars['formText']->value;?>
</div>
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('form', array('name'=>'reset-password')); $_block_repeat=true; echo smarty_block_form(array('name'=>'reset-password'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <div style="width: 250px;margin: 0 auto;">
        <?php echo smarty_function_label(array('name'=>'password'),$_smarty_tpl);?>
<?php echo smarty_function_input(array('name'=>'password','class'=>'ow_smallmargin'),$_smarty_tpl);?>

        <?php echo smarty_function_label(array('name'=>'repeatPassword'),$_smarty_tpl);?>
<?php echo smarty_function_input(array('name'=>'repeatPassword','class'=>'ow_smallmargin'),$_smarty_tpl);?>

        <div class="clearfix"><div class="ow_left"><?php echo smarty_function_submit(array('name'=>'submit','class'=>'ow_positive'),$_smarty_tpl);?>
</div></div>
        </div>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>'reset-password'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>'box','langLabel'=>'base+reset_password_cap_label'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

</div><?php }} ?>