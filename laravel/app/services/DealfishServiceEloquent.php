<?php
class DealfishServiceEloquent implements DealfishService{
  private $member;
  public function __construct(Member $member){
    $this->member = $member;
  }

  public function findItemById($itemId){
    return \Item::find($itemId);
  }

  public function checkExistingEmail($email){
    return $this->member->where('email', '=', $email)->count();
  }
}
