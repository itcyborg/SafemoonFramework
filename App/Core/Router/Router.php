<?php
/**
 * Created by PhpStorm.
 * User: itcyb
 * Date: 10/26/2017
 * Time: 2:48 PM
 */

class Router
{

    public $routes = [
        'GET' => [],
        'POST' => []
    ];
    private $path;

    public function __construct()
    {
        $this->path = $_SERVER['DOCUMENT_ROOT'] . "/App/Controllers/";
    }

    public static function load($file)
    {
        $router = new static;
        require $file;
        return $router;
    }

    public function define($routes)
    {
        $this->routes = $routes;
    }

    public function direct($uri, $requestType)
    {
        if (array_key_exists($uri, $this->routes[$requestType])) {
            return $this->routes[$requestType][$uri];
        }
        throw new Exception("Page not found");
    }

    public function get($uri, $controller)
    {
        $this->routes['GET'][$uri] = $this->path . $controller;
    }

    public function post($uri, $controller)
    {
        $this->routes['POST'][$uri] = $this->path . $controller;
    }
}