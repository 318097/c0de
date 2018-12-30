<?php
	$email = "318097@gmail.com";
	$subject = "PHP";
	$name = "Mehul";
	$message = "Hello from PHP";
	$header = "from: $name <$email>";

	mail($email, $subject, $message, $header);
?>