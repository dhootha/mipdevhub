<?php


class GCONNECT_BOL_AdminService extends GCONNECT_BOL_ServiceBase
{
    private static $classInstance;

    /**
     * Returns class instance
     *
     * @return FBCONNECT_BOL_AdminService
     */
    public static function getInstance() {
        if ( null === self::$classInstance )
        {
            self::$classInstance = new self();
        }

        return self::$classInstance;
    }

    public static function configureApplication() {
   
        return true;
    }
	
	
}