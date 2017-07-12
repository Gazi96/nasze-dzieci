<?php

class Statute extends Controller {

    function __construct() {
        parent::__construct();

    }
    
    function index() {
        $this->view->title = 'Statut';
        $this->view->render('statut');
    }
}
