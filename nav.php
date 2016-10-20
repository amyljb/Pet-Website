<div class="container-fluid">
	<nav class="navbar">
		<div class="a">
			<div class="navbar-header">
			    <a class="navbar-brand" href="index.php">ADOPT A PET</a>
			</div>
			<ul class="nav navbar-nav">
				<li><a href="index.php">HOME</a></li>
				<li><a href="index.php#about">ABOUT</a></li> 
				<li class="dropdown">
				    <a class="dropdown-toggle" data-toggle="dropdown" id="pets-btn" href="#">PETS
				    <span class="caret"></span></a>
				    <ul class="dropdown-menu">
						<li><a href="dogs.php">DOGS</a></li>
						<li><a href="#">CATS</a></li>
						<li><a href="#">SMALL FURRIES</a></li> 
				    </ul>
				</li>	      
				<li><a href="add-pet.php">ADD A PET</a></li> 
				<li><a href="index.php#contact">CONTACT</a></li> 
			</ul>
			<ul class="nav navbar-nav navbar-right">
                <li style="padding-right:20px;"><a href="#loginModal" data-toggle="modal">SIGNUP/LOGIN</a></li>
            </ul>
		</div>
	</nav>
</div>

	<!-- Modal -->
	<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
		    <div class="modal-content">
		        <div class="modal-header">
		        	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          		<span aria-hidden="true">&times;</span>
		        	</button>
		        	<!-- <h4 class="modal-title" id="myModalLabel">SIGNUP PAGE</h4> -->

<!-- SIGN UP FORM -->	        	
		      	</div>
		      	<div class="modal-body">
		      		<ul class="nav nav-tabs">
  						<li class="active"><a data-toggle="tab" href="#signup-div">SIGNUP</a></li>
  						<li><a data-toggle="tab" href="#login-div">LOGIN</a></li>
					</ul>

					<div class="tab-content">
						<div id="signup-div" class="tab-pane fade in active">
				        	<form id="signup" role="form" action="signup.php" method="POST">
					        	<p>Not registered? Fill out the form below to sign up!</p>
					        		<div class="form-group">
						        		<label for="username" class="sr-only">Username</label>
						        		<input type="text" name="username" id="username" class="form-control" placeholder="Username" required autofocus>
						        	</div>
						        	<div class="form-group">
						        		<label for="email" class="sr-only">Email</label>
						        		<input type="email" name="email" id="email" class="form-control" placeholder="Email" required>
						        	</div>
						        	<div class="form-group">
						        		<label for="password" class="sr-only">Password</label>
						        		<input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
						        	</div>
						        	<div class="form-group">
						        		<div class="modal-footer">
						        			<button type="submit" class="btn btn-default">SIGNUP</button>
						        		</div>
						        	</div>
			      			</form>
	      				</div> <!--END OF SIGNUP-->

<!-- LOGIN FORM -->	
					<div id="login-div" class="tab-pane fade">
	      				<form id="login" role="form" action="login.php" method="POST">
		      				<p>Enter your username & password to login!</p>
				        		<div class="form-group">
					        		<label for="username" class="sr-only">Username</label>
					        		<input name="username" id="username" class="form-control" placeholder="Username" required autofocus>
					        	</div>
					        	<div class="form-group">
					        		<label for="password" class="sr-only">Password</label>
					        		<input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
					        	</div>
					        	<!-- <div class="form-group">
									<div class="checkbox">
					          			<label>
					            			<input type="checkbox" value="remember-me"> Stay logged in
					          			</label>
					        		</div>
					        	</div> -->
					        	<div class="form-group">
					        		<div class="modal-footer">
					        			<button type="submit" class="btn btn-default">LOGIN</button>
					        		</div>
					        	</div>
	      				</form>
	      			</div> <!--END OF LOGIN-->
	      			</div>
		      	</div>
		    </div>
		</div>
	</div> <!--END OF MODAL-->



