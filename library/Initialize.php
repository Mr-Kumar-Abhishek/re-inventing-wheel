<?php
    
    class Initialize {
        
        public function __construct() {
            
            $url = isset($_GET['url']) ? $_GET['url'] : null;
            $url = rtrim($url, '/');
            $url = explode('/', $url);
            
            if(empty($url[0])){
                require(BASE_PATH . '/controller/index.php');
                $index = new Index();
                $index->index();
                return false;
            }
            
        }
    }