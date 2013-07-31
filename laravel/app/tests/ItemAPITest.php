<?php

class ItemAPITest extends TestCase {

	/**
	 * A basic functional test example.
	 *
	 * @return void
	 */
	public function testGetItemById(){
		$crawler = $this->client->request('GET', '/item/10');
		$this->assertTrue($this->client->getResponse()->isOk());
	}

}
