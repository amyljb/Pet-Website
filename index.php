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
  <!-- 	<script type='text/javascript' src='jquery.validate.js'></script> -->
  
</head>

<body>

    <?php 
        // Connect to the database
        require('db.php'); 
    ?>
	
		<?php include('nav.php'); ?>
		
		<div class="jumbotron">

			<div id="myCarousel" class="carousel slide" data-ride="carousel">
	  			<!-- Indicators -->
				<ol class="carousel-indicators">
				    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				    <li data-target="#myCarousel" data-slide-to="1"></li>
				    <li data-target="#myCarousel" data-slide-to="2"></li>
				</ol>

			  <!-- Wrapper for slides -->
			  	<div class="carousel-inner" role="listbox">
			    
				    <div class="item active">
				     	<img src="images/dog.png" alt="Dog large">
				     	<div class="carousel-caption"></div>
				    </div>

				    <div class="item">
				      	<img src="images/cat-lrg.png" alt="Cat large">
				      	<div class="carousel-caption"></div>
				    </div>

				    <div class="item">
				      	<img src="images/dog-lrg.png" alt="Dog large2">
				      	<div class="carousel-caption"></div>
				    </div>

					  <!-- Left and right controls -->
					<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
				  	<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
				    	<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				    	<span class="sr-only">Next</span>
				  	</a>
				</div>

			 	<div class="main-text">
	                <div class="col-md-12">
	                    <h1>Adopt a pet</h1>
	                    <h3>Search for dogs, cats and more to adopt from <br> Irish animal rescues and dog pounds.</h3>
	                </div>
				</div>
			</div>
		</div>


		<div class="container about-section" id="about">
			<h3>About Us</h3>

			<img src="images/dog-group.jpg" class="img-responsive" alt="dog pack">
			<div class="row">
			  	<div class="col-md-4">
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
				</div>
				<div class="col-md-4">
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
				</div>
				<div class="col-md-4">
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
				</div>
			</div>
		</div>

	   	<div class="container adopt-container">
	   	<h3>Animals Available for Adoption</h3>
	      	<div class="row">
	        	<div class="card-deck-wrapper center-block">
	          		<div class="card-deck">
			            <div class="col-md-3">
			              	<div class="thumbnail">
			                	<div class="card">
			                  		<img class="card-img-top img-responsive" img src="images/fluffy.png" alt="dog">
			                  		<div class="card-block">
			                    		<p><button type="button" class="btn btn-success btn-lg btn-block adopt-btn"><a href="dogs.php">ADOPT A DOG</a></button></p>
			                  		</div>
			                	</div>
			              	</div>
			            </div>

	            <!--col-sm-6-->
	            <div class="col-md-3">
	              	<div class="thumbnail">
	                	<div class="card">
	                  		<img class="card-img-top img-responsive" img src="images/cat.png" alt="cat">
	                  		<div class="card-block">
	                    		<p><button type="button" class="btn btn-success btn-lg btn-block adopt-btn">ADOPT A CAT</button></p>
	                  		</div>
	                	</div>
	              	</div>
	            </div>

	            <!--col-sm-4-->
	            <div class="col-md-3">
	              	<div class="thumbnail">
	                	<div class="card">
	                  		<img class="card-img-top img-responsive" img src="images/rabbit.png" alt="rabbit">
	                  		<div class="card-block">
	                    		<p><button type="button" class="btn btn-success btn-lg btn-block adopt-btn">ADOPT A SMALL FURRY</button></p>
	                  		</div>
	                	</div>
	              	</div>
	            </div>

	                       <!--col-sm-6-->
	            <div class="col-md-3">
	              	<div class="thumbnail">
	                	<div class="card">
	                  		<img class="card-img-top img-responsive" img src="images/reptile.png" alt="cat">
	                  		<div class="card-block">
	                    		<p><button type="button" class="btn btn-success btn-lg btn-block adopt-btn">ADOPT A REPTILE</button></p>
	                  		</div>
	                	</div>
	              	</div>
	            </div>
	          </div>
	        </div>
	      </div>

	      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>

	      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>

	      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
	    </div>

	    
		<div class="contact-outer">
			<div class="container" id="contact">
				<h1>Got a question about pet adoption?</h1>

				<p>Send us a message and we'll get back to you ASAP</p>
				<form class="form-horizontal" role="form" method="POST" action="thanks.php">
					<div class="form-group">
						<label class="control-label col-sm-2" for="email">Name</label>
						<div class="col-sm-10">
						    <input type="name" class="form-control" name="name" placeholder="Enter your name">
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
						<div class="checkbox col-sm-offset-2 col-sm-10">
					    	<label><input type="checkbox" name="mailing-list">Sign up to our mailing list</label>
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

<a id="back-to-top" href="#" style="position: fixed; bottom: 20px; right: 20px;" class="btn btn-success btn-lg back-to-top" role="button" title="Back to top" data-toggle="tooltip" data-placement="left"><span class="glyphicon glyphicon-chevron-up"></span></a> 

<?php include('footer.php'); ?>

	
</body>

</html>