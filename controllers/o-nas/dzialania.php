<?php

class Actions extends Controller {

    function __construct() {
        parent::__construct();

    }
    
    function index() {
        $this->view->title = 'Nasze działania';
        $this->view->render('o-nas/dzialania');
    }
}
