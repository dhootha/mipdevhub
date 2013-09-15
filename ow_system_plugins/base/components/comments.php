<?php

/**
 * EXHIBIT A. Common Public Attribution License Version 1.0
 * The contents of this file are subject to the Common Public Attribution License Version 1.0 (the “License”);
 * you may not use this file except in compliance with the License. You may obtain a copy of the License at
 * http://www.oxwall.org/license. The License is based on the Mozilla Public License Version 1.1
 * but Sections 14 and 15 have been added to cover use of software over a computer network and provide for
 * limited attribution for the Original Developer. In addition, Exhibit A has been modified to be consistent
 * with Exhibit B. Software distributed under the License is distributed on an “AS IS” basis,
 * WITHOUT WARRANTY OF ANY KIND, either express or implied. See the License for the specific language
 * governing rights and limitations under the License. The Original Code is Oxwall software.
 * The Initial Developer of the Original Code is Oxwall Foundation (http://www.oxwall.org/foundation).
 * All portions of the code written by Oxwall Foundation are Copyright (c) 2011. All Rights Reserved.

 * EXHIBIT B. Attribution Information
 * Attribution Copyright Notice: Copyright 2011 Oxwall Foundation. All rights reserved.
 * Attribution Phrase (not exceeding 10 words): Powered by Oxwall community software
 * Attribution URL: http://www.oxwall.org/
 * Graphic Image as provided in the Covered Code.
 * Display of Attribution Information is required in Larger Works which are defined in the CPAL as a work
 * which combines Covered Code or portions thereof with code not governed by the terms of the CPAL.
 */

/**
 * @author Sardar Madumarov <madumarov@gmail.com>
 * @package ow.ow_system_plugins.base.comments
 * @since 1.0
 */
class BASE_CMP_Comments extends OW_Component
{

    /**
     * Constructor.
     *
     * @param BASE_CommentsParams $params
     */
    public function __construct( BASE_CommentsParams $params )
    {
        parent::__construct();

        $batchData = $params->getBatchData();
        $staticData = empty($batchData['_static']) ? array() : $batchData['_static'];
        $batchData = isset($batchData[$params->getEntityType()][$params->getEntityId()]) ? $batchData[$params->getEntityType()][$params->getEntityId()] : array();

        $this->assign('displayType', $params->getDisplayType());
        srand(time());
        $id = $params->getEntityType() . $params->getEntityId().rand(1, 10000);
        $cmpContextId = "comments-$id";
        $formName = "comment-add-$id";
        $this->assign('cmpContext', $cmpContextId);

        if ( OW::getUser()->isAuthorized($params->getPluginKey(), 'add_comment') && $params->getAddComment() )
        {

            if ( isset($staticData['credits'][$params->getPluginKey()]) )
            {
                $credits = $staticData['credits'][$params->getPluginKey()];
            }
            else
            {
                $eventParams = array('pluginKey' => $params->getPluginKey(), 'action' => 'add_comment');
                $credits = OW::getEventManager()->call('usercredits.check_balance', $eventParams);
            }

            if ( $credits === false )
            {
                $this->assign('authErrorMessage', OW::getEventManager()->call('usercredits.error_message', $eventParams));
            }
            else
            {
                $countOnPage = isset($batchData['countOnPage']) ? $batchData['countOnPage'] : $params->getCommentCountOnPage();

                $formCmpParams = array(
                    $params->getEntityType(), $params->getEntityId(), $params->getDisplayType(), $params->getPluginKey(), $params->getOwnerId(),
                    in_array($params->getDisplayType(), array(BASE_CommentsParams::DISPLAY_TYPE_BOTTOM_FORM_WITH_PARTIAL_LIST, BASE_CommentsParams::DISPLAY_TYPE_BOTTOM_FORM_WITH_PARTIAL_LIST_AND_MINI_IPC)) ? ($countOnPage + 1) : $countOnPage,
                    $id, $cmpContextId, $formName
                );

                OW::getDocument()->addOnloadScript(
                    "window.owCommentCmps['$id'] = new OwComments('$cmpContextId', '$formName', '$id', " . json_encode($formCmpParams) . ");
                    $('.comments_fake_autoclick', $('#$cmpContextId')).one('focus', function(){window.owCommentCmps['$id'].loadForm();});"
                );
                $this->assign('formCmp', true);

                if ( !empty($staticData['currentUserInfo']) )
                {
                    $userInfoToAssign = $staticData['currentUserInfo'];
                }
                else
                {
                    $currentUserInfo = BOL_AvatarService::getInstance()->getDataForUserAvatars(array(OW::getUser()->getId()));
                    $userInfoToAssign = $currentUserInfo[OW::getUser()->getId()];
                }

                $this->assign('currentUserInfo', $userInfoToAssign);
            }
        }
        else
        {
            $errorMessage = $params->getErrorMessage();

            if ( empty($errorMessage) )
            {
                $errorMessage = OW::getLanguage()->text('base', ( OW::getUser()->isAuthenticated() ) ? 'comments_add_auth_message' : 'comments_add_login_message');
            }

            $this->assign('authErrorMessage', $errorMessage);
        }

        $this->assign('wrapInBox', $params->getWrapInBox());

        // add comment list cmp
        $this->addComponent('commentList', new BASE_CMP_CommentsList($params, $id));
    }
}

/**
 * @author Sardar Madumarov <madumarov@gmail.com>
 * @package ow.ow_system_plugins.base.comments
 * @since 1.0
 */
final class BASE_CommentsParams
{
    const DISPLAY_TYPE_BOTTOM_FORM_WITH_FULL_LIST = 1;
    const DISPLAY_TYPE_TOP_FORM_WITH_PAGING = 2;
    const DISPLAY_TYPE_BOTTOM_FORM_WITH_PARTIAL_LIST = 3;
    const DISPLAY_TYPE_BOTTOM_FORM_WITH_PARTIAL_LIST_AND_MINI_IPC = 4;

    private $pluginKey;
    private $entityType;
    private $entityId;
    private $ownerId;
    private $displayType;
    private $commentCountOnPage;
    private $addComment;
    private $wrapInBox;
    private $batchData;
    private $errorMessage;

    /**
     * Constructor.
     *
     * @param string $pluginKey
     * @param string $entityType
     */
    public function __construct( $pluginKey, $entityType )
    {
        $this->pluginKey = trim($pluginKey);
        $this->entityType = trim($entityType);
        $this->entityId = 1;
        $this->displayType = self::DISPLAY_TYPE_TOP_FORM_WITH_PAGING;
        $this->addComment = true;
        $this->wrapInBox = true;
    }

    /**
     * @return string
     */
    public function getPluginKey()
    {
        return $this->pluginKey;
    }

    /**
     * @return string
     */
    public function getEntityType()
    {
        return $this->entityType;
    }

    /**
     * @return integer
     */
    public function getEntityId()
    {
        return $this->entityId;
    }

    /**
     *
     * @param integer $entityId
     * @return BASE_CommentsParams
     */
    public function setEntityId( $entityId )
    {
        $this->entityId = (int) $entityId;
        return $this;
    }

    /**
     * @return integer
     */
    public function getOwnerId()
    {
        return $this->ownerId;
    }

    /**
     * @param integer $ownerId
     * @return BASE_CommentsParams
     */
    public function setOwnerId( $ownerId )
    {
        $this->ownerId = (int) $ownerId;
        return $this;
    }

    /**
     * @return integer
     */
    public function getDisplayType()
    {
        return $this->displayType;
    }

    /**
     * @param integer $displayType
     * @return BASE_CommentsParams
     */
    public function setDisplayType( $displayType )
    {
        $this->displayType = (int) $displayType;
        return $this;
    }

    /**
     * @return integer
     */
    public function getCommentCountOnPage()
    {
        return $this->commentCountOnPage;
    }

    /**
     * @param integer $commentCountOnPage
     * @return BASE_CommentsParams
     */
    public function setCommentCountOnPage( $commentCountOnPage )
    {
        $this->commentCountOnPage = (int) $commentCountOnPage;
        return $this;
    }

    public function getAddComment()
    {
        return $this->addComment;
    }

    public function getErrorMessage()
    {
        return $this->errorMessage;
    }

    public function setErrorMessage( $errorMessage )
    {
        $this->errorMessage = $errorMessage;
    }

    public function setAddComment( $addComment )
    {
        $this->addComment = (bool) $addComment;

        return $this;
    }

    public function getWrapInBox()
    {
        return $this->wrapInBox;
    }

    public function setWrapInBox( $wrapInBox )
    {
        $this->wrapInBox = (bool) $wrapInBox;
    }

    public function getBatchData()
    {
        return $this->batchData;
    }

    public function setBatchData( array $data )
    {
        $this->batchData = $data;
    }
}