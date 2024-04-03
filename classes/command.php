<?php
namespace Ged\classes;

    class Command extends File{
        
        public function save(){

        }
        public static function transaction($mysql,int $id,string $stuffCommand,string $totalAmount ){
            
            $stmt2 = $mysql->prepare("INSERT INTO command (file_id , command_description,total_amount) VALUES (?,?,?)");
            $stmt2->bind_param("iss",$id, $stuffCommand, $totalAmount);
            $stmt2->execute();
            $stmt2->close();
        }
             //function For Getting All Recorde related To estimate
             public static function GetAll($con){
                $query="SELECT f.name,f.path,u.command_description,u.total_amount
                FROM command u
                LEFT JOIN file f ON f.id = u.file_id";
                $result = $con->query($query);
                $rows = $result->fetch_all(MYSQLI_ASSOC);
                return $rows;
            }
    }