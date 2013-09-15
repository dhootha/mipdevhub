<?php /* Smarty version Smarty-3.1.12, created on 2013-09-10 08:39:50
         compiled from "/apps/mip/oxwall/ow_plugins/gconnect/views/controllers/connect_oauth.html" */ ?>
<?php /*%%SmartyHeaderCode:1855519465522ebeb68f2310-15172367%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '927678345dd9861696724015892d7cde8181cb0b' => 
    array (
      0 => '/apps/mip/oxwall/ow_plugins/gconnect/views/controllers/connect_oauth.html',
      1 => 1320927082,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1855519465522ebeb68f2310-15172367',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'authurl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_522ebeb693ae31_48626074',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522ebeb693ae31_48626074')) {function content_522ebeb693ae31_48626074($_smarty_tpl) {?><script type="text/javascript">
	var authurl = '<?php echo $_smarty_tpl->tpl_vars['authurl']->value;?>
';

	function setCookie(c_name,value,exdays){
		var exdate=new Date();
		exdate.setDate(exdate.getDate() + exdays);
		var c_value=escape(value) + ((exdays==null) ? "" : "; expires="+exdate.toUTCString());
		document.cookie=c_name + "=" + c_value;
	}
	
//	jQuery(document).ready(function(){
		var h = location.hash.substr(1);	
		h = h.split('&')[0].split('=')[1];
		if (h.lenght != 0) {	
			setCookie('gtoken',h,360);
			location.href = authurl;
		}
//	});

</script>
<?php echo $_smarty_tpl->tpl_vars['authurl']->value;?>
<?php }} ?>