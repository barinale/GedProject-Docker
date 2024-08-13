<?php
namespace Model;

require_once(__DIR__.'/../Database/Database.php');
use App\database\Database;
use Error;
use Exception;

class AuthModel {
    // Function to check user login information
    public static function CheckCredentials($email, $password) {
        $authenticated = false;
        try {
            $pdo = Database::connect();
            $sql = "SELECT * FROM users WHERE email = :email";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':email', $email);
            $stmt->execute();
            $data = $stmt->fetch(\PDO::FETCH_ASSOC);

            if ($data && password_verify($password, $data['password'])) {
                // Password is correct, authentication successful
                session_start();
                $_SESSION['id'] = $data['id'];
                $authenticated = true;
            }
        } catch (Exception $e) {
            throw new Error($e->getMessage());
        }
        return $authenticated;   
    }

    // Function to log out
    public static function LogOut() {
        $_SESSION = array();
        session_destroy();
    }
}
