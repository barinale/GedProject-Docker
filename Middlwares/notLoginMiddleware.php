<?php
    require_once(__DIR__.'/interfaceMiddleware.php');
    //this middleware To Check if User Login 
    class notLoginMiddleware implements InterfaceMiddleware{
        public function handle(){
            session_start();
            if (isset($_SESSION['id'])) {
                header('Location: ./');
                exit;
            }
        } 
    
    }