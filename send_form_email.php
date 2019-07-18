<?php
	$name = $_POST['name'];
	$visitor_email = $_POST['email'];
	$visitor_phone = $_POST['phone'];
	$message = $_POST['message'];
	
	$email_from = 'pavelpeorv93@gmail.com';

	$email_subject = 'New form Submission';
	
	$email_body = "User name: $name.\n".
					"User email: $visitor_email.\n".
						"User phone: $visitor_phone.\n".
							"User message: $message.\n";
							
	$to = 'pavelpeorv93@gmail.com';

	$headers = "From: $email_from \r\n";
	
	$headers = "Reply-To: $visitor_email \r\n";
	
	$headers = "Call-To: $visitor_phone \r\n";
	
	mail($to,$email_subject,$email_body,$headers);
	
	header("Location: contact.html");
	
	?>