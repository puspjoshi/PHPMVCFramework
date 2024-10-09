<?php
namespace app\core;
/**
 * User: Pusp raj joshi
 * Date: Aug 2024
 * 
 */

 /**
  * Class Controller
  * 
  * @author Pusp Joshi <erpushparaj23@gmail.com>
  * @package app\core
  *
  */
  

  class Controller
  {
    public string $layout = 'main';
    
    public function setLayout($layout)
    {
      $this->layout = $layout;
    }
    
    public function render($view, $params = [])
    {
        return Application::$app->router->renderView($view,$params);
    }
  }