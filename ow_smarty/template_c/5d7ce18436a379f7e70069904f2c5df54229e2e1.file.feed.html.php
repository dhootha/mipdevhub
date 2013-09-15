<?php /* Smarty version Smarty-3.1.12, created on 2013-09-06 06:49:09
         compiled from "/apps/mip/oxwall/ow_plugins/questions/views/components/feed.html" */ ?>
<?php /*%%SmartyHeaderCode:12753920655229dd55a5b9b7-29899921%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5d7ce18436a379f7e70069904f2c5df54229e2e1' => 
    array (
      0 => '/apps/mip/oxwall/ow_plugins/questions/views/components/feed.html',
      1 => 1326951356,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12753920655229dd55a5b9b7-29899921',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'uniqId' => 0,
    'list' => 0,
    'viewMore' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5229dd55a7e653_11805447',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5229dd55a7e653_11805447')) {function content_5229dd55a7e653_11805447($_smarty_tpl) {?><?php if (!is_callable('smarty_function_decorator')) include '/apps/mip/oxwall/ow_smarty/plugin/function.decorator.php';
?><div class="questions-list" id="<?php echo $_smarty_tpl->tpl_vars['uniqId']->value;?>
">
    <ul class="ql-items ow_smallmargin">
        <?php echo $_smarty_tpl->tpl_vars['list']->value;?>

    </ul>
    <?php if ($_smarty_tpl->tpl_vars['viewMore']->value){?>
        <div class="ql_view_more_c">
            <?php echo smarty_function_decorator(array('name'=>"button",'class'=>"ql_view_more ow_ic_down_arrow",'langLabel'=>"questions+view_more_questions_btn"),$_smarty_tpl);?>

        </div>
    <?php }?>
</div><?php }} ?>