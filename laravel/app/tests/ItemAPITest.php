<?php

class ItemAPITest extends TestCase {
  public function teardown(){
    \Mockery::close();
  }

	/**
	 * A basic functional test example.
	 *
	 * @return void
	 */
	public function testGetItemById(){
    $mockedService = Mockery::mock('services\DealfishService'); 
    $mockedService->shouldReceive('findItemById')->with(10)->once()->andReturn('Foo');
    $this->app->instance('services\DealfishService', $mockedService);

    $crawler = $this->client->request('GET', '/item/10');
		$this->assertTrue($this->client->getResponse()->isOk());
	}

}
