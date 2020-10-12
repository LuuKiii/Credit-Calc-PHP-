<?php

require_once 'init.php';

getConf()->login_action = 'login';

switch ($action) {
    default:
        control('app\\controllers','CalcCtrl', 'GenView',['user','admin']);

     case 'calculate':
        control('app\\controllers','CalcCtrl', 'process',['user','admin']);

     case 'Ad':
        control('app\\controllers','AdCtrl', 'GenView',['user','admin']);

     case 'login':
        control('app\\controllers', 'LoginCtrl', 'Login');
     case 'logout':
        control('app\\controllers','LoginCtrl', 'Logout',['user','admin']);
}

