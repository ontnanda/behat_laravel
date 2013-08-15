<?php
class DealfishServiceTest extends TestCase{
  public function __construct(){
    $this->mock = Mockery::mock('Eloquent', 'Member');
  }

  public function teardown(){
    \Mockery::close();
  } 

  public function testGetMemberByEmail(){
    $target_email = 'valid@email.com';
    $this->mock->shouldReceive('where')->with('email', '=', $target_email)->once()->andReturn($target_email); 
    $this->app->instance('Member', $this->mock);

    $dealfishService = new DealfishServiceEloquent($this->mock);
    $this->assertNotNull($dealfishService->findMemberByEmail($target_email));
  }
} 
