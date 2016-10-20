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
  
</head>

<body>

	<script>

	$(document).ready(function(){
	    $('[data-toggle="tooltip"]').tooltip(); 
	});

	</script>

	<?php include 'nav.php';?>

	<?php $currentID = $_GET['id'];?>


	<?php 
        // Connect to the database
        require('db.php'); 

        $currentPet = mysqli_query($dbhandle, "SELECT petName, breed, description FROM pets WHERE id = $currentID;");

        $row = $currentPet->fetch_object() ?>

    <div class="container info-container">
		<div class="row info-top">
			<div class="col-lg-4 col-md-4">
				 	<img class="img-responsive feature-img" img src="images/fluffy.png" alt="dog">

				 	<div class="col-md-4 col-sm-4 col-xs-3">
						<img class="img-responsive feature-icon" img src="images/dog-sm1.jpg" alt="kids">
					</div>
					<div class="col-md-4 col-sm-4 col-xs-3">
						<img class="img-responsive feature-icon" img src="images/dog-sm2.jpg" alt="dog icon">
					</div>
					<div class="col-md-4 col-sm-4 col-xs-3">
						<img class="img-responsive feature-icon" img src="images/dog-sm3.jpg" alt="cat icon">
					</div>
			</div>

			<div class="col-lg-4 col-md-4 main-info">
				<h3><?php echo $row->petName ?></h3>
				<p><?php echo $row->description; ?></p>
				<p><?php echo $row->breed; ?></p>
				<button type="button" class="btn btn-info terms-btn" data-toggle="collapse" data-target="#terms">Adoption Policy <span class="glyphicon glyphicon-chevron-down"></span></button>
				<div id="terms" class="collapse">
						1. Our dogs are rehomed as indoor pets <br>
						2. Your garden should be fully enclosed by walls or secure fencing. <br>
						3. If there is nobody at home all day two dogs are required.<br>
						4. Children over seven years only. <br>
						5.There is a pre-adoption homecheck carried out for all dogs.</p>
				</div>
				<hr>
				<div class="col-md-3 col-sm-2 col-xs-3">
					<img class="img-responsive feature-icon" data-toggle="tooltip" title="Suitable for children" img src="images/kids.png" alt="kids">
				</div>
				<div class="col-md-3 col-sm-2 col-xs-3">
					<img class="img-responsive feature-icon" data-toggle="tooltip" title="Dog friendly" img src="images/dog-icon.jpg" alt="dog icon">
				</div>
				<div class="col-md-3 col-sm-2 col-xs-3">
					<img class="img-responsive feature-icon" data-toggle="tooltip" title="Cat friendly" img src="images/cat-icon.png" alt="cat icon">
				</div>
				
				<div class="clearfix"></div>
				<hr>
			</div>

			<div class="advert-sidebar col-lg-4 col-md-4">
				<div class="col-lg-12">
			 		<button type="button" class="btn watch-btn btn-lg">Add to Watchlist</button>
			 	</div>
			 	<form class="form-horizontal" role="form" method="POST" action="">
			 		<h3>Contact Advertiser:</h3>
					<div class="form-group">
					    <label class="control-label col-sm-2" for="email">Name:</label>
					    <div class="col-sm-10">
					        <input type="name" class="form-control" id="name" placeholder="Enter your name">
					    </div>
					</div>
					<div class="form-group">
						<label for="email" class="col-sm-2 control-label">Email</label>
						<div class="col-sm-10">
							<input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="">
						</div>
					</div>
					<div class="form-group">
						<label for="message" class="col-sm-2 control-label">Message</label>
						<div class="col-sm-10">
							<textarea class="form-control" rows="4" name="message"></textarea>
						</div>
					</div>
					<div class="form-group">
				      	<div class="col-sm-offset-2 col-sm-10">
				        	<button type="submit" class="btn btn-default">Submit</button>
				      	</div>
				    </div>
				</form>
			</div>
	</div>
</div>

	<?php include('footer.php'); ?>

    <?php mysqli_close($dbhandle); ?> 

</body>
</html>