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
 * Data Transfer Object for `notifications_notification` table.
 *
 * @author Sergey Kambalin <greyexpert@gmail.com>
 * @package notifications.bol
 * @since 1.0
 */
class NOTIFICATIONS_BOL_Notification extends OW_Entity
{
    /**
     * @var string
     */
    public $entityType;

    /**
     * @var int
     */
    public $entityId;

    /**
     * @var int
     */
    public $userId;

    /**
     *
     * @var string
     */
    public $pluginKey;

    /**
     * @var int
     */
    public $timeStamp;

    /**
     *
     * @var int
     */
    public $viewed = false;

    /**
     *
     * @var int
     */
    public $sent = false;

    /**
     *
     * @var int
     */
    public $active = true;

    /**
     *
     * @var string
     */
    public $action;

    /**
     * @var data
     */
    public $data;

    public function setData( $data )
    {
        $this->data = json_encode($data);
    }

    public function getData()
    {
        return empty($this->data) ? null : json_decode($this->data, true);
    }
}
