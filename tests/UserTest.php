<?php

use PHPUnit\Framework\TestCase;

class UserTest extends TestCase {

	// public function testReturnsFullName() {

	// 	$user = new User;

	// 	$user->first_name = 'batang';
	// 	$user->last_name = 'kagaw';

	// 	$this->assertEquals('batang kagaw', $user->getFullName());
	// }

	// public function testFullNameIsEmptyByDefault() {
	// 	$user = new User;

	// 	$this->assertEquals('', $user->getFullName());
	// }

	// public function testNotificationIsSent() {
	// 	$user = new User;
	// 	$mockMailer = $this->createMock(Mailer::class);
	// 	$mockMailer->expects($this->once())
	// 						->method('sendMessage')
	// 						->with($this->equalTo('yoshie2x+123@gmail.com'),$this->equalTo('Hello'))
	// 						->willReturn(true);
	// 	$user->setMailer($mockMailer);
	// 	$user->email = 'yoshie2x+123@gmail.com';
	// 	$this->assertTrue($user->notify('Hello'));
	// }

	// public function testCannotNotifyUserWithNoEmail() {
	// 	$user = new User;
	// 	$mockMailer = $this->getMockBuilder(Mailer::class)
	// 										->setMethods(null)
	// 										->getMock();

	// 	$user->setMailer($mockMailer);
	// 	$this->expectException(Exception::class);
	// 	$user->notify("Hello");
	// }
	
	public function testNotifyReturnsTrue() {
		$user = new User('test@test.com');
		$mailer = new Mailer;
		$user->setMailer($mailer);
		$this->assertTrue($user->notify('Hello!'));
	}
}