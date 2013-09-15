<?php
/*
$stageWith = 320;
$stageHeight = 480;

$imgWidth = 40;
$imgHeight = 80;

function getSizes( $stageWith, $stageHeight, $imgWidth, $imgHeight )
{
    $xRatio = $imgHeight / $imgWidth;
    $yRatio = $imgWidth / $imgHeight;

    if ( $imgWidth > $stageWith )
    {
        $width = $stageWith;
        $height = $stageWith * $xRatio;
        if ( $height > $stageHeight )
        {
            $height = $stageHeight;
            $width = $stageHeight * $yRatio;
        }
    }
    else if ( $imgHeight > $stageHeight )
    {
        $height = $stageHeight;
        $width = $stageHeight * $yRatio;
    }
    else
    {
        $width = $imgWidth;
        $height = $imgHeight;
    }

    $top = ($stageHeight - $height) / 2;
    $left = ($stageWith - $width) / 2;
}

getSizes($stageWith, $stageHeight, $imgWidth, $imgHeight);*/

/**
 * This software is intended for use with Oxwall Free Community Software http://www.oxwall.org/ and is
 * licensed under The BSD license.

 * ---
 * Copyright (c) 2011, Oxwall Foundation
 * All rights reserved.

 * Redistribution and use in source and binary forms, with or without modification, are permitted provided that the
 * following conditions are met:
 *
 *  - Redistributions of source code must retain the above copyright notice, this list of conditions and
 *  the following disclaimer.
 *
 *  - Redistributions in binary form must reproduce the above copyright notice, this list of conditions and
 *  the following disclaimer in the documentation and/or other materials provided with the distribution.
 *
 *  - Neither the name of the Oxwall Foundation nor the names of its contributors may be used to endorse or promote products
 *  derived from this software without specific prior written permission.

 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES,
 * INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR
 * PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT,
 * INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO,
 * PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED
 * AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE)
 * ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 */
$plugin = OW::getPluginManager()->getPlugin('photo');

OW::getRouter()->addRoute(new OW_Route('view_photo_list', 'photo/viewlist/:listType/', 'PHOTO_CTRL_Photo', 'viewList', array('listType' => array('default' => 'latest'))));
OW::getRouter()->addRoute(new OW_Route('photo_list_index', 'photo/', 'PHOTO_CTRL_Photo', 'viewList'));
OW::getRouter()->addRoute(new OW_Route('view_tagged_photo_list_st', 'photo/viewlist/tagged/', 'PHOTO_CTRL_Photo', 'viewTaggedList'));
OW::getRouter()->addRoute(new OW_Route('view_tagged_photo_list', 'photo/viewlist/tagged/:tag', 'PHOTO_CTRL_Photo', 'viewTaggedList'));
OW::getRouter()->addRoute(new OW_Route('view_photo', 'photo/view/:id/', 'PHOTO_CTRL_Photo', 'view'));
OW::getRouter()->addRoute(new OW_Route('photo_admin_config', 'admin/photo', 'PHOTO_CTRL_Admin', 'index'));
OW::getRouter()->addRoute(new OW_Route('photo_uninstall', 'admin/photo/uninstall', 'PHOTO_CTRL_Admin', 'uninstall'));
OW::getRouter()->addRoute(new OW_Route('photo_user_albums', 'photo/useralbums/:user/', 'PHOTO_CTRL_Photo', 'userAlbums'));
OW::getRouter()->addRoute(new OW_Route('photo_user_album', 'photo/useralbum/:user/:album', 'PHOTO_CTRL_Photo', 'userAlbum'));
OW::getRouter()->addRoute(new OW_Route('photo.floatbox', 'photo/ajax/get-floatbox/', 'PHOTO_CTRL_Photo', 'getFloatbox'));
OW::getRouter()->addRoute(new OW_Route('photo.ajax_submit', 'photo/ajax/submit/', 'PHOTO_CTRL_Upload', 'ajaxSubmitPhotos'));
OW::getRouter()->addRoute(new OW_Route('photo.ajax_delete', 'photo/ajax/delete/', 'PHOTO_CTRL_Upload', 'ajaxDeletePhoto'));
OW::getRouter()->addRoute(new OW_Route('photo.flash_upload', 'photo/upload/flash', 'PHOTO_CTRL_Upload', 'flashUpload'));
OW::getRouter()->addRoute(new OW_Route('photo_upload', 'photo/upload', 'PHOTO_CTRL_Upload', 'index'));
OW::getRouter()->addRoute(new OW_Route('photo_upload_album', 'photo/upload/:album', 'PHOTO_CTRL_Upload', 'index'));
OW::getRouter()->addRoute(new OW_Route('photo_upload_submit', 'photo/submit', 'PHOTO_CTRL_Upload', 'submit'));
OW::getRouter()->addRoute(new OW_Route('photo_upload_submit_album', 'photo/submit/:album',  'PHOTO_CTRL_Upload', 'submit'));

OW::getThemeManager()->addDecorator('photo_list_item', $plugin->getKey());

function photo_elst_add_new_content_item( BASE_CLASS_EventCollector $event )
{
    if ( !OW::getUser()->isAuthorized('photo', 'upload') )
    {
        return;
    }

    $resultArray = array(
        BASE_CMP_AddNewContent::DATA_KEY_ICON_CLASS => 'ow_ic_picture',
        BASE_CMP_AddNewContent::DATA_KEY_URL => OW::getRouter()->urlFor('PHOTO_CTRL_Upload', 'index'),
        BASE_CMP_AddNewContent::DATA_KEY_LABEL => OW::getLanguage()->text('photo', 'photo')
    );

    $event->add($resultArray);
}

OW::getEventManager()->bind(BASE_CMP_AddNewContent::EVENT_NAME, 'photo_elst_add_new_content_item');


function photo_quick_links( BASE_CLASS_EventCollector $event )
{
    $service = PHOTO_BOL_PhotoAlbumService::getInstance();
    $userId = OW::getUser()->getId();
    $username = OW::getUser()->getUserObject()->getUsername();

    $albumCount = (int) $service->countUserAlbums($userId);

    if ( $albumCount > 0 )
    {
        $event->add(array(
            BASE_CMP_QuickLinksWidget::DATA_KEY_LABEL => OW::getLanguage()->text('photo', 'my_albums'),
            BASE_CMP_QuickLinksWidget::DATA_KEY_URL => OW::getRouter()->urlForRoute('photo_user_albums', array('user' => $username)),
            BASE_CMP_QuickLinksWidget::DATA_KEY_COUNT => $albumCount,
            BASE_CMP_QuickLinksWidget::DATA_KEY_COUNT_URL => OW::getRouter()->urlForRoute('photo_user_albums', array('user' => $username))
        ));
    }
}
OW::getEventManager()->bind(BASE_CMP_QuickLinksWidget::EVENT_NAME, 'photo_quick_links');


function photo_delete_user_content( OW_Event $event )
{
    $params = $event->getParams();

    if ( !isset($params['deleteContent']) || !(bool) $params['deleteContent'] )
    {
        return;
    }

    $userId = (int) $params['userId'];

    if ( $userId > 0 )
    {
        PHOTO_BOL_PhotoAlbumService::getInstance()->deleteUserAlbums($userId);
    }
}
OW::getEventManager()->bind(OW_EventManager::ON_USER_UNREGISTER, 'photo_delete_user_content');

function photo_on_notify_actions( BASE_CLASS_EventCollector $e )
{
    $e->add(array(
        'section' => 'photo',
        'action' => 'photo-add_comment',
        'sectionIcon' => 'ow_ic_picture',
        'sectionLabel' => OW::getLanguage()->text('photo', 'email_notifications_section_label'),
        'description' => OW::getLanguage()->text('photo', 'email_notifications_setting_comment'),
        'selected' => true
    ));
}
OW::getEventManager()->bind('notifications.collect_actions', 'photo_on_notify_actions');

function photo_add_comment_notification( OW_Event $event )
{
    $params = $event->getParams();

    if ( empty($params['entityType']) || $params['entityType'] !== 'photo_comments' )
    {
        return;
    }

    $entityId = $params['entityId'];
    $userId = $params['userId'];
    $commentId = $params['commentId'];

    $photoService = PHOTO_BOL_PhotoService::getInstance();
    $userService = BOL_UserService::getInstance();

    $photo = $photoService->findPhotoById($entityId);
    $ownerId = $photoService->findPhotoOwner($entityId);

    if ( $ownerId != $userId )
    {
    	$params = array(
            'pluginKey' => 'photo',
            'entityType' => 'photo_add_comment',
            'entityId' => $commentId,
            'action' => 'photo-add_comment',
            'userId' => $ownerId,
            'time' => time()
        );

        $comment = BOL_CommentService::getInstance()->findComment($commentId);
        $url = OW::getRouter()->urlForRoute('view_photo', array('id' => $entityId));
        $avatars = BOL_AvatarService::getInstance()->getDataForUserAvatars(array($userId));

        $data = array(
            'avatar' => $avatars[$userId],
            'string' => array(
                'key' => 'photo+email_notifications_comment',
                'vars' => array(
                    'userName' => $userService->getDisplayName($userId),
                    'userUrl' => $userService->getUserUrl($userId),
                    'photoUrl' => $url
                )
            ),
            'content' => $comment->getMessage(),
            'url' => $url,
            'contentImage' => $photoService->getPhotoUrl($entityId, true)
        );

        $event = new OW_Event('notifications.add', $params, $data);
        OW::getEventManager()->trigger($event);
    }
}
OW::getEventManager()->bind('base_add_comment', 'photo_add_comment_notification');

function photo_feed_entity_add( OW_Event $e )
{
    $params = $e->getParams();
    $data = $e->getData();

    if ( $params['entityType'] != 'photo_comments' )
    {
        return;
    }

    $photoService = PHOTO_BOL_PhotoService::getInstance();
    $photo = $photoService->findPhotoById($params['entityId']);
    $album = PHOTO_BOL_PhotoAlbumService::getInstance()->findAlbumById($photo->albumId);

    $url = OW::getRouter()->urlForRoute('view_photo', array('id' => $photo->id));

    $title = UTIL_String::truncate(strip_tags($photo->description), 100, '...');

    $data = array(
        'time' => $photo->addDatetime,
        'ownerId' => $album->userId,
        'string' => $title,
        'content' => '<div class="ow_newsfeed_large_image clearfix"><div class="ow_newsfeed_item_picture"><a href="' . $url . '"><img src="' . $photoService->getPhotoUrl($photo->id, 1) . '" /></a></div></div>',
        'view' => array(
            'iconClass' => 'ow_ic_picture'
        )
    );

    $e->setData($data);
}

OW::getEventManager()->bind('feed.on_entity_add', 'photo_feed_entity_add');

function photo_feed_on_item_render( OW_Event $event )
{
    $params = $event->getParams();
    $data = $event->getData();

    $entityType = $params['action']['entityType'];
    $photoId = $params['action']['entityId'];
    $autoId = $params['autoId'];

    switch ( $entityType )
    {
        case 'photo_comments':
            $query = '.ow_newsfeed_item_picture a';
            $reference = 'var photo_id = ' . $photoId .';';
            break;

        case 'multiple_photo_upload':
            $query = '.ow_newsfeed_content a[class!=photo_view_more]';
            $reference = 'var href = $(this).attr("href");
                var pos = href.lastIndexOf("/");
                var photo_id = href.substring(pos+1);';
            break;

        default: return;
    }

    OW::getDocument()->addScript(OW::getPluginManager()->getPlugin('base')->getStaticJsUrl().'jquery.bbq.min.js');
    OW::getDocument()->addScript(OW::getPluginManager()->getPlugin('photo')->getStaticJsUrl() . 'photo.js');

    OW::getLanguage()->addKeyForJs('photo', 'tb_edit_photo');
    OW::getLanguage()->addKeyForJs('photo', 'confirm_delete');
    OW::getLanguage()->addKeyForJs('photo', 'mark_featured');
    OW::getLanguage()->addKeyForJs('photo', 'remove_from_featured');

    $objParams = array(
        'ajaxResponder' => OW::getRouter()->urlFor('PHOTO_CTRL_Photo', 'ajaxResponder'),
        'fbResponder' => OW::getRouter()->urlForRoute('photo.floatbox')
    );

    $script = '$("'.$query.'", "#'.$autoId.'").on("click", function(e){
        e.preventDefault();
        '.$reference.'

        if ( !window.photoViewObj ) {
            window.photoViewObj = new photoView('.json_encode($objParams).');
        }

        window.photoViewObj.setId(photo_id);
    });
    ';

    OW::getDocument()->addOnloadScript($script);

    $script =
    'if ( !window.photoPollingEnabled )
    {
	    $(window).bind( "hashchange", function(e) {
	        var photo_id = $.bbq.getState("view-photo");
	        if ( photo_id != undefined )
	        {
	            if ( window.photoFBLoading ) { return; }
	            window.photoViewObj.showPhotoCmp(photo_id);
	        }
	    });
	    window.photoPollingEnabled = true;
	}';

    OW::getDocument()->addOnloadScript($script);
}

OW::getEventManager()->bind('feed.on_item_render', 'photo_feed_on_item_render');

function photo_hash_redirect()
{
    $script = 'var lochash = document.location.hash.substr(1);
    if ( lochash )
    {
        var photo_id = lochash.substr(lochash.indexOf("view-photo=")).split("&")[0].split("=")[1];
        if ( photo_id )
        {
            document.location = '.json_encode(OW::getRouter()->urlForRoute('view_photo', array('id' => ''))).' + photo_id;
        }
    }';

    OW::getDocument()->addScriptDeclarationBeforeIncludes($script);
}

OW::getEventManager()->bind(OW_EventManager::ON_FINALIZE, 'photo_hash_redirect');

function photo_ads_enabled( BASE_EventCollector $event )
{
    $event->add('photo');
}

OW::getEventManager()->bind('ads.enabled_plugins', 'photo_ads_enabled');


$credits = new PHOTO_CLASS_Credits();
OW::getEventManager()->bind('usercredits.on_action_collect', array($credits, 'bindCreditActionsCollect'));

function photo_add_auth_labels( BASE_CLASS_EventCollector $event )
{
    $language = OW::getLanguage();
    $event->add(
        array(
            'photo' => array(
                'label' => $language->text('photo', 'auth_group_label'),
                'actions' => array(
                    'upload' => $language->text('photo', 'auth_action_label_upload'),
                    'view' => $language->text('photo', 'auth_action_label_view'),
                    'add_comment' => $language->text('photo', 'auth_action_label_add_comment'),
                    'delete_comment_by_content_owner' => $language->text('photo', 'auth_action_label_delete_comment_by_content_owner')
                )
            )
        )
    );
}

OW::getEventManager()->bind('admin.add_auth_labels', 'photo_add_auth_labels');


function photo_privacy_add_action( BASE_CLASS_EventCollector $event )
{
    $language = OW::getLanguage();

    $action = array(
        'key' => 'photo_view_album',
        'pluginKey' => 'photo',
        'label' => $language->text('photo', 'privacy_action_view_album'),
        'description' => '',
        'defaultValue' => 'everybody'
    );

    $event->add($action);
}

OW::getEventManager()->bind('plugin.privacy.get_action_list', 'photo_privacy_add_action');


function photo_on_change_privacy( OW_Event $e )
{
    $params = $e->getParams();
    $userId = (int) $params['userId'];

    $actionList = $params['actionList'];

    if ( empty($actionList['photo_view_album']) )
    {
        return;
    }

    PHOTO_BOL_PhotoAlbumService::getInstance()->updatePhotosPrivacy($userId, $actionList['photo_view_album']);
}

OW::getEventManager()->bind('plugin.privacy.on_change_action_privacy', 'photo_on_change_privacy');

function photo_feed_collect_configurable_activity( BASE_CLASS_EventCollector $event )
{
    $language = OW::getLanguage();
    $event->add(array(
        'label' => $language->text('photo', 'feed_content_label'),
        'activity' => array('*:photo_comments', '*:multiple_photo_upload')
    ));
}

OW::getEventManager()->bind('feed.collect_configurable_activity', 'photo_feed_collect_configurable_activity');

function photo_feed_collect_privacy( BASE_CLASS_EventCollector $event )
{
    $event->add(array('create:photo_comments,create:multiple_photo_upload', 'photo_view_album'));
}

OW::getEventManager()->bind('feed.collect_privacy', 'photo_feed_collect_privacy');

function photo_feed_photo_comment( OW_Event $event )
{
    $params = $event->getParams();

    if ( $params['entityType'] != 'photo_comments' )
    {
        return;
    }

    $service = PHOTO_BOL_PhotoService::getInstance();
    $photo = $service->findPhotoById($params['entityId']);
    $album = PHOTO_BOL_PhotoAlbumService::getInstance()->findAlbumById($photo->albumId);
    $userId = $album->userId;

    if ( $userId == $params['userId'] )
    {
        $string = OW::getLanguage()->text('photo', 'feed_activity_owner_photo_string');
    }
    else
    {
        $userName = BOL_UserService::getInstance()->getDisplayName($userId);
        $userUrl = BOL_UserService::getInstance()->getUserUrl($userId);
        $userEmbed = '<a href="' . $userUrl . '">' . $userName . '</a>';
        $string = OW::getLanguage()->text('photo', 'feed_activity_photo_string', array('user' => $userEmbed));
    }

    OW::getEventManager()->trigger(new OW_Event('feed.activity', array(
        'activityType' => 'comment',
        'activityId' => $params['commentId'],
        'entityId' => $params['entityId'],
        'entityType' => $params['entityType'],
        'userId' => $params['userId'],
        'pluginKey' => 'photo'
    ), array(
        'string' => $string
    )));
}
OW::getEventManager()->bind('feed.after_comment_add', 'photo_feed_photo_comment');

function photo_feed_photo_like( OW_Event $event )
{
    $params = $event->getParams();

    if ( $params['entityType'] != 'photo_comments' )
    {
        return;
    }

    $service = PHOTO_BOL_PhotoService::getInstance();
    $photo = $service->findPhotoById($params['entityId']);
    $album = PHOTO_BOL_PhotoAlbumService::getInstance()->findAlbumById($photo->albumId);
    $userId = $album->userId;

    $userName = BOL_UserService::getInstance()->getDisplayName($userId);
    $userUrl = BOL_UserService::getInstance()->getUserUrl($userId);
    $userEmbed = '<a href="' . $userUrl . '">' . $userName . '</a>';

    $lang = OW::getLanguage();
    if ( $params['userId'] == $userId )
    {
        $string = $lang->text('photo', 'feed_activity_owner_photo_like');
    }
    else
    {
        $string = $lang->text('photo', 'feed_activity_photo_string_like', array('user' => $userEmbed));
    }

    OW::getEventManager()->trigger(new OW_Event('feed.activity', array(
        'activityType' => 'like',
        'activityId' => $params['userId'],
        'entityId' => $params['entityId'],
        'entityType' => $params['entityType'],
        'userId' => $params['userId'],
        'pluginKey' => 'photo'
    ), array(
        'string' => $string
    )));
}
OW::getEventManager()->bind('feed.after_like_added', 'photo_feed_photo_like');