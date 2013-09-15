<?php /* Smarty version Smarty-3.1.12, created on 2013-09-05 23:29:15
         compiled from "/apps/mip/oxwall/ow_plugins/forum/views/components/forum_search.html" */ ?>
<?php /*%%SmartyHeaderCode:6572775145229763bdc8011-43021709%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9c1b15b86dbfda7beccda5e6a31f6164ee5f9c6b' => 
    array (
      0 => '/apps/mip/oxwall/ow_plugins/forum/views/components/forum_search.html',
      1 => 1331814144,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6572775145229763bdc8011-43021709',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'input' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5229763be60802_60487383',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5229763be60802_60487383')) {function content_5229763be60802_60487383($_smarty_tpl) {?><?php if (!is_callable('smarty_block_style')) include '/apps/mip/oxwall/ow_smarty/plugin/block.style.php';
?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('style', array()); $_block_repeat=true; echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


    .forum_search_form {
        display: inline-block;
    }
    
    .forum_search_form input[type=text] {
        width: 170px;
        padding-top: 3px;
        padding-bottom: 6px;
    }

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_style(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<form id="forum_search" class="forum_search_form">
    <?php echo $_smarty_tpl->tpl_vars['input']->value;?>

</form><?php }} ?>