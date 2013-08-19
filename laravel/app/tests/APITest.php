<?php
use Way\Tests\Factory;
class APITest extends TestCase {
  public function teardown(){
    \Mockery::close();
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
