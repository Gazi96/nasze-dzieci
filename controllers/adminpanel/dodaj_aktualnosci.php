<?php

class AddNews extends Controller {

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
        $this->view->title = 'Dodaj';
        $this->view->render('dodaj_aktualnosci', 'admin');
    }
    
    function action() {
        $name = htmlentities(filter_input(INPUT_POST, 'name', 
                        FILTER_SANITIZE_STRING),ENT_QUOTES);
        
        $describe = htmlentities(filter_input(INPUT_POST, 'describe', 
                        FILTER_SANITIZE_STRING),ENT_QUOTES);
        
        $id = $this->model->addNews($name);
        $this->model->addDescribe($id, $describe);
        
        $this->view->done = true;
        $this->view->id = $id;
        
        $this->index();
    }
}