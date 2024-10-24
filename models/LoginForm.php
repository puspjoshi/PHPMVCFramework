<?php
namespace app\models;

use app\core\Application;
use app\core\Model;
use app\models\User;

/**
 * User: Pusp raj joshi
 * Date: Aug 2024
 * 
 */

 /**
  * Class LoginForm
  * 
  * @author Pusp Joshi <erpushparaj23@gmail.com>
  * @package app\models
  *
  */

  class LoginForm extends Model
  {
    public string $email = '';
    public string $password = '';

    public function rules(): array
    {
        return [
            
            'email' => [self::RULE_REQUIRED, self::RULE_EMAIL],
            'password' => [self::RULE_REQUIRED],
        ];
    }

    public function lables(): array
    {
        return [
            'email' => 'Your Email',
            'password' => 'Password'
        ];
    }

    public function login()
    {
        $user = User::findOne(['email' => $this->email]);

        if(!$user){
            $this->addErrorMsg('email','user does not exist with this email.');
            return false;
        }
        if(!password_verify($this->password, $user->password)){
            $this->addErrorMsg('password','Password is incorrect.');
            return false;
        }
        
        return Application::$app->login($user);
    }

    

    
  }