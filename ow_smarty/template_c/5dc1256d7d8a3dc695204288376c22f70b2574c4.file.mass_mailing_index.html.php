<?php /* Smarty version Smarty-3.1.12, created on 2013-09-06 11:20:58
         compiled from "/apps/mip/oxwall/ow_system_plugins/admin/views/controllers/mass_mailing_index.html" */ ?>
<?php /*%%SmartyHeaderCode:1304558231522a1d0a4e5a53-17071616%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5dc1256d7d8a3dc695204288376c22f70b2574c4' => 
    array (
      0 => '/apps/mip/oxwall/ow_system_plugins/admin/views/controllers/mass_mailing_index.html',
      1 => 1359700751,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1304558231522a1d0a4e5a53-17071616',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'isActive' => 0,
    'expireText' => 0,
    'userCount' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_522a1d0a5c2c45_85290917',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522a1d0a5c2c45_85290917')) {function content_522a1d0a5c2c45_85290917($_smarty_tpl) {?><?php if (!is_callable('smarty_function_text')) include '/apps/mip/oxwall/ow_smarty/plugin/function.text.php';
if (!is_callable('smarty_block_form')) include '/apps/mip/oxwall/ow_smarty/plugin/block.form.php';
if (!is_callable('smarty_function_cycle')) include '/apps/mip/oxwall/ow_libraries/smarty3/plugins/function.cycle.php';
if (!is_callable('smarty_function_label')) include '/apps/mip/oxwall/ow_smarty/plugin/function.label.php';
if (!is_callable('smarty_function_input')) include '/apps/mip/oxwall/ow_smarty/plugin/function.input.php';
if (!is_callable('smarty_function_error')) include '/apps/mip/oxwall/ow_smarty/plugin/function.error.php';
if (!is_callable('smarty_function_submit')) include '/apps/mip/oxwall/ow_smarty/plugin/function.submit.php';
?><div class="clearfix">
    <?php if (!$_smarty_tpl->tpl_vars['isActive']->value){?>
        <div class="ow_anno ow_center">
            <?php echo $_smarty_tpl->tpl_vars['expireText']->value;?>

        </div>
    <?php }else{ ?>
        <div class="ow_column ow_automargin ow_superwide">
            <p class="total_members"><?php echo smarty_function_text(array('key'=>"admin+massmailing_total_members",'count'=>$_smarty_tpl->tpl_vars['userCount']->value),$_smarty_tpl);?>
</p>
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('form', array('name'=>'massMailingForm','type'=>'empty','iconClass'=>"ow_ic_edit",'langLabel'=>'admin+massmailing_compose_email')); $_block_repeat=true; echo smarty_block_form(array('name'=>'massMailingForm','type'=>'empty','iconClass'=>"ow_ic_edit",'langLabel'=>'admin+massmailing_compose_email'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <table class="ow_table_1 ow_form">
                    <tr class="<?php echo smarty_function_cycle(array('values'=>"ow_alt2,ow_alt1"),$_smarty_tpl);?>
 ow_tr_first">
                            <td class="ow_label"><?php echo smarty_function_label(array('name'=>'emailFormat'),$_smarty_tpl);?>
</td>
                            <td class="ow_value">
                                 <?php echo smarty_function_input(array('name'=>'emailFormat'),$_smarty_tpl);?>

                            </td>
                    </tr>
                    <tr class="<?php echo smarty_function_cycle(array('values'=>"ow_alt2,ow_alt1"),$_smarty_tpl);?>
">
                            <td class="ow_label"><?php echo smarty_function_label(array('name'=>'userRoles'),$_smarty_tpl);?>
</td>
                            <td class="ow_value">
                                 <?php echo smarty_function_input(array('name'=>'userRoles'),$_smarty_tpl);?>

                            </td>
                    </tr>
                    <tr class="<?php echo smarty_function_cycle(array('values'=>"ow_alt2,ow_alt1"),$_smarty_tpl);?>
">
                            <td class="ow_label"><?php echo smarty_function_label(array('name'=>'subject'),$_smarty_tpl);?>
</td>
                            <td class="ow_value"><?php echo smarty_function_input(array('name'=>'subject','style'=>"width:97%;"),$_smarty_tpl);?>
<br /><?php echo smarty_function_error(array('name'=>'subject'),$_smarty_tpl);?>
</td>
                    </tr>
                    <tr class="<?php echo smarty_function_cycle(array('values'=>"ow_alt2,ow_alt1"),$_smarty_tpl);?>
 ow_tr_last">
                            <td class="ow_label"><?php echo smarty_function_label(array('name'=>'body'),$_smarty_tpl);?>
</td>
                            <td class="ow_value">
                                <?php echo smarty_function_input(array('id'=>"mass_mailing_body",'name'=>'body','style'=>"width:97%;height:250px;"),$_smarty_tpl);?>
<br /><?php echo smarty_function_error(array('name'=>'body'),$_smarty_tpl);?>

                                <div style="padding:5px;">
                                    <?php echo smarty_function_text(array('key'=>'admin+massmailing_following_variables_text'),$_smarty_tpl);?>
<br />
                                    
                                        <a id="var_username" onclick="window.massMailing.addVar('{$user_name}')" href="javascript://">{$user_name}</a><br />
                                        <a id="var_username" onclick="window.massMailing.addVar('{$user_email}')" href="javascript://">{$user_email}</a><br />
                                        <a id="var_sitename" onclick="window.massMailing.addVar('{$site_name}')" href="javascript://">{$site_name}</a><br />
                                        <a id="var_siteurl" onclick="window.massMailing.addVar('{$site_url}')" href="javascript://">{$site_url}</a><br />
                                        <a id="site_email" onclick="window.massMailing.addVar('{$site_email}')" href="javascript://">{$site_email}</a><br />
                                    
                                </div>
                            </td>
                    </tr>
                </table>
                <div class="clearfix ow_stdmargin">
                    <div class="ow_right">
                        <?php echo smarty_function_submit(array('name'=>'startMailing','class'=>"ow_positive"),$_smarty_tpl);?>

                    </div>
                </div>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>'massMailingForm','type'=>'empty','iconClass'=>"ow_ic_edit",'langLabel'=>'admin+massmailing_compose_email'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </div>
    <?php }?>
</div><?php }} ?>