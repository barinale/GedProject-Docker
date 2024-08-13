<?php
namespace App\database;

include_once(__DIR__ . '/../config.php');

class Database {
    private static string $host = URL;
    private static string $username = USERNAME;
    private static string $password = PASSWORD;
    private static string $database = DATABASE;
    private static string $dbType = 'pgsql'; // Default to PostgreSQL, change as needed

    private static \PDO $pdo;

    public function __construct() {
        // Optional: Constructor logic if needed
    }

    public static function connect() {
        $dsn = self::$dbType . ":host=" . self::$host . ";dbname=" . self::$database;
        try {
            self::$pdo = new \PDO($dsn, self::$username, self::$password);
            self::$pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            return self::$pdo; 
        } catch (\PDOException $e) {
            die("Database connection failed: " . $e->getMessage());
        }
    }

    public static function query(string $sql, array $params = []) {
        self::connect(); // Ensure connection is established
        $stmt = self::$pdo->prepare($sql);
        $stmt->execute($params);
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public static function execute(string $sql, array $params = []) {
        self::connect(); // Ensure connection is established
        $stmt = self::$pdo->prepare($sql);
        return $stmt->execute($params);
    }
}
