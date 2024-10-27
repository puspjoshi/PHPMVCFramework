<?php
namespace app\models;

use eork\phpmvc\Model;

/**
 * User: Pusp raj joshi
 * Date: Aug 2024
 * 
 */

 /**
  * Class ContactForm
  * 
  * @author Pusp Joshi <erpushparaj23@gmail.com>
  * @package app\models
  *
  */

  class ContactForm extends Model
  {
    public string $subject = '';
    public string $email = '';
    public string $body = '';

    public function rules(): array
    {
        return [
            'subject' => [self::RULE_REQUIRED],
            'email' => [self::RULE_REQUIRED],
            'body' => [self::RULE_REQUIRED]
        ];
    } 

    public function lables(): array
    {
        return [
            'subject' => 'Your Subject',
            'email' => 'Your Email',
            'body' => 'Message Body'
        ];
    }

    public function send()
    {
        return true;
    }
  }