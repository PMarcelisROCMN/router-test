<?php

class Router {
    public static function handle($method = 'GET', $path = '/', $fileName = '')
    {
        $currentMethod = $_SERVER['REQUEST_METHOD'];
        $currentPath = $_SERVER['REQUEST_URI'];

        if ($currentMethod != $method){

            return false;
        }
            require_once $fileName;
            exit();
    }
}