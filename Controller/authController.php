<?php

use Model\AuthModel;

include_once(__DIR__.'/../Library/readingView.php');
// //include authentication Model
include_once(__DIR__.'/../Models/AuthModel.php');
class AuthController{

        public function Index(){
            return view("Login.php");
        }

        public function Login(){
            $res=false;
            if($_SERVER['REQUEST_METHOD']=='POST' && isset($_REQUEST['email']) && isset($_REQUEST['password']))
                {
                    $res = AuthModel::CheckCredentials($_POST['email'],$_POST['password']);
                    if($res && isset($_SESSION['id'])){
                        header('Location: ./');
                        exit;

                    }
                }
                return view('/Login.php',"check Your Information");
            }

            public function LogOut(){
                AuthModel::LogOut();
                header('Location: ./');
                exit;
            }
    }