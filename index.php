<?php
require_once(realpath('vendor/autoload.php'));

use Ged\Router\Router;
use Ged\Middlwares\NotLoginMiddleware;

// use App\Middlware\LoginMiddleWare;
// use App\Middlware\notLoginMiddleware;


// Include the router file
// require_once('./Router.php');
require_once('./config.php');
$request = $_SERVER['REQUEST_URI'];


// Remove the base path from the request URI
$cleanRequestUri = str_replace(BASE_PATH,'', $request);


//Define routes
$router = new Router();
$router->get('/', 'DashboardController@Index');
$router->post('/singUp','SingUpController@singUp',new NotLoginMiddleware());  
// $router->get('/', 'DashboardController@Index',new LoginMiddleWare());
//         //handling Login and Connect and singup 
//         $router->post('/singUp','SingUpController@singUp',new notLoginMiddleware());        
//         $router->get('/singup','SingUpController@index',new notLoginMiddleware());   

// $router->get('/Login', 'authController@Index',new notLoginMiddleware());
// $router->post('/Login-check', 'authController@Login');
// $router->post('/LogOut', 'authController@LogOut',new LoginMiddleWare());
//         //Page For Add Files
// $router->get('/IndexFile','fileController@index',new LoginMiddleWare());        
//         //handilng File Crud 
// $router->get('/fileAdd','fileController@index',new LoginMiddleWare());        
// $router->post('/fileUpload','fileController@addFile',new LoginMiddleWare());
//         //For Getting Files
// $router->get('/fileEmailAll','fileController@emailGet',new LoginMiddleWare());



// // Handle the request
$router->dispatch($cleanRequestUri,$_SERVER['REQUEST_METHOD']);


// $hashed_password = password_hash("123456789", PASSWORD_DEFAULT);
// echo $hashed_password;
// $username = "email@gmail.com";
// $Database = new Database();
// $conn = $Database::Connect();
// $stmt = $conn->prepare("INSERT INTO users (email, password) VALUES (?, ?)");
// $stmt->bind_param("ss", $username, $hashed_password);

// Execute the statement
// if ($stmt->execute() === TRUE) {
//     echo "New record created successfully";
// } else {
//     echo "Error: " . $stmt->error;
// }

// // Close the statement and connection
// $stmt->close();
// $conn->close();