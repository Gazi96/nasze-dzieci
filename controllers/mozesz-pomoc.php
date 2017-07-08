<?php

class HowHelp extends Controller {

    function __construct() {
        parent::__construct();

    }
    
    function index() {
        $this->view->title = 'Jak możesz pomóc';
        $this->view->render('mozesz-pomoc');
    }
}
