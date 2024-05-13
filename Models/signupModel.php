<?php
require_once(__DIR__.'/../Database/Database.php');
use App\database as database;

    class SingUpModels{
        
        public static function singUp($name,$email,$password){
                try{
                    $con = database\Database::Connect();
                    $stm = $con->prepare('insert into users (name,email,password) values(?,?,?)');
                    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
                    $stm->bind_param('sss',$name,$email,$hashed_password);
                    
                    if($stm->execute()){
                        session_start();
                        $_SESSION['id']=$stm->insert_id;
                        return true;
                    }else{
                        return false;
                    }
                }catch(Exception $e){
                    throw new Exception($e->getMessage());
                }
            }
            

    }