<?php
namespace app\controllers;

use eork\phpmvc\Application;
use eork\phpmvc\Controller;
use eork\phpmvc\Request;
use eork\phpmvc\Response;
use app\models\ContactForm;

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

    public function contact(Request $request,Response $response){
        $contact = new ContactForm();
        if($request->isPost()){
          $contact->loadData($request->getBody());
          if($contact->validate() && $contact->send())
          {
            Application::$app->session->setFlash('success','Thanks for contacting us');
            return $response->redirect('/contact');
          }
        }
        return $this->render('contact',[
          'model' => $contact
        ]);
    }

    public function handleContact(Request $request){
        $body = $request->getBody();

        echo "<pre>"; print_r($body); echo "<pre>";
        return "Handling submitted data";
    }

  }