<?php

class View {

    function __construct() {
        
    }
    
    public function render($name, $mode = 'web'){
        if ($mode == 'web') {
            require 'views/header.php';
            require 'views/' . $name . '.php';
            require 'views/footer.php';
        } elseif ($mode == 'admin') {
            require 'views/adminpanel/header.php';
            require 'views/adminpanel/' . $name . '.php';
            require 'views/adminpanel/footer.php';
        } elseif ($mode == 'errors') {
            require 'views/' . $name . '.php';
        }
    }
}

