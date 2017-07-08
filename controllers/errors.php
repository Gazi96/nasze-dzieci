<?php

class Errors extends Controller {

    function __construct() {
        parent::__construct();

    }
    
    function index() {
        $this->view->title = 'Error';
        $this->view->render('errors');
    }
}
