<?php
namespace app\core;
/**
 * User: Pusp raj joshi
 * Date: Aug 2024
 * 
 */

 /**
  * Class Router
  * 
  * @author Pusp Joshi <erpushparaj23@gmail.com>
  * @package app\core
  *
  */

  class Router
  {
    public Request $request;
    
    protected array $routes = [];
    public function __construct(\app\core\Request $request){
      $this->request = $request;
    }
    public function get($path, $callback)
    {
         $this->routes['get'][$path] = $callback;  
    }

    public function resolve(){
        $path = $this->request->getPath();

        $method = $this->request->getMethod();

        $callback = $this->routes[$method][$path] ?? false;

        
        if($callback === false){
          return "Not found";
        }

        if(is_string($callback)){
          return $this->renderView($callback);
        }

        return call_user_func($callback);
    }

    public function renderView($view){
      include_once __DIR__."/../views/$view.php";
    }

  }