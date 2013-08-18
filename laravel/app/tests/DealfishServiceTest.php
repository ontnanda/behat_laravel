<?php
use Way\Tests\Factory;
class DealfishServiceTest extends TestCase{
  public function teardown(){
    \Mockery::close();
  } 
  public function testGetMemberByExistingEmail(){
    $mockedDBQuery = \Mockery::mock('Member');
    $mockedDBQuery->shouldReceive('where')->with('email', '=', 'existing@email.com')->once()->andReturn($mockedDBQuery);
    $mockedDBQuery->shouldReceive('count')->once()->andReturn(1);
    $dealfish = new DealfishServiceEloquent($mockedDBQuery);
    $this->assertEquals(1, $dealfish->checkExistingEmail('existing@email.com'));
  } 
}
