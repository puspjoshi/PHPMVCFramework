<?php
namespace app\core;
/**
 * User: Pusp raj joshi
 * Date: Aug 2024
 * 
 */

 /**
  * Class Request
  * 
  * @author Pusp Joshi <erpushparaj23@gmail.com>
  * @package app\core
  *
  */

  class Request
  {
    public function getPath()
    {
        $path = $_SERVER['REQUEST_URI'] ?? '/';
        $position = strpos($path, '?');
        
        if($position === false){
          return $path;
        }

        return substr($path, 0, $position);
    }

    public function method()
    {
      return strtolower($_SERVER['REQUEST_METHOD']);
    }

    public function isGet(){
      return $this->method() === 'get';
    }
    public function isPost(){
      return $this->method() === 'post';
    }
    
    public function getBody(){
      $body = [];
      
      if($this->method() === "get"){
        foreach($_GET as $key => $value){
          $body[$key] = filter_input(INPUT_GET, $key, FILTER_SANITIZE_SPECIAL_CHARS);
        }
      }

      if($this->method() === "post"){
        foreach($_POST as $key => $value){
          $body[$key] = filter_input(INPUT_POST, $key, FILTER_SANITIZE_SPECIAL_CHARS);
        }
        
      }

      return $body;
    }
  }