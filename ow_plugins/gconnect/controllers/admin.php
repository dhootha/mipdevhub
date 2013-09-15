<?php

class GCONNECT_CTRL_Admin extends ADMIN_CTRL_Abstract
{
	public function __construct() {
        parent::__construct();
    }
	public function index(){	

		$form = new GCONNECT_AccessForm();
		$this->addForm($form);
	
		//Verifico le post , se ci sono l'utente sta salvando la configurazione iniziale
		if ( OW::getRequest()->isPost() && $form->isValid($_POST) ){
			//Funzione di inserimento parametri
			if ( $form->process() ){
				OW::getFeedback()->info(OW::getLanguage()->text('GConnect', 'register_app_success'));
				$this->redirect(OW::getRouter()->urlForRoute('gconnect_app_success_page'));
			}
			//insermento fallito
            OW::getFeedback()->error(OW::getLanguage()->text('GConnect', 'register_app_failed'));	
			$this->redirect();
		}  
		$this->assign('returnUrl',OW::getRouter()->urlForRoute('gconnect_oauth'));
		OW::getDocument()->setHeading(OW::getLanguage()->text('GConnect', 'heading_configuration'));
        OW::getDocument()->setHeadingIconClass('ow_ic_friends');
	}
	
	public function success() {
		OW::getDocument()->setHeading(OW::getLanguage()->text('GConnect', 'heading_configuration'));
		$success_text = OW::getLanguage()->text('GConnect','register_success_msg');
		$this->assign('text', $success_text);
	}
}

class GCONNECT_AccessForm extends Form {
	
	public function __construct()
    {
        parent::__construct('GCONNECT_AccessForm');
        $config = OW::getConfig();
		
		$field = new TextField('clientId');
        $field->setRequired(true);
	    $field->setValue($config->getValue('gconnect', 'client_id'));
		$this->addElement($field);
        
		$field = new TextField('clientSecret');
		$field->setRequired(true);
		$field->setValue($config->getValue('gconnect', 'client_secret'));
		$this->addElement($field);
		
		$submit = new Submit('save');
        $submit->setValue(OW::getLanguage()->text('GConnect', 'save_btn_label'));
		$this->addElement($submit);
	}
	
	public function process(){
        //raccolgo le post
		$values = $this->getValues();
		
        $config = OW::getConfig();

        $apiId = trim($values['clientId']);
        $apiSecret = trim($values['clientSecret']);

        $config->saveConfig('gconnect', 'client_id', $apiId);
        $config->saveConfig('gconnect', 'client_secret', $apiSecret);

        return GCONNECT_BOL_AdminService::getInstance()->configureApplication();
    }
	
}