<?php /* Smarty version Smarty-3.1.12, created on 2013-09-06 11:40:24
         compiled from "/apps/mip/oxwall/ow_plugins/questions/views/components/question.html" */ ?>
<?php /*%%SmartyHeaderCode:2114663675522a2198553d98-74747090%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd6092839a4581df459303d03b0ea118472aa2953' => 
    array (
      0 => '/apps/mip/oxwall/ow_plugins/questions/views/components/question.html',
      1 => 1329133866,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2114663675522a2198553d98-74747090',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'noQuestion' => 0,
    'uniqId' => 0,
    'question' => 0,
    'answers' => 0,
    'questionStatus' => 0,
    'questionInfo' => 0,
    'follow' => 0,
    'comments' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_522a219860abb3_49856671',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522a219860abb3_49856671')) {function content_522a219860abb3_49856671($_smarty_tpl) {?><?php if (!is_callable('smarty_function_text')) include '/apps/mip/oxwall/ow_smarty/plugin/function.text.php';
if (!is_callable('smarty_block_block_decorator')) include '/apps/mip/oxwall/ow_smarty/plugin/block.block_decorator.php';
if (!is_callable('smarty_function_decorator')) include '/apps/mip/oxwall/ow_smarty/plugin/function.decorator.php';
?><?php if (!empty($_smarty_tpl->tpl_vars['noQuestion']->value)){?>
<div class="ow_anno ow_nocontent">
    <?php echo smarty_function_text(array('key'=>"questions+question_not_found"),$_smarty_tpl);?>

</div>
<?php }else{ ?>
<div class="questions-question" id="<?php echo $_smarty_tpl->tpl_vars['uniqId']->value;?>
">

    <div class="q-text ow_stdmargin">
        <?php echo $_smarty_tpl->tpl_vars['question']->value['text'];?>

    </div>

    <div class="q-answers ow_stdmargin">
        <?php echo $_smarty_tpl->tpl_vars['answers']->value;?>

    </div>
    <div class="q-info ow_small ow_stdmargin">
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('block_decorator', array('name'=>'box_cap','addClass'=>"clearfix",'iconClass'=>"ow_ic_user",'langLabel'=>"questions+question_asked_by")); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>'box_cap','addClass'=>"clearfix",'iconClass'=>"ow_ic_user",'langLabel'=>"questions+question_asked_by"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <?php echo $_smarty_tpl->tpl_vars['questionStatus']->value;?>

        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>'box_cap','addClass'=>"clearfix",'iconClass'=>"ow_ic_user",'langLabel'=>"questions+question_asked_by"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        <?php $_smarty_tpl->smarty->_tag_stack[] = array('block_decorator', array('name'=>'box','addClass'=>"ow_stdmargin clearfix")); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>'box','addClass'=>"ow_stdmargin clearfix"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <div class="ow_left">
                <?php echo smarty_function_decorator(array('name'=>"mini_ipc",'addClass'=>'ow_smallmargin','data'=>$_smarty_tpl->tpl_vars['questionInfo']->value),$_smarty_tpl);?>

            </div>
            <div class="ow_right">
                <?php if (isset($_smarty_tpl->tpl_vars['follow']->value)){?>
                    <?php if ($_smarty_tpl->tpl_vars['follow']->value['isFollow']){?>
                        <span id="<?php echo $_smarty_tpl->tpl_vars['follow']->value['unfollowId'];?>
">
                            <?php echo smarty_function_decorator(array('name'=>"button",'class'=>"ow_ic_bookmark",'langLabel'=>"questions+toolbar_unfollow_btn",'onclick'=>$_smarty_tpl->tpl_vars['follow']->value['unfollowClick']),$_smarty_tpl);?>

                        </span>

                        <span id="<?php echo $_smarty_tpl->tpl_vars['follow']->value['followId'];?>
" style="display: none;">
                            <?php echo smarty_function_decorator(array('name'=>"button",'class'=>"ow_ic_bookmark",'langLabel'=>"questions+toolbar_follow_btn",'onclick'=>$_smarty_tpl->tpl_vars['follow']->value['followClick']),$_smarty_tpl);?>

                        </span>
                    <?php }else{ ?>
                        <span id="<?php echo $_smarty_tpl->tpl_vars['follow']->value['followId'];?>
">
                            <?php echo smarty_function_decorator(array('name'=>"button",'class'=>"ow_ic_bookmark",'langLabel'=>"questions+toolbar_follow_btn",'onclick'=>$_smarty_tpl->tpl_vars['follow']->value['followClick']),$_smarty_tpl);?>

                        </span>

                        <span id="<?php echo $_smarty_tpl->tpl_vars['follow']->value['unfollowId'];?>
" style="display: none;">
                            <?php echo smarty_function_decorator(array('name'=>"button",'class'=>"ow_ic_bookmark",'langLabel'=>"questions+toolbar_unfollow_btn",'onclick'=>$_smarty_tpl->tpl_vars['follow']->value['unfollowClick']),$_smarty_tpl);?>

                        </span>
                    <?php }?>
                <?php }?>
            </div>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>'box','addClass'=>"ow_stdmargin clearfix"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </div>

    <?php if (!empty($_smarty_tpl->tpl_vars['comments']->value)){?>
    <div class="q-comments">
       <?php echo $_smarty_tpl->tpl_vars['comments']->value;?>

    </div>
    <?php }?>
</div>
<?php }?><?php }} ?>