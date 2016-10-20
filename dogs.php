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

	<?php include 'nav.php';?>

	    <?php 
        // Connect to the database
        require('db.php'); 

        $dogs = mysqli_query($dbhandle, "SELECT petName, breed, description, id FROM pets");

        while($row = $dogs->fetch_object()) { ?>

        		<?php $id = $row->id; ?>

	     		<div class="card-deck-wrapper center-block">
		    		<div class="card-deck">
		        	    <div class="col-md-3">
				            <div class="thumbnail">
				                <div class="card">
				                  <img class="card-img-top img-responsive" img src="images/dog.png" alt="dog">
				                	<div class="card-block">
				                    	<a href="single.php?id=<?php echo $id; ?>">
				                    		<button type="button" class="btn btn-success btn-lg btn-block adopt-btn"><?php echo $row->petName; ?></button>
				                    	</a>
				                    	<h2><?php echo $row->breed; ?></h2>
				                </div>
				            </div>
				        </div>  
				    </div>
				</div>
  	
     	<?php   }

		mysqli_close($dbhandle);

		?> 

	<div class="clearfix"></div>
		
    <?php include('footer.php'); ?>

</body>


</html>