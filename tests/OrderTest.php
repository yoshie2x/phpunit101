<?php

use PHPUnit\Framework\TestCase;

class OrderTest extends TestCase {
	// public function testOrderIsProcessed() {
	// 	$gateway = $this->getMockBuilder('PaymentGateway')
	// 									->setMethods(['charge'])
	// 									->getMock();

	// 	$gateway->expects($this->once())
	// 					->method('charge')
	// 					->with($this->equalTo(200))
	// 					->willReturn(true);

	// 	$order = new Order($gateway);

	// 	$order->amount = 200;

	// 	$this->assertTrue($order->process());
	// }

	// public function testOrderIsProcessedUsingMockery() {
	// 	$gateway = Mockery::mock('PaymentGateway');
	// 	$gateway->shouldReceive('charge')
	// 					->once()
	// 					->with(200)
	// 					->andReturn(true);

	// 	$order = new Order($gateway);
	// 	$order->amount = 200;

	// 	$this->assertTrue($order->process());
	// }
	

	public function tearDown(): void {
		Mockery::close();
	}

	public function testOrderIsProcessedUsingAMock() {
		$order = new Order(1, 1.99);

		$this->assertEquals(1.99, $order->amount);

		$gateway_mock = Mockery::mock('PaymentGateway');

		$gateway_mock->shouldReceive('charge')
								 ->once()
								 ->with(1.99);

		$order->process($gateway_mock);
	}

	public function testOrderIsProcessedUsingASpy() {
		$order = new Order(1, 1.99);

		$this->assertEquals(1.99, $order->amount);

		$gateway_spy = Mockery::spy('PaymentGateway');

		$order->process($gateway_spy);

		$gateway_spy->shouldHaveReceived('charge')
								 ->once()
								 ->with(1.99);
	}

} 