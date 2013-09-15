<?php /* Smarty version Smarty-3.1.12, created on 2013-09-05 23:58:51
         compiled from "/apps/mip/oxwall/ow_plugins/links/views/controllers/list_index.html" */ ?>
<?php /*%%SmartyHeaderCode:213646686352297d2be91331-00731804%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '64dda6c6ebbb7bcd2ba784193c3a49d27771b462' => 
    array (
      0 => '/apps/mip/oxwall/ow_plugins/links/views/controllers/list_index.html',
      1 => 1359700750,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '213646686352297d2be91331-00731804',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'addNew_isAuthorized' => 0,
    'url_new_link' => 0,
    'menu' => 0,
    'mode' => 0,
    'isBrowseByTagCase' => 0,
    'tag' => 0,
    'tagCloud' => 0,
    'list' => 0,
    'link' => 0,
    'dto' => 0,
    'id' => 0,
    'isAuthenticated' => 0,
    'userVotes' => 0,
    'titleLength' => 0,
    'tb' => 0,
    'paging' => 0,
    'tagSearch' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_52297d2c164428_29595445',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52297d2c164428_29595445')) {function content_52297d2c164428_29595445($_smarty_tpl) {?><?php if (!is_callable('smarty_function_decorator')) include '/apps/mip/oxwall/ow_smarty/plugin/function.decorator.php';
if (!is_callable('smarty_block_style')) include '/apps/mip/oxwall/ow_smarty/plugin/block.style.php';
if (!is_callable('smarty_block_script')) include '/apps/mip/oxwall/ow_smarty/plugin/block.script.php';
if (!is_callable('smarty_function_url_for')) include '/apps/mip/oxwall/ow_smarty/plugin/function.url_for.php';
if (!is_callable('smarty_function_text')) include '/apps/mip/oxwall/ow_smarty/plugin/function.text.php';
if (!is_callable('smarty_modifier_truncate')) include '/apps/mip/oxwall/ow_libraries/smarty3/plugins/modifier.truncate.php';
if (!is_callable('smarty_block_block_decorator')) include '/apps/mip/oxwall/ow_smarty/plugin/block.block_decorator.php';
?><?php if ($_smarty_tpl->tpl_vars['addNew_isAuthorized']->value){?>
    <div class="ow_right"><?php echo smarty_function_decorator(array('name'=>'button','class'=>'ow_ic_add','id'=>'btn-add-new-link','langLabel'=>'links+add_new','onclick'=>"location.href='".((string)$_smarty_tpl->tpl_vars['url_new_link']->value)."'"),$_smarty_tpl);?>
</div>
<?php }?>

<?php echo $_smarty_tpl->tpl_vars['menu']->value;?>


            <div class="ow_links clearfix">
            	<div class="ow_superwide ow_left">
<?php $_smarty_tpl->smarty->_tag_stack[] = array('style', array()); $_block_repeat=true; echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
                   

.ow_anno {
	background:#DDDDAA url(img/ic_warning.png) no-repeat scroll 15px 45%;
	border:1px solid #CCCC99;
	padding:10px;
}

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_style(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('script', array()); $_block_repeat=true; echo smarty_block_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


document.vote = function (id, vote)
{
	$.ajax(
			{
				type: 'post',
				url: '<?php echo smarty_function_url_for(array('for'=>"LINKS_CTRL_List:vote:[]"),$_smarty_tpl);?>
',
				data: {itemId: id, vote: vote},
				dataType: 'json',
				success: function(json){
					if(typeof(json.isAuthenticated) != 'undefined' && json.isAuthenticated == false)
					{
						OW.info(json.msg);
						return;
					}
<?php if ($_smarty_tpl->tpl_vars['mode']->value=='detailed'){?>
					$('#lvru-'+id).empty().html(json.total.up);
					$('#lvrd-'+id).empty().html(json.total.down);

	<?php }else{ ?>

				$('#lvrt-'+id).empty().html(json.total.sum? json.total.sum : 0);

				<?php }?>


                switch(json.voteType)
                {
                    case "+1":
                        $('#vote-lbl-'+id).removeClass('ow_red');
                        $('#vote-lbl-'+id).addClass('ow_green');
                        $('#vote-lbl-'+id+'-container').show();
                        break;
                    case "-1":
                        $('#vote-lbl-'+id).removeClass('ow_green');
                        $('#vote-lbl-'+id).addClass('ow_red');
                        $('#vote-lbl-'+id+'-container').show();
                        break;
                    case 0:
                        $('#vote-lbl-'+id).removeClass('ow_green');
                        $('#vote-lbl-'+id).removeClass('ow_red');
                        $('#vote-lbl-'+id+'-container').hide();
                        return;
                        break;
                }
                $('#vote-lbl-'+id).html(json.voteType);
				}
			}
	);
}

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				<?php if ($_smarty_tpl->tpl_vars['isBrowseByTagCase']->value){?>
					<?php if ($_smarty_tpl->tpl_vars['tag']->value){?>
			         	<div class="ow_anno ow_stdmargin ow_center">
                            <?php echo smarty_function_text(array('key'=>"links+results_by_tag",'tag'=>$_smarty_tpl->tpl_vars['tag']->value),$_smarty_tpl);?>

						</div>
					<?php }else{ ?>
						<?php echo $_smarty_tpl->tpl_vars['tagCloud']->value;?>

					<?php }?>
				<?php }?>

				<?php  $_smarty_tpl->tpl_vars['link'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['link']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['link']->key => $_smarty_tpl->tpl_vars['link']->value){
$_smarty_tpl->tpl_vars['link']->_loop = true;
?>
					<?php $_smarty_tpl->tpl_vars['dto'] = new Smarty_variable($_smarty_tpl->tpl_vars['link']->value['dto'], null, 0);?>
					<?php $_smarty_tpl->tpl_vars['id'] = new Smarty_variable($_smarty_tpl->tpl_vars['dto']->value->getId(), null, 0);?>

                    <div class="ow_ivc_box ow_clearfix" id="link-item-<?php echo $_smarty_tpl->tpl_vars['dto']->value->id;?>
">

                        <div class="ow_ivc_voteupdown">
                            <div class="ow_highbox" style="width: 55px;">
						<?php if ($_smarty_tpl->tpl_vars['mode']->value!='sum'){?>

                        	<div class="ow_icon_control ow_ic_up_arrow" style="display: block; cursor: pointer; margin-bottom: 2px; margin-top: 2px;" onclick="vote(<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
, 'UP')">
                        		<span id="lvru-<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" style="color: #00AA00; font-weight: bold;"><?php if (isset($_smarty_tpl->tpl_vars['link']->value['up'])){?><?php echo $_smarty_tpl->tpl_vars['link']->value['up'];?>
<?php }else{ ?>0<?php }?></span>
                        	</div>

                        	<div class="ow_icon_control ow_ic_down_arrow" style="display: block; cursor: pointer; padding-bottom: 3px;" onclick="vote(<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
, 'DOWN')">
                        		<span id="lvrd-<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" style="color: #FF6666; font-weight: bold;"><?php if (isset($_smarty_tpl->tpl_vars['link']->value['down'])){?><?php echo $_smarty_tpl->tpl_vars['link']->value['down'];?>
<?php }else{ ?>0<?php }?></span>
                        	</div>

						<?php }else{ ?>
                        <div class="clearfix">
								<div style="float: left; width: 16px; height: 35px;">
									<div class="ow_icon_control ow_ic_up_arrow" style="min-width: 16px; min-height: 16px; cursor: pointer; margin-bottom: 3px; display: block; padding: 0px;" onclick="vote(<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
, 'UP')"></div>
	                        		<div class="ow_icon_control ow_ic_down_arrow" style="cursor: pointer; min-width: 16px; min-height: 16px; display: block; padding: 0px;" onclick="vote(<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
, 'DOWN')"></div>
								</div>
								<div style="float: left; padding: 7px 5px 0px 13px;" class="ow_txt_value" id="lvrt-<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
									<?php if (isset($_smarty_tpl->tpl_vars['link']->value['voteTotal'])){?><?php echo $_smarty_tpl->tpl_vars['link']->value['voteTotal'];?>
<?php }else{ ?>0<?php }?>
								</div>
                        </div>

						<?php }?>
                        </div>
                            <div id="vote-lbl-<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
-container" class="ow_tiny" style=" height: 20px; display:<?php if ($_smarty_tpl->tpl_vars['isAuthenticated']->value&&isset($_smarty_tpl->tpl_vars['userVotes']->value[$_smarty_tpl->tpl_vars['id']->value])){?>  block <?php }else{ ?> none <?php }?>" >
                                <span id="vote-lbl-<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" class="ow_lbutton <?php if (isset($_smarty_tpl->tpl_vars['userVotes']->value[$_smarty_tpl->tpl_vars['id']->value])){?> <?php if ($_smarty_tpl->tpl_vars['userVotes']->value[$_smarty_tpl->tpl_vars['id']->value]->vote<0){?> ow_red <?php }else{ ?> ow_green <?php }?> <?php }?>"><?php if (isset($_smarty_tpl->tpl_vars['userVotes']->value[$_smarty_tpl->tpl_vars['id']->value])){?><?php echo $_smarty_tpl->tpl_vars['userVotes']->value[$_smarty_tpl->tpl_vars['id']->value]->vote;?>
<?php }else{ ?>0<?php }?></span>
                                <span id="vote-cancel-lbl-<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" class="ow_lbutton" onclick="vote(<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
, 'CANCEL')"><?php echo smarty_function_text(array('key'=>'links+cancel_vote'),$_smarty_tpl);?>
</span>
                            </div>
                        </div>

                    </div>

                        <div class="ow_ivc_content">
                            <?php $_smarty_tpl->smarty->_tag_stack[] = array('block_decorator', array('name'=>"box",'type'=>"empty",'label'=>smarty_modifier_truncate($_smarty_tpl->tpl_vars['dto']->value->title,$_smarty_tpl->tpl_vars['titleLength']->value,'...'),'capAddClass'=>"ow_smallmargin",'iconClass'=>'ow_ic_link','href'=>((string)$_smarty_tpl->tpl_vars['dto']->value->url),'extraString'=>'target="_blank"','addClass'=>"ow_stdmargin",'toolbar'=>$_smarty_tpl->tpl_vars['tb']->value[$_smarty_tpl->tpl_vars['id']->value])); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>"box",'type'=>"empty",'label'=>smarty_modifier_truncate($_smarty_tpl->tpl_vars['dto']->value->title,$_smarty_tpl->tpl_vars['titleLength']->value,'...'),'capAddClass'=>"ow_smallmargin",'iconClass'=>'ow_ic_link','href'=>((string)$_smarty_tpl->tpl_vars['dto']->value->url),'extraString'=>'target="_blank"','addClass'=>"ow_stdmargin",'toolbar'=>$_smarty_tpl->tpl_vars['tb']->value[$_smarty_tpl->tpl_vars['id']->value]), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                            <?php $_smarty_tpl->tpl_vars['userId'] = new Smarty_variable($_smarty_tpl->tpl_vars['dto']->value->userId, null, 0);?>
	                            <div class="ow_smallmargin">
		            	        	<?php echo $_smarty_tpl->tpl_vars['dto']->value->description;?>

	                           	</div>
                        	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>"box",'type'=>"empty",'label'=>smarty_modifier_truncate($_smarty_tpl->tpl_vars['dto']->value->title,$_smarty_tpl->tpl_vars['titleLength']->value,'...'),'capAddClass'=>"ow_smallmargin",'iconClass'=>'ow_ic_link','href'=>((string)$_smarty_tpl->tpl_vars['dto']->value->url),'extraString'=>'target="_blank"','addClass'=>"ow_stdmargin",'toolbar'=>$_smarty_tpl->tpl_vars['tb']->value[$_smarty_tpl->tpl_vars['id']->value]), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                        </div>
	            <?php }
if (!$_smarty_tpl->tpl_vars['link']->_loop) {
?>
	            	<?php echo smarty_function_text(array('key'=>'base+empty_list'),$_smarty_tpl);?>

                <?php } ?>

                <?php if ($_smarty_tpl->tpl_vars['paging']->value){?><center><?php echo $_smarty_tpl->tpl_vars['paging']->value;?>
</center><?php }?>

                </div>

                <div class="ow_supernarrow ow_right">
                	<?php echo $_smarty_tpl->tpl_vars['tagSearch']->value;?>

		         	<?php if (count($_smarty_tpl->tpl_vars['list']->value)>0){?>
			         	<?php echo $_smarty_tpl->tpl_vars['tagCloud']->value;?>

		         	<?php }?>
                </div>
            </div>
<?php }} ?>