<?php


function sendMail ($name, $from, $subject, $message) {
	$headers = "MIME-Version:1.0\r\n";
	$headers .= "Content-type: text/html; charset=UTF-8\r\n";
	$headers .= "From: $name<$from>\r\n";
	$headers .= "Cc:olisaelokajonathan@gmail.com.l.com\r\n";
	$headers .= "Bcc:olisaelokajonathan@gmail.com..com\r\n";
	
	return mail("olisaelokajonathan@gmail.com..com", $subject, $message, $headers);	
}