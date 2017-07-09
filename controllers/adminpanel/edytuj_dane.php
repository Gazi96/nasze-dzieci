<?php

class Details extends Controller {

    function __construct() {
        parent::__construct();

    }
    
    function index() {
        $this->view->title = 'Edytuj Dane';
        
        $this->view->details = $this->model->getDetails();
        
        $this->view->render('edytuj_dane', 'admin');
    }
}