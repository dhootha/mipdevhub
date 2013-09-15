<?php /* Smarty version Smarty-3.1.12, created on 2013-09-13 22:24:13
         compiled from "/apps/mip/oxwall/ow_system_plugins/base/views/components/ajax_oembed_attachment.html" */ ?>
<?php /*%%SmartyHeaderCode:2197886995233746d9ae7c7-37590027%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '599c0f9465e0f9b71aee8bdcbf09179364832ad0' => 
    array (
      0 => '/apps/mip/oxwall/ow_system_plugins/base/views/components/ajax_oembed_attachment.html',
      1 => 1359700751,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2197886995233746d9ae7c7-37590027',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'containerClass' => 0,
    'uniqId' => 0,
    'deleteClass' => 0,
    'data' => 0,
    'img' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5233746db5aec9_77899541',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5233746db5aec9_77899541')) {function content_5233746db5aec9_77899541($_smarty_tpl) {?><?php if (!is_callable('smarty_block_script')) include '/apps/mip/oxwall/ow_smarty/plugin/block.script.php';
if (!is_callable('smarty_function_text')) include '/apps/mip/oxwall/ow_smarty/plugin/function.text.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('script', array()); $_block_repeat=true; echo smarty_block_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
OW.resizeImg($('.ow_oembed_attachment'),{width:'150'});<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<style>

    div.ow_ajax_oembed_attachment {
        position: relative;
        /*padding-right: 20px;*/
        border-width: 1px;
        padding: 4px;
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
        max-width: 100%;
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

    .ow_ajax_oembed_attachment .attachment_delete
    {
        right: 5px;
    }

    .attachment_other_images
    {
        text-align: center;
        margin-top: 10px;
        visibility: hidden;
    }

    .ow_ajax_oembed_attachment:hover .attachment_other_images
    {
        visibility: visible;
    }

    .attachment_other_images_fbcontent
    {

    }

    .attachment_image_item
    {
        float: left;
        margin: 2px;
        padding: 3px;
        width: 85px;
        height: 85px;
        border-width: 1px;
        text-align: center;
        cursor: pointer;
    }

    .attachment_image_item img
    {
        max-width: 100%;
        max-height: 100%;
    }

    .has_thumbnail .attachment_left
    {

    }

</style>

<div class="ow_ajax_oembed_attachment ow_oembed_attachment ow_border clearfix <?php if (!empty($_smarty_tpl->tpl_vars['containerClass']->value)){?><?php echo $_smarty_tpl->tpl_vars['containerClass']->value;?>
<?php }?>" id="<?php echo $_smarty_tpl->tpl_vars['uniqId']->value;?>
">

    <a class="attachment_delete OW_AttachmentDelete ow_miniic_delete <?php if (!empty($_smarty_tpl->tpl_vars['deleteClass']->value)){?><?php echo $_smarty_tpl->tpl_vars['deleteClass']->value;?>
<?php }?>" href="javascript://"></a>

    <div style="padding-right: 20px;">
        <div class="<?php echo $_smarty_tpl->tpl_vars['data']->value['type'];?>
 <?php if (!empty($_smarty_tpl->tpl_vars['data']->value['thumbnail_url'])||!empty($_smarty_tpl->tpl_vars['data']->value['url'])){?>has_thumbnail<?php }elseif(!empty($_smarty_tpl->tpl_vars['data']->value['html'])){?>has_html<?php }?> <?php if (!empty($_smarty_tpl->tpl_vars['data']->value['title'])||!empty($_smarty_tpl->tpl_vars['data']->value['description'])){?>two_column<?php }elseif($_smarty_tpl->tpl_vars['data']->value['type']!='photo'){?>one_column<?php }?>">
            <div class="attachment_left">
                <?php if (!empty($_smarty_tpl->tpl_vars['data']->value['thumbnail_url'])){?>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['data']->value['href'];?>
" target="_blank">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['data']->value['thumbnail_url'];?>
" class="attachment_thumb OW_AttachmentImage" />
                    </a>
                <?php }elseif(!empty($_smarty_tpl->tpl_vars['data']->value['url'])){?>
                <a href="javascript://" onclick="OW.showImageInFloatBox('<?php echo $_smarty_tpl->tpl_vars['data']->value['href'];?>
');">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['data']->value['url'];?>
" class="attachment_thumb from_fullsize_photo OW_AttachmentImage" />
                    </a>
                <?php }elseif(!empty($_smarty_tpl->tpl_vars['data']->value['html'])){?>
                    <?php echo $_smarty_tpl->tpl_vars['data']->value['html'];?>

                <?php }?>

                <?php if (!empty($_smarty_tpl->tpl_vars['data']->value['allImages'])&&count($_smarty_tpl->tpl_vars['data']->value['allImages'])>1){?>
                    <div class="attachment_other_images">
                        <a href="javascript://" class="attachment_other_images_btn OW_AttachmentSelectPicture ow_lbutton"><?php echo smarty_function_text(array('key'=>"base+ajax_attachment_select_image"),$_smarty_tpl);?>
</a>
                        <div style="display: none">
                            <div class="attachment_other_images_fbtitle OW_AttachmentPicturesFbTitle"><?php echo smarty_function_text(array('key'=>"base+ajax_attachment_select_image_title"),$_smarty_tpl);?>
</div>
                            <div class="attachment_other_images_fbcontent clearfix OW_AttachmentPicturesFbContent">
                                <?php  $_smarty_tpl->tpl_vars["img"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["img"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['allImages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["img"]->key => $_smarty_tpl->tpl_vars["img"]->value){
$_smarty_tpl->tpl_vars["img"]->_loop = true;
?>
                                    <div class="attachment_image_item ow_border OW_AttachmentPictureItem">
                                        <img src="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
" />
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                <?php }?>

            </div>
            <div class="attachment_right ">
                <?php if (!empty($_smarty_tpl->tpl_vars['data']->value['title'])){?>
                    <div class="attachment_title"><a href="<?php echo $_smarty_tpl->tpl_vars['data']->value['href'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
</a></div>
                <?php }elseif($_smarty_tpl->tpl_vars['data']->value['type']!="photo"){?>
                    <div class="attachment_title"><a href="<?php echo $_smarty_tpl->tpl_vars['data']->value['href'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['data']->value['href'];?>
</a></div>
                <?php }?>
                <?php if (!empty($_smarty_tpl->tpl_vars['data']->value['description'])){?>
                    <div class="attachment_desc ow_remark"><?php echo $_smarty_tpl->tpl_vars['data']->value['description'];?>
</div>
                <?php }?>
            </div>
        </div>
    </div>
</div><?php }} ?>