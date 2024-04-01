<?php
include_once(__DIR__.'/../classes/file.php');

    class Command extends File{
        
        public function save(){

        }
        public static function transaction($mysql,int $id,string $stuffCommand,string $totalAmount ){
            
            $stmt2 = $mysql->prepare("INSERT INTO command (file_id , command_description,total_amount) VALUES (?,?,?)");
            $stmt2->bind_param("iss",$id, $stuffCommand, $totalAmount);
            $stmt2->execute();
            $stmt2->close();
        }

    }