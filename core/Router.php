<?php


class Router {

    public $routes = [
        'GET' => [],
        'POST' => []
    ];

    public static function load($file)
    {
        $router = new static;

        require $file;

        return $router;
    }

    public function get($uri, $controller)
    {
        return $this->routes['GET'][$uri] = $controller;
    }

    public function post($uri, $controller)
    {
        return $this->routes['POST'][$uri] = $controller;
    }

    public function direct($uri, $requestType)
    {
        if (key_exists($uri, $this->routes[$requestType])) {
            return $this->routes[$requestType][$uri];
        }

        throw new Exception('No page found');
    }
}