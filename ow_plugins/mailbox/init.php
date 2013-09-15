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
/**
 * @author Podyachev Evgeny <joker.OW2@gmail.com>
 * @package ow_plugins.mailbox
 * @since 1.0
 */
$plugin = OW::getPluginManager()->getPlugin('mailbox');

$classesToAutoload = array(
    'AddMessageForm' => $plugin->getRootDir() . 'classes' . DS . 'add_message_form.php',
    'MailboxResponder' => $plugin->getRootDir() . 'classes' . DS . 'mailbox_responder.php',
    'CreateConversationForm' => $plugin->getRootDir() . 'classes' . DS . 'create_conversation_form.php',
);

OW::getAutoloader()->addClassArray($classesToAutoload);

OW::getRouter()->addRoute(new OW_Route('mailbox_default', 'mailbox', 'MAILBOX_CTRL_Mailbox', 'inbox'));
OW::getRouter()->addRoute(new OW_Route('mailbox_inbox', 'mailbox/inbox', 'MAILBOX_CTRL_Mailbox', 'inbox'));
OW::getRouter()->addRoute(new OW_Route('mailbox_sent', 'mailbox/sent', 'MAILBOX_CTRL_Mailbox', 'sent'));
OW::getRouter()->addRoute(new OW_Route('mailbox_conversation', 'mailbox/conversation/:conversationId/', 'MAILBOX_CTRL_Mailbox', 'conversation'));
OW::getRouter()->addRoute(new OW_Route('mailbox_file_upload', 'mailbox/conversation/:entityId/:formElement', 'MAILBOX_CTRL_Mailbox', 'fileUpload'));
OW::getRouter()->addRoute(new OW_Route('mailbox_admin_config', 'admin/plugins/mailbox', 'MAILBOX_CTRL_Admin', 'index'));

function mailbox_send_private_message_action_tool( BASE_CLASS_EventCollector $event )
{
    $params = $event->getParams();

    if ( empty($params['userId']) )
    {
        return;
    }

    $userId = (int) $params['userId'];

    if ( OW::getUser()->getId() == $userId )
    {
        return;
    }

    if ( !OW::getUser()->isAuthorized('mailbox', 'send_message') )
    {
        return;
    }

    if ( BOL_UserService::getInstance()->isBlocked(OW::getUser()->getId(), $userId) )
    {
        $linkId = 'mb' . rand(10, 1000000);
        $script = "\$('#" . $linkId . "').click(function(){

            window.OW.error('".OW::getLanguage()->text('base', 'user_block_message')."');

        });";

        OW::getDocument()->addOnloadScript($script);
    }
    else
    {
        $linkId = 'mb' . rand(10, 1000000);
        $script = "\$('#" . $linkId . "').click(function(){
            \$form = $('#create-conversation-div').children();

            window.mailbox_send_message_floatbox = new OW_FloatBox({
                \$title: '" . OW::getLanguage()->text('mailbox', 'compose_message') . "',
                \$contents: \$form,
                'width': '480px',
                'class': 'ow_ic_add'
            });

            window.mailbox_send_message_floatbox.bind('show', function()
            {
                var textarea = \$form.find('textarea[name=message]').get(0);
                textarea.htmlarea();
                textarea.htmlareaRefresh();
            });
        });";

        OW::getDocument()->addOnloadScript($script);
    }


    $resultArray = array(
        BASE_CMP_ProfileActionToolbar::DATA_KEY_LABEL => OW::getLanguage()->text('mailbox', 'create_conversation_button'),
        BASE_CMP_ProfileActionToolbar::DATA_KEY_CMP_CLASS => 'MAILBOX_CMP_CreateConversation',
        BASE_CMP_ProfileActionToolbar::DATA_KEY_LINK_HREF => 'javascript://',
        BASE_CMP_ProfileActionToolbar::DATA_KEY_LINK_ID => $linkId
    );

    $event->add($resultArray);
}
OW::getEventManager()->bind(BASE_CMP_ProfileActionToolbar::EVENT_NAME, 'mailbox_send_private_message_action_tool');

OW::getEventManager()->bind(OW_EventManager::ON_USER_UNREGISTER, array(MAILBOX_BOL_ConversationService::getInstance(), 'deleteUserContent'));

function mailbox_on_notify_actions( BASE_CLASS_EventCollector $e )
{
    $e->add(array(
        'section' => 'mailbox',
        'action' => 'mailbox-new_message',
        'sectionIcon' => 'ow_ic_mail',
        'sectionLabel' => OW::getLanguage()->text('mailbox', 'email_notifications_section_label'),
        'description' => OW::getLanguage()->text('mailbox', 'email_notifications_new_message'),
        'selected' => true
    ));
}
OW::getEventManager()->bind('notifications.collect_actions', 'mailbox_on_notify_actions');

function mailbox_on_send_message( OW_Event $e )
{
    $params = $e->getParams();

    /*$event = new OW_Event('base.notify', array(
            'plugin' => 'mailbox',
            'action' => 'mailbox-new_message',
            'userId' => $params['recipientId'],
            'string' => OW::getLanguage()->text('mailbox', 'email_notifications_comment', array(
                'userName' => BOL_UserService::getInstance()->getDisplayName($params['senderId']),
                'userUrl' => BOL_UserService::getInstance()->getUserUrl($params['senderId']),
                'conversationUrl' => MAILBOX_BOL_ConversationService::getInstance()->getConversationUrl($params['conversationId'])
            )),
            'content' => $params['message'],
            'time' => time(),
            'url' => MAILBOX_BOL_ConversationService::getInstance()->getConversationUrl($params['conversationId']),
            'avatar' => BOL_AvatarService::getInstance()->getagetAvatarUrl($params['senderId'])
        ));*/

//    $avatars = BOL_AvatarService::getInstance()->getDataForUserAvatars(array( $params['senderId'] ) );
//    $avatar = $avatars[$params['senderId']];

    /* $event = new OW_Event('notifications.add', array(
        'pluginKey' => 'mailbox',
        'entityType' => 'mailbox-new_message',
        'entityId' => $params['conversationId'],
        'action' => 'mailbox-new_message',
        'userId' => $params['recipientId'],
        'time' => time()
    ), array(
        'avatar' => $avatar,
        'string' => OW::getLanguage()->text('mailbox', 'email_notifications_comment', array(
                'userName' => BOL_UserService::getInstance()->getDisplayName($params['senderId']),
                'userUrl' => BOL_UserService::getInstance()->getUserUrl($params['senderId']),
                'conversationUrl' => MAILBOX_BOL_ConversationService::getInstance()->getConversationUrl($params['conversationId'])
            )),
        'content' => $params['message'],
        'url' => MAILBOX_BOL_ConversationService::getInstance()->getConversationUrl($params['conversationId']),
        'contentImage' => $avatar
    )); */



//    OW::getEventManager()->trigger($event);

    OW::getCacheManager()->clean( array( MAILBOX_BOL_ConversationDao::CACHE_TAG_USER_CONVERSATION_COUNT . $params['senderId'] ));
    OW::getCacheManager()->clean( array( MAILBOX_BOL_ConversationDao::CACHE_TAG_USER_CONVERSATION_COUNT . $params['recipientId'] ));
}
OW::getEventManager()->bind('mailbox.send_message', 'mailbox_on_send_message');

function mailbox_on_avatar_toolbar_collect( BASE_CLASS_EventCollector $e )
{
    $e->add(array(
        'title' => OW::getLanguage()->text('mailbox', 'mailbox'),
        'iconClass' => 'ow_ic_mail',
        'url' => OW::getRouter()->urlForRoute('mailbox_default'),
        'order' => 2
    ));
}
OW::getEventManager()->bind('base.on_avatar_toolbar_collect', 'mailbox_on_avatar_toolbar_collect');

function mailbox_ads_enabled( BASE_EventCollector $event )
{
    $event->add('mailbox');
}
OW::getEventManager()->bind('ads.enabled_plugins', 'mailbox_ads_enabled');

function mailbox_add_auth_labels( BASE_CLASS_EventCollector $event )
{
    $language = OW::getLanguage();
    $event->add(
        array(
            'mailbox' => array(
                'label' => $language->text('mailbox', 'auth_group_label'),
                'actions' => array(
                    'read_message' => $language->text('mailbox', 'auth_action_label_read_message'),
                    'send_message' => $language->text('mailbox', 'auth_action_label_send_message'),
                )
            )
        )
    );
}
OW::getEventManager()->bind('admin.add_auth_labels', 'mailbox_add_auth_labels');


$credits = new MAILBOX_CLASS_Credits();
OW::getEventManager()->bind('usercredits.on_action_collect', array($credits, 'bindCreditActionsCollect'));

function mailbox_mark_conversation( OW_Event $event )
{
    $params = $event->getParams();
    $userId = (int)$params['userId'];

    OW::getCacheManager()->clean( array( MAILBOX_BOL_ConversationDao::CACHE_TAG_USER_NEW_CONVERSATION_COUNT . ($userId) ));
    //OW::getCacheManager()->clean( array( MAILBOX_BOL_ConversationDao::CACHE_TAG_USER_CONVERSATION_COUNT . ($userId) ));
}
OW::getEventManager()->bind(MAILBOX_BOL_ConversationService::EVENT_MARK_CONVERSATION, 'mailbox_mark_conversation');

function mailbox_delete_conversation( OW_Event $event )
{
    $params = $event->getParams();
    $dto = $params['conversationDto'];
    /* @var $dto MAILBOX_BOL_Conversation */
    if ( $dto )
    {
        OW::getCacheManager()->clean( array( MAILBOX_BOL_ConversationDao::CACHE_TAG_USER_CONVERSATION_COUNT . ($dto->initiatorId) ));
        OW::getCacheManager()->clean( array( MAILBOX_BOL_ConversationDao::CACHE_TAG_USER_CONVERSATION_COUNT . ($dto->interlocutorId) ));
    }
}
OW::getEventManager()->bind(MAILBOX_BOL_ConversationService::EVENT_DELETE_CONVERSATION, 'mailbox_delete_conversation');

if ( OW::getPluginManager()->getPlugin('mailbox')->getDto()->build >= 5236 )
{
    MAILBOX_CLASS_RequestEventHandler::getInstance()->init();
}

function mailbox_console_send_list( BASE_CLASS_EventCollector $event )
{
    $params = $event->getParams();
    $userIdList = $params['userIdList'];

    $conversationListByUserId = MAILBOX_BOL_ConversationService::getInstance()->getConversationListForConsoleNotificationMailer($userIdList);

    $conversationIdList = array();

    foreach ( $conversationListByUserId as $recipientId => $conversationList )
    {
        foreach ( $conversationList as $conversation )
        {
            $conversationIdList[$conversation['id']] = $conversation['id'];
        }
    }

    $result = MAILBOX_BOL_ConversationService::getInstance()->getConversationListByIdList($conversationIdList);
    $conversationList = array();

    foreach( $result as $conversation )
    {
        $conversationList[$conversation->id] = $conversation;
    }

    foreach ( $conversationListByUserId as $recipientId => $list )
    {
        foreach ( $list as $conversation )
        {
            $senderId = ($conversation['initiatorId'] == $recipientId) ? $conversation['interlocutorId'] : $conversation['initiatorId'];

            $avatars = BOL_AvatarService::getInstance()->getDataForUserAvatars(array( $senderId ) );
            $avatar = $avatars[$senderId];

            $event->add(array(
                'pluginKey' => 'mailbox',
                'entityType' => 'mailbox-conversation',
                'entityId' => $conversation['id'],
                'userId' => $recipientId,
                'action' => 'mailbox-new_message',
                'time' => $conversation['timeStamp'],

                'data' => array(
                    'avatar' => $avatar,
                    'string' => OW::getLanguage()->text('mailbox', 'email_notifications_comment', array(
                            'userName' => BOL_UserService::getInstance()->getDisplayName($senderId),
                            'userUrl' => BOL_UserService::getInstance()->getUserUrl($senderId),
                            'conversationUrl' => MAILBOX_BOL_ConversationService::getInstance()->getConversationUrl($conversation['id'])
                        )),
                   'content' => $conversation['text']
                )                
            ));

            if( !empty($conversationList[$conversation['id']]) )
            {
                $conversationList[$conversation['id']]->notificationSent = 1;
                MAILBOX_BOL_ConversationService::getInstance()->saveConversation($conversationList[$conversation['id']]);
            }
        }
    }
}
OW::getEventManager()->bind('notifications.send_list', 'mailbox_console_send_list');

/* public function sendList( BASE_CLASS_EventCollector $event )
{notifications.send_list
    $params = $event->getParams();
    $userIdList = $params['userIdList'];

    $notifications = $this->service->findInvitationList($userId, $beforeStamp, $ignoreIds, $count);

    foreach ( $notifications as $notification )
    {
        $event->add(array(
            'pluginKey' => $notification->pluginKey,
            'entityType' => $notification->entityType,
            'entityId' => $notification->entityId,
            'userId' => $notification->userId,
            'action' => $notification->action,
            'time' => $notification->timeStamp,

            'data' => $notification->getData()
        ));
    }
} */

