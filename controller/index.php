<?php

    class Index extends Controller {
        
        public function __construct() {
            parent::__construct();
        }
        
        public function index() {
            $this->Views->render_it('index/index');
        }
    }