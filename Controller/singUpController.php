<?php

include_once(__DIR__.'/../Library/readingView.php');
    class SingUpController{

        public function index(){
            return view('singup.php');
        }

        public function singUp(){
            echo "tesgin";
        }

    }