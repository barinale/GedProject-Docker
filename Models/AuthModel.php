<?php
    namespace Ged\Models;

use Ged\database\Database;
use Error;
use Exception;

    class AuthModel{
        //function for check user Login Information
            public static function CheckCreadintaiol($email,$password) {
                
                $drop = false;
                try{
                $con = Database::Connect();
                $stm = $con->prepare("select * from users where email = ?");
                $stm->bind_param('s',$email);
                $stm->execute();
                $result = $stm->get_result(); 
                $data = $result->fetch_assoc();
                if (password_verify($password, $data['password'])) {
                    // Password is correct, authentication successful
                    session_start();
                    $_SESSION['id']=$data['id'];
                    $drop=true;
                } }
                catch(Exception $e){
                    throw new Error($e->getMessage());
                }finally{
                    $stm->close();
                }
                return $drop;   
            }

            //Function For Log Out
            public static function LogOut(){
                $_SESSION = array();
                session_destroy();
            }

    }