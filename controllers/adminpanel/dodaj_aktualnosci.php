<?php

class AddNews extends Controller {

    function __construct() {
        parent::__construct();

    }
    
    function index() {
        $this->view->title = 'Dodaj';
        $this->view->render('dodaj_aktualnosci', 'admin');
    }
}