<?php

class Index extends Controller {

    function __construct() {
        parent::__construct();

    }
    
    function index() {
        $this->view->title = 'Strona Główna';
        $this->view->news = $this->model->loadNews();
        
        foreach ($this->view->news as $row){
            $this->view->images[$row['id']] = $this->model->loadImages($row['id']);
            $this->view->describes[$row['id']] = $this->model->loadDescribes($row['id']);
        }
        
        $this->view->render('index');
    }
}
