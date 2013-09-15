<?php 
//require_once OW_DIR_LIB . 'facebook' . DS . 'facebook.php';

class GCONNECT_BOL_ServiceBase
{
    /**
     *
     * @var Facebook
     */
    protected $google;
    /**
     *
     * @var GCONNECT_CLASS_ConnectDetails
     */
    protected $googleDetail;

    /**
     * Class constructor
     *
     */
    protected function __construct()
    {

    }

	public function getGoogle(){
		if ( empty($this->google) ) {
			$this->google = new GoogleApi();
		}
		return $this->google;
		
	}
	
}

class GoogleApi {
	
	private $token, $url, $scope;
	
	public function __construct() {
		$this->url = 'https://www.google.com/m8/feeds/contacts/default/full?access_token=';
	}
	
	public function setToken($t) {
		//todo: check the token is valid
		$this->token = $t;
	} 
	
	public function getContact(){
		libxml_use_internal_errors(false);
		if ( !strlen($this->token) ) { return false; }
		$xml_user = file_get_contents($this->url.$this->token);
		$xml_user = simplexml_load_string($xml_user);
		return ( $xml_user !== false   ? $xml_user : false );
	}
	
}