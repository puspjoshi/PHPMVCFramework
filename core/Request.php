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

    public function getMethod()
    {
      return strtolower($_SERVER['REQUEST_METHOD']);
    }
    

  }