<?php
include_once(__DIR__.'/../classes/file.php');
    class Estimate extends File{
        public function save(){

        }
        public static function transaction($mysql,int $id,string $estimateDes,string $totalAmount){
            
            $stmt2 = $mysql->prepare("INSERT INTO estimate (file_id , estimate_description,total_amount) VALUES (?,?,?)");
            $stmt2->bind_param("iss",$id, $estimateDes, $totalAmount);
            $stmt2->execute();
            $stmt2->close();
        }

    }