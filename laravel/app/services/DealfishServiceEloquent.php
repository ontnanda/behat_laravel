<?php
class DealfishServiceEloquent implements DealfishService{
  private $member;
  public function __construct($member){
    $this->member = $member;
  }

  public function findItemById($itemId){
    return \Item::find($itemId);
  }

  public function findMemberByEmail($email){
    return \Member::where('email', '=', $email)->firstOrFail();
  }

  public function checkExistingEmail($email){
    return $this->member->where('email', '=', $email)->count();
  }
}
