<?php

namespace app\controllers;

use app\transfer\User;
use app\forms\LoginForm;

class LoginCtrl{
    
	private $form;
	
	public function __construct(){
		$this->form = new LoginForm();
	}
	
	public function getParams(){
		$this->form->login = getFromRequest('login');
		$this->form->pass = getFromRequest('pass');
	}
	
	public function validate() {
	
			
	if (! getMessages()->isError ()) {
			
			if ($this->form->login == "") {
				getMessages()->addError ( 'Brak loginu' );
			}
			if ($this->form->pass == "") {
				getMessages()->addError ( 'Brak hasła' );
			}
		}

                
                
	if ( !getMessages()->isError() ) {
		
			if ($this->form->login == "admin" && $this->form->pass == "admin") 
                        {
				$user = new User($this->form->login, 'admin');
				$_SESSION['user'] = serialize($user);
				addRole($user->role);

			} else if ($this->form->login == "user" && $this->form->pass == "user") 
                        {
				$user = new User($this->form->login, 'user');
				$_SESSION['user'] = serialize($user);
				addRole($user->role);

			} else {
				getMessages()->addError('Nieprawidłowe dane');
			}
		}
		
		return ! getMessages()->isError();
	}
	
	public function Login(){

		$this->getParams();
		
		if ($this->validate()){
			header("Location: ".getConf()->app_url."/");
		} else {
			$this->genView(); 
		}
		
	}
	
	public function Logout(){
		session_destroy();
		$this->genView();		 
	}
	
	public function genView(){
		
		getSmarty()->display('LoginView.tpl');		
	}
}