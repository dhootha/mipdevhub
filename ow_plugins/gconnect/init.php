<?php

$plugin = OW::getPluginManager()->getPlugin('gconnect');

//Route che punta al login : gconnect_login
OW::getRouter()->addRoute(new OW_Route('gconnect_login', 'google-connect/login', 'GCONNECT_CTRL_Connect', 'login'));
OW::getRouter()->addRoute(new OW_Route('gconnect_oauth', 'google-connect/oatuh', 'GCONNECT_CTRL_Connect', 'oauth'));


//Route che punta alla prima maschera di configurazione
OW::getRouter()->addRoute(new OW_Route('gconnect_admin_main','admin/plugins/gconnect','GCONNECT_CTRL_Admin', 'index'));
OW::getRouter()->addRoute(new OW_Route('gconnect_app_success_page','admin/plugins/gconnect','GCONNECT_CRTL_Admin', 'success'));

$configs = OW::getConfig()->getValues('gconnect');
if ( !empty($configs['client_id']) && !empty($configs['client_secret']) ) {
	$registry = OW::getRegistry();
	$registry->addToArray(BASE_CTRL_Join::JOIN_CONNECT_HOOK, array(new GCONNECT_CMP_ConnectButton(), 'render'));
	$registry->addToArray(BASE_CMP_ConnectButtonList::HOOK_REMOTE_AUTH_BUTTON_LIST, array(new GCONNECT_CMP_ConnectButton(), 'render'));
		
}

//Funzione per notificare che si necessita la configurazione del plugin

function gconnect_add_admin_notification( BASE_CLASS_EventCollector $e )
 {
    $language = OW::getLanguage();
    $configs = OW::getConfig()->getValues('gconnect');
    if ( empty($configs['client_id']) || empty($configs['client_secret']) )
    {
        $e->add($language->text('GConnect', 'admin_configuration_required_notification', array( 'href' => OW::getRouter()->urlForRoute('gconnect_admin_main') )));
    }
 }
 //Bindo l'evento della notifica nell'admin
 OW::getEventManager()->bind('admin.add_admin_notification', 'gconnect_add_admin_notification');
 
function gconnect_add_access_exception( BASE_CLASS_EventCollector $e ) {
	$e->add(array('controller' => 'GCONNECT_CTRL_Connect', 'action' => 'login'));
	$e->add(array('controller' => 'GCONNECT_CTRL_Connect', 'action' => 'oauth'));

}

OW::getEventManager()->bind('base.members_only_exceptions', 'gconnect_add_access_exception');
OW::getEventManager()->bind('base.password_protected_exceptions', 'gconnect_add_access_exception');
OW::getEventManager()->bind('base.splash_screen_exceptions', 'gconnect_add_access_exception');


//Notifico nella tua feedback che ti sei loggato con google 
function gconnect_event_on_user_registered( OW_Event $event )
{
    $params = $event->getParams();

    if ( $params['method'] != 'google' )
    {
        return;
    }

    $userId = (int) $params['userId'];

    $event = new OW_Event('feed.action', array(
        'pluginKey' => 'base',
        'entityType' => 'user_join',
        'entityId' => $userId,
        'userId' => $userId,
        'replace' => true,
    ), array(
        'string' => OW::getLanguage()->text('GConnect', 'feed_user_join'),
        'view' => array(
            'iconClass' => 'ow_ic_user'
        )
    ));
    OW::getEventManager()->trigger($event);
}
OW::getEventManager()->bind(OW_EventManager::ON_USER_REGISTER, 'gconnect_event_on_user_registered');
