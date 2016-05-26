<?php

    class Views{
        
        public function render_it($name) {
            require(BASE_PATH . '/view/header.php');
            require(BASE_PATH . '/view/' . $name . '.php');
            require(BASE_PATH . '/view/footer.php' );
        }
    }