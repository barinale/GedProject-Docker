<?php
namespace Ged\Controller;

use function Ged\Library\view;

    class SingUpController{

        public function index(){
            return view('singup.php');
        }

        public function singUp(){
            echo "tesgin";
        }

    }