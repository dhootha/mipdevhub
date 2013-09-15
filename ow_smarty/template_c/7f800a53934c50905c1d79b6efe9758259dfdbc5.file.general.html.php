<?php /* Smarty version Smarty-3.1.12, created on 2013-09-05 23:55:13
         compiled from "/apps/mip/oxwall/ow_themes/fineblue/master_pages/general.html" */ ?>
<?php /*%%SmartyHeaderCode:210542499952297c51adf925-50803874%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7f800a53934c50905c1d79b6efe9758259dfdbc5' => 
    array (
      0 => '/apps/mip/oxwall/ow_themes/fineblue/master_pages/general.html',
      1 => 1294844364,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '210542499952297c51adf925-50803874',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'siteUrl' => 0,
    'siteName' => 0,
    'siteTagline' => 0,
    'main_menu' => 0,
    'heading_icon_class' => 0,
    'heading' => 0,
    'content' => 0,
    'bottom_menu' => 0,
    'bottomPoweredByLink' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_52297c51b2d6d3_42010745',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52297c51b2d6d3_42010745')) {function content_52297c51b2d6d3_42010745($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component')) include '/apps/mip/oxwall/ow_smarty/plugin/function.component.php';
if (!is_callable('smarty_function_add_content')) include '/apps/mip/oxwall/ow_smarty/plugin/function.add_content.php';
if (!is_callable('smarty_function_text')) include '/apps/mip/oxwall/ow_smarty/plugin/function.text.php';
if (!is_callable('smarty_function_decorator')) include '/apps/mip/oxwall/ow_smarty/plugin/function.decorator.php';
?><div class="ow_header">
	<div class="ow_canvas">
		<div class="ow_page" style="position:relative;height:105px;">
			<?php echo smarty_function_component(array('class'=>'BASE_CMP_Console'),$_smarty_tpl);?>

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
<div class="ow_page_container">
	<div class="ow_canvas clearfix">
		<div class="ow_page clearfix">
		    <h1 class="ow_stdmargin <?php echo $_smarty_tpl->tpl_vars['heading_icon_class']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['heading']->value;?>
</h1>
	        <div class="ow_content">
                <?php echo smarty_function_add_content(array('key'=>'base.add_page_top_content'),$_smarty_tpl);?>

    	        <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

                <?php echo smarty_function_add_content(array('key'=>'base.add_page_bottom_content'),$_smarty_tpl);?>

    	    </div>
    	    <div class="ow_sidebar">
    	        <?php echo smarty_function_component(array('class'=>"BASE_CMP_Sidebar"),$_smarty_tpl);?>

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