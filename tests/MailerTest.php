<?php

use PHPUnit\Framework\TestCase;


class MailerTest extends TestCase {
	public function testSendMessageReturnsTrue() {
		$this->assertTrue(Mailer::send('test@test.com', 'Hello!'));
	}

	public function testInvalidArgumentExceptionIfEmailIsEmpty() {
		$this->expectException(InvalidArgumentException::class);
		Mailer::send('', '');
	}
}