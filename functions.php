<?php define("MAX_LENGTH", 6); 

	function generateHashWithSalt($password) { 

			$intermediateSalt = md5(uniqid(rand(), true)); 
			$salt = substr($intermediateSalt, 0, MAX_LENGTH); 
			return hash("sha256", $password . $salt); 
		} 
		
?>