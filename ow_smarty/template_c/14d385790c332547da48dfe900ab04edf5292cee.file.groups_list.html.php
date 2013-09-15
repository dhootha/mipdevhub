<?php /* Smarty version Smarty-3.1.12, created on 2013-09-05 23:29:13
         compiled from "/apps/mip/oxwall/ow_plugins/groups/views/controllers/groups_list.html" */ ?>
<?php /*%%SmartyHeaderCode:209405733152297639235c37-81674392%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '14d385790c332547da48dfe900ab04edf5292cee' => 
    array (
      0 => '/apps/mip/oxwall/ow_plugins/groups/views/controllers/groups_list.html',
      1 => 1359700750,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '209405733152297639235c37-81674392',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'hideCreateNew' => 0,
    'canCreate' => 0,
    'menu' => 0,
    'list' => 0,
    'group' => 0,
    'paging' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_522976392f4c21_81306794',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522976392f4c21_81306794')) {function content_522976392f4c21_81306794($_smarty_tpl) {?><?php if (!is_callable('smarty_function_decorator')) include '/apps/mip/oxwall/ow_smarty/plugin/function.decorator.php';
if (!is_callable('smarty_block_script')) include '/apps/mip/oxwall/ow_smarty/plugin/block.script.php';
if (!is_callable('smarty_function_url_for_route')) include '/apps/mip/oxwall/ow_smarty/plugin/function.url_for_route.php';
if (!is_callable('smarty_function_text')) include '/apps/mip/oxwall/ow_smarty/plugin/function.text.php';
?><?php if (empty($_smarty_tpl->tpl_vars['hideCreateNew']->value)&&$_smarty_tpl->tpl_vars['canCreate']->value){?>
	<div class="ow_right"><?php echo smarty_function_decorator(array('name'=>'button','class'=>'ow_ic_add','id'=>'btn-create-new-group','langLabel'=>'groups+add_new'),$_smarty_tpl);?>
</div>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('script', array()); $_block_repeat=true; echo smarty_block_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		$('#btn-create-new-group').click(function(){location.href='<?php echo smarty_function_url_for_route(array('for'=>"groups-create"),$_smarty_tpl);?>
'})
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>


<?php echo $_smarty_tpl->tpl_vars['menu']->value;?>



<div class="ow_group_list clearfix">
    <div class="ow_automargin ow_superwide">
      <?php if (empty($_smarty_tpl->tpl_vars['list']->value)){?>
        <div class="ow_nocontent"><?php echo smarty_function_text(array('key'=>"groups+listing_no_items_msg"),$_smarty_tpl);?>
</div>
      <?php }else{ ?>
          <?php  $_smarty_tpl->tpl_vars['group'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['group']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['group']->key => $_smarty_tpl->tpl_vars['group']->value){
$_smarty_tpl->tpl_vars['group']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['group']->key;
?>
                <?php echo smarty_function_decorator(array('name'=>'ipc','addClass'=>'ow_smallmargin','data'=>$_smarty_tpl->tpl_vars['group']->value,'infoString'=>"<a href=\"".((string)$_smarty_tpl->tpl_vars['group']->value['url'])."\">".((string)$_smarty_tpl->tpl_vars['group']->value['title'])."</a>"),$_smarty_tpl);?>

          <?php } ?>
          <br />
          <?php echo $_smarty_tpl->tpl_vars['paging']->value;?>

      <?php }?>
    </div>
</div><?php }} ?>