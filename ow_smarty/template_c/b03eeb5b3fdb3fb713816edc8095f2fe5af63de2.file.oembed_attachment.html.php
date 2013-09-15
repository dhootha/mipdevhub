<?php /* Smarty version Smarty-3.1.12, created on 2013-09-10 12:44:00
         compiled from "/apps/mip/oxwall/ow_system_plugins/base/views/components/oembed_attachment.html" */ ?>
<?php /*%%SmartyHeaderCode:521980610522ef7f0118232-02460220%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b03eeb5b3fdb3fb713816edc8095f2fe5af63de2' => 
    array (
      0 => '/apps/mip/oxwall/ow_system_plugins/base/views/components/oembed_attachment.html',
      1 => 1359700751,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '521980610522ef7f0118232-02460220',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'containerClass' => 0,
    'delete' => 0,
    'deleteClass' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_522ef7f026bba4_24561395',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522ef7f026bba4_24561395')) {function content_522ef7f026bba4_24561395($_smarty_tpl) {?><?php if (!is_callable('smarty_block_script')) include '/apps/mip/oxwall/ow_smarty/plugin/block.script.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('script', array()); $_block_repeat=true; echo smarty_block_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
OW.resizeImg($('.ow_oembed_attachment'),{width:'150'});<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<style>

    .ow_oembed_attachment {
        position: relative;
        padding-right: 20px;
    }

    .ow_oembed_attachment .two_column  .attachment_left {
        float: left;
        max-width: 150px;
		margin-right: 8px;
    }

    .ow_oembed_attachment .two_column .attachment_right {
        display: inline-block;
    }

    .ow_oembed_attachment .video div.attachment_left {
        max-width: 160px;
    }

    .ow_oembed_attachment .video div.attachment_right {
        display: inline-block;
    }

    .ow_oembed_attachment .one_column .attachment_left {
        display: none;
    }

    .ow_oembed_attachment .attachment_left img
    {
        width: 100%;
        height: auto;
        max-width: none;
    }

    .ow_oembed_attachment .attachment_left embed,
    .ow_oembed_attachment .attachment_left object,
    .ow_oembed_attachment .attachment_left iframe
    {
        width: 300px;
        height: 220px;
    }

    .ow_oembed_attachment:hover .attachment_delete {
        display: block;
    }

    .attachment_delete {
        position: absolute;
        right: 0;
        width:12px;
        height:12px;
        display: none;
    }

</style>

<div class="ow_oembed_attachment clearfix <?php if (!empty($_smarty_tpl->tpl_vars['containerClass']->value)){?><?php echo $_smarty_tpl->tpl_vars['containerClass']->value;?>
<?php }?>">
    <?php if (!empty($_smarty_tpl->tpl_vars['delete']->value)){?>
        <a class="attachment_delete ow_miniic_delete <?php if (!empty($_smarty_tpl->tpl_vars['deleteClass']->value)){?><?php echo $_smarty_tpl->tpl_vars['deleteClass']->value;?>
<?php }?>" href="javascript://"></a>
     <?php }?>

    <div class="<?php echo $_smarty_tpl->tpl_vars['data']->value['type'];?>
 <?php if (!empty($_smarty_tpl->tpl_vars['data']->value['thumbnail_url'])||!empty($_smarty_tpl->tpl_vars['data']->value['url'])){?>two_column has_thumbnail<?php }elseif(!empty($_smarty_tpl->tpl_vars['data']->value['html'])){?>two_column has_html<?php }else{ ?>one_column<?php }?>">
        <div class="attachment_left">
            <?php if (!empty($_smarty_tpl->tpl_vars['data']->value['thumbnail_url'])){?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['data']->value['href'];?>
" target="_blank">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['data']->value['thumbnail_url'];?>
" class="attachment_thumb" />
                </a>
            <?php }elseif(!empty($_smarty_tpl->tpl_vars['data']->value['url'])){?>
            <a href="javascript://" onclick="OW.showImageInFloatBox('<?php echo $_smarty_tpl->tpl_vars['data']->value['href'];?>
');">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['data']->value['url'];?>
" class="attachment_thumb from_fullsize_photo" />
                </a>
            <?php }elseif(!empty($_smarty_tpl->tpl_vars['data']->value['html'])){?>
                <?php echo $_smarty_tpl->tpl_vars['data']->value['html'];?>

            <?php }?>
        </div>
        <div class="attachment_right ">
            <?php if (!empty($_smarty_tpl->tpl_vars['data']->value['title'])){?>
                <div class="attachment_title"><a href="<?php echo $_smarty_tpl->tpl_vars['data']->value['href'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
</a></div>
            <?php }?>
            <?php if (!empty($_smarty_tpl->tpl_vars['data']->value['description'])){?>
                <div class="attachment_desc ow_remark"><?php echo $_smarty_tpl->tpl_vars['data']->value['description'];?>
</div>
            <?php }?>
        </div>
    </div>
</div><?php }} ?>