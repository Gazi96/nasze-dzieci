<?php

class Settings extends Controller {

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
        $this->view->title = 'Ustawienia';
        $this->view->render('ustawienia', 'admin');
    }
    
    function kontakt($function) {
        require 'controllers/adminpanel/ustawienia/kontakt.php';
        $controller = new Contact();
        //$controller->loadModel('adminIndex');
        if($function == ''){
            $controller->index();
        } elseif($function == 'kontakt'){
            //$controller->kontakt();
        } elseif($function == 'zmien_haslo'){
            //$controller->zmien_haslo();
        }
    }
    
    function zmien_haslo($function) {
        require 'controllers/adminpanel/ustawienia/zmien_haslo.php';
        $controller = new ChangePass();
        //$controller->loadModel('adminIndex');
        if($function == ''){
            $controller->index();
        } elseif($function == 'kontakt'){
            //$controller->kontakt();
        } elseif($function == 'zmien_haslo'){
            //$controller->zmien_haslo();
        }
    }
}