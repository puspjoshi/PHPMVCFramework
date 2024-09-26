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
    protected array $routes = [];
    public function get($path, $callback)
    {
         $this->routes['get'][$path] = $callback;  
    }

    public function resolve(){
        echo "<pre>"; print_r($_SERVER); echo "</pre>";
    }

  }