<?php
namespace St0omp\TinyApi;



class App {
    
    /*
        @params: void
        @returns: void
        The main static function of the app, in charge of starting it
    */
    public static function launch(){
        $router = new Router();
        $controllerClass = 'St0omp\TinyApi\Controller\\'.$router->controller;
        $controller = new $controllerClass();
        $controller->{$router->action}(...$router->arguments);
    }
}