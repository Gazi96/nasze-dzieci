<?php

class Contact extends Controller {

    function __construct() {
        parent::__construct();

    }
    
    function index() {
        $this->view->title = 'Kontakt';
        
        $this->view->details = $this->model->getDetails();
        
        $this->view->render('kontakt');
    }
}
