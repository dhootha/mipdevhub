<?php /* Smarty version Smarty-3.1.12, created on 2013-09-06 06:49:30
         compiled from "/apps/mip/oxwall/ow_plugins/questions/views/components/answers.html" */ ?>
<?php /*%%SmartyHeaderCode:10107071565229dd6a31c958-71275801%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2387878efb5f608121a74f95adb0e1435b5525c2' => 
    array (
      0 => '/apps/mip/oxwall/ow_plugins/questions/views/components/answers.html',
      1 => 1356086582,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10107071565229dd6a31c958-71275801',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'uniqId' => 0,
    'list' => 0,
    'addNew' => 0,
    'hideAddNew' => 0,
    'viewMore' => 0,
    'viewMoreUrl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5229dd6a35d9e7_49391857',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5229dd6a35d9e7_49391857')) {function content_5229dd6a35d9e7_49391857($_smarty_tpl) {?><?php if (!is_callable('smarty_function_text')) include '/apps/mip/oxwall/ow_smarty/plugin/function.text.php';
?><div class="questions-answers ow_small" id="<?php echo $_smarty_tpl->tpl_vars['uniqId']->value;?>
">
    <div class="qa-list">
        <?php echo $_smarty_tpl->tpl_vars['list']->value;?>

    </div>

    <?php if ($_smarty_tpl->tpl_vars['addNew']->value){?>
        <div class="questions-add-answer ow_ic_add clearfix" <?php if ($_smarty_tpl->tpl_vars['hideAddNew']->value){?>style="display: none"<?php }?>>
            <form class="qaa-form">
                    <a href="javascript://" class="qaa-button" q-title="<?php echo smarty_function_text(array('key'=>'questions+option_add_btn'),$_smarty_tpl);?>
"></a>
                    <div class="qaa-input-c">
                            <input type="text" value="<?php echo smarty_function_text(array('key'=>'questions+option_add_inv'),$_smarty_tpl);?>
" class="qaa-input invitation"/>
                    </div>
            </form>
        </div>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['viewMore']->value){?>
        <a href="<?php echo $_smarty_tpl->tpl_vars['viewMoreUrl']->value;?>
" class="qa-view-more ow_border">
            <span class="qa-vm-content">
                <?php echo smarty_function_text(array('key'=>'questions+more_options_btn','count'=>$_smarty_tpl->tpl_vars['viewMore']->value),$_smarty_tpl);?>

            </span>
        </a>
    <?php }?>





</div><?php }} ?>