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
 * @package ow.ow_system_plugins.base.components
 * @since 1.0
 */
class BASE_CMP_CommentsList extends OW_Component
{

    /**
     * Constructor.
     *
     * @param string $entityType
     * @param integer $entityId
     * @param integer $page
     * @param string $displayType
     */
    public function __construct( BASE_CommentsParams $params, $id, $page = 1 )
    {
        parent::__construct();

        $language = OW::getLanguage();

        $batchData = $params->getBatchData();
        $staticData = empty($batchData['_static']) ? array() : $batchData['_static'];
        $batchData = isset($batchData[$params->getEntityType()][$params->getEntityId()]) ? $batchData[$params->getEntityType()][$params->getEntityId()] : array();

        $commentService = BOL_CommentService::getInstance();
        $avatarService = BOL_AvatarService::getInstance();

        $commentCount = isset($batchData['commentsCount']) ? $batchData['commentsCount'] : $commentService->findCommentCount($params->getEntityType(), $params->getEntityId());

        if ( $commentCount === 0 && $params->getDisplayType() !== BASE_CommentsParams::DISPLAY_TYPE_BOTTOM_FORM_WITH_PARTIAL_LIST_AND_MINI_IPC )
        {
            $this->assign('noComments', true);
        }

        $cmpContextId = "comments-list-$id";
        $this->assign('cmpContext', $cmpContextId);

        if ( $commentCount === 0 )
        {
            $commentList = array();
        }
        else if ( $params->getDisplayType() === BASE_CommentsParams::DISPLAY_TYPE_BOTTOM_FORM_WITH_FULL_LIST )
        {
            $commentList = $commentService->findFullCommentList($params->getEntityType(), $params->getEntityId());
        }
        else if ( in_array($params->getDisplayType(), array(BASE_CommentsParams::DISPLAY_TYPE_BOTTOM_FORM_WITH_PARTIAL_LIST, BASE_CommentsParams::DISPLAY_TYPE_BOTTOM_FORM_WITH_PARTIAL_LIST_AND_MINI_IPC)) )
        {
            $commentList = empty($batchData['commentsList']) ? $commentService->findCommentList($params->getEntityType(), $params->getEntityId(), 1, $params->getCommentCountOnPage()) : $batchData['commentsList'];
            $commentList = array_reverse($commentList);

            if ( $commentCount > $params->getCommentCountOnPage() )
            {
                $this->assign('viewAllLink', OW::getLanguage()->text('base', 'comment_view_all', array('count' => $commentCount)));
            }
        }
        else
        {
            $commentList = $commentService->findCommentList($params->getEntityType(), $params->getEntityId(), $page, $params->getCommentCountOnPage());
        }

        $arrayToAssign = array();
        $userIdList = array();
        $commentsIdList = array();

        /* @var $value BOL_Comment */
        foreach ( $commentList as $value )
        {
            $userIdList[] = $value->getUserId();
            $commentsIdList[] = $value->getId();
        }

        $userAvatarArrayList = empty($staticData['avatars']) ? $avatarService->getDataForUserAvatars($userIdList) : $staticData['avatars'];

        $isModerator = OW::getUser()->isAuthorized($params->getPluginKey());
        $isOwnerAuthorized = ( OW::getUser()->isAuthorized($params->getPluginKey(), 'delete_comment_by_content_owner', (int) $params->getOwnerId()) && (int) $params->getOwnerId() === (int) OW::getUser()->getId());
        $actionArray = array('comments' => array(), 'users' => array());
        $isBaseModerator = OW::getUser()->isAuthorized('base');

        /* @var $value BOL_Comment */
        foreach ( $commentList as $value )
        {
            $deleteButton = false;
            $cAction = null;
            
            if ( $isOwnerAuthorized || $isModerator || (int) OW::getUser()->getId() === (int) $value->getUserId() )
            {
                $deleteButton = true;
            }
            
            if ( $isBaseModerator || $deleteButton )
            {
                $cAction = new BASE_CMP_ContextAction();
                $parentAction = new BASE_ContextAction();
                $parentAction->setKey('parent');
                $parentAction->setClass('ow_comments_context');
                $cAction->addAction($parentAction);

                if ( $deleteButton )
                {
                    $delAction = new BASE_ContextAction();
                    $delAction->setLabel($language->text('base', 'contex_action_comment_delete_label'));
                    $delAction->setKey('udel');
                    $delAction->setParentKey($parentAction->getKey());
                    $delId = 'del-' . $value->getId();
                    $delAction->setId($delId);
                    $actionArray['comments'][$delId] = $value->getId();
                    $cAction->addAction($delAction);
                }

                if ( $isBaseModerator && $value->getUserId() != OW::getUser()->getId() )
                {
                    $modAction = new BASE_ContextAction();
                    $modAction->setLabel($language->text('base', 'contex_action_user_delete_label'));
                    $modAction->setKey('cdel');
                    $modAction->setParentKey($parentAction->getKey());
                    $delId = 'udel-' . $value->getId();
                    $modAction->setId($delId);
                    $actionArray['users'][$delId] = $value->getUserId();
                    $cAction->addAction($modAction);
                }
            }

            $cmItemArray = array(
                'displayName' => $userAvatarArrayList[$value->getUserId()]['title'],
                'avatarUrl' => $userAvatarArrayList[$value->getUserId()]['src'],
                'profileUrl' => $userAvatarArrayList[$value->getUserId()]['url'],
                'content' => '<div class="ow_comments_content ow_smallmargin">'.$value->getMessage().'</div>',
                'date' => UTIL_DateTime::formatDate($value->getCreateStamp()),
                'userId' => $value->getUserId(),
                'commentId' => $value->getId(),
                'avatar' => $userAvatarArrayList[$value->getUserId()],
                'cnxAction' => empty($cAction) ? '' : $cAction->render()
            );

            if ( $value->getAttachment() !== null )
            {
                $tempCmp = new BASE_CMP_OembedAttachment((array) json_decode($value->getAttachment()), $isOwnerAuthorized);

                $cmItemArray['content'] .= '<div class="ow_attachment ow_small" id="att' . $value->getId() . '">' . $tempCmp->render() . '</div>';
            }

            $arrayToAssign[] = $cmItemArray;
        }
        
        $this->assign('comments', $arrayToAssign);

        $pages = false;

        if ( $params->getDisplayType() === BASE_CommentsParams::DISPLAY_TYPE_TOP_FORM_WITH_PAGING )
        {
            $pagesCount = $commentService->findCommentPageCount($params->getEntityType(), $params->getEntityId(), $params->getCommentCountOnPage());

            if ( $pagesCount > 1 )
            {
                $pages = $this->getPages($page, $pagesCount, 8);
                $this->assign('pages', $pages);
            }
        }
        else
        {
            $pagesCount = 0;
        }

        static $dataInit = false;

        if ( !$dataInit )
        {
            $staticDataArray = array(
                'respondUrl' => OW::getRouter()->urlFor('BASE_CTRL_Comments', 'getCommentList'),
                'delUrl' => OW::getRouter()->urlFor('BASE_CTRL_Comments', 'deleteComment'),
                'delAtchUrl' => OW::getRouter()->urlFor('BASE_CTRL_Comments', 'deleteCommentAtatchment'),
                'delConfirmMsg' => OW::getLanguage()->text('base', 'comment_delete_confirm_message'),
                'preloaderImgUrl' => OW::getThemeManager()->getCurrentTheme()->getStaticImagesUrl() . 'ajax_preloader_button.gif'
            );
            OW::getDocument()->addOnloadScript("window.owCommentListCmps.staticData=" . json_encode($staticDataArray) . ";");
            $dataInit = true;
        }
        
        $jsParams = json_encode(
                array(
                    'totalCount' => $commentCount,
                    'contextId' => $cmpContextId,
                    'displayType' => $params->getDisplayType(),
                    'entityType' => $params->getEntityType(),
                    'entityId' => $params->getEntityId(),
                    'pagesCount' => $pagesCount,
                    'commentIds' => $commentsIdList,
                    'pages' => $pages,
                    'pluginKey' => $params->getPluginKey(),
                    'ownerId' => $params->getOwnerId(),
                    'commentCountOnPage' => $params->getCommentCountOnPage(),
                    'cid' => $id,
                    'actionArray' => $actionArray
                )
        );

        OW::getDocument()->addOnloadScript(
            "window.owCommentListCmps.items['$id'] = new OwCommentsList($jsParams);
            window.owCommentListCmps.items['$id'].init();"
        );
    }

    private function getPages( $currentPage, $pagesCount, $displayPagesCount )
    {
        $first = false;
        $last = false;

        $prev = ( $currentPage > 1 );
        $next = ( $currentPage < $pagesCount );

        if ( $pagesCount <= $displayPagesCount )
        {
            $start = 1;
            $displayPagesCount = $pagesCount;
        }
        else
        {
            $start = $currentPage - (int) floor($displayPagesCount / 2);

            if ( $start <= 1 )
            {
                $start = 1;
            }
            else
            {
                $first = true;
            }

            if ( ($start + $displayPagesCount - 1) < $pagesCount )
            {
                $last = true;
            }
            else
            {
                $start = $pagesCount - $displayPagesCount + 1;
            }
        }

        $pageArray = array();

        if ( $first )
        {
            $pageArray[] = array('label' => OW::getLanguage()->text('base', 'paging_label_first'), 'pageIndex' => 1);
        }

        if ( $prev )
        {
            $pageArray[] = array('label' => OW::getLanguage()->text('base', 'paging_label_prev'), 'pageIndex' => ($currentPage - 1));
        }

        if ( $first )
        {
            $pageArray[] = array('label' => '...');
        }

        for ( $i = (int) $start; $i <= ($start + $displayPagesCount - 1); $i++ )
        {
            $pageArray[] = array('label' => $i, 'pageIndex' => $i, 'active' => ( $i === (int) $currentPage ));
        }

        if ( $last )
        {
            $pageArray[] = array('label' => '...');
        }

        if ( $next )
        {
            $pageArray[] = array('label' => OW::getLanguage()->text('base', 'paging_label_next'), 'pageIndex' => ( $currentPage + 1 ));
        }

        if ( $last )
        {
            $pageArray[] = array('label' => OW::getLanguage()->text('base', 'paging_label_last'), 'pageIndex' => $pagesCount);
        }

        return $pageArray;
    }
}
