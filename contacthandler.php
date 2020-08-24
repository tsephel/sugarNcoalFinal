<?php

	$name = $_POST['name'];
	$contact = $_POST['contact'];
	$email = $_POST['email'];
	$message = $_POST['message'];


		$toEmail = "sugarncoalnyc@gmail.com";
        $headers = "Form: ".$email;
        $text = "Your have receive an email from ".$name.".\n\n".$message; 

		mail($toEmail, $subject, $text, $headers);

		header("Location: thanku.html");
	


?>