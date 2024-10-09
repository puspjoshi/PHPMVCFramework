<?php
namespace app\controllers;

use app\core\Controller;
use app\core\Request;
use app\models\RegisterModel;

/**
 * User: Pusp raj joshi
 * Date: Aug 2024
 * 
 */

 /**
  * Class AuthController
  * 
  * @author Pusp Joshi <erpushparaj23@gmail.com>
  * @package app\controllers
  *
  */

  class AuthController extends Controller
  {
    public function login(){
      $this->setLayout('auth');
      return $this->render('login');
    }

    public function register(Request $request)
    {
        $registerModel = new RegisterModel();

        if($request->isPost()){

          $registerModel->loadData($request->getBody());
          
          
          

          if($registerModel->validate() && $registerModel->register())
          {
            return 'success';
          }

          echo "<pre>"; var_dump($registerModel->errors); echo "</pre>"; exit;

          return $this->render('register', [
            'model' => $registerModel
          ]);
        }

        $this->setLayout('auth');
        
        return $this->render('register', [
            'model' => $registerModel
        ]);
    }


  }