<?php

class GCONNECT_BOL_Service extends GCONNECT_BOL_ServiceBase
{
	private  $jsInit = false;
    private static $classInstance;
	private static $scope = array('https://www.google.com/m8/feeds/');

    /**
     * Returns class instance
     *
     * @return GCONNECT_BOL_Service
     */
    public static function getInstance()
    {
        if ( null === self::$classInstance )
        {
            self::$classInstance = new self();
        }

        return self::$classInstance;
    }
	
	public static function getScope() {
		return implode(',', self::$scope);
	}
	
	public function gRequireUser() {
		//$user = $this->getGoogle()->getUser();
		$user = false;
		if(isset($_COOKIE['gtoken'])) {
			if ( strlen($_COOKIE['gtoken']) > 0) {
				$google = $this->getGoogle();
				$google->setToken($_COOKIE['gtoken']);
				$user = $google->getContact(); //return array;
			}
		}
		return ( !$user ? false : $user );
	}
	
	/*
	 * Prepare the document
	 * 
	 */
    public function initializeJs() {
		if ($this->jsInit) {
			return;
		}
		$document = OW::getDocument();
        $document->addScript(OW::getPluginManager()->getPlugin('gconnect')->getStaticJsUrl() . 'gas.js');
		$this->jsInit = true;
	}

	
}