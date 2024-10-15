<?php
namespace app\controllers;

use app\core\Application;
use app\core\Controller;
use app\core\Request;
use app\models\User;

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
        $user = new User();

        if($request->isPost()){

          $user->loadData($request->getBody());
          
          
          if($user->validate() && $user->save())
          {
            Application::$app->session->setFlash('success','Thanks for registration.');
            Application::$app->response->redirect('/');
            exit;
          }

          return $this->render('register', [
            'model' => $user
          ]);
        }

        $this->setLayout('auth');
        
        return $this->render('register', [
            'model' => $user
        ]);
    }


  }