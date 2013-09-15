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

$owBasePlugin = OW::getPluginManager()->getPlugin('base');
OW::getThemeManager()->addDecorator('form_base', $owBasePlugin->getKey());
OW::getThemeManager()->addDecorator('main_menu', $owBasePlugin->getKey());
OW::getThemeManager()->addDecorator('box_toolbar', $owBasePlugin->getKey());
OW::getThemeManager()->addDecorator('avatar_item', $owBasePlugin->getKey());

$classesToAutoload = array(
    'BASE_Members' => $owBasePlugin->getCtrlDir() . 'user_list.php',
    'BASE_MenuItem' => $owBasePlugin->getCmpDir() . 'menu.php',
    'BASE_CommentsParams' => $owBasePlugin->getCmpDir() . 'comments.php',
    'BASE_EventCollector' => $owBasePlugin->getClassesDir() . 'deprecated_event_collector.php', //TODO Should be deleted in future
    'BASE_ContextAction' => $owBasePlugin->getCmpDir() . 'context_action.php'
);

OW::getAutoloader()->addClassArray($classesToAutoload);

$router = OW::getRouter();

$router->addRoute(new OW_Route('static_sign_in', 'sign-in', 'BASE_CTRL_User', 'standardSignIn'));
$router->addRoute(new OW_Route('base_forgot_password', 'forgot-password', 'BASE_CTRL_User', 'forgotPassword'));
$router->addRoute(new OW_Route('base_sign_out', 'sign-out', 'BASE_CTRL_User', 'signOut'));
$router->addRoute(new OW_Route('ajax-form', 'ajax-form', 'BASE_CTRL_AjaxForm', 'index'));

$router->addRoute(new OW_Route('users', 'users', 'BASE_CTRL_UserList', 'index', array('list' => array(OW_Route::PARAM_OPTION_HIDDEN_VAR => 'latest'))));
$router->addRoute(new OW_Route('base_user_lists', 'users/:list', 'BASE_CTRL_UserList', 'index'));

$router->addRoute(new OW_Route('users-waiting-for-approval', 'users/waiting-for-approval', 'BASE_CTRL_UserList', 'forApproval'));

$router->addRoute(new OW_Route('users-search', 'users/search', 'BASE_CTRL_UserSearch', 'index'));
$router->addRoute(new OW_Route('users-search-result', 'users/search-result', 'BASE_CTRL_UserSearch', 'result'));

$router->addRoute(new OW_Route('base_join', 'join', 'BASE_CTRL_Join', 'index'));
$router->addRoute(new OW_Route('base_edit', 'profile/edit', 'BASE_CTRL_Edit', 'index'));
$router->addRoute(new OW_Route('base_edit_user_datails', 'profile/:userId/edit/', 'BASE_CTRL_Edit', 'index'));

$router->addRoute(new OW_Route('base_email_verify', 'email-verify', 'BASE_CTRL_EmailVerify', 'index'));
$router->addRoute(new OW_Route('base_email_verify_code_form', 'email-verify-form', 'BASE_CTRL_EmailVerify', 'verifyForm'));
$router->addRoute(new OW_Route('base_email_verify_code_check', 'email-verify-check/:code', 'BASE_CTRL_EmailVerify', 'verify'));

$router->addRoute(new OW_Route('base_massmailing_unsubscribe', 'unsubscribe/:id/:code', 'BASE_CTRL_Unsubscribe', 'index'));

// Drag And Drop panels
$router->addRoute(new OW_Route('base_member_dashboard', 'dashboard', 'BASE_CTRL_ComponentPanel', 'dashboard'));
$router->addRoute(new OW_Route('base_member_dashboard_customize', 'dashboard/customize', 'BASE_CTRL_ComponentPanel', 'dashboard', array(
        'mode' => array(OW_Route::PARAM_OPTION_HIDDEN_VAR => 'customize'
))));

$router->addRoute(new OW_Route('base_member_profile_customize', 'my-profile/customize', 'BASE_CTRL_ComponentPanel', 'myProfile', array(
        'mode' => array(OW_Route::PARAM_OPTION_HIDDEN_VAR => 'customize'
))));

$router->addRoute(new OW_Route('base_index_customize', 'index/customize', 'BASE_CTRL_ComponentPanel', 'index', array(
        'mode' => array(OW_Route::PARAM_OPTION_HIDDEN_VAR => 'customize'
))));

$router->addRoute(new OW_Route('base_index', 'index', 'BASE_CTRL_ComponentPanel', 'index'));
$router->addRoute(new OW_Route('base_member_profile', 'my-profile', 'BASE_CTRL_ComponentPanel', 'myProfile'));

$router->addRoute(new OW_Route('base_user_profile', 'user/:username', 'BASE_CTRL_ComponentPanel', 'profile'));
$router->addRoute(new OW_Route('base_page_404', '404', 'BASE_CTRL_BaseDocument', 'page404'));
$router->addRoute(new OW_Route('base_page_403', '403', 'BASE_CTRL_BaseDocument', 'page403'));
$router->addRoute(new OW_Route('base_page_splash_screen', 'splash-screen', 'BASE_CTRL_BaseDocument', 'splashScreen'));
$router->addRoute(new OW_Route('base_page_alert', 'alert-page', 'BASE_CTRL_BaseDocument', 'alertPage'));
$router->addRoute(new OW_Route('base_page_confirm', 'confirm-page', 'BASE_CTRL_BaseDocument', 'confirmPage'));
$router->addRoute(new OW_Route('base_page_install_completed', 'install/completed', 'BASE_CTRL_BaseDocument', 'installCompleted'));

$router->addRoute(new OW_Route('base_avatar_crop', 'profile/avatar', 'BASE_CTRL_Avatar', 'crop'));

$router->addRoute(new OW_Route('base_delete_user', 'profile/delete', 'BASE_CTRL_DeleteUser', 'index'));
$router->addRoute(new OW_Route('base.reset_user_password', 'reset-password/:code', 'BASE_CTRL_User', 'resetPassword'));
$router->addRoute(new OW_Route('base.reset_user_password_request', 'reset-password-request', 'BASE_CTRL_User', 'resetPasswordRequest'));
$router->addRoute(new OW_Route('base.reset_user_password_expired_code', 'reset-password-code-expired', 'BASE_CTRL_User', 'resetPasswordCodeExpired'));

$router->addRoute(new OW_Route('base_billing_completed', 'order/:hash/completed', 'BASE_CTRL_Billing', 'completed'));
$router->addRoute(new OW_Route('base_billing_completed_st', 'order/completed', 'BASE_CTRL_Billing', 'completed'));
$router->addRoute(new OW_Route('base_billing_canceled', 'order/:hash/canceled', 'BASE_CTRL_Billing', 'canceled'));
$router->addRoute(new OW_Route('base_billing_canceled_st', 'order/canceled', 'BASE_CTRL_Billing', 'canceled'));
$router->addRoute(new OW_Route('base_billing_error', 'order/incomplete', 'BASE_CTRL_Billing', 'error'));

$router->addRoute(new OW_Route('base_preference_index', 'profile/preference', 'BASE_CTRL_Preference', 'index'));

$router->addRoute(new OW_Route('base_user_privacy_no_permission', 'profile/:username/no-permission', 'BASE_CTRL_ComponentPanel', 'privacyMyProfileNoPermission'));

$router->addRoute(new OW_Route('base-api-server', 'api-server', 'BASE_CTRL_ApiServer', 'request'));
$router->addRoute(new OW_Route('base.robots_txt', 'robots.txt', 'BASE_CTRL_Base', 'robotsTxt'));

OW::getThemeManager()->addDecorator('box_cap', $owBasePlugin->getKey());
OW::getThemeManager()->addDecorator('box', $owBasePlugin->getKey());
OW::getThemeManager()->addDecorator('ipc', $owBasePlugin->getKey());
OW::getThemeManager()->addDecorator('mini_ipc', $owBasePlugin->getKey());
OW::getThemeManager()->addDecorator('tooltip', $owBasePlugin->getKey());
OW::getThemeManager()->addDecorator('paging', $owBasePlugin->getKey());
OW::getThemeManager()->addDecorator('floatbox', $owBasePlugin->getKey());
OW::getThemeManager()->addDecorator('button', $owBasePlugin->getKey());
OW::getThemeManager()->addDecorator('user_list_item', $owBasePlugin->getKey());
OW::getThemeManager()->addDecorator('button_list_item', $owBasePlugin->getKey());

OW_ViewRenderer::getInstance()->registerFunction('display_rate', array('BASE_CTRL_Rate', 'displayRate'));

function base_add_global_langs( BASE_CLASS_EventCollector $event )
{
    $event->add(array('site_name' => OW::getConfig()->getValue('base', 'site_name')));
    $event->add(array('site_url' => OW_URL_HOME));
    $event->add(array('site_email' => OW::getConfig()->getValue('base', 'site_email')));
    $event->add(array('default_currency' => BOL_BillingService::getInstance()->getActiveCurrency()));
}
OW::getEventManager()->bind('base.add_global_lang_keys', 'base_add_global_langs');

if ( OW::getUser()->isAuthenticated() )
{
    $user = BOL_UserService::getInstance()->findUserById(OW::getUser()->getId());

    if ( OW::getUser()->isAuthenticated() && !BOL_UserService::getInstance()->isApproved() )
    {
        OW::getRequestHandler()->setCatchAllRequestsAttributes('base.wait_for_approval', array('controller' => 'BASE_CTRL_WaitForApproval', 'action' => 'index'));
        OW::getRequestHandler()->addCatchAllRequestsExclude('base.wait_for_approval', 'BASE_CTRL_User', 'signOut');
    }

    if ( $user !== null )
    {
        if ( BOL_UserService::getInstance()->isSuspended($user->getId()) && !OW::getUser()->isAdmin() )
        {
            OW::getRequestHandler()->setCatchAllRequestsAttributes('base.suspended_user', array('controller' => 'BASE_CTRL_SuspendedUser', 'action' => 'index'));
            OW::getRequestHandler()->addCatchAllRequestsExclude('base.suspended_user', 'BASE_CTRL_User', 'signOut');
            OW::getRequestHandler()->addCatchAllRequestsExclude('base.suspended_user', 'BASE_CTRL_Avatar');
            OW::getRequestHandler()->addCatchAllRequestsExclude('base.suspended_user', 'BASE_CTRL_Edit');
        }

        if ( (int) $user->emailVerify === 0 && OW::getConfig()->getValue('base', 'confirm_email') )
        {
            OW::getRequestHandler()->setCatchAllRequestsAttributes('base.email_verify', array(OW_RequestHandler::CATCH_ALL_REQUEST_KEY_CTRL => 'BASE_CTRL_EmailVerify', OW_RequestHandler::CATCH_ALL_REQUEST_KEY_ACTION => 'index'));

            OW::getRequestHandler()->addCatchAllRequestsExclude('base.email_verify', 'BASE_CTRL_User', 'signOut');
            OW::getRequestHandler()->addCatchAllRequestsExclude('base.email_verify', 'BASE_CTRL_EmailVerify');
        }
    }
    else
    {
        OW::getUser()->logout();
    }
}

// maybe need to devide entities
function base_delete_user_content( OW_Event $event )
{
    $params = $event->getParams();

    $userId = (int) $params['userId'];

    if ( $userId > 0 )
    {
        $moderatorId = BOL_AuthorizationService::getInstance()->getModeratorIdByUserId($userId);
        if ( $moderatorId !== null )
        {
            BOL_AuthorizationService::getInstance()->deleteModerator($moderatorId);
        }

        BOL_AuthorizationService::getInstance()->deleteUserRolesByUserId($userId);

        if ( isset($params['deleteContent']) && (bool) $params['deleteContent'] )
        {
            BOL_CommentService::getInstance()->deleteUserComments($userId);
            BOL_RateService::getInstance()->deleteUserRates($userId);
            BOL_VoteService::getInstance()->deleteUserVotes($userId);
        }
    }
}
OW::getEventManager()->bind(OW_EventManager::ON_USER_UNREGISTER, 'base_delete_user_content');

function base_delete_widgets( OW_Event $event )
{
    $params = $event->getParams();

    $userId = (int) $params['userId'];
    BOL_ComponentEntityService::getInstance()->onEntityDelete(BOL_ComponentEntityService::PLACE_DASHBOARD, $userId);
    BOL_ComponentEntityService::getInstance()->onEntityDelete(BOL_ComponentEntityService::PLACE_PROFILE, $userId);
}
OW::getEventManager()->bind(OW_EventManager::ON_USER_UNREGISTER, 'base_delete_widgets');

function base_delete_verify_email_code( OW_Event $event )
{
    $params = $event->getParams();

    $userId = (int) $params['userId'];
    BOL_EmailVerifyService::getInstance()->deleteByUserId($userId);
}
OW::getEventManager()->bind(OW_EventManager::ON_USER_UNREGISTER, 'base_delete_verify_email_code');

function base_delete_remote_auth( OW_Event $event )
{
    $params = $event->getParams();

    $userId = (int) $params['userId'];
    BOL_RemoteAuthService::getInstance()->deleteByUserId($userId);
}
OW::getEventManager()->bind(OW_EventManager::ON_USER_UNREGISTER, 'base_delete_remote_auth');

function base_mandatory_user_approve_on_join( OW_Event $event )
{
    $params = $event->getParams();

    if ( !OW::getConfig()->getValue('base', 'mandatory_user_approve') )
    {
        return;
    }

    BOL_UserService::getInstance()->disapprove((int) $params['userId']);
}
OW::getEventManager()->bind(OW_EventManager::ON_USER_REGISTER, 'base_mandatory_user_approve_on_join');

function base_edit_user_activity( OW_Event $event )
{
    $params = $event->getParams();

    if ( $params['method'] != 'native' )
    {
        return;
    }

    $userId = (int) $params['userId'];
}
OW::getEventManager()->bind(OW_EventManager::ON_USER_EDIT, 'base_edit_user_activity');

function base_feed_after_user_edit( OW_Event $event )
{
    $params = $event->getParams();

    if ( $params['method'] != 'native' )
    {
        return;
    }

    $userId = (int) $params['userId'];

    $event = new OW_Event('feed.action', array(
            'pluginKey' => 'base',
            'entityType' => 'user_edit',
            'entityId' => $userId,
            'userId' => $userId,
            'replace' => true
            ), array(
            'string' => OW::getLanguage()->text('base', 'feed_user_edit_profile'),
            'data' => array(
                'userId' => $userId
            ),
            'features' => array(),
            'view' => array(
                'iconClass' => 'ow_ic_user'
            )
        ));
    OW::getEventManager()->trigger($event);
}
OW::getEventManager()->bind(OW_EventManager::ON_USER_EDIT, 'base_feed_after_user_edit');

function base_feed_after_user_join( OW_Event $event )
{
    $params = $event->getParams();

    if ( $params['method'] != 'native' )
    {
        return;
    }

    $userId = (int) $params['userId'];

    $event = new OW_Event('feed.action', array(
            'pluginKey' => 'base',
            'entityType' => 'user_join',
            'entityId' => $userId,
            'userId' => $userId,
            'replace' => true
            ), array(
            'string' => OW::getLanguage()->text('base', 'feed_user_join'),
            'view' => array(
                'iconClass' => 'ow_ic_user'
            )
        ));
    OW::getEventManager()->trigger($event);
}
OW::getEventManager()->bind(OW_EventManager::ON_USER_REGISTER, 'base_feed_after_user_join');

function base_feed_user_join_comment( OW_Event $event )
{
    $params = $event->getParams();

    if ( $params['entityType'] != 'user_join' )
    {
        return;
    }

    $userId = $params['entityId'];

    $userName = BOL_UserService::getInstance()->getDisplayName($userId);
    $userUrl = BOL_UserService::getInstance()->getUserUrl($userId);
    $userEmbed = '<a href="' . $userUrl . '">' . $userName . '</a>';

    OW::getEventManager()->trigger(new OW_Event('feed.activity', array(
            'activityType' => 'comment',
            'activityId' => $params['commentId'],
            'entityId' => $params['entityId'],
            'entityType' => $params['entityType'],
            'userId' => $params['userId'],
            'pluginKey' => 'base'
            ), array(
            'string' => OW::getLanguage()->text('base', 'feed_activity_join_profile_string', array(
                'user' => $userEmbed
            ))
        )));
}
OW::getEventManager()->bind('feed.after_comment_add', 'base_feed_user_join_comment');

function base_feed_user_join_like( OW_Event $event )
{
    $params = $event->getParams();

    if ( $params['entityType'] != 'user_join' )
    {
        return;
    }

    $userId = $params['entityId'];

    $userName = BOL_UserService::getInstance()->getDisplayName($userId);
    $userUrl = BOL_UserService::getInstance()->getUserUrl($userId);
    $userEmbed = '<a href="' . $userUrl . '">' . $userName . '</a>';

    OW::getEventManager()->trigger(new OW_Event('feed.activity', array(
            'activityType' => 'like',
            'activityId' => $params['userId'],
            'entityId' => $params['entityId'],
            'entityType' => $params['entityType'],
            'userId' => $params['userId'],
            'pluginKey' => 'base'
            ), array(
            'string' => OW::getLanguage()->text('base', 'feed_activity_join_profile_string_like', array(
                'user' => $userEmbed
            ))
        )));
}
OW::getEventManager()->bind('feed.after_like_added', 'base_feed_user_join_like');

function base_feed_user_avatar_like( OW_Event $event )
{
    $params = $event->getParams();

    if ( $params['entityType'] != 'avatar-change' )
    {
        return;
    }

    $avatarId = $params['entityId'];

    $service = BOL_AvatarService::getInstance();
    $avatar = $service->findAvatarById($avatarId);

    if ( !$avatar )
    {
        return;
    }

    $userId = $avatar->userId;

    $userName = BOL_UserService::getInstance()->getDisplayName($userId);
    $userUrl = BOL_UserService::getInstance()->getUserUrl($userId);
    $userEmbed = '<a href="' . $userUrl . '">' . $userName . '</a>';

    OW::getEventManager()->trigger(new OW_Event('feed.activity', array(
            'activityType' => 'like',
            'activityId' => $params['userId'],
            'entityId' => $params['entityId'],
            'entityType' => $params['entityType'],
            'userId' => $params['userId'],
            'pluginKey' => 'base'
            ), array(
            'string' => OW::getLanguage()->text('base', 'feed_activity_avatar_string_like', array(
                'user' => $userEmbed
            ))
        )));
}
OW::getEventManager()->bind('feed.after_like_added', 'base_feed_user_avatar_like');

function base_feed_user_avatar_comment( OW_Event $event )
{
    $params = $event->getParams();

    if ( $params['entityType'] != 'avatar-change' )
    {
        return;
    }

    $avatarId = $params['entityId'];

    $service = BOL_AvatarService::getInstance();
    $avatar = $service->findAvatarById($avatarId);

    if ( !$avatar )
    {
        return;
    }

    $userId = $avatar->userId;

    $userName = BOL_UserService::getInstance()->getDisplayName($userId);
    $userUrl = BOL_UserService::getInstance()->getUserUrl($userId);
    $userEmbed = '<a href="' . $userUrl . '">' . $userName . '</a>';

    OW::getEventManager()->trigger(new OW_Event('feed.activity', array(
            'activityType' => 'comment',
            'activityId' => $params['userId'],
            'entityId' => $params['entityId'],
            'entityType' => $params['entityType'],
            'userId' => $params['userId'],
            'pluginKey' => 'base'
            ), array(
            'string' => OW::getLanguage()->text('base', 'feed_activity_avatar_string', array(
                'user' => $userEmbed
            ))
        )));
}
OW::getEventManager()->bind('feed.after_comment_add', 'base_feed_user_avatar_comment');

function base_welcome_letter( OW_Event $event )
{
    $params = $event->getParams();

    $userId = (int) $params['userId'];

    if ( $userId === 0 )
    {
        return;
    }

    BOL_PreferenceService::getInstance()->savePreferenceValue('send_wellcome_letter', 1, $userId);
}
OW::getEventManager()->bind(OW_EventManager::ON_USER_REGISTER, 'base_welcome_letter');

function base_elst_delete_user_action_tool( BASE_CLASS_EventCollector $event )
{
    if ( !OW::getUser()->isAuthorized('base') )
    {
        return;
    }

    $params = $event->getParams();

    if ( empty($params['userId']) )
    {
        return;
    }

    if ( BOL_AuthorizationService::getInstance()->isSuperModerator($params['userId']) )
    {
        return;
    }

    $userId = (int) $params['userId'];

    $callbackUrl = OW::getRouter()->urlFor('BASE_CTRL_User', 'userDeleted');

    $linkId = 'ud' . rand(10, 1000000);
    $script = UTIL_JsGenerator::newInstance()->jQueryEvent('#' . $linkId, 'click',
        'OW.Users.deleteUser(e.data.userId, e.data.callbackUrl, false);'
        ,array('e'), array('userId' => $userId, 'callbackUrl' => $callbackUrl) );

    OW::getDocument()->addOnloadScript($script);

    $resultArray = array(
        BASE_CMP_ProfileActionToolbar::DATA_KEY_LABEL => OW::getLanguage()->text('base', 'profile_toolbar_user_delete_label'),
        BASE_CMP_ProfileActionToolbar::DATA_KEY_LINK_CLASS => 'ow_mild_red',
        BASE_CMP_ProfileActionToolbar::DATA_KEY_LINK_HREF => 'javascript://',
        BASE_CMP_ProfileActionToolbar::DATA_KEY_LINK_ID => $linkId,
        BASE_CMP_ProfileActionToolbar::DATA_KEY_LINK_GROUP_KEY => 'base.moderation',
        BASE_CMP_ProfileActionToolbar::DATA_KEY_LINK_GROUP_LABEL => OW::getLanguage()->text('base', 'profile_toolbar_group_moderation'),
        BASE_CMP_ProfileActionToolbar::DATA_KEY_LINK_ORDER => 3
    );

    $event->add($resultArray);
}
OW::getEventManager()->bind(BASE_CMP_ProfileActionToolbar::EVENT_NAME, 'base_elst_delete_user_action_tool');


function base_elst_suspend_user_action_tool( BASE_CLASS_EventCollector $event )
{
    if ( !OW::getUser()->isAuthorized('base') )
    {
        return;
    }

    $params = $event->getParams();

    if ( empty($params['userId']) )
    {
        return;
    }

    if ( BOL_AuthorizationService::getInstance()->isSuperModerator($params['userId']) )
    {
        return;
    }

    $userService = BOL_UserService::getInstance();
    $userId = (int) $params['userId'];

    $action = array(
        BASE_CMP_ProfileActionToolbar::DATA_KEY_LINK_GROUP_KEY => 'base.moderation',
        BASE_CMP_ProfileActionToolbar::DATA_KEY_LINK_GROUP_LABEL => OW::getLanguage()->text('base', 'profile_toolbar_group_moderation'),
        BASE_CMP_ProfileActionToolbar::DATA_KEY_LINK_ORDER => 2
    );

    $backUrl = OW::getRouter()->getBaseUrl() . OW::getRequest()->getRequestUri();

    if ( $userService->isSuspended($userId) )
    {
        $action[BASE_CMP_ProfileActionToolbar::DATA_KEY_LABEL] = OW::getLanguage()->text('base', 'user_unsuspend_btn_lbl');
        $action[BASE_CMP_ProfileActionToolbar::DATA_KEY_LINK_HREF] = OW::getRouter()->urlFor('BASE_CTRL_SuspendedUser', 'unsuspend', array(
            'id' => $userId
        )) . "?backUrl={$backUrl}";
        $action[BASE_CMP_ProfileActionToolbar::DATA_KEY_LINK_CLASS] = 'ow_mild_green';
    }
    else
    {
        $action[BASE_CMP_ProfileActionToolbar::DATA_KEY_LABEL] = OW::getLanguage()->text('base', 'user_suspend_btn_lbl');
        $action[BASE_CMP_ProfileActionToolbar::DATA_KEY_LINK_HREF] = OW::getRouter()->urlFor('BASE_CTRL_SuspendedUser', 'suspend', array(
            'id' => $userId
        )) . "?backUrl={$backUrl}";
        $action[BASE_CMP_ProfileActionToolbar::DATA_KEY_LINK_CLASS] = 'ow_mild_red';
    }

    $event->add($action);
}
OW::getEventManager()->bind(BASE_CMP_ProfileActionToolbar::EVENT_NAME, 'base_elst_suspend_user_action_tool');


function base_elst_auth_user_action_tool( BASE_CLASS_EventCollector $event )
{
    if ( !OW::getUser()->isAuthorized('base') )
    {
        return;
    }

    $params = $event->getParams();

    if ( empty($params['userId']) )
    {
        return;
    }

    $userId = (int) $params['userId'];
    $uniqId = uniqid('change-role-');

    $action = array(
        BASE_CMP_ProfileActionToolbar::DATA_KEY_LINK_GROUP_KEY => 'base.moderation',
        BASE_CMP_ProfileActionToolbar::DATA_KEY_LINK_GROUP_LABEL => OW::getLanguage()->text('base', 'profile_toolbar_group_moderation'),
        BASE_CMP_ProfileActionToolbar::DATA_KEY_LINK_ID => $uniqId,
        BASE_CMP_ProfileActionToolbar::DATA_KEY_LABEL => OW::getLanguage()->text('base', 'authorization_give_user_role'),
        BASE_CMP_ProfileActionToolbar::DATA_KEY_LINK_CLASS => 'ow_mild_green',
        BASE_CMP_ProfileActionToolbar::DATA_KEY_LINK_ORDER => 0
    );

    $event->add($action);

    $js = UTIL_JsGenerator::newInstance()->jQueryEvent('#' . $uniqId, 'click',
        'window.baseChangeUserRoleFB = OW.ajaxFloatBox("BASE_CMP_GiveUserRole", [e.data.userId], { width:556, title: e.data.title });',
        array('e'), array(
        'userId' => $userId,
        'title' => OW::getLanguage()->text('base', 'authorization_user_roles')
    ));

    OW::getDocument()->addOnloadScript($js);
}
OW::getEventManager()->bind(BASE_CMP_ProfileActionToolbar::EVENT_NAME, 'base_elst_auth_user_action_tool');


function base_elst_approve_user_action_tool( BASE_CLASS_EventCollector $event )
{
    if ( !OW::getUser()->isAuthorized('base') )
    {
        return;
    }

    $params = $event->getParams();

    if ( empty($params['userId']) )
    {
        return;
    }

    $userId = (int) $params['userId'];

    if ( BOL_UserService::getInstance()->isApproved($userId) )
    {
        return;
    }

    $action = array(
        BASE_CMP_ProfileActionToolbar::DATA_KEY_LINK_GROUP_KEY => 'base.moderation',
        BASE_CMP_ProfileActionToolbar::DATA_KEY_LINK_GROUP_LABEL => OW::getLanguage()->text('base', 'profile_toolbar_group_moderation'),
        BASE_CMP_ProfileActionToolbar::DATA_KEY_LINK_HREF => OW::getRouter()->urlFor('BASE_CTRL_User', 'approve', array('userId' => $userId)),
        BASE_CMP_ProfileActionToolbar::DATA_KEY_LABEL => OW::getLanguage()->text('base', 'profile_toolbar_user_approve_label'),
        BASE_CMP_ProfileActionToolbar::DATA_KEY_LINK_CLASS => 'ow_mild_green'
    );

    $event->add($action);
}
OW::getEventManager()->bind(BASE_CMP_ProfileActionToolbar::EVENT_NAME, 'base_elst_approve_user_action_tool');


function base_elst_featured_user_action_tool( BASE_CLASS_EventCollector $event )
{
    if ( !OW::getUser()->isAuthorized('base') )
    {
        return;
    }

    $params = $event->getParams();

    if ( empty($params['userId']) )
    {
        return;
    }

    $action = array(
        BASE_CMP_ProfileActionToolbar::DATA_KEY_LINK_GROUP_KEY => 'base.moderation',
        BASE_CMP_ProfileActionToolbar::DATA_KEY_LINK_GROUP_LABEL => OW::getLanguage()->text('base', 'profile_toolbar_group_moderation'),
        BASE_CMP_ProfileActionToolbar::DATA_KEY_LINK_ORDER => 1
    );

    $userId = (int) $params['userId'];

    if ( BOL_UserService::getInstance()->isUserFeatured($userId) )
    {
        $action[BASE_CMP_ProfileActionToolbar::DATA_KEY_LINK_HREF] = OW::getRouter()->urlFor('BASE_CTRL_User', 'controlFeatured', array(
            'id' => $userId,
            'command' => 'unmark'
        ));

        $action[BASE_CMP_ProfileActionToolbar::DATA_KEY_LABEL] = OW::getLanguage()->text('base', 'user_action_unmark_as_featured');
    }
    else
    {
        $action[BASE_CMP_ProfileActionToolbar::DATA_KEY_LINK_HREF] = OW::getRouter()->urlFor('BASE_CTRL_User', 'controlFeatured', array(
            'id' => $userId,
            'command' => 'mark'
        ));

       $action[BASE_CMP_ProfileActionToolbar::DATA_KEY_LABEL] = OW::getLanguage()->text('base', 'user_action_mark_as_featured');
    }

    $backUrl = OW::getRouter()->getBaseUrl() . OW::getRequest()->getRequestUri();
    $action[BASE_CMP_ProfileActionToolbar::DATA_KEY_LINK_HREF] .= "?backUrl={$backUrl}";

    $event->add($action);
}
OW::getEventManager()->bind(BASE_CMP_ProfileActionToolbar::EVENT_NAME, 'base_elst_featured_user_action_tool');


function base_elst_block_user_action_tool( BASE_CLASS_EventCollector $event )
{
    $params = $event->getParams();

    if ( !OW::getUser()->isAuthenticated() )
    {
        return;
    }

    if ( empty($params['userId']) )
    {
        return;
    }

    if ( $params['userId'] == OW::getUser()->getId() )
    {
        return;
    }

    $authorizationService = BOL_AuthorizationService::getInstance();

    if ( $authorizationService->isActionAuthorizedForUser($params['userId'], 'base') || $authorizationService->isSuperModerator($params['userId']) )
    {
        return;
    }

    $userId = (int) $params['userId'];

    $resultArray = array(
        BASE_CMP_ProfileActionToolbar::DATA_KEY_LINK_GROUP_KEY => 'base.moderation',
        BASE_CMP_ProfileActionToolbar::DATA_KEY_LINK_GROUP_LABEL => OW::getLanguage()->text('base', 'profile_toolbar_group_moderation')
    );

    if ( !BOL_UserService::getInstance()->isBlocked($userId, OW::getUser()->getId()) )
    {

        $linkId = 'userblock' . rand(10, 1000000);
        $script = "$('#" . $linkId . "').click(function(){new OW_FloatBox({\$title:" . json_encode(OW::getLanguage()->text('base', 'block_user_confirmation_label')) . ", \$contents: $('#base_user_block_cmp'), width:'480px', height:'165px', icon_class:'ow_ic_add'});});";
        OW::getDocument()->addOnloadScript($script);

        $resultArray[BASE_CMP_ProfileActionToolbar::DATA_KEY_LABEL] = OW::getLanguage()->text('base', 'user_block_btn_lbl');
        $resultArray[BASE_CMP_ProfileActionToolbar::DATA_KEY_CMP_CLASS] = 'BASE_CMP_BlockUser';
        $resultArray[BASE_CMP_ProfileActionToolbar::DATA_KEY_LINK_CLASS] = 'ow_mild_red';
        $resultArray[BASE_CMP_ProfileActionToolbar::DATA_KEY_LINK_HREF] = 'javascript://';
        $resultArray[BASE_CMP_ProfileActionToolbar::DATA_KEY_LINK_ID] = $linkId;

        $event->add($resultArray);
    }
    else
    {
        $linkId = 'userunblock' . rand(10, 1000000);

        $resultArray[BASE_CMP_ProfileActionToolbar::DATA_KEY_LABEL] = OW::getLanguage()->text('base', 'user_unblock_btn_lbl');
        $resultArray[BASE_CMP_ProfileActionToolbar::DATA_KEY_CMP_CLASS] = 'BASE_CMP_BlockUser';
        $resultArray[BASE_CMP_ProfileActionToolbar::DATA_KEY_LINK_CLASS] = 'ow_mild_green';
        $resultArray[BASE_CMP_ProfileActionToolbar::DATA_KEY_LINK_HREF] = OW::getRouter()->urlFor('BASE_CTRL_User', 'unblock', array('id' => $userId)) . '?backUrl=' . OW::getRouter()->getBaseUrl() . OW::getRequest()->getRequestUri();
        $resultArray[BASE_CMP_ProfileActionToolbar::DATA_KEY_LINK_ID] = $linkId;

        $event->add($resultArray);
    }
}
OW::getEventManager()->bind(BASE_CMP_ProfileActionToolbar::EVENT_NAME, 'base_elst_block_user_action_tool');

function base_invite_members_process_join_form( OW_Event $event )
{
    $params = $event->getParams();

    if ( $params['code'] !== null )
    {
        $info = BOL_UserService::getInstance()->findInvitationInfo($params['code']);

        if ( $info !== null )
        {
            throw new JoinRenderException();
        }
    }
}
OW::getEventManager()->bind(OW_EventManager::ON_JOIN_FORM_RENDER, 'base_invite_members_process_join_form');

function base_delete_disaproved_on_unregister( OW_Event $event )
{
    $params = $event->getParams();

    $userId = (int) $params['userId'];
    $userService = BOL_UserService::getInstance();

    if ( !$userService->isApproved($userId) )
    {
        return;
    }

    $userService->deleteDisaproveByUserId($userId);
}
OW::getThemeManager()->addDecorator('ic', $owBasePlugin->getKey());

function base_dashboard_menu_item( BASE_CLASS_EventCollector $event )
{
    $router = OW_Router::getInstance();
    $language = OW::getLanguage();

    $menuItems = array();

    $menuItem = new BASE_MenuItem();

    $menuItem->setKey('widget_panel');
    $menuItem->setLabel($language->text('base', 'widgets_panel_dashboard_label'));
    $menuItem->setIconClass('ow_ic_house');
    $menuItem->setUrl($router->urlForRoute('base_member_dashboard'));
    $menuItem->setOrder(1);

    $event->add($menuItem);


    $menuItem = new BASE_MenuItem();

    $menuItem->setKey('profile_edit');
    $menuItem->setLabel($language->text('base', 'edit_index'));
    $menuItem->setIconClass('ow_ic_user');
    $menuItem->setUrl($router->urlForRoute('base_edit'));
    $menuItem->setOrder(2);

    $event->add($menuItem);

    $menuItem = new BASE_MenuItem();

    $menuItem->setKey('preference');
    $menuItem->setLabel($language->text('base', 'preference_index'));
    $menuItem->setIconClass('ow_ic_gear_wheel');
    $menuItem->setUrl($router->urlForRoute('base_preference_index'));
    $menuItem->setOrder(4);

    $event->add($menuItem);
}
OW::getEventManager()->bind('base.dashboard_menu_items', 'base_dashboard_menu_item');

function base_preference_menu_item( BASE_CLASS_EventCollector $event )
{
    $router = OW_Router::getInstance();
    $language = OW::getLanguage();

    $menuItem = new BASE_MenuItem();

    $menuItem->setKey('preference');
    $menuItem->setLabel($language->text('base', 'preference_menu_item'));
    $menuItem->setIconClass('ow_ic_gear_wheel');
    $menuItem->setUrl($router->urlForRoute('base_preference_index'));
    $menuItem->setOrder(1);

    $event->add($menuItem);
}
OW::getEventManager()->bind('base.preference_menu_items', 'base_preference_menu_item');

function base_add_members_only_exception( BASE_CLASS_EventCollector $event )
{
    $event->add(array('controller' => 'BASE_CTRL_Join', 'action' => 'index'));
    $event->add(array('controller' => 'BASE_CTRL_Join', 'action' => 'joinFormSubmit'));
    $event->add(array('controller' => 'BASE_CTRL_Captcha', 'action' => 'index'));
    $event->add(array('controller' => 'BASE_CTRL_Captcha', 'action' => 'ajaxResponder'));
    $event->add(array('controller' => 'BASE_CTRL_User', 'action' => 'forgotPassword'));
    $event->add(array('controller' => 'BASE_CTRL_User', 'action' => 'resetPasswordRequest'));
    $event->add(array('controller' => 'BASE_CTRL_User', 'action' => 'resetPassword'));
    $event->add(array('controller' => 'BASE_CTRL_User', 'action' => 'ajaxSignIn'));
    $event->add(array('controller' => 'BASE_CTRL_ApiServer', 'action' => 'request'));
    $event->add(array('controller' => 'BASE_CTRL_Unsubscribe', 'action' => 'index'));
}
OW::getEventManager()->bind('base.members_only_exceptions', 'base_add_members_only_exception');

function base_add_password_protected_exceptions( BASE_CLASS_EventCollector $event )
{
    $event->add(array('controller' => 'BASE_CTRL_User', 'action' => 'standardSignIn'));
    $event->add(array('controller' => 'BASE_CTRL_User', 'action' => 'ajaxSignIn'));
    $event->add(array('controller' => 'BASE_CTRL_User', 'action' => 'forgotPassword'));
    $event->add(array('controller' => 'BASE_CTRL_User', 'action' => 'resetPasswordRequest'));
    $event->add(array('controller' => 'BASE_CTRL_User', 'action' => 'resetPassword'));
    $event->add(array('controller' => 'BASE_CTRL_User', 'action' => 'resetPasswordCodeExpired'));
    $event->add(array('controller' => 'BASE_CTRL_EmailVerify', 'action' => 'verify'));
    $event->add(array('controller' => 'BASE_CTRL_ApiServer', 'action' => 'request'));
    $event->add(array('controller' => 'BASE_CTRL_Unsubscribe', 'action' => 'index'));
}
OW::getEventManager()->bind('base.password_protected_exceptions', 'base_add_password_protected_exceptions');

function base_add_maintenance_mode_exceptions( BASE_CLASS_EventCollector $event )
{
    $event->add(array('controller' => 'BASE_CTRL_User', 'action' => 'standardSignIn'));
    $event->add(array('controller' => 'BASE_CTRL_User', 'action' => 'forgotPassword'));
    $event->add(array('controller' => 'BASE_CTRL_User', 'action' => 'resetPassword'));
    $event->add(array('controller' => 'BASE_CTRL_User', 'action' => 'resetPasswordCodeExpired'));
    $event->add(array('controller' => 'BASE_CTRL_User', 'action' => 'resetPasswordRequest'));
    $event->add(array('controller' => 'BASE_CTRL_ApiServer', 'action' => 'request'));
}
OW::getEventManager()->bind('base.maintenance_mode_exceptions', 'base_add_maintenance_mode_exceptions');

/* -------- */

function base_on_notify_actions( BASE_CLASS_EventCollector $e )
{
    $e->add(array(
        'section' => 'base',
        'sectionLabel' => OW::getLanguage()->text('base', 'notification_section_label'),
        'action' => 'base_add_user_comment',
        'description' => OW::getLanguage()->text('base', 'email_notifications_setting_user_comment'),
        'sectionIcon' => 'ow_ic_file',
        'selected' => true
    ));
}
OW::getEventManager()->bind('notifications.collect_actions', 'base_on_notify_actions');

function base_on_add_comment( OW_Event $event )
{
    $params = $event->getParams();

    if ( empty($params['entityType']) || $params['entityType'] !== 'base_profile_wall' )
    {
        return;
    }

    $entityId = $params['entityId'];
    $userId = $params['userId'];
    $commentId = $params['commentId'];

    $userService = BOL_UserService::getInstance();

    $user = $userService->findUserById($entityId);

    if ( $user->getId() == $userId )
    {
        return;
    }

    $comment = BOL_CommentService::getInstance()->findComment($commentId);
    $url = OW::getRouter()->urlForRoute('base_user_profile', array('username' => BOL_UserService::getInstance()->getUserName($entityId)));

    $avatars = BOL_AvatarService::getInstance()->getDataForUserAvatars(array($userId));
    $avatar = $avatars[$userId];

    $event = new OW_Event('notifications.add', array(
        'pluginKey' => 'base',
        'entityType' => 'base_profile_wall',
        'entityId' => $commentId,
        'action' => 'base_add_user_comment',
        'userId' => $user->getId(),
    ), array(
        'avatar' => $avatar,
        'string' => array(
            'key' => 'base+profile_comment_notification',
            'vars' => array(
                'userName' => $userService->getDisplayName($userId),
                'userUrl' => $userService->getUserUrl($userId),
                'profileUrl' => $userService->getUserUrl($user->getId())
            )
        ),
        'content' => $comment->getMessage(),
        'url' => $userService->getUserUrl($user->getId())
    ));

    OW::getEventManager()->trigger($event);
}
OW::getEventManager()->bind('base_add_comment', 'base_on_add_comment');

OW::getRegistry()->setArray('users_page_data', array());


if ( defined('OW_ADS_XP_TOP') )
{

    function base_add_page_banner( BASE_CLASS_EventCollector $event )
    {
        $params = $event->getParams();

        if ( $params['key'] == 'base.content_top' )
        {
            $event->add(OW_ADS_XP_TOP);
        }
        elseif ( $params['key'] == 'base.content_bottom' )
        {
            $event->add(OW_ADS_XP_BOT);
        }
    }
    OW::getEventManager()->bind('base.add_page_content', 'base_add_page_banner');
}

function base_on_avatar_toolbar_collect( BASE_CLASS_EventCollector $e )
{
    $e->add(array(
        'title' => OW::getLanguage()->text('base', 'console_item_label_dashboard'),
        'iconClass' => 'ow_ic_house',
        'url' => OW::getRouter()->urlForRoute('base_member_dashboard'),
        'order' => 1
    ));

    $e->add(array(
        'title' => OW::getLanguage()->text('base', 'console_item_label_profile'),
        'iconClass' => 'ow_ic_user',
        'url' => OW::getRouter()->urlForRoute('base_member_profile'),
        'order' => 3
    ));
}
OW::getEventManager()->bind('base.on_avatar_toolbar_collect', 'base_on_avatar_toolbar_collect');

function base_js_declarations( $e )
{
    //Langs
    OW::getLanguage()->addKeyForJs('base', 'ajax_floatbox_users_title');
    OW::getLanguage()->addKeyForJs('base', 'flag_as');
    OW::getLanguage()->addKeyForJs('base', 'delete_user_confirmation_label');

    $scriptGen = UTIL_JsGenerator::newInstance()->setVariable(array('OW', 'ajaxComponentLoaderRsp'), OW::getRouter()->urlFor('BASE_CTRL_AjaxLoader', 'component'));
    $scriptGen->setVariable(array('OW', 'ajaxAttachmentLinkRsp'), OW::getRouter()->urlFor('BASE_CTRL_Attachment', 'addLink'));

    //Ping
    $scriptGen->addScript('OW.getPing().setRspUrl({$url});', array(
        'url' => OW::getRouter()->urlFor('BASE_CTRL_Ping', 'index')
    ));

    //UsersApi
    $scriptGen->newObject(array('OW', 'Users'), 'OW_UsersApi', array());

    OW::getDocument()->addScriptDeclaration($scriptGen->generateJs());

    //Light Cron
    $cronReady = OW::getConfig()->configExists('base', 'cron_is_configured') && OW::getConfig()->getValue('base', 'cron_is_configured');

    if ( !$cronReady && !defined('OW_PLUGIN_XP') )
    {
        OW::getDocument()->addOnloadScript(UTIL_JsGenerator::composeJsString(
            '$.get({$cron});'
        , array(
            'cron' => OW::getRequest()->buildUrlQueryString(OW_URL_HOME . 'ow_cron/run.php', array(
                'ow-light-cron' => 1
            ))
        )));
    }
}
OW::getEventManager()->bind(OW_EventManager::ON_FINALIZE, 'base_js_declarations');



function base_add_admin_notification( BASE_CLASS_EventCollector $coll )
{
    if ( OW::getConfig()->getValue('base', 'cron_is_configured') || defined('OW_PLUGIN_XP') )
    {
        return;
    }

    $coll->add(OW::getLanguage()->text('admin', 'cron_configuration_required_notice', array(
        'helpUrl' => 'http://docs.oxwall.org/install:cron'
    )));
}
OW::getEventManager()->bind('admin.add_admin_notification', 'base_add_admin_notification');


function base_ads_enabled( BASE_EventCollector $event )
{
    $event->add('base');
}
OW::getEventManager()->bind('ads.enabled_plugins', 'base_ads_enabled');

// delete plugin comments
function base_delete_plugin_comments( OW_Event $event )
{
    $params = $event->getParams();

    if ( !empty($params['pluginKey']) )
    {
        BOL_CommentService::getInstance()->deletePluginComments($params['pluginKey']);
    }
}
OW::getEventManager()->bind(OW_EventManager::ON_BEFORE_PLUGIN_UNINSTALL, 'base_delete_plugin_comments');

function base_add_auth_labels( BASE_CLASS_EventCollector $event )
{
    $language = OW::getLanguage();
    $event->add(
        array(
            'base' => array(
                'label' => $language->text('base', 'auth_group_label'),
                'actions' => array(
                    'add_comment' => $language->text('base', 'auth_action_add_comment'),
                    'delete_comment_by_content_owner' => $language->text('base', 'delete_comment_by_content_owner'),
                    'search_users' => $language->text('base', 'search_users'),
                    'view_profile' => $language->text('base', 'auth_view_profile')
                )
            )
        )
    );
}
OW::getEventManager()->bind('admin.add_auth_labels', 'base_add_auth_labels');

function base_preference_add_form_element( BASE_CLASS_EventCollector $event )
{
    $language = OW::getLanguage();

    $params = $event->getParams();
    $values = $params['values'];

    $fromElementList = array();

    $fromElement = new CheckboxField('mass_mailing_subscribe');
    $fromElement->setLabel($language->text('base', 'preference_mass_mailing_subscribe_label'));
    $fromElement->setDescription($language->text('base', 'preference_mass_mailing_subscribe_description'));

    if ( isset($values['mass_mailing_subscribe']) )
    {
        $fromElement->setValue($values['mass_mailing_subscribe']);
    }

    $fromElementList[] = $fromElement;

    $event->add($fromElementList);
}
OW::getEventManager()->bind(BOL_PreferenceService::PREFERENCE_ADD_FORM_ELEMENT_EVENT, 'base_preference_add_form_element');

function base_add_preference_section_labels( BASE_CLASS_EventCollector $event )
{
    $language = OW::getLanguage();

    $sectionLabels = array(
        'general' => array(
            'label' => $language->text('base', 'preference_section_general'),
            'iconClass' => 'ow_ic_script'
        )
    );

    $event->add($sectionLabels);
}
OW::getEventManager()->bind(BOL_PreferenceService::PREFERENCE_SECTION_LABEL_EVENT, 'base_add_preference_section_labels');

function base_privacy_add_action( BASE_CLASS_EventCollector $event )
{
    $language = OW::getLanguage();

    $action = array(
        'key' => 'base_view_profile',
        'pluginKey' => 'base',
        'label' => $language->text('base', 'privacy_action_view_profile'),
        'description' => '',
        'defaultValue' => 'everybody'
    );

    $event->add($action);

    $action = array(
        'key' => 'base_view_my_presence_on_site',
        'pluginKey' => 'base',
        'label' => $language->text('base', 'privacy_action_view_my_presence_on_site'),
        'description' => '',
        'defaultValue' => 'everybody'
    );

    $event->add($action);
}
OW::getEventManager()->bind('plugin.privacy.get_action_list', 'base_privacy_add_action');

function base_remove_user_preference( OW_Event $event )
{
    $params = $event->getParams();

    $userId = (int) $params['userId'];
    BOL_PreferenceService::getInstance()->deletePreferenceDataByUserId($userId);
}
OW::getEventManager()->bind(OW_EventManager::ON_USER_UNREGISTER, 'base_remove_user_preference');

function base_update_entity_items_status( OW_Event $event )
{
    $params = $event->getParams();

    if ( empty($params['entityType']) || empty($params['entityIds']) || !isset($params['status']) || !is_array($params['entityIds']) )
    {
        return;
    }

    $status = empty($params['status']) ? 0 : 1;

    foreach ( $params['entityIds'] as $entityId )
    {
        BOL_CommentService::getInstance()->setEntityStatus($params['entityType'], $entityId, $status);
        BOL_TagService::getInstance()->updateEntityItemStatus($params['entityType'], $entityId, $status);
        BOL_RateService::getInstance()->updateEntityStatus($params['entityType'], $entityId, $status);
        BOL_VoteService::getInstance()->updateEntityItemStatus($params['entityType'], $entityId, $status);
    }
}
OW::getEventManager()->bind('base.update_entity_items_status', 'base_update_entity_items_status');

function base_feed_collect_configurable_activity( BASE_CLASS_EventCollector $event )
{
    $language = OW::getLanguage();
    $event->add(array(
        'label' => $language->text('admin', 'feed_content_registration'),
        'activity' => 'create:user_join'
    ));

    $event->add(array(
        'label' => $language->text('admin', 'feed_content_edit'),
        'activity' => 'create:user_edit'
    ));

    $event->add(array(
        'label' => $language->text('admin', 'feed_content_avatar_change'),
        'activity' => 'create:avatar-change'
    ));

    $event->add(array(
        'label' => $language->text('admin', 'feed_content_user_comment'),
        'activity' => 'create:user-comment'
    ));
}
OW::getEventManager()->bind('feed.collect_configurable_activity', 'base_feed_collect_configurable_activity');

// attachments events
function base_delete_attachment_image( OW_Event $event )
{
    $params = $event->getParams();
    if ( !empty($params['url']) && strstr($params['url'], OW::getStorage()->getFileUrl(OW::getPluginManager()->getPlugin('base')->getUserFilesDir() . 'attachments')) )
    {
        BOL_AttachmentService::getInstance()->deleteAttachmentByUrl($params['url']);
    }
}
OW::getEventManager()->bind('base.attachment_delete_image', 'base_delete_attachment_image');

function base_save_attachment_image( OW_Event $event )
{
    $params = $event->getParams();
    if ( !empty($params['genId']) )
    {
        return BOL_AttachmentService::getInstance()->saveTempImage($params['genId']);
    }

    return null;
}
OW::getEventManager()->bind('base.attachment_save_image', 'base_save_attachment_image');

function base_plugins_uninstall( OW_Event $e )
{
    $params = $e->getParams();
    $pluginKey = $params['pluginKey'];

    BOL_BillingService::getInstance()->deleteGatewayProductsByPluginKey($pluginKey);
}
OW::getEventManager()->bind(OW_EventManager::ON_BEFORE_PLUGIN_UNINSTALL, 'base_plugins_uninstall');

function base_delete_media_panel_files( OW_Event $e )
{
    $params = $e->getParams();
    $userId = (int) $params['userId'];

    BOL_MediaPanelService::getInstance()->deleteImagesByUserId($userId);
}

OW::getEventManager()->bind(OW_EventManager::ON_USER_UNREGISTER, 'base_delete_media_panel_files');

function base_delete_user_attachments( OW_Event $event )
{
    $params = $event->getParams();

    $userId = (int) $params['userId'];

    if ( $userId > 0 )
    {
        if ( isset($params['deleteContent']) && (bool) $params['deleteContent'] )
        {
            BOL_AttachmentService::getInstance()->deleteUserAttachments($userId);
        }
    }
}
OW::getEventManager()->bind(OW_EventManager::ON_USER_UNREGISTER, 'base_delete_user_attachments');

function base_clear_query_cache_on_user_unregister( OW_Event $event )
{
    $params = $event->getParams();
    $userId = (int) $params['userId'];

    OW::getCacheManager()->clean( array( BOL_UserDao::CACHE_TAG_ALL_USER_LIST ));
}

OW::getEventManager()->bind(OW_EventManager::ON_USER_UNREGISTER, 'base_clear_query_cache_on_user_unregister');

function base_clear_query_cache_on_user_register( OW_Event $event )
{
    $params = $event->getParams();
    $userId = (int) $params['userId'];

    OW::getCacheManager()->clean( array( BOL_UserDao::CACHE_TAG_ALL_USER_LIST ));
}

OW::getEventManager()->bind(OW_EventManager::ON_USER_REGISTER, 'base_clear_query_cache_on_user_register');

function base_clear_query_cache_on_user_suspend( OW_Event $event )
{
    $params = $event->getParams();
    $userId = (int) $params['userId'];

    OW::getCacheManager()->clean( array( BOL_UserDao::CACHE_TAG_ALL_USER_LIST ));
}

OW::getEventManager()->bind(OW_EventManager::ON_USER_SUSPEND, 'base_clear_query_cache_on_user_suspend');

function base_clear_query_cache_on_user_unsuspend( OW_Event $event )
{
    $params = $event->getParams();
    $userId = (int) $params['userId'];

    OW::getCacheManager()->clean( array( BOL_UserDao::CACHE_TAG_ALL_USER_LIST ));
}

OW::getEventManager()->bind(OW_EventManager::ON_USER_UNSUSPEND, 'base_clear_query_cache_on_user_unsuspend');

function base_clear_query_cache_on_user_approve( OW_Event $event )
{
    $params = $event->getParams();
    $userId = (int) $params['userId'];

    OW::getCacheManager()->clean( array( BOL_UserDao::CACHE_TAG_ALL_USER_LIST ));
}

OW::getEventManager()->bind(OW_EventManager::ON_USER_APPROVE, 'base_clear_query_cache_on_user_approve');

function base_clear_query_cache_on_user_disapprove( OW_Event $event )
{
    $params = $event->getParams();
    $userId = (int) $params['userId'];

    OW::getCacheManager()->clean( array( BOL_UserDao::CACHE_TAG_ALL_USER_LIST ));
}

OW::getEventManager()->bind(OW_EventManager::ON_USER_DISAPPROVE, 'base_clear_query_cache_on_user_disapprove');

function base_clear_query_cache_on_user_mark_featured( OW_Event $event )
{
    $params = $event->getParams();
    $userId = (int) $params['userId'];

    OW::getCacheManager()->clean( array( BOL_UserDao::CACHE_TAG_FEATURED_LIST ));
}

OW::getEventManager()->bind(OW_EventManager::ON_USER_MARK_FEATURED, 'base_clear_query_cache_on_user_mark_featured');

function base_clear_query_cache_on_user_unmark_featured( OW_Event $event )
{
    $params = $event->getParams();
    $userId = (int) $params['userId'];

    OW::getCacheManager()->clean( array( BOL_UserDao::CACHE_TAG_FEATURED_LIST ));
}

OW::getEventManager()->bind(OW_EventManager::ON_USER_UNMARK_FEATURED, 'base_clear_query_cache_on_user_unmark_featured');

function base_scroll_declarations( $e )
{
    $plugin = OW::getPluginManager()->getPlugin('base');

    OW::getDocument()->addScript($plugin->getStaticJsUrl() . 'jquery.mousewheel.js');
    OW::getDocument()->addScript($plugin->getStaticJsUrl() . 'jquery.jscrollpane.js');
}
OW::getEventManager()->bind(OW_EventManager::ON_FINALIZE, 'base_scroll_declarations');

BASE_CLASS_ConsoleEventHandler::getInstance()->init();
BASE_CLASS_InvitationEventHandler::getInstance()->init();


function base_captcha( OW_Event $e )
{
   $e->setData(new CaptchaField('captchaField'));
}
OW::getEventManager()->bind('join.get_captcha_field', 'base_captcha');


