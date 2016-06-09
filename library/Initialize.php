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
            
            // check if the page exists
            $file = BASE_PATH . '/controller/' . $url[0] . '.php';
            
            if (file_exists($file)) {
                
                require_once($file);
                $controller = new $url[0];
                
                // now check if the method is set
                if(isset($url[2])) {
                    if(method_exists($controller, $url[1])) {
                        //instantiating class, with specific method if it does exist
                        $controller->{$url[1]}($url[2]);
                    }else {
                        $this->initialize_error("The method does not exist !");
                    }
                }else{
                    if(isset($url[1])) {
                        if(method_exists($controller, $url[1])){
                            $controller->{$url[1]}();
                        }else{
                            $this->initialize_error("The method does not exist !");
                        }
                    }else {
                        // render it to view
                        $controller->index(); // check for errors here
                    }
                }
            }else{
                //log error to use
                $this->initialize_error("File does not exist !");
            }
        }
        
        public function initialize_error($errors){
            require_once(BASE_PATH . '/controller/error.php');
            $error = new Error($errors);
            $error->index();
            return false;
        }
    }