<?php
	//database information 
    $server 	= "localhost"; 
	$user 		= "root";
	$pass 		= "";
    $database 	= "gojoanime";
         
	//make the database connection 
	$mysqli = new mysqli($server, $user, $pass, $database);
    
	// Check connection
	if ($mysqli->connect_error) {
		die("Connect Error " . $mysqli->connect_errno . ": " . $mysqli->connect_error);
	}

	if ($mysqli->query($sql) == TRUE ) {
		echo "record inserted successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
    
	if ($mysqli->query($sql2) == TRUE ) {
		echo "record inserted successfully";
	} else {
		echo "Error: " . $sql2 . "<br>" . $conn->error;
	}
?>
