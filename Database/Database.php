<?php
    namespace App\database;
    include_once(__DIR__ . '/../config.php');
    
    class Database{
        private static string $host = URL;
        private static string $username = USERNAME;
        private static string $password = PASSWORD;
        private static string $database = DATABASE;

        private static $con;
    public function __construct(){
        
    }

    public static function Connect(){
        self::$con = new \mysqli(self::$host,self::$username,self::$password,self::$database);
        if(self::$con->connect_error){
            return "Something Went Wrong With Database bas Conection";
        }
        return self::$con;
    }
    public static function query($sql) {
        self::$con = self::Connect();
        $result = self::$con->query($sql);
        if (!$result) {
            die("Query failed: " . self::$con->error);
        }
        return $result;
    }
    

    }