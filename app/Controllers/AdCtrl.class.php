<?php

namespace app\controllers;


class AdCtrl {
    
    public function GenView(){	
	getSmarty()->display('Ad.tpl');
    }
}
