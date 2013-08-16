<?php 
interface DealfishService{
  public function findItemById($itemId);
  public function findMemberByEmail($email);
  public function checkExistingEmail($email);
}
