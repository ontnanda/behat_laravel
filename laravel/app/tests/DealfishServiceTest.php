<?php
use Way\Tests\Factory;
class DealfishServiceTest extends TestCase{
  public function teardown(){
    \Mockery::close();
  } 
  public function testGetMemberByExistingEmail(){
    $mockedDBQuery = \Mockery::mock('Member');
    $mockedDBQuery->shouldReceive('where')->once()->andReturn($mockedDBQuery);
    $mockedDBQuery->shouldReceive('count')->once()->andReturn(1);
    $dealfish = new DealfishServiceEloquent($mockedDBQuery);
    $this->assertNotNull($dealfish->checkExistingEmail('notexisting@email.com'));
  } 
}
