<?php
include_once(__DIR__.'/../classes/file.php');
    class Estimate extends File{
        public function save(){

        }
        public static function transactionE($mysql,int $id,string $estimateDes,string $totalAmount){
            $stmt2 = $mysql->prepare("INSERT INTO estimate (file_id , estimate_description,total_amount) VALUES (?,?,?)");
            $stmt2->bind_param("iss",$id, $estimateDes, $totalAmount);
            $stmt2->execute();
            $stmt2->close();
        }

             //function For Getting All Recorde related To estimate
             public static function GetAll($con) {
                $query = "SELECT f.name, f.path, u.estimate_description, u.total_amount
                          FROM estimate u
                          LEFT JOIN file f ON f.id = u.file_id";
            
                $stmt = $con->query($query); // Execute the query
                $rows = $stmt->fetchAll(\PDO::FETCH_ASSOC); // Fetch all rows as an associative array
                return $rows;
            }
                        
}
