<?php

	$to = "viviandt@viviandtommy2023.com"; // this is your Email address
	$from  = $_POST['email']; // this is the sender's Email address
	$sender_name = $_POST['name'];
	$number_of_gustes = $_POST['guest'];
	$events = $_POST['events'];
	$notes = $_POST['notes'];


	$subject = "Form submission";
	$message = $sender_name . " is attending! The number of guests in their party is : " .  $number_of_gustes . " and they will be attending " . $events . ". They wrote the following... ". "\n\n" . $notes;

	$headers = 'From: ' . $from;
	mail($to, $subject, $message, $headers);

?>