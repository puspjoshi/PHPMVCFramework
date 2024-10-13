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
    public Database $db;
    public Controller $controller;

    public function __construct($rootPath, array $config)
    {
      self::$ROOT_DIR = $rootPath;
      self::$app = $this;

      $this->request = new Request();
      $this->response = new Response();
      $this->router = new Router($this->request, $this->response);

      $this->db = new Database($config['db']);
    }
    
    public function run(){
        echo $this->router->resolve();
    }

    public function getController(): \app\core\Controller
    {
      return $this->controller;
    }
    public function setController(\app\core\Controller $controller): void
    {
      $this->controller = $controller;
    }
  }