<?php

/**
 * Router
 */
 class Router{

    protected $routes = [];
    
    protected $params = [];

    public function add($route, $params){
        $this->routes[$route] = $params;
    }

    public function getRoutes(){
        return $this->routes;
    }

    public function match($url){
        foreach($this->routes as $route => $params){
            if($url == $route){
                $this->params = $params;
                return true;
            }
        }
    }

    public function getParams(){
        return $this->params;
    }
 }