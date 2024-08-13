<?php

use App\database\Database;

include_once(__DIR__.'/../Database/Database.php');
include_once(__DIR__.'/../classes/file.php');
include_once(__DIR__.'/../classes/email.php');
include_once(__DIR__.'/../classes/factory.php');
include_once(__DIR__.'/../classes/command.php');
include_once(__DIR__.'/../classes/estimate.php');

class fileModel {

    // For Insertion Email
    public static function EmailInsert($name, $path, $emailS, $emailR, $dateSend) : bool {
        $drop = true;
        $con = Database::Connect(); // Get PostgreSQL PDO connection

        // Start transaction
        $con->beginTransaction();
        try {
            // Perform operations
            $inserted_id = file::transaction($con, $name, $path);
            // Prepare INSERT statement for table 2
            Email::transaction($con, $inserted_id, $emailR, $emailS, $dateSend);

            // Commit transaction
            $con->commit();
        } catch (Exception $e) {
            // Rollback transaction if something goes wrong
            $con->rollBack();
            echo "Error: " . $e->getMessage();
            $drop = false;
        }

        // Close connection (not necessary in PDO, but you can set it to null)
        $con = null;

        return $drop;
    }

    // For Insertion Factory
    public static function factoryInsert($name, $path, $society, $amount) : bool {
        $drop = true;
        $con = Database::Connect(); // Get PostgreSQL PDO connection

        // Start transaction
        $con->beginTransaction();

        try {
            // Perform operations
            $inserted_id = file::transaction($con, $name, $path);
            // Prepare INSERT statement for table 2
            Factroy::transaction($con, $inserted_id, $society, $amount);

            // Commit transaction
            $con->commit();
        } catch (Exception $e) {
            // Rollback transaction if something goes wrong
            $con->rollBack();
            echo "Error: " . $e->getMessage();
            $drop = false;
        }

        // Close connection (not necessary in PDO, but you can set it to null)
        $con = null;

        return $drop;
    }

    // For insertion Command
    public static function commandInsertion($name, $path, $stuffCommand, $totalAmount) : bool {
        $drop = true;
        $con = Database::Connect(); // Get PostgreSQL PDO connection
        // Start transaction
        $con->beginTransaction();
        echo $drop;

        try {
            echo "here we cana try";
            // Perform operations
            $inserted_id = file::transaction($con, $name, $path);
            // Prepare INSERT statement for table 2
            Command::transactionC($con, $inserted_id, $stuffCommand, $totalAmount);

            // Commit transaction
            $con->commit();
        } catch (Exception $e) {
            echo "something herealso";
            // Rollback transaction if something goes wrong
            $con->rollBack();
            echo "Error: " . $e->getMessage();
            $drop = false;
        }

        // Close connection (not necessary in PDO, but you can set it to null)
        $con = null;
        echo "   ".$drop."fff";
        return $drop;
    }

    // For Insertion estimate
    public static function estimateInsertion($name, $path, $stuffCommand, $totalAmount) : bool {
        $drop = true;
        $con = Database::Connect(); // Get PostgreSQL PDO connection
        echo "soemthin went wrong";
        // Start transaction
        $con->beginTransaction();

        try {
            // Perform operations
            $inserted_id = file::transaction($con, $name, $path);
            // Prepare INSERT statement for table 2
            Estimate::transaction($con, $inserted_id, $stuffCommand, $totalAmount);

            // Commit transaction
            $con->commit();
        } catch (Exception $e) {
            // Rollback transaction if something goes wrong
            $con->rollBack();
            echo "Error: " . $e->getMessage();
            $drop = false;
        }

        // Close connection (not necessary in PDO, but you can set it to null)
        $con = null;

        return $drop;
    }
}
