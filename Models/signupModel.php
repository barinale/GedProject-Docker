<?php
require_once(__DIR__ . '/../Database/Database.php');
use App\database\Database;

class SignUpModels {
 
public static function signUp($name, $email, $password) {
 try {
 $pdo = Database::connect(); // Use PDO connection
 $sql = 'INSERT INTO users (name, email, password) VALUES (:name, :email, :password)';
 $stmt = $pdo->prepare($sql);

// Hash the password
 $hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Bind parameters
 $stmt->bindParam(':name', $name);
 $stmt->bindParam(':email', $email);
 $stmt->bindParam(':password', $hashed_password);

// Execute the query
 if ($stmt->execute()) {
 // Retrieve the last inserted ID
 $lastInsertId = $pdo->lastInsertId();
 
// Start the session and store the ID
 session_start();
 $_SESSION['id'] = $lastInsertId;
 return true;
 } else {
 return false;
 }
 } catch (Exception $e) {
 throw new Exception($e->getMessage());
 }
 }
}