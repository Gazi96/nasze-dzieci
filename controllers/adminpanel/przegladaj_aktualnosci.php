<?php

class ReviewNews extends Controller {

    function __construct() {
        parent::__construct();

    }
    
    function index() {
        $this->view->title = 'Przeglądaj';
        $this->view->render('przegladaj_aktualnosci', 'admin');
    }
}