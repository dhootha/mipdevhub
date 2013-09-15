<?php

class GCONNECT_CTRL_Connect extends OW_ActionController
{
    /**
     *
     * @var GCONNECT_BOL_Service
     */
    private $service;

    public function init()
    {
        $this->service = GCONNECT_BOL_Service::getInstance();
    }

	public function oauth(){
		$authurl = OW::getRouter()->getBaseUrl().OW::getRouter()->uriForRoute('gconnect_login');
		$this->assign('authurl', $authurl);
	}
	
	public function login( $params )
    {
		 $backUri = empty($_GET['backUri']) ? '' : urldecode($_GET['backUri']);
         $backUrl = OW_URL_HOME . $backUri;
         $language = OW::getLanguage();
		 $user = $this->service->gRequireUser();
		 if ( !$user) {
			// var_dump($_COOKIE);
			 $this->redirect(OW::getRouter()->getBaseUrl());
		 }else {
			 // Register or login 
			 $datalogin = $user->author;
			 $datalogin = get_object_vars($datalogin);
			 $name = explode(' ',$datalogin['name']);
			 $count = 0;$nome = ''; $cognome = '';
			 foreach ( $name as $userval ){
				 if (!$count) { $nome = $userval;$count++; continue; }
				 $cognome .= $userval.' ';
				 $count++;
			 }
	         $authAdapter = new GCONNECT_CLASS_AuthAdapter($datalogin['email']);
			 if ( $authAdapter->isRegistered() ) {
				 // LOGIN
				 //se è registrato loggo l'utente collegato 
				 $authResult = OW::getUser()->authenticate($authAdapter);
				if ( $authResult->isValid() ){
				    OW::getFeedback()->info($language->text('GConnect', 'login_success_msg'));
			    }
			    else{
					OW::getFeedback()->error($language->text('GCconnect', 'login_failure_msg'));
				 }
				 //Redireziono sull profilo
  	             $this->redirect(OW::getRouter()->urlForRoute('base_member_profile'));
			 }else{
				 //REGISTER
				 //se non lo è lo registro
				 $username = strtolower(str_replace(' ','',$nome.$cognome.uniqid()));
				 $username = preg_replace('/[^A-Za-z0-9_]/', '', $username);
				// var_dump($datalogin,$username);exit;
				 $password = uniqid();
				 try{
				    $user = BOL_UserService::getInstance()->createUser($username, $password, $datalogin['email'], null, true);
				 } catch ( Exception $e ) {
					switch ( $e->getCode() ){
					    case BOL_UserService::CREATE_USER_DUPLICATE_EMAIL:
							//Se la mail è gi�  stata usata verifico l'id utente e lo loggo con esso
							$searcher = BOL_UserService::getInstance()->findByEmail($datalogin['email']);
							if ( strlen($searcher->id) > 0 ) {
								OW::getUser()->login($searcher->id);
								$this->redirect(OW::getRouter()->urlForRoute('base_member_profile'));
							}
							OW::getFeedback()->error($language->text('GConnect', 'join_dublicate_email_msg'));
							$this->redirect(OW::getRouter()->getBaseUrl());
						break;
			            case BOL_UserService::CREATE_USER_INVALID_USERNAME:
				            OW::getFeedback()->error($language->text('GConnect', 'join_incorrect_username'));
						    $this->redirect(OW::getRouter()->getBaseUrl());
						break;
		                default:
				            OW::getFeedback()->error($language->text('GConnect', 'join_incomplete'));
						    $this->redirect(OW::getRouter()->getBaseUrl());
					}
				} //END TRY-CATCH
		        BOL_QuestionService::getInstance()->saveQuestionsData(array('realname' => $nome.' '.$cognome), $user->id);
				//Registro l'utente nella base_remote_auth
				$authAdapter->register($user->id);
				//Autentico l'utente
		        $authResult = OW_Auth::getInstance()->authenticate($authAdapter);
				if ( $authResult->isValid() ){
				    $event = new OW_Event(OW_EventManager::ON_USER_REGISTER, array('method' => 'google', 'userId' => $user->id));
					OW::getEventManager()->trigger($event);
					OW::getFeedback()->info($language->text('GConnect', 'join_success_msg'));
				} else {
					OW::getFeedback()->error($language->text('GConnect', 'join_failure_msg'));
				}
				 //Redirezione sull'edit del profilo
  	             $this->redirect(OW::getRouter()->urlForRoute('base_edit'));
			}

		 }
	}

	
}