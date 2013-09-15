<?php /* Smarty version Smarty-3.1.12, created on 2013-09-06 11:40:24
         compiled from "/apps/mip/oxwall/ow_plugins/questions/views/components/question_static_status.html" */ ?>
<?php /*%%SmartyHeaderCode:776897964522a219848ef08-62494570%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2ca7cb5ee2dadae60d6340679faaf7c7151f3298' => 
    array (
      0 => '/apps/mip/oxwall/ow_plugins/questions/views/components/question_static_status.html',
      1 => 1336378554,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '776897964522a219848ef08-62494570',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'uniqId' => 0,
    'voteCount' => 0,
    'postCount' => 0,
    'followCount' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_522a219853b987_28590572',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522a219853b987_28590572')) {function content_522a219853b987_28590572($_smarty_tpl) {?><?php if (!is_callable('smarty_function_text')) include '/apps/mip/oxwall/ow_smarty/plugin/function.text.php';
?><div class="questions-status-c" id="<?php echo $_smarty_tpl->tpl_vars['uniqId']->value;?>
-status" <?php if (!$_smarty_tpl->tpl_vars['voteCount']->value&&!$_smarty_tpl->tpl_vars['postCount']->value){?>style="display: none;"<?php }?>>

    <span class="ow_nowrap questions-status">

        <span class="q-status-votes ow_remark" <?php if (!$_smarty_tpl->tpl_vars['voteCount']->value){?>style="display: none;"<?php }?>><span class="qs-number ow_txt_value"><?php echo $_smarty_tpl->tpl_vars['voteCount']->value;?>
</span> <?php echo smarty_function_text(array('key'=>"questions+counter_votes_label"),$_smarty_tpl);?>
</span>

        <span class="q-status-delim qsd-1" <?php if ((!$_smarty_tpl->tpl_vars['voteCount']->value&&!$_smarty_tpl->tpl_vars['followCount']->value)||!$_smarty_tpl->tpl_vars['postCount']->value){?>style="display: none;"<?php }?> >&middot;</span>

        <span class="q-status-posts ow_remark" <?php if (!$_smarty_tpl->tpl_vars['postCount']->value){?>style="display: none;"<?php }?> ><span class="qs-number ow_txt_value"><?php echo $_smarty_tpl->tpl_vars['postCount']->value;?>
</span> <?php echo smarty_function_text(array('key'=>"questions+counter_comments_label"),$_smarty_tpl);?>
</span>

        <span class="q-status-delim qsd-2" <?php if ((!$_smarty_tpl->tpl_vars['voteCount']->value&&!$_smarty_tpl->tpl_vars['postCount']->value)||!$_smarty_tpl->tpl_vars['followCount']->value){?>style="display: none;"<?php }?> >&middot;</span>

        <a href="javascript://" onclick="QUESTIONS_AnswerListCollection.<?php echo $_smarty_tpl->tpl_vars['uniqId']->value;?>
.showFollowers();" class="q-status-follows ow_remark" <?php if (!$_smarty_tpl->tpl_vars['followCount']->value){?>style="display: none;"<?php }?> ><span class="qs-number ow_txt_value"><?php echo $_smarty_tpl->tpl_vars['followCount']->value;?>
</span> <?php echo smarty_function_text(array('key'=>"questions+counter_follows_label"),$_smarty_tpl);?>
</a>

    </span>

</div><?php }} ?>