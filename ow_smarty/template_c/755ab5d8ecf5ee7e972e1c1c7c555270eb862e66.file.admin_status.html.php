<?php /* Smarty version Smarty-3.1.12, created on 2013-09-06 11:27:31
         compiled from "/apps/mip/oxwall/ow_plugins/watchdog/views/controllers/admin_status.html" */ ?>
<?php /*%%SmartyHeaderCode:202186955522a1e93df2241-59168405%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '755ab5d8ecf5ee7e972e1c1c7c555270eb862e66' => 
    array (
      0 => '/apps/mip/oxwall/ow_plugins/watchdog/views/controllers/admin_status.html',
      1 => 1359700751,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '202186955522a1e93df2241-59168405',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'menu' => 0,
    'logo' => 0,
    'configs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_522a1e93e9b6c2_05563606',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522a1e93e9b6c2_05563606')) {function content_522a1e93e9b6c2_05563606($_smarty_tpl) {?><?php if (!is_callable('smarty_function_text')) include '/apps/mip/oxwall/ow_smarty/plugin/function.text.php';
?>

<?php echo $_smarty_tpl->tpl_vars['menu']->value;?>


<div class="clearfix" style="margin-bottom: 20px;">
    <div class="ow_left">
        <img src="<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
" width="180" height="49" style="margin-left: 60px;"/>
    </div>
</div>

<div class="clearfix">
    <div class="ow_column ow_left ow_std_margin">
        <table class="ow_table_4">
            <tr>
                <td class="ow_td_label" style="width: 50%; vertical-align: middle"><?php echo smarty_function_text(array('key'=>'watchdog+count_spam_attempt_text'),$_smarty_tpl);?>
</td>
                <td class="ow_value ow_left_border" style="text-align: left"><?php echo $_smarty_tpl->tpl_vars['configs']->value['count_spam_attempt'];?>
</td>
            </tr>
            <tr>
                <td colspan="2">&nbsp;</td>
            </tr>
            <tr>
                <td class="ow_td_label" style="text-align: right; vertical-align: middle"><?php echo smarty_function_text(array('key'=>'watchdog+count_black_list'),$_smarty_tpl);?>
</td>
                <td class="ow_value ow_left_border" style="text-align: left"><?php echo $_smarty_tpl->tpl_vars['configs']->value['count_black_list'];?>
</td>
            </tr>
            <tr>
                <td class="ow_td_label" style="text-align: right; vertical-align: middle"><?php echo smarty_function_text(array('key'=>'watchdog+count_email_list'),$_smarty_tpl);?>
</td>
                <td class="ow_value ow_left_border" style="text-align: left"><?php echo $_smarty_tpl->tpl_vars['configs']->value['count_email_list'];?>
</td>
            </tr>
            <tr>
                <td class="ow_td_label" style="text-align: right; vertical-align: middle"><?php echo smarty_function_text(array('key'=>'watchdog+last_updated'),$_smarty_tpl);?>
</td>
                <td class="ow_value ow_left_border" style="text-align: left"><?php echo $_smarty_tpl->tpl_vars['configs']->value['time_update_database'];?>
</td>
            </tr>
        </table>
    </div>
</div>

<div class="ow_anno ow_std_margin ow_nocontent">
    <?php echo smarty_function_text(array('key'=>'watchdog+about_watchdog'),$_smarty_tpl);?>

</div>
<?php }} ?>