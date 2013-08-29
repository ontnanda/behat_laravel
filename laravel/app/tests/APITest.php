<?php
use Way\Tests\Factory;
use Zizaco\FactoryMuff\Facade\FactoryMuff;
class APITest extends TestCase {
  public function __construct(){
    $this->factory = new FactoryMuff;
  }

  public function teardown(){
    \Mockery::close();
  }

  public function testGetAllUser(){
    $first_member = FactoryMuff::create('User');
    $second_member = FactoryMuff::create('User');
    $this->assertNotNull($first_member);
    $this->assertNotNull($second_member);
  }

  public function testCheckemailWithVelidEmail(){
    $target_email = "valid_email@gmail.com";
    $mockedService = Mockery::mock('DealfishService');
    $mockedService->shouldReceive('checkExistingEmail')->with($target_email)->once()->andReturn(0); 
    $this->app->instance('DealfishService', $mockedService);

    $response = $this->call('POST', '/api/member/checkEmail', array('email'=>$target_email));
    $content = $response->getContent();
    $data = json_decode($content);
    $this->assertJson($content);
    $this->assertEquals('ok', $data->check_result);
  }

  public function testCheckEmailWithDuplicateEmail(){
    $duplicate_email = "duplicate@gmail.com";
    $mockedService = Mockery::mock('DealfishService');
    $mockedService->shouldReceive('checkExistingEmail')->with($duplicate_email)->once()->andReturn(1); 
    $this->app->instance('DealfishService', $mockedService);

    $response = $this->call('POST', '/api/member/checkEmail', array('email'=>$duplicate_email));
    $content = $response->getContent();
    $data = json_decode($content);
    $this->assertJson($content);
    $this->assertEquals('fail', $data->check_result);
  }
}
