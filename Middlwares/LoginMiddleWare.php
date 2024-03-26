<?php
require_once(__DIR__.'/InterfaceMiddleware.php');
//this middleware To Check if User Login 
class LoginMiddleWare implements InterfaceMiddleware{
    public function handle(){
        session_start();
        if(!isset($_SESSION['id'])) {
            header('Location: ./Login');
            exit;
        }
    } 

}
