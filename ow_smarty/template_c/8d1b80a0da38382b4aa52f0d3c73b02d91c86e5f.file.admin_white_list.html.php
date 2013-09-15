<?php /* Smarty version Smarty-3.1.12, created on 2013-09-06 11:27:38
         compiled from "/apps/mip/oxwall/ow_plugins/watchdog/views/controllers/admin_white_list.html" */ ?>
<?php /*%%SmartyHeaderCode:506809630522a1e9a2ec7d4-41511420%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8d1b80a0da38382b4aa52f0d3c73b02d91c86e5f' => 
    array (
      0 => '/apps/mip/oxwall/ow_plugins/watchdog/views/controllers/admin_white_list.html',
      1 => 1359700751,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '506809630522a1e9a2ec7d4-41511420',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'emptyWhiteList' => 0,
    'menu' => 0,
    'ip' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_522a1e9a3cf0d7_77242870',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522a1e9a3cf0d7_77242870')) {function content_522a1e9a3cf0d7_77242870($_smarty_tpl) {?><?php if (!is_callable('smarty_block_script')) include '/apps/mip/oxwall/ow_smarty/plugin/block.script.php';
if (!is_callable('smarty_block_form')) include '/apps/mip/oxwall/ow_smarty/plugin/block.form.php';
if (!is_callable('smarty_function_text')) include '/apps/mip/oxwall/ow_smarty/plugin/function.text.php';
if (!is_callable('smarty_function_input')) include '/apps/mip/oxwall/ow_smarty/plugin/function.input.php';
if (!is_callable('smarty_function_submit')) include '/apps/mip/oxwall/ow_smarty/plugin/function.submit.php';
if (!is_callable('smarty_function_decorator')) include '/apps/mip/oxwall/ow_smarty/plugin/function.decorator.php';
if (!is_callable('smarty_function_url_for')) include '/apps/mip/oxwall/ow_smarty/plugin/function.url_for.php';
?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('script', array()); $_block_repeat=true; echo smarty_block_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>



    $("#empty_btn").click(function()
    {
        if(confirm(OW.getLanguageText('watchdog', 'confirm_empty_white_list')))
        {
            window.location = '<?php echo $_smarty_tpl->tpl_vars['emptyWhiteList']->value;?>
';
        }
    });


<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php echo $_smarty_tpl->tpl_vars['menu']->value;?>


<div class="clearfix">
    <div class="ow_column ow_right">
        <div class="clearfix">
            <div class="ow_right">
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('form', array('name'=>'FindWhiteIp')); $_block_repeat=true; echo smarty_block_form(array('name'=>'FindWhiteIp'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <table class="ow_table_1 ow_form">
                        <tbody class="ow_paging">
                            <tr>
                                <td class="ow_td_label"><?php echo smarty_function_text(array('key'=>'watchdog+search_text'),$_smarty_tpl);?>
</td>
                                <td class="ow_value ow_valign_middle">
                                    <?php echo smarty_function_input(array('name'=>'ip','style'=>"width: 150px;"),$_smarty_tpl);?>

                                </td>
                            </tr>
                        </tbody>
                    </table>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>'FindWhiteIp'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </div>
        </div>
    </div>
</div>

<div class="ow_automargin ow_wide" style="width: 31%">
    <div class="ow_box ow_break_word ow_paging">
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('form', array('name'=>'AddNewIp')); $_block_repeat=true; echo smarty_block_form(array('name'=>'AddNewIp'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <table>
                <tbody>
                    <tr>
                        <td class="ow_value ow_valign_middle">
                            <?php echo smarty_function_input(array('name'=>'ip','style'=>"width: 150px;"),$_smarty_tpl);?>

                        </td>
                        <td class="ow_submit ow_valign_middle">
                            <?php echo smarty_function_submit(array('name'=>'add','class'=>'ow_ic_save ow_positive'),$_smarty_tpl);?>

                        </td>
                    </tr>
                </tbody>
            </table>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>'AddNewIp'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </div>
</div>

<div class="ow_stdmargin clearfix">
    <div class="ow_right ow_superwide ow_txtright">
        <?php echo smarty_function_decorator(array('name'=>'button','class'=>'ow_mild_red ow_ic_delete','langLabel'=>'watchdog+empty_white_list_btn','id'=>'empty_btn'),$_smarty_tpl);?>

    </div>
</div>

<?php if (isset($_smarty_tpl->tpl_vars['ip']->value)){?>
    <div style="display:none;">
        <div id="search-ip-div">
            <div class="ow_automargin ow_wide">
                <table class="ow_table_1 ow_form ow_automargin">
                    <tr class="ow_alt1">
                        <td width="1"> 
                            <a href="<?php echo smarty_function_url_for(array('for'=>"WATCHDOG_CTRL_Admin:delete:[id=>".((string)$_smarty_tpl->tpl_vars['ip']->value->id)."]"),$_smarty_tpl);?>
" onclick="return confirm('<?php echo smarty_function_text(array('key'=>"base+are_you_sure"),$_smarty_tpl);?>
');" style="width:16px; height:16px; display:block; margin:0 auto;background-repeat:no-repeat;background-position: 50% 50%;" class="ow_ic_delete"></a>
                        </td>
                        <td><?php echo $_smarty_tpl->tpl_vars['ip']->value->ip;?>
</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
<?php }?>
<?php }} ?>