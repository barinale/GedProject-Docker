<?php

use App\database\Database;

    include_once(__DIR__.'/../Database/Database.php');
    include_once(__DIR__.'/../classes/file.php');
    include_once(__DIR__.'/../classes/Email.php');

    class fileModel{


        public static function EmailInsert($name,$path,$emailS,$emaiR,$dateSend) : bool{
            $drop=true;
            $con = Database::Connect();
            $con->begin_transaction();
            try{
                $inserted_id=file::transction($con,$name,$path);
                // Prepare INSERT statement for table 2
                Email::transaction($con,$inserted_id,$emaiR,$emailS,$dateSend);
                //  // Commit transaction
                $con->commit();
                // echo "All inserts successful!";
            }catch(Exception $e){
                 // Rollback transaction
                $con->rollback();
                echo "Error: " ;
                $drop=false;
                
            }
            $con->close();

            return $drop;
        }
    }