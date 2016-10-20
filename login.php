
<?php require('db.php'); ?>
<?php require_once('functions.php'); ?>

	<?php if ( !empty($_POST) && $_POST['username'] && $_POST['password']) { // IF FORM IS SUBMITTED

		echo "checking login details";
	
		$checkdb = "SELECT * FROM userDetails WHERE username = '".mysqli_real_escape_string($dbhandle, $_POST['username'])."' LIMIT 1";
                
        $result = mysqli_query($dbhandle, $checkdb);
                
            if (mysqli_num_rows($result) > 0) {

            	echo "this username exists";
	                
   				$result2 = mysqli_query($dbhandle, $checkdb);
	                
       			$row = mysqli_fetch_array($result2);
	                
        		if (isset($row)) {
	                        
           			$hashedPassword = generateHashWithSalt($_POST['password']);
	                        
           			if ($hashedPassword == $row['password']) {

             			echo "this password exists";

             			//SET SESSION HERE

	       			}

	       		else {
	   				
	   				echo "this password does not exist";

	   				}

	   			}
            }
            else {

            	echo "This username does not exist";
            }
 	}

 	else {

 		echo "Please add a username and password.";

 	}
 	


?> 
