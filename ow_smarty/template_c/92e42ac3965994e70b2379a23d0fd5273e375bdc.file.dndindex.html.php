<?php /* Smarty version Smarty-3.1.12, created on 2013-09-05 23:58:35
         compiled from "/apps/mip/oxwall/ow_themes/graphiteplus/master_pages/dndindex.html" */ ?>
<?php /*%%SmartyHeaderCode:60306306052297d1b2a38a6-34743836%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '92e42ac3965994e70b2379a23d0fd5273e375bdc' => 
    array (
      0 => '/apps/mip/oxwall/ow_themes/graphiteplus/master_pages/dndindex.html',
      1 => 1354524430,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '60306306052297d1b2a38a6-34743836',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'siteUrl' => 0,
    'siteName' => 0,
    'siteTagline' => 0,
    'main_menu' => 0,
    'heading' => 0,
    'heading_icon_class' => 0,
    'content' => 0,
    'bottom_menu' => 0,
    'bottomPoweredByLink' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_52297d1b3839f6_20239347',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52297d1b3839f6_20239347')) {function content_52297d1b3839f6_20239347($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component')) include '/apps/mip/oxwall/ow_smarty/plugin/function.component.php';
if (!is_callable('smarty_function_text')) include '/apps/mip/oxwall/ow_smarty/plugin/function.text.php';
if (!is_callable('smarty_function_decorator')) include '/apps/mip/oxwall/ow_smarty/plugin/function.decorator.php';
?><?php echo smarty_function_component(array('class'=>'BASE_CMP_Console'),$_smarty_tpl);?>

<div class="ow_header">
	<div class="ow_canvas">
		<div class="ow_page ow_top">
	    	<div class="ow_logo">
	            <h2><a href="<?php echo $_smarty_tpl->tpl_vars['siteUrl']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['siteName']->value;?>
</a></h2>
	            <div class="ow_tagline"><?php echo $_smarty_tpl->tpl_vars['siteTagline']->value;?>
</div>
	        </div>
	       <?php echo $_smarty_tpl->tpl_vars['main_menu']->value;?>

		</div>
    </div>
</div>
<div class="ow_page_container ow_bg_color">
	<div class="ow_canvas">
		<div class="ow_page clearfix">
		    <?php if ($_smarty_tpl->tpl_vars['heading']->value){?><h1 class="ow_stdmargin <?php echo $_smarty_tpl->tpl_vars['heading_icon_class']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['heading']->value;?>
</h1><?php }?>
	        <div class="ow_dndindex clearfix">
    	        <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

    	    </div>
		</div>
	</div>
</div>
<div class="ow_footer">
	<div class="ow_canvas">
		<div class="ow_page clearfix">
			<?php echo $_smarty_tpl->tpl_vars['bottom_menu']->value;?>

			<div class="ow_copyright">
				<?php echo smarty_function_text(array('key'=>'base+copyright'),$_smarty_tpl);?>

			</div>
			<div style="float:right;padding-bottom: 30px;">
				<?php echo $_smarty_tpl->tpl_vars['bottomPoweredByLink']->value;?>

			</div>
		</div>
	</div>
</div>    
<?php echo smarty_function_decorator(array('name'=>'floatbox'),$_smarty_tpl);?>
<?php }} ?>