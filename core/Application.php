<?php
namespace app\core;
/**
 * User: Pusp raj joshi
 * Date: Aug 2024
 * 
 */

 /**
  * Class Application
  * 
  * @author Pusp Joshi <erpushparaj23@gmail.com>
  * @package app\core
  *
  */

  class Application
  {
    public Router $router;
    public function __construct()
    {
        $this->router = new Router();

    }
    
    public function run(){
        $this->router->resolve();
    }

  }