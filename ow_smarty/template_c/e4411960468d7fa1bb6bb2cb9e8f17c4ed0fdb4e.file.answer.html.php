<?php /* Smarty version Smarty-3.1.12, created on 2013-09-06 11:40:01
         compiled from "/apps/mip/oxwall/ow_plugins/questions/views/components/answer.html" */ ?>
<?php /*%%SmartyHeaderCode:1145490239522a2181de6b81-25439283%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e4411960468d7fa1bb6bb2cb9e8f17c4ed0fdb4e' => 
    array (
      0 => '/apps/mip/oxwall/ow_plugins/questions/views/components/answer.html',
      1 => 1329114573,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1145490239522a2181de6b81-25439283',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'option' => 0,
    'questionUniqId' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_522a2181e4b747_43621774',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522a2181e4b747_43621774')) {function content_522a2181e4b747_43621774($_smarty_tpl) {?><?php if (!is_callable('smarty_function_text')) include '/apps/mip/oxwall/ow_smarty/plugin/function.text.php';
?><div class="clearfix questions-answer" rel="<?php echo $_smarty_tpl->tpl_vars['option']->value['id'];?>
">
	<div class="qa-check ow_left">
            <?php if (!$_smarty_tpl->tpl_vars['option']->value['disabled']){?><input type="<?php if ($_smarty_tpl->tpl_vars['option']->value['multiple']){?>checkbox<?php }else{ ?>radio<?php }?>" name="<?php echo $_smarty_tpl->tpl_vars['questionUniqId']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['option']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['option']->value['voted']){?>checked="checked" rel="1"<?php }else{ ?>rel="0"<?php }?> /><?php }?>
	</div>
	<div class="qa-users ow_right"><?php echo $_smarty_tpl->tpl_vars['option']->value['users'];?>
</div>
	<div class="qa-content ow_border">

        <div class="qa-content-clip">
            <div class="qa-content-wrap">
                <div class="qa-shaded qa-result ow_border  <?php if ($_smarty_tpl->tpl_vars['option']->value['percents']>=100){?>q-result-full<?php }?>" style="width: <?php echo $_smarty_tpl->tpl_vars['option']->value['percents'];?>
%" rel="<?php echo $_smarty_tpl->tpl_vars['option']->value['count'];?>
"></div>
                <div class="qa-text"><?php echo $_smarty_tpl->tpl_vars['option']->value['text'];?>
</div>
            </div>
        </div>

        <div class="qa-hover-c ow_border clearfix q-opacity10">
            <div class="qa-votes"><span class="qa-vote-n"><?php echo $_smarty_tpl->tpl_vars['option']->value['count'];?>
</span> <?php echo smarty_function_text(array('key'=>"questions+counter_votes_label"),$_smarty_tpl);?>
</div>
            <?php if ($_smarty_tpl->tpl_vars['option']->value['editMode']){?>
                <div class="qa-delete-option questions-ic-delete"></div>
            <?php }?>
        </div>


	</div>
</div><?php }} ?>