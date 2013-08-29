<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

  protected $table = 'users';
  protected $hidden = array('password');

  /**
   *    * Factory
   *       */
  public static $factory = array(
    'username' => 'string',
    'email' => 'email',
    'password' => 'password',
    'password_confirmation' => 'password'
  );

  public function getAuthIdentifier()
  {
    return $this->getKey();
  }

  public function getAuthPassword()
  {
    return $this->password;
  }
  public function getReminderEmail()
  {
    return $this->email;
  }

}
