<?php
    class Pages extends Controller {
        public function __construct() {
            // echo 'Pages Loaded';
        }
        public function index(){
            $data = ['title' => 'Welcome'];
            $this->view('pages/index', $data);
        }

        public function about($id){
           $this->view('pages/about');
        }



    }
