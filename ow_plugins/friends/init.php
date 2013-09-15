<?php

/**
 * This software is intended for use with Oxwall Free Community Software http://www.oxwall.org/ and is
 * licensed under The BSD license.

 * ---
 * Copyright (c) 2009, Skalfa LLC
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
OW::getRouter()->addRoute(new OW_Route('friends_list', 'friends', 'FRIENDS_CTRL_List', 'index', array('list' => array(OW_Route::PARAM_OPTION_HIDDEN_VAR => 'friends'))));
OW::getRouter()->addRoute(new OW_Route('friends_lists', 'friends/:list', 'FRIENDS_CTRL_List', 'index'));
OW::getRouter()->addRoute(new OW_Route('friends_user_friends', 'friends/user/:user', 'FRIENDS_CTRL_List', 'index', array('list' => array(OW_Route::PARAM_OPTION_HIDDEN_VAR => 'user-friends'))));

/**
 * Prepeare actions for tool on the profile view page
 *
 * @param BASE_CLASS_EventCollector $event
 */
function friends_user_action_tool( BASE_CLASS_EventCollector $event )
{
    $params = $event->getParams();

    if ( empty($params['userId']) )
    {
        return;
    }

    $userId = (int) $params['userId'];

    if ( !OW::getUser()->isAuthenticated() || OW::getUser()->getId() == $userId || !OW::getUser()->isAuthorized('friends', 'add_friend') )
    {
        return;
    }

    $service = FRIENDS_BOL_Service::getInstance();
    $language = OW::getLanguage();
    $router = OW::getRouter();
    $dto = $service->findFriendship($userId, OW::getUser()->getId());
    $linkId = 'friendship' . rand(10, 1000000);
    if ( $dto === null )
    {
        if ( BOL_UserService::getInstance()->isBlocked(OW::getUser()->getId(), $userId) )
        {
            $script = "\$('#" . $linkId . "').click(function(){

            window.OW.error('" . OW::getLanguage()->text('base', 'user_block_message') . "');

        });";

            OW::getDocument()->addOnloadScript($script);
            $href = 'javascript://';
        }
        else
        {
            $href = $router->urlFor('FRIENDS_CTRL_Action', 'request', array('id' => $userId));
        }

        $label = OW::getLanguage()->text('friends', 'add_to_friends');
    }
    else
    {
        switch ( $dto->getStatus() )
        {
            case FRIENDS_BOL_Service::STATUS_ACTIVE:
                $label = $language->text('friends', 'remove_from_friends');
                $href = $router->urlFor('FRIENDS_CTRL_Action', 'cancel', array('id' => $userId, 'redirect'=>true));
                break;

            case FRIENDS_BOL_Service::STATUS_PENDING:

                if ( $dto->getUserId() == OW::getUser()->getId() )
                {
                    $label = $language->text('friends', 'remove_from_friends');
                    $href = $router->urlFor('FRIENDS_CTRL_Action', 'cancel', array('id' => $userId, 'redirect'=>true));
                }
                else
                {
                    $label = $language->text('friends', 'add_to_friends');
                    $href = $router->urlFor('FRIENDS_CTRL_Action', 'accept', array('id' => $userId));
                }
                break;

            case FRIENDS_BOL_Service::STATUS_IGNORED:

                if ( $dto->getUserId() == OW::getUser()->getId() )
                {
                    $label = $language->text('friends', 'remove_from_friends');
                    $href = $router->urlFor('FRIENDS_CTRL_Action', 'cancel', array('id' => $userId));
                }
                else
                {
                    $label = $language->text('friends', 'add_to_friends');
                    $href = $router->urlFor('FRIENDS_CTRL_Action', 'activate', array('id' => $userId));
                }
        }
    }

    $resultArray = array(
        BASE_CMP_ProfileActionToolbar::DATA_KEY_LABEL => $label,
        BASE_CMP_ProfileActionToolbar::DATA_KEY_LINK_HREF => $href,
        BASE_CMP_ProfileActionToolbar::DATA_KEY_LINK_ID => $linkId
    );

    $event->add($resultArray);
}
OW::getEventManager()->bind(BASE_CMP_ProfileActionToolbar::EVENT_NAME, 'friends_user_action_tool');

function friends_on_user_delete( OW_Event $event )
{
    $params = $event->getParams();

    $userId = $params['userId'];

    $service = FRIENDS_BOL_Service::getInstance();
    $service->deleteUserFriendships($userId);
}
OW::getEventManager()->bind(OW_EventManager::ON_USER_UNREGISTER, 'friends_on_user_delete');

//---
function friends_on_notify_actions( BASE_CLASS_EventCollector $e )
{
    $sectionLabel = OW::getLanguage()->text('friends', 'notification_section_label');

    $e->add(array(
        'section' => 'friends',
        'action' => 'friends-request',
        'description' => OW::getLanguage()->text('friends', 'email_notifications_setting_request'),
        'selected' => true,
        'sectionLabel' => $sectionLabel,
        'sectionIcon' => 'ow_ic_write'
    ));

    $e->add(array(
        'section' => 'friends',
        'action' => 'friends-accept',
        'description' => OW::getLanguage()->text('friends', 'email_notifications_setting_accept'),
        'selected' => true,
        'sectionLabel' => $sectionLabel,
        'sectionIcon' => 'ow_ic_write'
    ));
}
OW::getEventManager()->bind('notifications.collect_actions', 'friends_on_notify_actions');

//~~


function friends_ads_enabled( BASE_EventCollector $event )
{
    $event->add('friends');
}
OW::getEventManager()->bind('ads.enabled_plugins', 'friends_ads_enabled');

function friends_plugin_is_active()
{
    return true;
}
OW::getEventManager()->bind('plugin.friends', 'friends_plugin_is_active');

function friends_get_friend_list( OW_Event $event )
{
    $params = $event->getParams();

    if ( !empty($params['userId']) )
    {
        $userId = (int) $params['userId'];
    }
    else
    {
        return null;
    }

    $first = 0;

    if ( !empty($params['first']) )
    {
        $first = (int) $params['first'];
    }

    $count = 1000;

    if ( !empty($params['count']) )
    {
        $count = (int) $params['count'];
    }

    $paramsUserIdList = null;

    if ( !empty($params['idList']) && is_array($params['idList']) )
    {
        $paramsUserIdList = $params['idList'];
    }

    return FRIENDS_BOL_Service::getInstance()->findUserFriendsInList($userId, $first, $count, $paramsUserIdList);
}
OW::getEventManager()->bind('plugin.friends.get_friend_list', 'friends_get_friend_list');

function friends_check_friendship( OW_Event $event )
{
    $params = $event->getParams();

    if ( empty($params['userId']) || empty($params['friendId']) )
    {
        return null;
    }

    return FRIENDS_BOL_Service::getInstance()->findFriendship((int) $params['userId'], (int) $params['friendId']);
}
OW::getEventManager()->bind('plugin.friends.check_friendship', 'friends_check_friendship');

function friends_count_friends( OW_Event $event )
{
    $params = $event->getParams();

    if ( !empty($params['userId']) )
    {
        $userId = (int) $params['userId'];
    }
    else
    {
        return null;
    }

    $paramsUserIdList = null;

    if ( !empty($params['idList']) && is_array($params['idList']) )
    {
        $paramsUserIdList = $params['idList'];
    }

    return FRIENDS_BOL_Service::getInstance()->findCountOfUserFriendsInList($userId, $paramsUserIdList);
}
OW::getEventManager()->bind('plugin.friends.count_friends', 'friends_count_friends');

function friends_find_all_active_friendships( OW_Event $event )
{
    $params = $event->getParams();

    return FRIENDS_BOL_Service::getInstance()->findAllActiveFriendships();
}
OW::getEventManager()->bind('plugin.friends.find_all_active_friendships', 'friends_find_all_active_friendships');

function friends_find_active_friendships( OW_Event $event )
{
    $params = $event->getParams();

    if ( !isset($params['first']) || !isset($params['count']) )
    {
        return null;
    }

    return FRIENDS_BOL_Service::getInstance()->findActiveFriendships((int) $params['first'], (int) $params['count']);
}
OW::getEventManager()->bind('plugin.friends.find_active_friendships', 'friends_find_active_friendships');

function friends_feed_collect_follow( BASE_CLASS_EventCollector $e )
{
    $friends = FRIENDS_BOL_Service::getInstance()->findAllActiveFriendships();
    foreach ( $friends as $item )
    {
        $e->add(array(
            'feedType' => 'user',
            'feedId' => $item->getUserId(),
            'userId' => $item->getFriendId(),
            'permission' => 'friends_only'
        ));

        $e->add(array(
            'feedType' => 'user',
            'feedId' => $item->getFriendId(),
            'userId' => $item->getUserId(),
            'permission' => 'friends_only'
        ));
    }
}
OW::getEventManager()->bind('feed.collect_follow', 'friends_feed_collect_follow');


$credits = new FRIENDS_CLASS_Credits();
OW::getEventManager()->bind('usercredits.on_action_collect', array($credits, 'bindCreditActionsCollect'));

function friends_add_auth_labels( BASE_CLASS_EventCollector $event )
{
    $language = OW::getLanguage();
    $event->add(
        array(
            'friends' => array(
                'label' => $language->text('friends', 'auth_group_label'),
                'actions' => array(
                    'add_friend' => $language->text('friends', 'auth_action_label_add_friend')
                )
            )
        )
    );
}
OW::getEventManager()->bind('admin.add_auth_labels', 'friends_add_auth_labels');

function friends_add_privacy( BASE_CLASS_EventCollector $event )
{
    $language = OW::getLanguage();
    $params = $event->getParams();

    $event->add(array(
        'key' => 'friends_only',
        'label' => $language->text('friends', 'privacy_friends_only'),
        'sortOrder' => 2
    ));
}
OW::getEventManager()->bind('plugin.privacy.get_privacy_list', 'friends_add_privacy');

function friends_permission_friends_only( BASE_CLASS_EventCollector $event )
{
    $params = $event->getParams();

    if ( !empty($params['privacy']) && $params['privacy'] == 'friends_only' )
    {
        $ownerId = (int) $params['ownerId'];
        if ( !empty($ownerId) )
        {
            $viewerId = (int) $params['viewerId'];

            $privacy = array(
                'friends_only' => array(
                    'blocked' => true,
                ));

            $friendship = FRIENDS_BOL_Service::getInstance()->findFriendship($ownerId, $viewerId);

            if ( $ownerId > 0 && $viewerId > 0 && ( (!empty($friendship) && $friendship->getStatus() == 'active' ) || $ownerId === $viewerId ) )
            {
                $privacy = array(
                    'friends_only' => array(
                        'blocked' => false
                    ));
            }

            $event->add($privacy);
        }
    }

    if ( !empty($params['userPrivacyList']) )
    {

        $viewerId = (int) $params['viewerId'];
        $list = $params['userPrivacyList'];

        $resultList = array();
        $ownerIdLIst = array();

        foreach ( $list as $ownerId => $privacy )
        {
            if ( $privacy == 'friends_only' )
            {
                $ownerIdLIst[] = $ownerId;
            }
        }

        $friendList = FRIENDS_BOL_Service::getInstance()->findFriendIdList($viewerId, 0, 10000, $ownerIdLIst);

        foreach ( $list as $ownerId => $privacy )
        {
            if ( $privacy == 'friends_only' )
            {
                $privacy = array(
                    'privacy' => $privacy,
                    'blocked' => true,
                    'userId' => $ownerId
                );

                if ( $ownerId > 0 && $viewerId > 0 && !empty($friendList) && is_array($friendList) && in_array($ownerId, $friendList) || $ownerId === $viewerId )
                {
                    $privacy = array(
                        'privacy' => $privacy,
                        'blocked' => false,
                        'userId' => $ownerId
                    );
                }

                $event->add($privacy);
            }
        }
        $event->add($resultList);
    }
}
OW::getEventManager()->bind('plugin.privacy.check_permission', 'friends_permission_friends_only');

function friends_on_request_accept( OW_Event $e )
{
    $params = $e->getParams();
    $recipientId = $params['recipientId'];
    $senderId = $params['senderId'];

    $eventParams = array(
        'userId' => $recipientId,
        'feedType' => 'user',
        'feedId' => $senderId
    );
    OW::getEventManager()->trigger(new OW_Event('feed.add_follow', $eventParams));

    $eventParams = array(
        'userId' => $senderId,
        'feedType' => 'user',
        'feedId' => $recipientId
    );
    OW::getEventManager()->trigger(new OW_Event('feed.add_follow', $eventParams));
}
OW::getEventManager()->bind('friends.request-accepted', 'friends_on_request_accept');

function friends_on_request_sent( OW_Event $e )
{
    $params = $e->getParams();
    $recipientId = $params['recipientId'];
    $senderId = $params['senderId'];

    $eventParams = array(
        'userId' => $senderId,
        'feedType' => 'user',
        'feedId' => $recipientId
    );
    OW::getEventManager()->trigger(new OW_Event('feed.add_follow', $eventParams));
}
OW::getEventManager()->bind('friends.request-sent', 'friends_on_request_sent');

function friends_on_cancel( OW_Event $e )
{
    $params = $e->getParams();
    $recipientId = $params['recipientId'];
    $senderId = $params['senderId'];

    $service = FRIENDS_BOL_Service::getInstance();
    $service->cancel($recipientId, $senderId);

    $eventParams = array(
        'userId' => $recipientId,
        'feedType' => 'user',
        'feedId' => $senderId
    );
    OW::getEventManager()->trigger(new OW_Event('feed.remove_follow', $eventParams));

    $eventParams = array(
        'userId' => $senderId,
        'feedType' => 'user',
        'feedId' => $recipientId
    );
    OW::getEventManager()->trigger(new OW_Event('feed.remove_follow', $eventParams));
}
OW::getEventManager()->bind('friends.cancelled', 'friends_on_cancel');

function friends_on_user_block( OW_Event $e )
{
    $params = $e->getParams();

    $event = new OW_Event('friends.cancelled', array(
            'senderId' => $params['userId'],
            'recipientId' => $params['blockedUserId']
        ));

    OW::getEventManager()->trigger($event);
}
OW::getEventManager()->bind(OW_EventManager::ON_USER_BLOCK, 'friends_on_user_block');

function friends_feed_collect_follow_permissions( BASE_CLASS_EventCollector $e )
{
    $params = $e->getParams();

    if ( $params['feedType'] != 'user' )
    {
        return;
    }

    $dto = FRIENDS_BOL_Service::getInstance()->findFriendship($params['feedId'], $params['userId']);
    if ( $dto === null || $dto->status != 'active' )
    {
        return;
    }

    $e->add('friends_only');
}
OW::getEventManager()->bind('feed.collect_follow_permissions', 'friends_feed_collect_follow_permissions');

function friends_privacy_add_action( BASE_CLASS_EventCollector $event )
{
    $language = OW::getLanguage();

    $action = array(
        'key' => 'friends_view',
        'pluginKey' => 'friends',
        'label' => $language->text('friends', 'privacy_action_view_friends'),
        'description' => '',
        'defaultValue' => 'everybody'
    );

    $event->add($action);
}
OW::getEventManager()->bind('plugin.privacy.get_action_list', 'friends_privacy_add_action');

function friends_feed_collect_privacy( BASE_CLASS_EventCollector $event )
{
    $event->add(array('create:friend_add', 'friends_view'));
}
OW::getEventManager()->bind('feed.collect_privacy', 'friends_feed_collect_privacy');

function friends_feed_collect_configurable_activity( BASE_CLASS_EventCollector $event )
{
    $language = OW::getLanguage();
    $event->add(array(
        'label' => $language->text('friends', 'feed_content_label'),
        'activity' => '*:friend_add'
    ));
}
OW::getEventManager()->bind('feed.collect_configurable_activity', 'friends_feed_collect_configurable_activity');

function friends_quick_links( BASE_CLASS_EventCollector $event )
{
    /* @var $service PostService */
    $service = FRIENDS_BOL_Service::getInstance();
    $userId = OW::getUser()->getId();

    $count = (int) $service->countFriends($userId);
    $activeCount = (int) $service->count(null, $userId, FRIENDS_BOL_Service::STATUS_PENDING);

    if ($count == 0 && $activeCount == 0)
    {
        return;
    }

    $event->add(array(
        BASE_CMP_QuickLinksWidget::DATA_KEY_LABEL => OW::getLanguage()->text('friends', 'widget_title'),
        BASE_CMP_QuickLinksWidget::DATA_KEY_URL => OW::getRouter()->urlForRoute('friends_list'),
        BASE_CMP_QuickLinksWidget::DATA_KEY_COUNT => $count,
        BASE_CMP_QuickLinksWidget::DATA_KEY_COUNT_URL => OW::getRouter()->urlForRoute('friends_list'),
        BASE_CMP_QuickLinksWidget::DATA_KEY_ACTIVE_COUNT => $activeCount,
        BASE_CMP_QuickLinksWidget::DATA_KEY_ACTIVE_COUNT_URL => OW::getRouter()->urlForRoute('friends_lists', array('list' => 'got-requests'))
    ));
}
OW::getEventManager()->bind(BASE_CMP_QuickLinksWidget::EVENT_NAME, 'friends_quick_links');

function friends_feed_comment_add( OW_Event $event )
{
    $params = $event->getParams();

    if ( $params['entityType'] != 'friend_add' )
    {
        return;
    }

    $friendship = FRIENDS_BOL_Service::getInstance()->findFriendshipById($params['entityId']);

    if ( empty($friendship) )
    {
        return;
    }

    $userName1 = BOL_UserService::getInstance()->getDisplayName($friendship->userId);
    $userUrl1 = BOL_UserService::getInstance()->getUserUrl($friendship->userId);
    $userEmbed1 = '<a href="' . $userUrl1 . '">' . $userName1 . '</a>';

    $userName2 = BOL_UserService::getInstance()->getDisplayName($friendship->friendId);
    $userUrl2 = BOL_UserService::getInstance()->getUserUrl($friendship->friendId);
    $userEmbed2 = '<a href="' . $userUrl2 . '">' . $userName2 . '</a>';

    $string = OW::getLanguage()->text('friends', 'comment_activity_string', array('user1' => $userEmbed1, 'user2' => $userEmbed2));

    OW::getEventManager()->trigger(new OW_Event('feed.activity', array(
            'activityType' => 'comment',
            'activityId' => $params['commentId'],
            'entityId' => $params['entityId'],
            'entityType' => 'friend_add',
            'userId' => $params['userId'],
            'pluginKey' => 'friends'
            ), array(
            'string' => $string,
            'line' => ''
        )));
}
OW::getEventManager()->bind('feed.after_comment_add', 'friends_feed_comment_add');

function friends_feed_like_add( OW_Event $event )
{
    $params = $event->getParams();

    if ( $params['entityType'] != 'friend_add' )
    {
        return;
    }

    $friendship = FRIENDS_BOL_Service::getInstance()->findFriendshipById($params['entityId']);

    if ( empty($friendship) )
    {
        return;
    }

    $userName1 = BOL_UserService::getInstance()->getDisplayName($friendship->userId);
    $userUrl1 = BOL_UserService::getInstance()->getUserUrl($friendship->userId);
    $userEmbed1 = '<a href="' . $userUrl1 . '">' . $userName1 . '</a>';

    $userName2 = BOL_UserService::getInstance()->getDisplayName($friendship->friendId);
    $userUrl2 = BOL_UserService::getInstance()->getUserUrl($friendship->friendId);
    $userEmbed2 = '<a href="' . $userUrl2 . '">' . $userName2 . '</a>';

    $string = OW::getLanguage()->text('friends', 'like_activity_string', array('user1' => $userEmbed1, 'user2' => $userEmbed2));

    OW::getEventManager()->trigger(new OW_Event('feed.activity', array(
            'activityType' => 'like',
            'activityId' => $params['userId'],
            'entityId' => $params['entityId'],
            'entityType' => 'friend_add',
            'userId' => $params['userId'],
            'pluginKey' => 'friends'
            ), array(
            'string' => $string,
            'line' => ''
        )));
}
OW::getEventManager()->bind('feed.after_like_added', 'friends_feed_like_add');

function friends_on_avatar_change( OW_Event $event )
{
    $params = $event->getParams();

    if ( $params['entityType'] != 'avatar-change' )
    {
        return;
    }

    $list = FRIENDS_BOL_Service::getInstance()->findFriendshipListByUserId($params['userId']);

    foreach ( $list as $frendshipDto )
    {
        $getPermalinkEvent = new OW_Event('feed.get_item_permalink', array('entityType' => 'friend_add', 'entityId' => $frendshipDto->id));
        OW::getEventManager()->trigger($getPermalinkEvent);

        if ( $getPermalinkEvent->getData() == null )
        {
            continue;
        }

        $names = BOL_UserService::getInstance()->getDisplayNamesForList(array($frendshipDto->userId, $frendshipDto->friendId));
        $unames = BOL_UserService::getInstance()->getUserNamesForList(array($frendshipDto->userId, $frendshipDto->friendId));
        $avatars = BOL_AvatarService::getInstance()->getAvatarsUrlList(array($frendshipDto->userId, $frendshipDto->friendId));
        $uUrls = BOL_UserService::getInstance()->getUserUrlsForList(array($frendshipDto->userId, $frendshipDto->friendId));

        //Add Newsfeed activity action
        $event = new OW_Event('feed.action', array(
                'pluginKey' => 'friends',
                'entityType' => 'friend_add',
                'entityId' => $frendshipDto->id,
                'userId' => array($frendshipDto->friendId, $frendshipDto->userId),
                'feedType' => 'user',
                'feedId' => $frendshipDto->userId
                ), array(
                'line' => OW::getLanguage()->text('friends', 'activity_title', array(
                    'user_url' => $uUrls[$frendshipDto->friendId],
                    'name' => $names[$frendshipDto->friendId],
                    'requester_url' => $uUrls[$frendshipDto->userId],
                    'requester_name' => $names[$frendshipDto->userId]
                )),
                'content' => '<a href="' . $uUrls[$frendshipDto->friendId] . '"><img title="' . $names[$frendshipDto->friendId] . '" src="' . $avatars[$frendshipDto->friendId] . '" /></a>&nbsp
                <a href="' . $uUrls[$frendshipDto->userId] . '"><img title="' . $names[$frendshipDto->userId] . '" src="' . $avatars[$frendshipDto->userId] . '" /></a>'
            ));
        OW::getEventManager()->trigger($event);
    }
}
OW::getEventManager()->bind('feed.action', 'friends_on_avatar_change');

function friends_add_friend( OW_Event $event )
{
    $params = $event->getParams();

    if ( empty($params['requesterId']) || empty($params['userId']) )
    {
        return;
    }

    $requesterId = $params['requesterId'];
    $userId = $params['userId'];

    $service = FRIENDS_BOL_Service::getInstance();

    $frendshipDto = $service->findFriendship($requesterId, $userId);

    if ( !empty($frendshipDto) )
    {
        return;
    }

    $service->request($requesterId, $userId);

    $event = new OW_Event('friends.request-sent', array(
            'senderId' => $requesterId,
            'recipientId' => $userId,
            'time' => time()
        ));

    OW::getEventManager()->trigger($event);

    $frendshipDto = $service->accept($userId, $requesterId);

    if ( empty($frendshipDto) )
    {
        return;
    }

    $se = BOL_UserService::getInstance();

    $names = $se->getDisplayNamesForList(array($requesterId, $userId));
    $unames = $se->getUserNamesForList(array($requesterId, $userId));
    $avatars = BOL_AvatarService::getInstance()->getAvatarsUrlList(array($requesterId, $userId));
    $uUrls = $se->getUserUrlsForList(array($requesterId, $userId));

    //Add Newsfeed activity action
    $event = new OW_Event('feed.action', array(
            'pluginKey' => 'friends',
            'entityType' => 'friend_add',
            'entityId' => $frendshipDto->id,
            'userId' => array($userId, $requesterId),
            'feedType' => 'user',
            'feedId' => $requesterId
            ), array(
            'line' => OW::getLanguage()->text('friends', 'activity_title', array(
                'user_url' => $uUrls[$userId],
                'name' => $names[$userId],
                'requester_url' => $uUrls[$requesterId],
                'requester_name' => $names[$requesterId]
            )),
            'content' => '<a href="' . $uUrls[$userId] . '"><img title="' . $names[$userId] . '" src="' . $avatars[$userId] . '" /></a>&nbsp
                <a href="' . $uUrls[$requesterId] . '"><img title="' . $names[$requesterId] . '" src="' . $avatars[$requesterId] . '" /></a>'
        ));
    OW::getEventManager()->trigger($event);


    $event = new OW_Event('friends.request-accepted', array(
            'senderId' => $requesterId,
            'recipientId' => OW::getUser()->getId(),
            'time' => time()
        ));

    OW::getEventManager()->trigger($event);
}
OW::getEventManager()->bind('friends.add_friend', 'friends_add_friend');

function base_clear_query_cache_on_user_event( OW_Event $event )
{
    OW::getCacheManager()->clean( array( FRIENDS_BOL_FriendshipDao::CACHE_TAG_FRIENDS_COUNT, FRIENDS_BOL_FriendshipDao::CACHE_TAG_FRIEND_ID_LIST ));
}

OW::getEventManager()->bind(OW_EventManager::ON_USER_UNREGISTER,  'base_clear_query_cache_on_user_event');
OW::getEventManager()->bind(OW_EventManager::ON_USER_SUSPEND,     'base_clear_query_cache_on_user_event');
OW::getEventManager()->bind(OW_EventManager::ON_USER_UNSUSPEND,   'base_clear_query_cache_on_user_event');
OW::getEventManager()->bind(OW_EventManager::ON_USER_APPROVE,     'base_clear_query_cache_on_user_event');
OW::getEventManager()->bind(OW_EventManager::ON_USER_DISAPPROVE,  'base_clear_query_cache_on_user_event');

if ( OW::getPluginManager()->getPlugin('friends')->getDto()->build >= 5836 )
{
    FRIENDS_CLASS_RequestEventHandler::getInstance()->init();
}

function friends_console_send_list( BASE_CLASS_EventCollector $event )
{
    $params = $event->getParams();
    $userIdList = $params['userIdList'];

    $unreadFriendRequests = FRIENDS_BOL_Service::getInstance()->getUnreadFriendRequestsForUserIdList($userIdList);

    /**
     * @var FRIENDS_BOL_Friendship $friendship
     */
    foreach ( $unreadFriendRequests as $id => $friendship )
    {
        $avatars = BOL_AvatarService::getInstance()->getDataForUserAvatars(array( $friendship->userId ) );
        $avatar = $avatars[$friendship->userId];

        $event->add(array(
            'pluginKey' => 'friends',
            'entityType' => 'friends-request',
            'entityId' => $friendship->id,
            'userId' => $friendship->friendId,
            'action' => 'friends-request',
            'time' => $friendship->timeStamp,

            'data' => array(
                'avatar' => $avatar,
                'string' => OW::getLanguage()->text('friends', 'notify_request_string', array(
                        'displayName' => BOL_UserService::getInstance()->getDisplayName($friendship->userId),
                        'userUrl' => BOL_UserService::getInstance()->getUserUrl($friendship->userId),
                        'url' => OW::getRouter()->urlForRoute('friends_lists', array('list'=>'got-requests'))
                    )))
        ));

        $unreadFriendRequests[$id]->notificationSent = 1;
        FRIENDS_BOL_Service::getInstance()->saveFriendship($unreadFriendRequests[$id]);
    }
}
OW::getEventManager()->bind('notifications.send_list', 'friends_console_send_list');