<?php

class EditNews extends Controller {

    function __construct() {
        parent::__construct();

    }
    
    function index($newsid) {
        $this->view->title = 'Edytuj';
        $this->view->render('edytuj_aktualnosci', 'admin');
    }
}