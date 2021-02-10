<?php
	$to="pratikrupani9@gmail.com";
	$name = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$msg = $_POST['message'];
	
	$message = "Message: " . $msg . "\n" . "From: " . $name . "\n" ."Email: " . $email;

	$retval = mail($to, $subject, $message);
	
	if( $retval == true ) {
            header('Location: index.html');
         }
?>
