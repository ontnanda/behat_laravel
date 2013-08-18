<?php 
interface DealfishService{
  public function findItemById($itemId);
  public function checkExistingEmail($email);
}
