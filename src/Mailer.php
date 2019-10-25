<?php

class Mailer {
	// public function sendMessage($email, $message) {
	// 	if (empty($email)) {
	// 		throw new Exception;
	// 	}
	// 	sleep(3);
	// 	echo "send '$message' to '$email'";
	// 	return true;
	// }
	

	public static function send(string $email, string $message) {
		if (empty($email)) {
			throw new InvalidArgumentException;
		}

		echo "Send '$message' to $email";

		return true;
	}


}