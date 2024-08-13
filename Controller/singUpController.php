<?php

include_once(__DIR__.'/../Library/readingView.php');
require_once(__DIR__.'/../Models/signupModel.php');
    class SingUpController{

        public function index(){
            return view('singup.php');
        }

        public function singUp(){
            //Check Variable Fisrt
            if(isset($_POST['Name']) && isset($_POST['Email']) && isset($_POST['Password']) && isset($_POST['PasswordConfig'])){
                if($_POST['Password'] == $_POST['PasswordConfig']){
                    $singDrop = SignUpModels::signUp($_POST['Name'],$_POST['Email'],$_POST['Password']);
                    
                    if($singDrop){
                            header('Location: ./');
                            exit;
                    }else{
                        return "Error Handling";
                    }
                }
            }
        }

    }
