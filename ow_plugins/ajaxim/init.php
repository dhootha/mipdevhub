<?php

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

function ajaxim_plugin_init()
{
    $handlerAttributes = OW::getRequestHandler()->getHandlerAttributes();
    if ($handlerAttributes['controller'] == 'BASE_CTRL_MediaPanel')
    {
        return;
    }

    if ( !OW::getUser()->isAuthenticated() )
    {
        return;
    }
    else
    {
        if ( !BOL_UserService::getInstance()->isApproved() )
        {
            return;
        }

        $user = BOL_UserService::getInstance()->findUserById(OW::getUser()->getId());

        if (BOL_UserService::getInstance()->isSuspended($user->getId()))
        {
            return;
        }

        if ( (int) $user->emailVerify === 0 && OW::getConfig()->getValue('base', 'confirm_email') )
        {
            return;
        }

        if (!OW::getAuthorization()->isUserAuthorized($user->getId(), 'ajaxim', 'chat'))
        {
            return;
        }
    }

    $im_toolbar = new AJAXIM_CMP_Toolbar();
    OW::getDocument()->appendBody($im_toolbar->render());
}
OW::getEventManager()->bind(OW_EventManager::ON_FINALIZE, 'ajaxim_plugin_init');

function ajaxim_add_auth_labels( BASE_CLASS_EventCollector $event )
{
    $language = OW::getLanguage();
    $event->add(
        array(
            'ajaxim' => array(
                'label' => $language->text('ajaxim', 'auth_group_label'),
                'actions' => array(
                    'chat' => $language->text('ajaxim', 'auth_action_label_chat')
                )
            )
        )
    );
}
OW::getEventManager()->bind('admin.add_auth_labels', 'ajaxim_add_auth_labels');


function ajaxim_privacy_add_action( BASE_CLASS_EventCollector $event )
{
    $language = OW::getLanguage();

    $action = array(
        'key' => 'ajaxim_invite_to_chat',
        'pluginKey' => 'ajaxim',
        'label' => $language->text('ajaxim', 'privacy_action_invite_to_chat'),
        'description' => '',
        'defaultValue' => 'everybody'
    );
    $event->add($action);
}
OW::getEventManager()->bind('plugin.privacy.get_action_list', 'ajaxim_privacy_add_action');

function ajaxim_online_now_button( OW_Event $event )
{
    $params = $event->getParams();

    if (empty($params['userId']))
        return false;

    if ( !OW::getAuthorization()->isUserAuthorized($params['userId'], 'ajaxim', 'chat') )
    {
        return false;
    }

    if ( !OW::getAuthorization()->isUserAuthorized($params['onlineUserId'], 'ajaxim', 'chat') )
    {
        return false;
    }

    if ( BOL_UserService::getInstance()->isBlocked($params['userId'], $params['onlineUserId']) )
    {
        return false;
    }

    $isFriendsOnlyMode = (bool)OW::getEventManager()->call('plugin.friends');
    if ($isFriendsOnlyMode)
    {
        $friendship = OW::getEventManager()->call('plugin.friends.check_friendship', array('userId' => OW::getUser()->getId(), 'friendId' => $params['onlineUserId']));
        if ( empty($friendship) )
        {
            return false;
        }
        else if ( $friendship->getStatus() != 'active' )
        {
            return false;
        }
    }

    $eventParams = array(
        'action' => 'ajaxim_invite_to_chat',
        'ownerId' => $params['onlineUserId'],
        'viewerId' => OW::getUser()->getId()
    );

    try
    {
        OW::getEventManager()->getInstance()->call('privacy_check_permission', $eventParams);
    }
    catch ( RedirectException $e )
    {

        return false;
    }

    return true;
}
OW::getEventManager()->bind('base.online_now_click', 'ajaxim_online_now_button');


function ajaxim_ping( OW_Event $event )
{
    $eventParams = $event->getParams();
    $params = $eventParams['params'];

    if ($eventParams['command'] != 'ajaxim_ping')
    {
        return;
    }

    $service = AJAXIM_BOL_Service::getInstance();

    if ( empty($_SESSION['lastRequestTimestamp']) )
    {
        $_SESSION['lastRequestTimestamp'] = (int)$params['lastRequestTimestamp'];
    }

    if ( ((int)$params['lastRequestTimestamp'] - (int) $_SESSION['lastRequestTimestamp']) < 3 )
    {
       $event->setData(array('error'=>"Too much requests"));
    }

    $_SESSION['lastRequestTimestamp'] = (int)$params['lastRequestTimestamp'];


    if ( !OW::getUser()->isAuthenticated() )
    {
        $event->setData(array('error'=>"You have to sign in"));
    }

    if ( !OW::getRequest()->isAjax() )
    {
        $event->setData(array('error'=>"Ajax request required"));
    }

    $onlinePeople = AJAXIM_BOL_Service::getInstance()->getOnlinePeople(OW::getUser());

    if ( !empty($params['lastMessageTimestamps']) )
    {
        $clientOnlineList = array_keys($params['lastMessageTimestamps']);
    }
    else
    {
        $clientOnlineList = array();
    }

    $onlineInfo = array();
    /* @var $user BOL_User */
    foreach ( $onlinePeople['users'] as $user )
    {
        if ( !OW::getAuthorization()->isUserAuthorized($user->getId(), 'ajaxim', 'chat') && !OW::getAuthorization()->isUserAuthorized($user->getId(), 'ajaxim') )
        {
            $onlinePeople['count']--;
            continue;
        }

        if ( !in_array($user->getId(), $clientOnlineList) )
        {
            $friendship = OW::getEventManager()->call('plugin.friends.check_friendship', array('userId' => OW::getUser()->getId(), 'friendId' => $user->getId()));
            $roster = $service->getUserInfoByNode($user, $friendship);
            $roster['show'] = 'chat';
            $roster['status'] = 'online';
            $presence = array(
                'node'=>$user->getId(),
                'data'=>$roster
            );
            $onlineInfo[] = $presence;
        }
    }

    /* @var $user BOL_User */
    foreach ( $clientOnlineList as $userId )
    {
        if ( !array_key_exists($userId, $onlinePeople['users']) )
        {
            $presence = array(
                'node'=>$userId,
                'data'=>array('status'=>'offline')
            );
            $onlineInfo[] = $presence;
        }
    }

    switch ( $params['action'] )
    {
        case "get":
            $response = array();
            if ( !empty($onlineInfo) )
            {
                $response['presenceList'] = $onlineInfo;
            }

            if ( $onlinePeople['count'] != $params['onlineCount'] )
            {
                $response['onlineCount'] = $onlinePeople['count'];
            }

            if ( !empty($params['lastMessageTimestamps']) )
            {
                $messageList = AJAXIM_BOL_Service::getInstance()->findUnreadMessages(OW::getUser(), $params['lastMessageTimestamps']);
                if ( !empty($messageList) )
                {
                    $response['messageList'] = $messageList;
                    $response['messageListLength'] = count($messageList);
                }
            }

            $event->setData($response);
            break;
    }
}
OW::getEventManager()->bind('base.ping', 'ajaxim_ping');
