<?php
    class Error extends Controller {
        public function __construct($error) {
            parent::__construct();
            $this->Views->errors = array($error);
        }
        
        public function index(){
            $this->Views->render_it('error/index');
        }
    }