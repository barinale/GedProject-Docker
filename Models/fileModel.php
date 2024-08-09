<?php

use App\database\Database;

    include_once(__DIR__.'/../Database/Database.php');
    include_once(__DIR__.'/../classes/file.php');
    include_once(__DIR__.'/../classes/email.php');
    include_once(__DIR__.'/../classes/factroy.php');
    include_once(__DIR__.'/../classes/command.php');
    include_once(__DIR__.'/../classes/estimate.php');




    class fileModel{

        //For Insertion Email
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

        //For Insertion Factory
        public static function facrtoyInsert($name,$path,$socity,$amount) : bool{
            $drop=true;
            $con = Database::Connect();
            $con->begin_transaction();
            try{
                $inserted_id=file::transction($con,$name,$path);
                // Prepare INSERT statement for table 2
                Factroy::transaction($con,$inserted_id,$socity,$amount);
                //  // Commit transaction
                $con->commit();
                // echo "All inserts successful!";
            }catch(Exception $e){
                 // Rollback transaction
                $con->rollback();
                echo "Error: " ;
                $drop=false;
                throw $e;
            }
            $con->close();
         
         
            return $drop;
        }
        //For insertion Command
        public static function commandInsertion($name,$path,$stuffCommand,$totalAmount) : bool{
            $drop=true;
            $con = Database::Connect();
            $con->begin_transaction();
            try{
                $inserted_id=file::transction($con,$name,$path);
                // Prepare INSERT statement for table 2
                Command::transaction($con,$inserted_id,$stuffCommand,$totalAmount);
                //  // Commit transaction
                $con->commit();
                // echo "All inserts successful!";
            }catch(Exception $e){
                 // Rollback transaction
                $con->rollback();
                echo "Error: " ;
                $drop=false;
                throw $e;
            }
            $con->close();
         
         
            return $drop;
        }
        //For Insertion estimate
        public static function estimateInsertion($name,$path,$stuffCommand,$totalAmount) : bool{
            $drop=true;
            $con = Database::Connect();
            $con->begin_transaction();
            try{
                $inserted_id=file::transction($con,$name,$path);
                // Prepare INSERT statement for table 2
                Estimate::transaction($con,$inserted_id,$stuffCommand,$totalAmount);
                //  // Commit transaction
                $con->commit();
                // echo "All inserts successful!";
            }catch(Exception $e){
                 // Rollback transaction
                $con->rollback();
                echo "Error:" ;
                $drop=false;
                throw $e;
            }
            $con->close();
         
         
            return $drop;
        } 
    }