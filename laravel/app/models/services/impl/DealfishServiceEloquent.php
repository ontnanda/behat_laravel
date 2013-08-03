<?php namespace services;
class DealfishServiceEloquent implements DealfishService{
  public function findItemById($itemId){
    return \Item::find($itemId);
  }
}
