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
  * Class SiteController
  * 
  * @author Pusp Joshi <erpushparaj23@gmail.com>
  * @package app\controllers
  *
  */

  class SiteController extends Controller
  {
    public function home(){
      $name = [
        'name' => 'Pusp Joshi'
      ];
      return $this->render('home',$name);
    }

    public function contact(){

        return $this->render('contact');
    }

    public function handleContact(Request $request){
        $body = $request->getBody();

        echo "<pre>"; print_r($body); echo "<pre>";
        return "Handling submitted data";
    }

  }