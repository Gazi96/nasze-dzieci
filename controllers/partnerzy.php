<?php

class Partners extends Controller {

    function __construct() {
        parent::__construct();

    }
    
    function index() {
        $this->view->title = 'Partnerzy';
        $this->view->render('partnerzy');
    }
}
