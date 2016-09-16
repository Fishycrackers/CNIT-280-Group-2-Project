<?php

	#Echo style sheet

	$firstName="";
	$lastName="";
	$emailAddress="";
	$manuscript="";
	
	$target_dir="../manuscripts";
	
	$firstName=!empty($_POST['first_name']) ? $_POST['first_name'] : '';
	$lastName=!empty($_POST['last_name']) ? $_POST['last_name'] : '';
	$emailAddress=!empty($_POST['email_address']) ? $_POST['email_address'] : '';
	$manuscript=!empty($_FILES['manuscript']) ? $FILES['manuscript'] : '';

	echo "Youre name is" . $firstName . "<br>";
	echo "Your last name is " . $lastName . "<br>";
	echo "Your email address is " . $emailAddress . "<br>";
	echo "Your manuscript name is " . basename($_FILES["manuscript"]) . "<br>";
	
	
?>