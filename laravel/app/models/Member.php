<?php
class Member extends Eloquent{
  protected $table = 'member';
  protected $primaryKey = 'member_id';

  public static $factory = array(
    'member_id' => 'integer',
    'username' => 'string',
    'email' => 'email'
  );
}

