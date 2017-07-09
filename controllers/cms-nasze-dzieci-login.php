<?php

class AdminLogin extends Controller {

    function __construct() {
        parent::__construct();
        Session::init();
        $logged = Session::get('a2adebdt39$0');
        $adm = Session::get('37b421#lcas$oo0$e');
        
        if ($logged == true && $adm == true) {
            header('location: '.URL.'cms-nasze-dzieci-panel');
            exit;
        }
    }
    
    function index() {
        $this->view->title = 'Logowanie';
        $this->view->render('cms-nasze-dzieci-login');
    }
    
    function action(){
        $login = htmlentities(filter_input(INPUT_POST, 'login', 
                        FILTER_SANITIZE_STRING),ENT_QUOTES);
        
        $password = htmlentities(filter_input(INPUT_POST, 'password', 
                        FILTER_SANITIZE_STRING),ENT_QUOTES);
        
        $flag = $this->model->action($login, $password);
        
        if($flag){
            Session::destroy();
            Session::init();
            Session::set('a2adebdt39$0', true);
            Session::set('37b421#lcas$oo0$e', true);
            header('location: '.URL.'cms-nasze-dzieci-panel/przegladaj_aktualnosci');
        } else {
            $this->view->error = 'Błędny login i/lub hasło';
            $this->index();
        }
    }
}
