<?php

namespace app\classes;

class Route 
{
    public static function loadRoute($route, $uri) {

        if(!array_key_exists($uri, $route)) {
            throw new \Exception("Rout does not exist {$uri}");
        }
        
        return "../app/{$route[$uri]}";
    }
}