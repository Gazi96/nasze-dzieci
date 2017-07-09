<?php

class Settings extends Controller {

    function __construct() {
        parent::__construct();

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