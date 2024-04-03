<?php
namespace Ged\Models;

use Ged\classes\Command;
use Ged\classes\Email;
use Ged\classes\Estimate;
use Ged\classes\Factroy;
use Ged\classes\File;
use Ged\database\Database;




    class FileModel{

        //For Insertion Email
        public static function EmailInsert($name,$path,$emailS,$emaiR,$dateSend) : bool{
            $drop=true;
            $con = Database::Connect();
            $con->begin_transaction();
            try{
                $inserted_id=File::transction($con,$name,$path);
                // Prepare INSERT statement for table 2
                Email::transaction($con,$inserted_id,$emaiR,$emailS,$dateSend);
                //  // Commit transaction
                $con->commit();
                // echo "All inserts successful!";
            }catch(\Exception $e){
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
            }catch(\Exception $e){
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
            }catch(\Exception $e){
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
            }catch(\Exception $e){
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