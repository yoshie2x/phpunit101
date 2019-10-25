<?php

class Order {

		// /**
		//  * Amount
		//  * @var int
		//  */
		// public $amount = 0;


		// /**
		//  * Payment gateway dependency
		//  * @var PaymentGateway
		//  */
		// protected $gateway;


		// /**
		//  * Constructor
		//  * @param PaymentGateway $gateway Payment gateway object
		//  * 
		//  * @return void
		//  */
		// public function __construct(PaymentGateway $gateway) {
		// 	$this->gateway = $gateway;
		// }

		// /**
		//  * Process the order
		//  * 
		//  * @return boolean
		//  */
		// public function process() {
		// 	return $this->gateway->charge($this->amount);
		// }
		
		/**
		 * Quantity
		 * @var int
		 */
		public $quantity;

		/**
		 * Unit price
		 * @var float
		 */
		public $unit_price;


		/**
		 * Amount
		 * @var float
		 */
		public $amount;


		/**
		 * Constructor
		 * 
		 * @param int $quantity Quantity
		 * @param float $unit_price Unit price
		 * 
		 * @return void
		 */
		public function __construct(int $quantity, float $unit_price) {
			$this->quantity = $quantity;
			$this->unit_price = $unit_price;

			$this->amount = $quantity * $unit_price;
		}

		/**
		 * Charge the total amount
		 *
		 * @param PaymentGateway $gateway Payment gateway object
		 *
		 * @return void
		 */
		public function process(PaymentGateway $gateway) {
			$gateway->charge($this->amount);
		}
}