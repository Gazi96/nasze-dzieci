<?php

class News extends Controller {

    function __construct() {
        parent::__construct();

    }
    
    function index() {
        $this->view->title = 'Aktualności';
        $this->view->render('aktualnosci');
    }
}
