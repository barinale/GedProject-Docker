<?php
namespace Ged\Middlwares;

    //this middleware To Check if User Login 
    class NotLoginMiddleware implements InterfaceMiddleware{
        public function handle(){
            session_start();
            if (isset($_SESSION['id'])) {
                header('Location: ./');
                exit;
            }
        } 
    
    }