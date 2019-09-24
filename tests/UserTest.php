<?php

use PHPUnit\Framework\TestCase;

class UserTest extends TestCase {

	public function testReturnsFullName() {

		$user = new User;

		$user->first_name = 'batang';
		$user->last_name = 'kagaw';

		$this->assertEquals('batang kagaw', $user->getFullName());
	}

	public function testFullNameIsEmptyByDefault() {
		$user = new User;

		$this->assertEquals('', $user->getFullName());
	}

	public function testNotificationIsSent() {
		$user = new User;
		$mockMailer = $this->createMock(Mailer::class);
		$mockMailer->method('sendMessage')
							 ->willReturn(true);
		$user->setMailer($mockMailer);
		$user->email = 'yoshie2x+123@gmail.com';
		$this->assertTrue($user->notify('Hello'));
	}

}