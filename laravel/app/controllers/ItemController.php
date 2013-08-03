<?php
class ItemController extends BaseController{
  protected $dealfishService; 
  
  public function __construct(DealfishService $dealfishService){
    $this->dealfishService = $dealfishService;
  }

  public function getItemById($item_id){
    $item = $this->dealfishService->findItemById($item_id);
    var_dump($item);
  } 
}
