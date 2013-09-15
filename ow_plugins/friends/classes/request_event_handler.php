<?php

class FRIENDS_CLASS_RequestEventHandler
{
    /**
     * Class instance
     *
     * @var FRIENDS_CLASS_RequestEventHandler
     */
    private static $classInstance;

    /**
     * Returns class instance
     *
     * @return FRIENDS_CLASS_RequestEventHandler
     */
    public static function getInstance()
    {
        if ( !isset(self::$classInstance) )
        {
            self::$classInstance = new self();
        }

        return self::$classInstance;
    }

    const CONSOLE_ITEM_KEY = 'friend_requests';

    /**
     *
     * @var FRIENDS_BOL_Service
     */
    private $service;

    private function __construct()
    {
        $this->service = FRIENDS_BOL_Service::getInstance();
    }

    public function collectItems( BASE_CLASS_ConsoleItemCollector $event )
    {
        if (OW::getUser()->isAuthenticated())
        {
            $item = new FRIENDS_CMP_ConsoleFriendRequests();
            $count = $this->service->count(null, OW::getUser()->getId(), FRIENDS_BOL_Service::STATUS_PENDING);
            if ( $count == 0 )
            {
                $item->setIsHidden(true);
            }

            $event->addItem($item, 5);
        }
    }

    /* Console list */

    public function ping( BASE_CLASS_ConsoleDataEvent $event )
    {
        $userId = OW::getUser()->getId();
        $data = $event->getItemData(self::CONSOLE_ITEM_KEY);

        $allInvitationCount = $this->service->count(null, $userId, FRIENDS_BOL_Service::STATUS_PENDING);
        $newInvitationCount = $this->service->count(null, $userId, FRIENDS_BOL_Service::STATUS_PENDING, null, false);

        $data['counter'] = array(
            'all' => $allInvitationCount,
            'new' => $newInvitationCount
        );

        $event->setItemData('friend_requests', $data);
    }

    public function loadList( BASE_CLASS_ConsoleListEvent $event )
    {
        $params = $event->getParams();
        $userId = OW::getUser()->getId();

        if ( $params['target'] != self::CONSOLE_ITEM_KEY )
        {
            return;
        }

        $requests = $this->service->findRequestList($userId, $params['console']['time'], $params['offset'], 10);

        $requestIds = array();

        foreach ( $requests as $request )
        {
            $avatar = BOL_AvatarService::getInstance()->getDataForUserAvatars(array($request->userId), true, true, true, false );
            $avatar = $avatar[$request->userId];

            $userUrl = OW::getRouter()->urlForRoute('base_user_profile', array('username'=>BOL_UserService::getInstance()->getUserName($request->userId)));
            $displayName = BOL_UserService::getInstance()->getDisplayName($request->userId);
            $string = OW::getLanguage()->text('friends', 'console_request_item', array( 'userUrl'=> $userUrl, 'displayName'=>$displayName ));


            $item = new FRIENDS_CMP_RequestItem();
            $item->setAvatar($avatar);
            $item->setContent($string);
            $item->setToolbar(array(
                array(
                    'label' => OW::getLanguage()->text('friends', 'accept_request'),
                    'id' => 'friend_request_accept_'.$request->userId
                ),
                array(
                    'label' => OW::getLanguage()->text('friends', 'ignore_request'),
                    'id' => 'friend_request_ignore_'.$request->userId
                )
            ));

            if (!$request->viewed)
            {
                $item->addClass('ow_console_new_message');
            }


            $js = UTIL_JsGenerator::newInstance();

            $js->jQueryEvent('#friend_request_accept_'.$request->userId, 'click', <<<EOT
OW.FriendRequest.accept('{$item->getKey()}', {$request->userId});
EOT
);

            $js->jQueryEvent('#friend_request_ignore_'.$request->userId, 'click', <<<EOT
OW.FriendRequest.ignore('{$item->getKey()}', {$request->userId});
EOT
);

            OW::getDocument()->addOnloadScript($js->generateJs());

            $requestIds[] = $request->id;

            $event->addItem($item->render());
        }

        $this->service->markViewedByIds($requestIds);
    }

    public function init()
    {
        OW::getEventManager()->bind('console.collect_items', array($this, 'collectItems'));
        OW::getEventManager()->bind('console.ping', array($this, 'ping'));
        OW::getEventManager()->bind('console.load_list', array($this, 'loadList'));
    }
}