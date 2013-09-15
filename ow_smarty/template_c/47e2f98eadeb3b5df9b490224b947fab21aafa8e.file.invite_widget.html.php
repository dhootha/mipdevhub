<?php /* Smarty version Smarty-3.1.12, created on 2013-09-06 06:22:27
         compiled from "/apps/mip/oxwall/ow_plugins/groups/views/components/invite_widget.html" */ ?>
<?php /*%%SmartyHeaderCode:20937973695229d713b713b2-87121631%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '47e2f98eadeb3b5df9b490224b947fab21aafa8e' => 
    array (
      0 => '/apps/mip/oxwall/ow_plugins/groups/views/components/invite_widget.html',
      1 => 1331814144,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20937973695229d713b713b2-87121631',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5229d713b8a4b2_45134811',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5229d713b8a4b2_45134811')) {function content_5229d713b8a4b2_45134811($_smarty_tpl) {?><?php if (!is_callable('smarty_block_style')) include '/apps/mip/oxwall/ow_smarty/plugin/block.style.php';
if (!is_callable('smarty_function_decorator')) include '/apps/mip/oxwall/ow_smarty/plugin/function.decorator.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('style', array()); $_block_repeat=true; echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


.groups-invite-link
{
    text-align:center;
}

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_style(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<script type="text/javascript">

function GROUPS_InitInviteButton( options )
{
    var floatBox, userIdList = options.userList;

    $('#GROUPS_InviteLink').click(
        function()
        {
            floatBox = OW.ajaxFloatBox('BASE_CMP_AvatarUserListSelect', [userIdList],
            {
                width:600,
                height:350,
                iconClass: 'ow_ic_user',
                title: options.floatBoxTitle
            });
        }
    );

    OW.bind('base.avatar_user_list_select',
        function(list)
        {
            floatBox.close();

            $.ajax({
                type: 'POST',
                url: options.inviteResponder,
                data: {"groupId": options.groupId, "userIdList": JSON.stringify(list), "allIdList": JSON.stringify(options.userList)},
                dataType: 'json',
                success : function(data)
                {
                    if( data.messageType == 'error' )
                    {
                        OW.error(data.message);
                    }
                    else
                    {
                        OW.info(data.message);
                        userIdList = data.allIdList;
                    }
                }
            });
        }
    );
}


</script>

<div class="groups-invite-link ow_std_margin">
    <?php echo smarty_function_decorator(array('name'=>'button','class'=>'ow_ic_add','type'=>'button','langLabel'=>'groups+invite_btn_label','id'=>'GROUPS_InviteLink'),$_smarty_tpl);?>

</div><?php }} ?>