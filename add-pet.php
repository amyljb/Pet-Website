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

			<div class="contact-outer">
				<div class="container" id="contact">
					<h1>Need to have your pet adopted?</h1>

					<p>Add your pet's details to the form below</p>
					    <form class="form-horizontal" role="form" method="POST" action="submitpet.php">
						    <div class="form-group">
						      	<label class="control-label col-sm-2" for="petName">Pet's name: *</label>
						      	<div class="col-sm-10">
						        	<input type="text" class="form-control" name="petName" placeholder="Pet's name">
						      	</div>
						    </div>
						    <div class="form-group">
						      	<label class="control-label col-sm-2" for="breed">Breed: *</label>
						      	<div class="col-sm-10">
						        	<input type="text" class="form-control" name="breed" placeholder="Pet's breed">
						      	</div>
						    </div>
						    <div class="form-group">
						      	<label class="control-label col-sm-2" for="age">Age: *</label>
						      	<div class="col-sm-10">
						        	<input type="text" class="form-control" name="age" placeholder="Pet's age">
						      	</div>
						    </div>
						    <div class="form-group">
						      	<label class="control-label col-sm-2" for="description">Description: *</label>
						      	<div class="col-sm-10">
						      		<textarea class="form-control" rows="4" name="description" placeholder="Describe your pet here"></textarea>	      
						      	</div>
						    </div>
						    <div class="form-group">
						      	<label class="control-label col-sm-2" for="ownerName">Your name: *</label>
						      	<div class="col-sm-10">
						        	<input type="text" class="form-control" name="ownerName" placeholder="Your name">
						      	</div>
						    </div>
							<div class="form-group">
								<label for="email" class="col-sm-2 control-label">Email: *</label>
								<div class="col-sm-10">
									<input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="">
								</div>
							</div>
							<div class="form-group">
								<label for="message" class="col-sm-2 control-label">Phone No: *</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="phone" placeholder="Phone">
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

		<?php include('footer.php'); ?>

	</body>

</html>
