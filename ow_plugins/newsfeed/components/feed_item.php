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
 * Feed Item component
 *
 * @author Sergey Kambalin <greyexpert@gmail.com>
 * @package ow_plugins.newsfeed.components
 * @since 1.0
 */
class NEWSFEED_CMP_FeedItem extends OW_Component
{
    /**
     *
     * @var NEWSFEED_CLASS_Action
     */
    private $action;
    private $autoId;
    private $displayType;

    private $remove = false;

    private $sharedData = array();

    public function __construct( NEWSFEED_CLASS_Action $action, $sharedData )
    {
        parent::__construct();

        $this->displayType = NEWSFEED_CMP_Feed::DISPLAY_TYPE_ACTION;
        $this->action = $action;
        $this->sharedData = $sharedData;

        $this->autoId = 'action-' . $this->sharedData['feedAutoId'] . '-' . $action->getId();
    }

    public function setDisplayType( $type )
    {
        $this->displayType = $type;
    }

    private function mergeData( $data, NEWSFEED_CLASS_Action $_action )
    {
        $data = empty($data) ? array() : $data;

        $action = array(
            'userId' => $_action->getUserId(),
            'createTime' => $_action->getCreateTime(),
            'entityType' => $_action->getEntity()->type,
            'entityId' => $_action->getEntity()->id,
            'pluginKey' => $_action->getPluginKey()
        );

        $view = array( 'iconClass' => 'ow_ic_add', 'class' => '', 'style' => '' );
        $defaults = array(
            'line' => null, 'string' => null, 'content' => null, 'toolbar' => array(), 'context' => array(),
            'features' => array( 'comments', 'likes' ), 'contextMenu' => array()
        );

        foreach ( $defaults as $key => $value )
        {
            if ( !isset($data[$key]) )
            {
                $data[$key] = $value;
            }
        }

        if ( !isset($data['view']) || !is_array($data['view']) )
        {
            $data['view'] = array();
        }

        $data['view'] = array_merge($view, $data['view']);

        if ( !isset($data['action']) || !is_array($data['action']) )
        {
            $data['action'] = array();
        }

        $data['action'] = array_merge($action, $data['action']);

        return $data;
    }

    private function getActionData( NEWSFEED_CLASS_Action $action )
    {
        $activity = array();
        $createActivity = null;
        $lastActivity = null;

        foreach ( $action->getActivityList() as $a )
        {
            /* @var $a NEWSFEED_BOL_Activity */

            $activity[$a->id] = array(
                'activityType' => $a->activityType,
                'activityId' => $a->activityId,
                'id' => $a->id,
                'data' => json_decode($a->data, true),
                'timeStamp' => $a->timeStamp,
                'privacy' => $a->privacy,
                'userId' => $a->userId,
                'visibility' =>$a->visibility
            );

            if ( $createActivity === null && $a->activityType == NEWSFEED_BOL_Service::SYSTEM_ACTIVITY_CREATE )
            {
                $createActivity = $activity[$a->id];
            }

            if ( $lastActivity === null && !in_array($activity[$a->id]['activityType'], NEWSFEED_BOL_Service::getInstance()->SYSTEM_ACTIVITIES) )
            {
                $lastActivity = $activity[$a->id];
            }
        }

        $data = $this->mergeData($action->getData(), $action);

        $eventParams = array(
            'action' => array(
                'id' => $action->getId(),
                'entityType' => $action->getEntity()->type,
                'entityId' => $action->getEntity()->id,
                'pluginKey' => $action->getPluginKey(),
                'createTime' => $action->getCreateTime(),
                'userId' => $action->getUserId(),
                'data' => $data
            ),

            'activity' => $activity,
            'createActivity' => $createActivity,
            'lastActivity' => $lastActivity,
            'feedType' => $this->sharedData['feedType'],
            'feedId' => $this->sharedData['feedId'],
            'feedAutoId' => $this->sharedData['feedAutoId'],
            'autoId' => $this->autoId
        );

        $override = $this->displayType == NEWSFEED_CMP_Feed::DISPLAY_TYPE_ACTIVITY && $lastActivity !== null;

        /* TODO: Hot Fix - require refactoring in the future*/
        $override = $override && ( !empty($lastActivity['data']['string']) || !empty($lastActivity['data']['line']) );

        $data['action'] = array(
            'userId' => $action->getUserId(),
            'createTime' => $action->getCreateTime()
        );

        if ( $override )
        {
            $actionOverride = $lastActivity['data'];

            $data['action'] = array(
                'userId' => $lastActivity['userId'],
                'createTime' => empty($actionOverride['timeStamp'])
                    ? $lastActivity['timeStamp']
                    : $actionOverride['timeStamp']
            );

            if ( !empty($actionOverride['params']) )
            {
                $actionOverride['action'] = $actionOverride['params'];
                unset($actionOverride['params']);
            }

            foreach ( $actionOverride as $key => $value )
            {
                if ( $key == 'view' )
                {
                    if ( is_array($value) )
                    {
                        $data[$key] = array_merge($data[$key], $value);
                    }
                }
                else
                {
                    $data[$key] = $value;
                }
            }
        }

        $event = new OW_Event('feed.on_item_render', $eventParams, $data);
        OW::getEventManager()->trigger($event);

        return $this->mergeData( $event->getData(), $action );
    }



    public function generateJs( $data )
    {
        $js = UTIL_JsGenerator::composeJsString('
            window.ow_newsfeed_feed_list[{$feedAutoId}].actions[{$uniq}] = new NEWSFEED_FeedItem({$autoId}, window.ow_newsfeed_feed_list[{$feedAutoId}]);
            window.ow_newsfeed_feed_list[{$feedAutoId}].actions[{$uniq}].construct({$data});
        ', array(
            'uniq' => $data['entityType'] . '.' . $data['entityId'],
            'feedAutoId' => $this->sharedData['feedAutoId'],
            'autoId' => $this->autoId,
            'id' => $this->action->getId(),
            'data' => array(
                'entityType' => $data['entityType'],
                'entityId' => $data['entityId'],
                'id' => $data['id'],
                'updateStamp' => $this->action->getUpdateTime(),
                'likes' => !empty($data['features']['system']['likes']) ? $data['features']['system']['likes']['count'] : 0,
                'comments' => !empty($data['features']['system']['comments']) ? $data['features']['system']['comments']['count'] : 0,
                'cycle' => $data['cycle'],
                'displayType' => $this->displayType
            )
        ));

        OW::getDocument()->addOnloadScript($js, 50);
    }

    private function processAssigns( $content, $assigns )
    {
        $search = array();
        $values = array();

        foreach ( $assigns as $key => $item )
        {
            $search[] = '[ph:' . $key . ']';
            $values[] = $item;
        }

        $result = str_replace($search, $values, $content);
        $result = preg_replace('/\[ph\:\w+\]/', '', $result);

        return $result;
    }

    private function applyTemplates( $var )
    {
        if ( !is_array($var) )
        {
            return $var;
        }

        if ( !empty($var['templateFile']) )
        {
            $tplFile = $var['templateFile'];
        }
        else if ( !empty($var['template']) )
        {
            $tplFile = OW::getPluginManager()->getPlugin('newsfeed')->getViewDir() . 'templates' . DS . trim($var['template']) . '.html';
        }
        else
        {
            return '';
        }

        $template = new NEWSFEED_CMP_Template();
        $template->setTemplate($tplFile);

        $vars = empty($var['vars']) || !is_array($var['vars']) ? array() : $var['vars'];
        foreach ( $vars as $k => $v )
        {
            $template->assign($k, $v);
        }

        return $template->render();
    }

    private function getUserInfo( $userId, $data )
    {
        if ( !empty($data['action']['avatar']) )
        {
            return $data['action']['avatar'];
        }

        $usersInfo = $this->sharedData['usersInfo'];

        if ( !in_array($userId, $this->sharedData['usersIdList']) )
        {
            $userInfo = BOL_AvatarService::getInstance()->getDataForUserAvatars(array($userId));

            $usersInfo['avatars'][$userId] = $userInfo[$userId]['src'];
            $usersInfo['urls'][$userId] = $userInfo[$userId]['url'];
            $usersInfo['names'][$userId] = $userInfo[$userId]['title'];
            $usersInfo['roleLabels'][$userId] = array(
                'label' => $userInfo[$userId]['label'],
                'labelColor' => $userInfo[$userId]['labelColor']
            );
        }

        $user = array(
            'id' => $userId,
            'avatarUrl' => $usersInfo['avatars'][$userId],
            'url' => $usersInfo['urls'][$userId],
            'name' => $usersInfo['names'][$userId],
            'roleLabel' => empty($usersInfo['roleLabels'][$userId])
                ? array('label' => '', 'labelColor' => '')
                : $usersInfo['roleLabels'][$userId]
        );

        return $user;
    }


    private function getContextMenu( $data )
    {
        $contextActionMenu = new BASE_CMP_ContextAction();

        $contextParentAction = new BASE_ContextAction();
        $contextParentAction->setKey('newsfeed_context_menu_' . $this->autoId);
        $contextParentAction->setClass('ow_newsfeed_context');
        $contextActionMenu->addAction($contextParentAction);

        $order = 1;
        foreach( $data['contextMenu'] as $action )
        {
            $action = array_merge(array(
                'label' => null,
                'order' => $order,
                'class' => null,
                'url' => null,
                'id' => null,
                'key' => uniqid($this->autoId . '_'),
                'attributes' => array()
            ), $action);

            $contextAction = new BASE_ContextAction();
            $contextAction->setParentKey($contextParentAction->getKey());

            $contextAction->setLabel($action['label']);
            $contextAction->setClass($action['class']);
            $contextAction->setUrl($action['url']);
            $contextAction->setId($action['id']);
            $contextAction->setKey($action['key']);
            $contextAction->setOrder($action['order']);

            foreach ( $action['attributes'] as $key => $value )
            {
                $contextAction->addAttribute($key, $value);
            }

            $contextActionMenu->addAction($contextAction);
            $order++;
        }

        return $contextActionMenu->render();
    }

    private function getFeatures( $data )
    {
        $configs = $this->sharedData['configs'];
        $action = $this->action;

        $out = array(
            'system' => array(
                'comments' => false,
                'likes' => false
            ),
            'custom' => array()
        );

        $customFeatures = array();
        $systemFeatures = array();
        foreach ( $data['features'] as $key => $feature )
        {
            if ( is_string($feature) )
            {
                $systemFeatures[$feature] = array();
            }
            else if ( in_array($key, array('comments', 'likes')) )
            {
                $systemFeatures[$key] = $feature;
            }
            else if ( is_array($feature) )
            {
                $customFeatures[$key] = $feature;
            }
        }

        $out['custom'] = $customFeatures;

        if ( $configs['allow_comments'] && key_exists('comments', $systemFeatures) )
        {
            $feature = $systemFeatures['comments'];

            $authGroup = empty($feature['pluginKey']) ? $data['action']['pluginKey'] : $feature['pluginKey'];
            $entityType = empty($feature['entityType']) ? $data['action']['entityType'] : $feature['entityType'];
            $entityId = empty($feature['entityId']) ? $data['action']['entityId'] : $feature['entityId'];

            $authActionDto = BOL_AuthorizationService::getInstance()->findAction($authGroup, 'add_comment', true);

            if ( $authActionDto === null )
            {
                $authGroup = 'newsfeed';
            }

            $commentsParams = new BASE_CommentsParams($authGroup, $entityType);
            $commentsParams->setEntityId($entityId);
            $commentsParams->setCommentCountOnPage($configs['comments_count']);
            $commentsParams->setBatchData($this->sharedData['commentsData']);
            $commentsParams->setDisplayType(BASE_CommentsParams::DISPLAY_TYPE_BOTTOM_FORM_WITH_PARTIAL_LIST_AND_MINI_IPC);
            $commentsParams->setOwnerId($data['action']['userId']);
            $commentsParams->setWrapInBox(false);

            if ( !empty($feature['error']) )
            {
                $commentsParams->setErrorMessage($feature['error']);
            }

            if ( isset($feature['allow']) )
            {
                $commentsParams->setAddComment($feature['allow']);
            }

            $commentCmp = new BASE_CMP_Comments($commentsParams);
            $out['system']['comments']['cmp'] = $commentCmp->render();

            $out['system']['comments']['count'] = $this->sharedData['commentsData'][$entityType][$entityId]['commentsCount'];
            $out['system']['comments']['allow'] = OW::getUser()->isAuthorized($authGroup, 'add_comment');
            $out['system']['comments']['expanded'] = $configs['features_expanded'] && $out['system']['comments']['count'] > 0;
        }

        if ( $configs['allow_likes'] && key_exists('likes', $systemFeatures) )
        {
           $feature = $systemFeatures['likes'];

           $entityType = empty($feature['entityType']) ? $data['action']['entityType'] : $feature['entityType'];
           $entityId = empty($feature['entityId']) ? $data['action']['entityId'] : $feature['entityId'];

           $likesData = $this->sharedData['likesData'];
           $likes = empty($likesData[$entityType][$entityId])
                ? array() : $likesData[$entityType][$entityId];

           $userLiked = false;
           foreach ( $likes as $like )
           {
                if ( $like->userId == OW::getUser()->getId() )
                {
                    $userLiked = true;
                }
           }

           $likeCmp = new NEWSFEED_CMP_Likes($entityType, $entityId, $likes);
           $out['system']['likes']['count'] = count($likes);
           $out['system']['likes']['liked'] = $userLiked;
           $out['system']['likes']['allow'] = true; //OW::getUser()->isAuthenticated() && $action->getUserId() != OW::getUser()->getId();

           if ( empty($feature['error']) )
           {
                $out['system']['likes']['error'] = OW::getUser()->isAuthenticated()
                    ? null
                    : OW::getLanguage()->text('newsfeed', 'guest_like_error');
           }
           else
           {
               $out['system']['likes']['error'] = $feature['error'];
           }

           $out['system']['likes']['cmp'] = $likeCmp->render();
        }

        return $out;
    }


    public function renderMarkup( $cycle )
    {
        $action = $this->action;
        $data = $this->getActionData($action);
        $usersInfo = $this->sharedData['usersInfo'];

        $configs = $this->sharedData['configs'];

        $userNameEmbed = '<a href="' . $usersInfo['urls'][$action->getUserId()] . '"><b>' . $usersInfo['names'][$action->getUserId()] . '</b></a>';
        $assigns = empty($data['assign']) ? array() : $data['assign'];
        $replaces = array_merge(array(
            'user' => $userNameEmbed
        ), $assigns);

        $data['content'] = $this->applyTemplates($data['content']);

        foreach ( $assigns as & $item )
        {
            $item = $this->applyTemplates($item);
        }

        $permalink = empty($data['permalink'])
            ? NEWSFEED_BOL_Service::getInstance()->getActionPermalink($action->getId(), $this->sharedData['feedType'], $this->sharedData['feedId'])
            : null;

        $userId = (int) $data['action']['userId'];

        $item = array(
            'id' => $action->getId(),
            'view' => $data['view'],
            'toolbar' => $data['toolbar'],
            'string' => $this->processAssigns($data['string'], $assigns),
            'line' => $this->processAssigns($data['line'], $assigns),
            'content' => $this->processAssigns($data['content'], $assigns),
            'context' => $data['context'],
            'entityType' => $data['action']['entityType'],
            'entityId' => $data['action']['entityId'],
            'createTime' => UTIL_DateTime::formatDate($data['action']['createTime']),
            'updateTime' => $action->getUpdateTime(),

            'user' => $this->getUserInfo($userId, $data),
            'permalink' => $permalink,

            'cycle' => $cycle
        );

        $item['autoId'] = $this->autoId;

        $item['features'] = $this->getFeatures($data);
        $item['contextActionMenu'] = $this->getContextMenu($data);


        $this->generateJs($item);

        $this->assign('item', $item);

        return $this->render();
    }
}