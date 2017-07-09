<?php

class News extends Controller {

    function __construct() {
        parent::__construct();

    }
    
    function index() {
        $this->view->title = 'Aktualności';
        $this->view->news = $this->model->loadNews();
        
        foreach ($this->view->news as $row){
            $this->view->images[$row['id']] = $this->model->loadImages($row['id']);
            $this->view->describes[$row['id']] = $this->model->loadDescribes($row['id']);
        }
        
        $this->view->tree = $this->model->loadTree();
        
        $this->view->render('aktualnosci');
    }
    
    function renderNews($href){
        $this->view->news = $this->model->loadHref($href);
        $this->view->title = $this->view->news['name'];
        
        $this->view->images = $this->model->loadImages($this->view->news['id']);
        $this->view->describes = $this->model->loadDescribes($this->view->news['id']);
        
        $this->view->render('news');
    }
    
    function renderArchive($url){
        $this->view->title = 'Archiwum';
        $this->view->news = $this->model->loadArchives($url[0], $url[1]);
        
        foreach ($this->view->news as $row){
            $this->view->images[$row['id']] = $this->model->loadImages($row['id']);
            $this->view->describes[$row['id']] = $this->model->loadDescribes($row['id']);
        }
        
        $this->view->tree = $this->model->loadTree();
        
        $this->view->render('aktualnosci');
    }
}
