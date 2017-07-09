<?php

class EditNews extends Controller {

    function __construct() {
        parent::__construct();
        Session::init();
        $logged = Session::get('a2adebdt39$0');
        $adm = Session::get('37b421#lcas$oo0$e');
        
        if ($logged == false || $adm == false) {
            Session::destroy();
            header('location: '.URL.'errors');
            exit;
        }
    }
    
    function index($newsid) {
        $this->view->title = 'Edytuj';
        $this->view->render('edytuj_aktualnosci', 'admin');
    }
}