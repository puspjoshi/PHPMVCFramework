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
    public static string $ROOT_DIR;
    public Router $router;
    public Request $request;
    public Response $response;
    public static Application $app;

    public function __construct($rootPath)
    {
      self::$ROOT_DIR = $rootPath;
      self::$app = $this;

      $this->request = new Request();
      $this->response = new Response();
      $this->router = new Router($this->request, $this->response);
    }
    
    public function run(){
        echo $this->router->resolve();
    }
  }