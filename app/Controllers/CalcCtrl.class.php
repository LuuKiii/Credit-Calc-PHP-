<?php

namespace app\controllers;

use app\forms\CalcForm;
use app\transfer\CalcResult;
use app\transfer\User;




class CalcCtrl{
    
    private $form;   
    private $result;
    
    
    public function __construct(){
    $this->form = new CalcForm();
    $this->result = new CalcResult();
    }
    
    
    public function getParams(){
	$this->form->kwota = getFromRequest('kwota');
	$this->form->proc = getFromRequest('proc');
	$this->form->czas = getFromRequest('czas');
        $this->form->jed = getFromRequest('jed');
        }
    
    
    public function validate(){	
	
	if ( ! (isset($this->form->kwota) && isset($this->form->proc) && isset($this->form->czas)&& isset($this->form->jed) ))	return false;
	

        if ( $this->form->kwota == "") {getMessages()->addError('Nie podano Kwoty');}
        if ( $this->form->proc == "") {getMessages()->addError ('Nie podano Oprocentowania');}
        if ( $this->form->czas == "") {getMessages()->addError('Nie podano czasu');}
	
	if (!getMessages()->isError()) {
                if (! is_numeric( $this->form->kwota )) {getMessages()->addError ('Kwota musi być liczbą');}
                if (! is_numeric( $this->form->proc )) {getMessages()->addError('Oprocentowanie musi być liczbą');}
                if (! is_numeric( $this->form->czas )) {getMessages()->addError('Czas musi być liczbą');}
	}
	if (inRole('user')&& $this->form->jed =='m')
        {
            getMessages()->addError ('Liczenie w miesiącach dostępne tylko dla admina');
        }
        if (!getMessages()->isError()){
       if ( $this->form->proc >=100) {getMessages()->addError ('Oprocentowanie nie może być większne niż 100%');}
         if ( $this->form->proc <0) {getMessages()->addError('Oprocentowanie nie może być mniejsze niż 0%');}
          if ( $this->form->czas <=0) {getMessages()->addError('Czas nie może być mniejsza niż 0');}
           if ( $this->form->kwota <=0){ getMessages()->addError('Kwota nie może być mniejsza niż 0');}
        }
	return !  getMessages()->isError();
}
        

    function process(){
        
        $this->getParams();
        
        if($this->validate())
        {
	$temp;
	
	$thisk = floatval($this->form->kwota);
	$thisp = floatval($this->form->proc);
        $this->form->czas = floatval($this->form->czas);
        
        
        $temp=$this->form->czas;
        
        if($this->form->jed=="r")
        {
            $temp = $this->form->czas*12;
        }
	
	$this->result->result = $thisk+($thisk*($thisp/100))*$temp;
	$this->result->rata = $this->result->result/$temp;
        }
        
        $this->genView();
}

        public function genView(){
            
            getSmarty()->assign('form',$this->form);
            getSmarty()->assign('res',$this->result);
		
            getSmarty()->display('calc_view.tpl');
    }
    
}



