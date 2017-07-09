<?php

class AdminPanel extends Controller {

    function __construct() {
        parent::__construct();
        Session::init();
        $logged = Session::get('a2adebdt39$0');
        $adm = Session::get('37b421#lcas$oo0$e');
        
        if ($logged == false || $adm == false) {
            header('location: '.URL.'errors');
            exit();
        }
    }
    
    function index() {
        require 'controllers/adminpanel/przegladaj_aktualnosci.php';
        $controller = new ReviewNews();
        $controller->loadModel('Review');
        $controller->index();
    }
    
    function przegladaj_aktualnosci(){
        $this->index();
    }
    
    function edytuj_aktualnosci($newsid, $function = ''){
        require 'controllers/adminpanel/edytuj_aktualnosci.php';
        $controller = new EditNews();
        //$controller->loadModel('adminIndex');
        if($function == ''){
            $controller->index($newsid);
        } elseif($function == 'kontakt'){
            //$controller->kontakt($method);
        } elseif($function == 'zmien_haslo'){
            //$controller->zmien_haslo($method);
        }
    }
    
    function dodaj_aktualnosci($function = ''){
        require 'controllers/adminpanel/dodaj_aktualnosci.php';
        $controller = new AddNews();
        $controller->loadModel('AddNews');
        if($function == ''){
            $controller->index();
        } elseif($function == 'action'){
            $controller->action();
        } elseif($function == 'zmien_haslo'){
            //$controller->zmien_haslo($method);
        }
    }
    
    function ustawienia($function = '', $method= ''){
        require 'controllers/adminpanel/ustawienia.php';
        $controller = new Settings();
        //$controller->loadModel('adminIndex');
        
        if($function == ''){
            $controller->index();
        } elseif($function == 'kontakt'){
            $controller->kontakt($method);
        } elseif($function == 'zmien_haslo'){
            $controller->zmien_haslo($method);
        }
    }
    
    function logout(){
        Session::destroy();
        header('location: '.URL);
        exit;
    }
}
