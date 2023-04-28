<?php
require_once("./db/config.php");
require_once("Emailer.php");

	// Message
if(isset($_POST['client'])) {
    $name = filter_var($_POST['name'], FILTER_SANITIZE_EMAIL);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
    $message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);
	
	 $query = "INSERT INTO `client`(`name`, `email`, `message`) VALUES ('$name','$email','$message')";
	$result = mysqli_query($connect, $query);

	if($result){
		$subject = "Testing";
		$_message = "<p>$message</p>";
		
		if(sendMail($name, $email, $subject, $_message)){
			header("location: ./index.html");
		}
	}else{
		die(mysqli_error($conn));
	}
}