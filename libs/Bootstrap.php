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
        } else {
            if($this->requireFile($url)){
                $this->loadController($url);
                return false;
            } else {
                $this->errors();
                return false;
            }
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
            'cms-nasze-dzieci-panel' => 'AdminLogin');
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
}
