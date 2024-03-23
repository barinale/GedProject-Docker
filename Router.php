<?php
class Router {
    private $routes = [];
    private $middleware = [];

    // Add GET route with middleware
    public function get($uri, $action, $middleware = null) {
        $this->addRouteWithMiddleware('GET', $uri, $action, $middleware);
    }

    // Add POST route with middleware
    public function post($uri, $action, $middleware = null) {
        $this->addRouteWithMiddleware('POST', $uri, $action, $middleware);
    }

    // Add PUT route with middleware
    public function put($uri, $action, $middleware = null) {
        $this->addRouteWithMiddleware('PUT', $uri, $action, $middleware);
    }

    // Add DELETE route with middleware
    public function delete($uri, $action, $middleware = null) {
        $this->addRouteWithMiddleware('DELETE', $uri, $action, $middleware);
    }

    // Add route with middleware
    private function addRouteWithMiddleware($method, $uri, $action, $middleware = null) {
        $this->routes[$method][$uri] = $action;
        if ($middleware) {
            $this->middleware[$method][$uri] = $middleware;
        }
    }

    // Dispatch the request
    public function dispatch($uri, $method) {

        // Call middleware before handling the request
        if (isset($this->middleware[$method][$uri])) {
            $this->middleware[$method][$uri]->handle();
        }

        if (isset($this->routes[$method][$uri])) {
            $this->executeAction($this->routes[$method][$uri]);
        } else {
            echo "404 Not Found";
        }
    }

    // Execute action/controller
    private function executeAction($action) {
        // Split the action into controller and method
        list($controller, $method) = explode('@', $action);

        // Include the controller file
        require_once 'Controller/' . $controller . '.php';

        // Create controller object
        $controllerObj = new $controller();

        // Call the method
        $controllerObj->$method();
    }
}

?>