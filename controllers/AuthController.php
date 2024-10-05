<?php
namespace app\controllers;

use app\core\Controller;
use app\core\Request;

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
      return $this->render('login');
    }

    public function register(Request $request){
        if($request->isPost()){
            return 'Handle Submitted request';
        }
        return $this->render('register');
    }


  }