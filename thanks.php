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

		<?php if ( !empty($_POST) && $_POST['name'] && $_POST['email'] && $_POST['message'] && $_POST['mailing-list']) { // IF FORM IS SUBMITTED

	            /* SAVE ALL DATA TO DATABASE */
	            $name = htmlspecialchars($_POST['name']);
	            $message = htmlspecialchars($_POST['message']);
	            if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false) {
	                $email = $_POST['email'];               
	            }

	            date_default_timezone_set("Europe/Dublin");
	            $date = date('Y:m:d H:i');

	            $insert = "INSERT INTO users ( name, email, message, date ) VALUES ( '$name', '$email', '$message', '$date' )";
	            mysqli_select_db( $dbhandle, 'adopt-a-pet' );
	            $enter_data = mysqli_query( $dbhandle, $insert );


	       } ?>

		Thanks for your message <?php echo $name; ?><br>
		We'll get back to you soon!

</body>
</html>