<?php

class GCONNECT_CMP_ConnectButton extends OW_Component {
	
	public function render()
    {
        $config = OW::getConfig();
		$clientId = $config->getValue('gconnect', 'client_id');
		$scope = GCONNECT_BOL_Service::getScope();
		$this->assign('clientid',$clientId);
		$this->assign('scope',$scope);
		$this->assign('backurl',OW::getRouter()->urlForRoute('gconnect_oauth'));
		$this->assign('icons', OW::getPluginManager()->getPlugin('gconnect')->getStaticUrl().'gapi.png');
        GCONNECT_BOL_Service::getInstance()->initializeJs();
        return parent::render();
    }
	
}