<?php

class ForParents extends Controller {

    function __construct() {
        parent::__construct();

    }
    
    function index() {
        $this->view->title = 'Dla Rodziców';
        $this->view->render('dla-rodzicow');
    }
}
