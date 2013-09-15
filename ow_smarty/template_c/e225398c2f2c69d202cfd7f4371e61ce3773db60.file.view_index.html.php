<?php /* Smarty version Smarty-3.1.12, created on 2013-09-10 13:13:07
         compiled from "/apps/mip/oxwall/ow_plugins/links/views/controllers/view_index.html" */ ?>
<?php /*%%SmartyHeaderCode:967455274522efec35c5c13-28188712%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e225398c2f2c69d202cfd7f4371e61ce3773db60' => 
    array (
      0 => '/apps/mip/oxwall/ow_plugins/links/views/controllers/view_index.html',
      1 => 1364205649,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '967455274522efec35c5c13-28188712',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tb' => 0,
    'info' => 0,
    'comments' => 0,
    'userInfo' => 0,
    'tagCloud' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_522efec364b436_60342994',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522efec364b436_60342994')) {function content_522efec364b436_60342994($_smarty_tpl) {?><?php if (!is_callable('smarty_block_block_decorator')) include '/apps/mip/oxwall/ow_smarty/plugin/block.block_decorator.php';
if (!is_callable('smarty_function_add_content')) include '/apps/mip/oxwall/ow_smarty/plugin/function.add_content.php';
if (!is_callable('smarty_function_text')) include '/apps/mip/oxwall/ow_smarty/plugin/function.text.php';
if (!is_callable('smarty_function_user_link')) include '/apps/mip/oxwall/ow_smarty/plugin/function.user_link.php';
if (!is_callable('smarty_function_format_date')) include '/apps/mip/oxwall/ow_smarty/plugin/function.format_date.php';
?><div class="ow_links clearfix">

	<div class="ow_superwide ow_left">
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('block_decorator', array('name'=>"box",'type'=>"empty",'toolbar'=>$_smarty_tpl->tpl_vars['tb']->value,'addClass'=>"ow_stdmargin")); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>"box",'type'=>"empty",'toolbar'=>$_smarty_tpl->tpl_vars['tb']->value,'addClass'=>"ow_stdmargin"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <p><a href="<?php echo $_smarty_tpl->tpl_vars['info']->value['dto']->url;?>
" target="_blank" ><?php echo $_smarty_tpl->tpl_vars['info']->value['link'];?>
</a></p>
			<p><?php echo $_smarty_tpl->tpl_vars['info']->value['dto']->description;?>
</p>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>"box",'type'=>"empty",'toolbar'=>$_smarty_tpl->tpl_vars['tb']->value,'addClass'=>"ow_stdmargin"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        <?php echo smarty_function_add_content(array('key'=>'socialsharing.get_sharing_buttons'),$_smarty_tpl);?>

        <?php echo smarty_function_add_content(array('key'=>'links.link_view.content.after_link_description'),$_smarty_tpl);?>

        <span id="comments"></span>
		<?php echo $_smarty_tpl->tpl_vars['comments']->value;?>


	</div>

	<div class="ow_supernarrow ow_right">
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('block_decorator', array('name'=>"box",'addClass'=>"ow_stdmargin",'langLabel'=>"links+link")); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>"box",'addClass'=>"ow_stdmargin",'langLabel'=>"links+link"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<table class="ow_table_3 ow_small ow_nomargin">
				<tr class="ow_tr_first">
					<td class="ow_label"><?php echo smarty_function_text(array('key'=>"links+by"),$_smarty_tpl);?>
</td>
					<td>
						<?php echo smarty_function_user_link(array('name'=>$_smarty_tpl->tpl_vars['userInfo']->value['displayName'],'username'=>$_smarty_tpl->tpl_vars['userInfo']->value['userName']),$_smarty_tpl);?>

					</td>
				</tr>
               	<tr class="ow_tr_last">
					<td class="ow_label"><?php echo smarty_function_text(array('key'=>"links+added"),$_smarty_tpl);?>
</td>
					<td><?php echo smarty_function_format_date(array('timestamp'=>$_smarty_tpl->tpl_vars['info']->value['dto']->timestamp),$_smarty_tpl);?>
</td>
				</tr>
            </table>
          <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>"box",'addClass'=>"ow_stdmargin",'langLabel'=>"links+link"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


	<?php echo $_smarty_tpl->tpl_vars['tagCloud']->value;?>

	</div>
</div><?php }} ?>