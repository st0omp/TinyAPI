<?php
namespace St0omp\TinyApi;

class Router {
    
    public $uri;            // The full URI
    public $controller;     // Resolved name of the controller
    public $action;         // Resolved name of the action in the controller
    public $arguments;      // Resolved arguments for the action

    /*
        @params void
        @returns void
        @throws Exception if the uri is not recognized
        By instanciates a new controller, it resolves the uri to a controller, an action
        and its arguments.
    */
    public function __construct(){
        $this->uri = $_SERVER['REQUEST_URI'];
        $params = explode('?', $this->uri);

        // Parses arguments in the uri
        $this->arguments = array();
        if(isset($params[1])) {
            foreach(explode('&',trim($params[1], '?')) as $value) {
                $tmp = explode('=', $value);
                $this->arguments[$tmp[0]] = isset($tmp[1]) ?? $tmp[1];
            }
        }

        // Retrieves the controller and the action
        $params = explode('/', trim($params[0], '/'));
        if(count($params) > 2) {
            throw new Exception("Unrecognized uri", 1);
        }
        $this->controller = isset($params[0]) && $params[0] ? $params[0] : "home";
        $this->action = isset($params[1]) ? strtolower($_SERVER["REQUEST_METHOD"]).ucfirst($params[1]) : "getIndex";
    }
}