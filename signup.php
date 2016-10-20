<?php require('db.php'); ?>
<?php require_once('functions.php'); ?>
	

	<?php if ( !empty($_POST) && $_POST['username'] && $_POST['password'] && $_POST['email']) { // IF FORM IS SUBMITTED

		/* SAVE ALL DATA TO DATABASE */	
		$username = htmlspecialchars($_POST['username']);
		$password = generateHashWithSalt( $_POST['password']);


		if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false) {
	                $email = $_POST['email'];               
	            }

		date_default_timezone_set("Europe/Dublin");
		$date = date('Y:m:d H:i');

	    $insert = "INSERT INTO userDetails (username, email, password, date) VALUES ('$username', '$email', '$password', '$date')";
	    mysqli_select_db( $dbhandle, 'adopt-a-pet' );
		$enter_data = mysqli_query( $dbhandle, $insert );

	} else {

		echo "You're missing some details.";

	}
	?> 

	<script>
		window.location = "index.php";
		alert("You are now logged in");
	</script>
