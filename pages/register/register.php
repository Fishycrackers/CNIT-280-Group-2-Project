<?php

	#Echo style sheet
	global $firstName, $lastName, $emailAddress, $manuscript;
	$firstName="";
	$lastName="";
	$emailAddress="";
	$manuscript="";
	
	$target_dir="../manuscripts";
	
	$firstName=!empty($_POST['first_name']) ? $_POST['first_name'] : '';
	$lastName=!empty($_POST['last_name']) ? $_POST['last_name'] : '';
	$emailAddress=!empty($_POST['email_address']) ? $_POST['email_address'] : '';
	$manuscript=!empty($_FILES['manuscript']["name"]) ? $_FILES['manuscript'] : '';

	/*
	echo "Youre name is " . $firstName . "<br>";
	echo "Your last name is " . $lastName . "<br>";
	echo "Your email address is " . $emailAddress . "<br>";
	
	
	if(isset($_FILES["manuscript"])){
		echo "<br>" . implode($_FILES["manuscript"]) . " is set" ;
		
	} else {
		echo "<br>" . implode($_FILES["manuscript"]) . " is NOT set";
	}
	
	if(isset($_POST)){
		echo "<br> POST set";
		
	} else {
		echo "POST NOT set";
		
	}
	*/
?>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="../../standardDesign.css">
	</head>
	<body>
		Thank you for submitting your registration info! <br>

		Here is a report of your submitted data: <br>

		First name: <?php$firstName?>


	</body>

</html>