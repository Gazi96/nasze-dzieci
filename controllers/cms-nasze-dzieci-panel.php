<?php

class AdminLogin extends Controller {

    function __construct() {
        parent::__construct();

    }
    
    function index() {
        $this->view->title = 'Logowanie';
        $this->view->render('cms-nasze-dzieci-panel');
    }
}
