<?php

class AdminLogin extends Controller {

    function __construct() {
        parent::__construct();
        Session::init();
        $logged = Session::get('logged');
        
        if ($logged == true) {
            header('location: '.URL.'cms-nasze-dzieci-panel/przegladaj_aktualnosci');
            exit;
        }
    }
    
    function index() {
        $this->view->title = 'Logowanie';
        $this->view->render('cms-nasze-dzieci-panel');
    }
    
    function action(){
        $flag = $this->model->action();
        
        if($flag){
            header('location: '.URL.'cms-nasze-dzieci-panel/przegladaj_aktualnosci');
        } else {
            $this->view->error = 'Błędny login i/lub hasło';
            $this->index();
        }
    }
    
    function przegladaj_aktualnosci(){
        require 'controllers/adminpanel/przegladaj_aktualnosci.php';
        $controller = new ReviewNews();
        //$controller->loadModel('adminIndex');
        $controller->index();
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
    
    function dodaj_aktualnosci(){
        require 'controllers/adminpanel/dodaj_aktualnosci.php';
        $controller = new AddNews();
        //$controller->loadModel('adminIndex');
        $controller->index();
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
}
