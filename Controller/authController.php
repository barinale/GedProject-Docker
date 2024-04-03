<?php
namespace Ged\Controller;

use Ged\Models\AuthModel;

use function Ged\Library\view;

class AuthController{

        public function Index(){
            return view("Login.php");
        }

        public function Login(){
            $res=false;
            if($_SERVER['REQUEST_METHOD']=='POST' && isset($_REQUEST['email']) && isset($_REQUEST['password']))
                {
                    $res = AuthModel::CheckCreadintaiol($_POST['email'],$_POST['password']);
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