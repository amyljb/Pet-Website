<!DOCTYPE html>

<html lang="en">

	<head>
		<meta charset="utf-8">
	      
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	      
	    <meta http-equiv="x-ua-compatible" content="ie=edge">

		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<!-- Main CSS -->
		<link rel="stylesheet" type="text/css" href="main.css">

	  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
	  	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	  	<script type='text/javascript' src='jquery.validate.js'></script>
	  
	</head>

	<body>

		<?php include('nav.php'); ?>

		<?php 
	        // Connect to the database
		require('db.php'); 
	    ?>

		<?php if ( !empty($_POST) && $_POST['petName'] && $_POST['breed'] && $_POST['age'] && $_POST['description'] && $_POST['ownerName'] && $_POST['email'] && $_POST['phone']) { // IF FORM IS SUBMITTED

		    /* SAVE ALL DATA TO DATABASE */
		    $petName = htmlspecialchars($_POST['petName']);
		    $breed = htmlspecialchars($_POST['breed']);
		    $age = htmlspecialchars($_POST['age']);
		    $description = mysqli_real_escape_string($_POST['description']);
		    $ownerName = htmlspecialchars($_POST['ownerName']);
		    $phone = htmlspecialchars($_POST['phone']);

		    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false) {
		        $email = $_POST['email'];               
		    }

		    date_default_timezone_set("Europe/Dublin");
		    $date = date('Y:m:d H:i');

		    $insert = "INSERT INTO pets ( petName, breed, age, description, ownerName, email, phone, date ) VALUES ( '$petName', '$breed', '$age', '$description', '$ownerName', '$email', '$phone', '$date' )";
		    mysqli_select_db( $dbhandle, 'adopt-a-pet' );
		    $enter_data = mysqli_query( $dbhandle, $insert );


		} ?>

			<h2>Thanks for your submission!</h2>
			<h3>Your pet will be added to our pet database!</h3>


	</body>

</html>