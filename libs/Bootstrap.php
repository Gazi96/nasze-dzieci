<?php

class Bootstrap {

    function __construct() {
        if(null !== filter_input(INPUT_GET, 'url', FILTER_SANITIZE_URL)){
            $url1 = htmlentities(filter_input(INPUT_GET, 'url', FILTER_SANITIZE_URL), ENT_QUOTES);
        } else { $url1 = null; }
        $url2 = rtrim($url1, '/ .php');
        $url = explode('/', $url2);
        
        if($this->emptyUrl($url[0])) {
            return false;
        }
        elseif($this->requireFile($url)){
            $this->loadController($url);
            return false;
        }
        elseif($this->checkNews($url[0])){
            $this->renderNews($url[0]);
            return false;
        }
        elseif($this->checkArchives($url)) {
            $this->renderArchive($url);
        }
        else{
            $this->errors();
            return false;
        }
    }

    function errors() {
        require 'controllers/errors.php';
        
        $this->controller = new Errors();
        $this->controller->index();
    }
    
    function emptyUrl($url) {
        if (empty($url)) {
            require 'controllers/index.php';
            
            $this->controller = new Index();
            $this->controller->loadModel('Index');
            $this->controller->index();
            
            return true;
        }
        return false;
    }
    
    function requireFile($url) {
        $file = 'controllers/' . $url[0] . '.php';
        if (file_exists($file)) {
            require $file;
            return true;
        } else {
            return false;
        }
    }
    
    function loadController($url) {
        $controllers = array('aktualnosci' => 'News',
            'dla-rodzicow' => 'ForParents',
            'index' => 'Index',
            'kontakt' => 'Contact',
            'mozesz-pomoc' => 'HowHelp',
            'o-nas' => 'About',
            'cms-nasze-dzieci-login' => 'AdminLogin',
            'cms-nasze-dzieci-panel' => 'AdminPanel',
            'errors' => 'Errors');
        $this->controller = new $controllers[$url[0]];
        $this->controller->loadModel($controllers[$url[0]]);
        
        if (isset($url[1])) {
            $this->loadMethod($url);
        } else {
            $this->controller->index();
        }
    }
    
    function loadMethod($url) {
        if (method_exists($this->controller, $url[1])) {
            if (isset($url[2])) {
                $this->controller->{$url[1]}($url[2]);
            } else {
                $this->controller->{$url[1]}();
            }
        } else {
            $this->errors();
            return false;
        }
    }
    
    function checkNews($href){
        require 'models/Review.php';
        $modelName = 'ReviewModel';
        $model = new $modelName();
        
        return $model->loadHref($href);
    }
    
    function renderNews($url){
        $href[0] = 'aktualnosci';
        $href[1] = 'renderNews';
        $href[2] = $url;
        $this->requireFile($href);
        $this->loadController($href);
    }
    
    function checkArchives($url) {
        if(is_numeric($url[0]) && is_numeric($url[1]) && !isset($url[2])){
            require 'models/News.php';
            $modelName = 'NewsModel';
            $model = new $modelName();
            $flag = $model->checkArchives($url[0], $url[1]);
            
            return $flag;
        } else {
            return false;
        }
    }
    
    function renderArchive($url){
        $href[0] = 'aktualnosci';
        $href[1] = 'renderArchive';
        $href[2] = $url;
        $this->requireFile($href);
        $this->loadController($href);
    }
}
