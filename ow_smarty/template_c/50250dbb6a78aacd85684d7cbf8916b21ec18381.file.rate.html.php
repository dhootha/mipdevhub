<?php /* Smarty version Smarty-3.1.12, created on 2013-09-10 10:27:30
         compiled from "/apps/mip/oxwall/ow_system_plugins/base/views/components/rate.html" */ ?>
<?php /*%%SmartyHeaderCode:1153065406522ed7f2a4c8a0-55583849%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '50250dbb6a78aacd85684d7cbf8916b21ec18381' => 
    array (
      0 => '/apps/mip/oxwall/ow_system_plugins/base/views/components/rate.html',
      1 => 1346776079,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1153065406522ed7f2a4c8a0-55583849',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cmpId' => 0,
    'maxRate' => 0,
    'totalScore' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_522ed7f2aafda9_75882642',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522ed7f2aafda9_75882642')) {function content_522ed7f2aafda9_75882642($_smarty_tpl) {?><?php if (!is_callable('smarty_block_block_decorator')) include '/apps/mip/oxwall/ow_smarty/plugin/block.block_decorator.php';
if (!is_callable('smarty_function_text')) include '/apps/mip/oxwall/ow_smarty/plugin/function.text.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('block_decorator', array('name'=>'box','addClass'=>'ow_stdmargin','langLabel'=>'base+rates_box_cap_label','iconClass'=>'ow_ic_star')); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>'box','addClass'=>'ow_stdmargin','langLabel'=>'base+rates_box_cap_label','iconClass'=>'ow_ic_star'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<div id="rate_<?php echo $_smarty_tpl->tpl_vars['cmpId']->value;?>
">
   <div class="ow_smallmargin">
   	<span class="ow_small"><?php echo smarty_function_text(array('key'=>'base+your_rate_label'),$_smarty_tpl);?>
</span>
      <div class="rates_cont clearfix">
      <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['foo'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['name'] = 'foo';
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['maxRate']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['total']);
?>
         <a href="javascript://" class="rate_item" id="<?php echo $_smarty_tpl->tpl_vars['cmpId']->value;?>
_rate_item_<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['foo']['iteration'];?>
">&nbsp;</a>
      <?php endfor; endif; ?>
      </div>
   </div>
   <div class="total_score"><?php echo $_smarty_tpl->tpl_vars['totalScore']->value;?>
</div>
</div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>'box','addClass'=>'ow_stdmargin','langLabel'=>'base+rates_box_cap_label','iconClass'=>'ow_ic_star'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>