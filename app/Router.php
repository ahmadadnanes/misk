<?php
namespace app;

use Exception, Closure;

class Router {
    protected $routes = []; // Stores routes

    public function addRoute(string $method, string $url, $target) {
        if (!($target instanceof Closure) && !is_array($target)) {
            throw new Exception("Route target must be a Closure or [Controller::class, 'method']");
        }
        $this->routes[$method][$url] = $target;
    }

    public function matchRoute() {
        $method = $_SERVER['REQUEST_METHOD'];
        $url = $_SERVER['REQUEST_URI'];

        if (isset($this->routes[$method])) {
            foreach ($this->routes[$method] as $routeUrl => $target) {
                $pattern = preg_replace('/\/:([^\/]+)/', '/(?P<$1>[^/]+)', $routeUrl);

                if (preg_match('#^' . $pattern . '$#', $url, $matches)) {
                    $params = array_filter($matches, 'is_string', ARRAY_FILTER_USE_KEY);

                    if (is_array($target) && count($target) == 2) {
                        [$controller, $method] = $target;
                        if (class_exists($controller) && method_exists($controller, $method)) {
                            call_user_func_array([new $controller, $method], $params);
                            return;
                        }
                    }
                    elseif ($target instanceof Closure) {
                        call_user_func_array($target, $params);
                        return;
                    }
                }
            }
        }

        http_response_code(404);
        echo "404 Not Found";
    }
}
