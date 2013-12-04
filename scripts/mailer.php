<?php
	date_default_timezone_set('Etc/UTC');

	require 'PHPMailerAutoload.php';

	if (isset($_POST['foo']) && !empty($_POST['foo'])) { // Spam prevention
		echo false;
		exit;
	}

	// Validation
	if (isset($_POST['name']) && isset($_POST['message']) && isset($_POST['email']) && !empty($_POST['name']) && !empty($_POST['message']) && !empty($_POST['email'])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];

		$mail = new PHPMailer();

		$mail->From = "michael@hellomichael.com";
		$mail->FromName = "Contact Form";

		$mail->AddReplyTo($email, $name);

		$mail->AddAddress('michael@hellomichael.com', 'Michael Ngo');

		$mail->WordWrap = 50;
		$mail->IsHTML(true);

		$mail->Subject = "Hellomichael Contact Form";
		$mail->Body    = "<strong>$name</strong><br/>$email<br/><br/>$message";

		if (!phpMailer::ValidateAddress($email)) {
			echo "false";
		}

		elseif(!$mail->Send()) {
			echo $mail->ErrorInfo;
		} 

		else {
		  echo "true";
		}
	}

	else {
		echo "Please fill in all fields.";
	}
?>