<?php

namespace Core;

class Router
{
    private $routes;

    public function __construct()
    {
        $routesPath = 'config/routes.php';
        $this->routes = include($routesPath);
    }

    private function getUri()
    {
        return trim($_SERVER['REQUEST_URI'], '/');
    }

    public function run()
    {
        $uri = $this->getUri();

        $result = null;

        foreach($this->routes as $uriPattern => $path){

            if(preg_match("~{$uriPattern}~", $uri)){
                $internalRoute = preg_replace("~{$uriPattern}~", $path, $uri);
                $segments = explode('/', $internalRoute);

                $controllerName = ucfirst(array_shift($segments)) . 'Controller';
                $actionName = array_shift($segments) . 'Action';
                $parameters = $segments;

                $clsName = 'Controllers\\' . $controllerName;
                $object = new $clsName;
                
                $result = call_user_func_array(array($object, $actionName), $parameters);

                if($result != false){
                    break;
                }
            }
        }

        if($result == null){
            echo '404 Not Found';
        }
    }
}