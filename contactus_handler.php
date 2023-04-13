<?php
	$name = $_POST['name'];
	$visitor_email = $_POST['email'];
	$message = $_POST['message'];
	
	$email_from='shravankumar423249@gmail.com';
	
	$email_subject="New Form submission";
	
	$email_body="User Name: $name.\n".
				"User Email: $visitor_email.\n".
				"User Message: $message.\n";
				
	$to="shravankumar423249@gmail";
	
	$headers="form: $email_from\r\n";
	
	$headers .="Reply-To: $visitor_email\r\n";
	
	mail($to,$email_subject,$email_body,$headers);
	
	header("Location: contact_us.html");
	
	?>