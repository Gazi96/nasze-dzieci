<?php

class ReviewNews extends Controller {

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
    
    function index() {
        $this->view->title = 'Przeglądaj';
        $this->view->render('przegladaj_aktualnosci', 'admin');
    }
}