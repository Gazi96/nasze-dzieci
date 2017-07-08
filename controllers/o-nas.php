<?php

class About extends Controller {

    function __construct() {
        parent::__construct();

    }
    
    function index() {
        $this->view->title = 'O Nas';
        $this->view->render('o-nas');
    }
    
    function dzialania() {
        require 'controllers/o-nas/dzialania.php';
        $controller = new Actions();
        //$controller->loadModel('adminIndex');
        $controller->index();
    }
    
    function statut() {
        require 'controllers/o-nas/statut.php';
        $controller = new Statute();
        //$controller->loadModel('adminIndex');
        $controller->index();
    }
}
