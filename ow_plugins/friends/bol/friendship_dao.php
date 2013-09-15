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
 * @author Sardar Madumarov <madumarov@gmail.com>
 * @package ow_plugins.friends.bol
 * @since 1.0
 */
class FRIENDS_BOL_FriendshipDao extends OW_BaseDao
{
    const USER_ID = 'userId';
    const FRIEND_ID = 'friendId';
    const STATUS = 'status';

    const VAL_STATUS_ACTIVE = 'active';
    const VAL_STATUS_PENDING = 'pending';
    const VAL_STATUS_IGNORED = 'ignored';

    const CACHE_TAG_FRIENDS_COUNT = 'friends.count';
    const CACHE_TAG_FRIEND_ID_LIST = 'friends.friend_id_list';
    const CACHE_LIFE_TIME = 86400; //24 hour

    /**
     * Class instance
     *
     * @var FRIENDS_BOL_FriendshipDao
     */
    private static $classInstance;

    /**
     * Class constructor
     *
     */
    protected function __construct()
    {
        parent::__construct();
    }

    /**
     * Returns class instance
     *
     * @return FRIENDS_BOL_FriendshipDao
     */
    public static function getInstance()
    {
        if ( self::$classInstance === null )
        {
            self::$classInstance = new self();
        }

        return self::$classInstance;
    }

    public function getTableName()
    {
        return OW_DB_PREFIX . 'friends_friendship';
    }

    public function getDtoClassName()
    {
        return 'FRIENDS_BOL_Friendship';
    }

    /**
     * Save new friendship request
     *
     * @param integer $requesterId
     * @param integer $userId
     */
    public function request( $requesterId, $userId )
    {
        $ex = new OW_Example();
        $ex->andFieldEqual('userId', $userId)
           ->andFieldEqual('friendId', $requesterId);

        $dto = $this->findObjectByExample($ex);

        $itWasIgnoredByRequester = $dto !== null;

        if ( $itWasIgnoredByRequester )
        {
            $this->save(
                $dto->setStatus('active')
            );

            return;
        }

        $dto = new FRIENDS_BOL_Friendship();

        $dto->setUserId($requesterId)->setFriendId($userId)->setStatus(FRIENDS_BOL_Service::STATUS_PENDING);

        $dto->timeStamp = time();

        $this->save($dto);
    }

    /**
     * Accept new friendship request
     *
     * @param integer $userId
     * @param integer $requesterId
     *
     * @return FRIENDS_BOL_Friendship
     */
    public function accept( $userId, $requesterId )
    {
        $ex = new OW_Example();
        $ex->andFieldEqual('friendId', $userId)
            ->andFieldEqual('userId', $requesterId)
            ->andFieldEqual('status', FRIENDS_BOL_Service::STATUS_PENDING);

        /**
         * @var FRIENDS_BOL_Friendship $dto
         */
        $dto = $this->findObjectByExample($ex);

        if ( empty($dto) )
        {
            return;
        }

        $dto->setStatus(FRIENDS_BOL_Service::STATUS_ACTIVE);

        $this->save($dto);

        return $dto;
    }

    /**
     * Cancel friendship
     *
     * @param integer $requesterId
     * @param integer $userId
     */
    public function cancel( $requesterId, $userId )
    {
        $ex = new OW_Example();

        $ex->andFieldInArray('userId', array($userId, $requesterId))
            ->andFieldInArray('friendId', array($userId, $requesterId));

        $this->deleteByExample($ex);
    }

    /**
     * Ignore new friendship request
     *
     * @param integer $userId
     * @param integer $requesterId
     */
    public function ignore( $userId, $requesterId )
    {
        $ex = new OW_Example();

        $ex->andFieldEqual('userId', $userId)
            ->andFieldEqual('friendId', $requesterId);

        /**
        * @var FRIENDS_BOL_Friendship $dto
        */
        $dto = $this->findObjectByExample($ex);

        $dto->setStatus('ignored');

        $this->save($dto);
    }

    /**
     *
     * @param integer $requesterId
     * @param integer $userId
     */
    public function activate( $requesterId, $userId )
    {
        $query = "UPDATE `{$this->getTableName()}` SET `status`='active' WHERE `userId` IN (:userId, :user2Id) AND `friendId` IN (:userId, :user2Id)";

        $this->dbo->query($query, array(':userId' => (int) $userId, ':user2Id' => (int) $requesterId));
        $this->clearCache();
    }

    public function findFriendship( $userId, $user2Id )
    {
        $query = "SELECT * FROM `{$this->getTableName()}` WHERE ( userId = :userId AND friendId = :user2Id ) OR (userId = :user2Id AND friendId = :userId ) LIMIT 1";

        $cacheLifeTime = self::CACHE_LIFE_TIME;
        $tags = array( self::CACHE_TAG_FRIEND_ID_LIST );

        return $this->dbo->queryForObject($query, $this->getDtoClassName(), array('userId' => $userId, 'user2Id' => $user2Id), $cacheLifeTime, $tags);
    }

    public function findFriendshipById($friendshipId)
    {
        $query = "SELECT * FROM `{$this->getTableName()}` WHERE `id` = :id LIMIT 1";

        return $this->dbo->queryForObject($query, $this->getDtoClassName(), array('id' => $friendshipId));
    }

    public function findFriendIdList( $userId, $first, $count, $userIdList = null )
    {
        $query = "( SELECT `fr`.`" . self::USER_ID . "` FROM `" . $this->getTableName() . "` AS `fr`
            LEFT JOIN `" . BOL_UserSuspendDao::getInstance()->getTableName() . "` AS `us` ON ( `fr`.`" . self::USER_ID . "` = `us`.`userId` )
            WHERE `fr`.`" . self::STATUS . "` = :status1 AND `us`.`userId` IS NULL AND `fr`.`" . self::FRIEND_ID . "` = :userId1
            " . ( empty($userIdList) ? '' : " AND `" . self::USER_ID . "` IN ( " . $this->dbo->mergeInClause($userIdList) . " )" ) . " )
            UNION
            ( SELECT `fr`.`" . self::FRIEND_ID . "` AS `userId` FROM `" . $this->getTableName() . "` AS `fr`
            LEFT JOIN `" . BOL_UserSuspendDao::getInstance()->getTableName() . "` AS `us` ON ( `fr`.`" . self::FRIEND_ID . "` = `us`.`userId` )
            WHERE `fr`.`" . self::STATUS . "` = :status2 AND `us`.`userId` IS NULL AND `fr`.`" . self::USER_ID . "` = :userId2
            " . ( empty($userIdList) ? '' : " AND `" . self::FRIEND_ID . "` IN ( " . $this->dbo->mergeInClause($userIdList) . " )" ) . " )
            LIMIT :first, :count
            ";

        $cacheLifeTime = self::CACHE_LIFE_TIME;
        $tags = array( self::CACHE_TAG_FRIEND_ID_LIST );

        return $this->dbo->queryForColumnList($query,
            array(
                'userId1' => $userId,
                'userId2' => $userId,
                'status1' => self::VAL_STATUS_ACTIVE,
                'status2' => self::VAL_STATUS_ACTIVE,
                'first' => $first,
                'count' => $count),
            $cacheLifeTime,
            $tags
        );
    }

    public function findUserFriendsCount( $userId, $userIdList = null )
    {
        $query = "SELECT SUM(`count`) AS `count` FROM (
            ( SELECT COUNT(*) AS `count` FROM `" . $this->getTableName() . "` AS `fr`
            LEFT JOIN `" . BOL_UserSuspendDao::getInstance()->getTableName() . "` AS `us` ON ( `fr`.`" . self::USER_ID . "` = `us`.`userId` )
            WHERE `fr`.`" . self::STATUS . "` = :status1 AND `us`.`userId` IS NULL AND `fr`.`" . self::FRIEND_ID . "` = :userId1
            " . ( empty($userIdList) ? '' : " AND `" . self::USER_ID . "` IN ( " . $this->dbo->mergeInClause($userIdList) . " )" ) . " )
            UNION ALL
            ( SELECT COUNT(*) AS `count` FROM `" . $this->getTableName() . "` AS `fr`
            LEFT JOIN `" . BOL_UserSuspendDao::getInstance()->getTableName() . "` AS `us` ON ( `fr`.`" . self::FRIEND_ID . "` = `us`.`userId` )
            WHERE `fr`.`" . self::STATUS . "` = :status2 AND `us`.`userId` IS NULL AND `fr`.`" . self::USER_ID . "` = :userId2
            " . ( empty($userIdList) ? '' : " AND `" . self::FRIEND_ID . "` IN ( " . $this->dbo->mergeInClause($userIdList) . " )" ) . " )
            ) AS `temp`";

        $cacheLifeTime = self::CACHE_LIFE_TIME;
        $tags = array( self::CACHE_TAG_FRIENDS_COUNT );

        return (int)$this->dbo->queryForColumn($query,
            array('userId1' => $userId,
                'userId2' => $userId,
                    'status1' => self::VAL_STATUS_ACTIVE,
                    'status2' => self::VAL_STATUS_ACTIVE
                ),
            $cacheLifeTime,
            $tags
        );
    }

    public function findRequestedUserIdList( $userId, $first, $count )
    {
        $query = "SELECT `friendId` FROM `{$this->getTableName()}` WHERE `userId` = ? AND `status` != ? LIMIT ?, ?";
        return $this->dbo->queryForColumnList($query, array($userId, FRIENDS_BOL_Service::STATUS_ACTIVE, $first, $count));
    }

    public function findRequesterUserIdList( $userId, $first, $count )
    {
        $query = "SELECT `userId` FROM `{$this->getTableName()}` WHERE `friendId` = ? AND `status`= ? LIMIT ?, ?";

        return $this->dbo->queryForColumnList($query, array($userId, FRIENDS_BOL_Service::STATUS_PENDING, $first, $count));
    }

    public function count( $userId=null, $friendId=null, $status=null, $orStatus=null, $viewed = null )
    {
        $ex = new OW_Example();

        if ( $userId !== null )
        {
            $ex->andFieldEqual('userId', $userId);
        }

        if ( $friendId !== null )
        {
            $ex->andFieldEqual('friendId', $friendId);
        }

        if ( $status !== null )
        {
            if ( $orStatus !== null )
            {
                $ex->andFieldInArray('status', array($status, $orStatus));
            }
            else
            {
                $ex->andFieldEqual('status', $status);
            }
        }

        if ( $viewed !== null )
        {
            $ex->andFieldEqual('viewed', (int) (bool) $viewed);
        }

        $cacheLifeTime = self::CACHE_LIFE_TIME;
        $tags = array( self::CACHE_TAG_FRIENDS_COUNT );

        return $this->countByExample($ex, $cacheLifeTime, $tags);
    }

    public function deleteUserFriendships( $userId )
    {
        $query = "DELETE FROM `{$this->getTableName()}` WHERE `userId` = ? OR `friendId` = ?";

        $this->dbo->delete($query, array($userId, $userId));

        $this->clearCache();
    }

    public function findAllActiveFriendships()
    {
        $ex = new OW_Example();

        $ex->andFieldEqual('status', FRIENDS_BOL_Service::STATUS_ACTIVE);

        return $this->findListByExample($ex);
    }

    public function findActiveFriendships( $first, $count )
    {
        $ex = new OW_Example();

        $ex->andFieldEqual('status', FRIENDS_BOL_Service::STATUS_ACTIVE);
        $ex->setOrder('`id` ASC');
        $ex->setLimitClause($first, $count);

        return $this->findListByExample($ex);
    }

    public function findFriendshipListByUserId( $userId, $userIdList = array() )
    {
         $query = "( SELECT `fr`.`id`, `fr`.`userId`, `fr`.`friendId`, `fr`.`status` FROM `" . $this->getTableName() . "` AS `fr`
            LEFT JOIN `" . BOL_UserSuspendDao::getInstance()->getTableName() . "` AS `us` ON ( `fr`.`" . self::USER_ID . "` = `us`.`userId` )
            WHERE `fr`.`" . self::STATUS . "` = :status1 AND `us`.`userId` IS NULL AND `fr`.`" . self::FRIEND_ID . "` = :userId1
            " . ( empty($userIdList) ? '' : " AND `" . self::USER_ID . "` IN ( " . $this->dbo->mergeInClause($userIdList) . " )" ) . " )
            UNION
            ( SELECT `fr`.`id`, `fr`.`userId`, `fr`.`friendId`, `fr`.`status` FROM `" . $this->getTableName() . "` AS `fr`
            LEFT JOIN `" . BOL_UserSuspendDao::getInstance()->getTableName() . "` AS `us` ON ( `fr`.`" . self::FRIEND_ID . "` = `us`.`userId` )
            WHERE `fr`.`" . self::STATUS . "` = :status2 AND `us`.`userId` IS NULL AND `fr`.`" . self::USER_ID . "` = :userId2
            " . ( empty($userIdList) ? '' : " AND `" . self::FRIEND_ID . "` IN ( " . $this->dbo->mergeInClause($userIdList) . " )" ) . " ) ";

        return $this->dbo->queryForObjectList($query,
            $this->getDtoClassName(),
            array(
                'userId1' => $userId,
                'userId2' => $userId,
                'status1' => self::VAL_STATUS_ACTIVE,
                'status2' => self::VAL_STATUS_ACTIVE,
                )
        );
    }

    public function findRequestList($userId, $beforeStamp, $offset, $count)
    {
        $example = new OW_Example();

        $example->andFieldEqual('friendId', $userId);
        $example->andFieldEqual('status', FRIENDS_BOL_Service::STATUS_PENDING);
        $example->andFieldLessOrEqual('timeStamp', $beforeStamp);
        $example->setLimitClause($offset, $count);
        $example->setOrder('viewed, timeStamp DESC');

        return $this->findListByExample($example);
    }

    public function markViewedByIds( array $ids, $viewed = true )
    {
        if ( empty($ids) )
        {
            return;
        }

        $in = implode(',', $ids);

        $query = "UPDATE " . $this->getTableName() . " SET `viewed`=:viewed WHERE id IN ( " . $in . " )";

        $this->dbo->query($query, array(
            'viewed' => $viewed ? 1 : 0
        ));

        $this->clearCache();
    }

    public function findUnreadFriendRequestsForUserIdList($userIdList)
    {
        $example = new OW_Example();

        $example->andFieldInArray('friendId', $userIdList);
        $example->andFieldEqual('status', FRIENDS_BOL_Service::STATUS_PENDING);
        $example->andFieldEqual('notificationSent', 0);
        $example->andFieldEqual('viewed', 0);
        $example->setOrder(' timeStamp DESC ');

        return $this->findListByExample($example);
    }

    protected function clearCache()
    {
        OW::getCacheManager()->clean( array( FRIENDS_BOL_FriendshipDao::CACHE_TAG_FRIENDS_COUNT, FRIENDS_BOL_FriendshipDao::CACHE_TAG_FRIEND_ID_LIST ));
    }
}