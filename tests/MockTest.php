<?php

use PHPUnit\Framework\TestCase;

class MockTest extends TestCase {

	public function testMock() {
		$mock = $this->createMock(Mailer::class);
		$mock->method('sendMessage')
				 ->willReturn(true);
 
		$result = $mock->sendMessage('yoshie2x+123@gmail.com', 'Hello');
		$this->assertTrue($result);
	}

}
