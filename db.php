<?php
	
	// Change the database connection here
	$username = "root";
	$password = "mysql";
	$hostname = "localhost"; 
	
	//connection to the database
	$dbhandle = mysqli_connect($hostname, $username, $password);
	
	if ( !$dbhandle ) {
		die("Unable to connect to MySQL");
	}

	// rows
	$fields_num = count($fields);

	// create table if doesn't exist
	mysqli_select_db( $dbhandle, 'adopt-a-pet' );
	$result = mysqli_query( $dbhandle, 'SELECT * FROM users' );
    if(!$result) {
        $create = "CREATE TABLE IF NOT EXISTS users (
    		name varchar(255),
    		email varchar(255),
    		message varchar(255),
    		date varchar(255)
        )";
        mysqli_query( $dbhandle, $create );
     }

    $result2 = mysqli_query( $dbhandle, 'SELECT * FROM pets' );
    if(!$result2) {
        $create = "CREATE TABLE IF NOT EXISTS pets(
    		petName varchar(255),
    		breed varchar(255),
    		age varchar(255),
    		description varchar(255),
			ownerName varchar(255),
    		email varchar(255),
    		phone varchar(255),
    		date varchar(255)
        )";
        mysqli_query( $dbhandle, $create );

    }

       $signupResult = mysqli_query( $dbhandle, 'SELECT * FROM userDetails' );
        if(!$signupResult) {
        $create = "CREATE TABLE IF NOT EXISTS userDetails(
            ID int PRIMARY KEY AUTO_INCREMENT,
            username varchar(255),
            email varchar(255),
            password varchar(255),
            date varchar(255)
        )";
        mysqli_query( $dbhandle, $create );

    }
	
?>