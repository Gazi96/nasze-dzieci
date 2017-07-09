<?php

class ChangePass extends Controller {

    function __construct() {
        parent::__construct();

    }
    
    function index() {
        $this->view->title = 'Zmień Hasło';
        $this->view->render('zmien_haslo', 'admin');
    }
    
    function action() {
        
    }
}