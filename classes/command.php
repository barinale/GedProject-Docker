<?php
include_once(__DIR__.'/../classes/file.php');

    class Command extends File{
        
        public function save(){

        }
        public static function transactionC($pg, int $id, string $stuffCommand, string $totalAmount) {
            $stmt2 = $pg->prepare("INSERT INTO command (file_id, command_description, total_amount) VALUES ($1, $2, $3)");
            $stmt2->execute([$id, $stuffCommand, $totalAmount]);
           echo "somthing";
        }
        
             //function For Getting All Recorde related To estimate
             public static function GetAll($con) {
                $query = "SELECT f.name, f.path, u.command_description, u.total_amount
                          FROM command u
                          LEFT JOIN file f ON f.id = u.file_id";
            
                $stmt = $con->query($query); // Execute the query
                $rows = $stmt->fetchAll(\PDO::FETCH_ASSOC); // Fetch all rows as an associative array
                return $rows;
            }
            
    }