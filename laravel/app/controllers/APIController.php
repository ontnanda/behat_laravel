<?php
class APIController extends BaseController{
  protected $dealfishService;

  public function __construct(DealfishService $dealfishService){
    $this->dealfishService = $dealfishService;
  }

  public function getMemberByEmail(){
    $email = Input::get('email');
    $member =  $this->dealfishService->findMemberByEmail($email);
    echo($member);
    if($member==0){
      return Response::json(array('check_result'=>'ok'), 200);
    }else{
      return Response::json(array('check_result'=>'fail'), 200);
    }
  }
}
