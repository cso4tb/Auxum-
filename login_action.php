<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbName = "Auxum";
    $conn = new mysqli($servername, $username, $password, $dbName);

    $username = $_POST['username'];
    $sql = "SELECT * from users WHERE name='".$username."'";

    $result = $conn->query($sql);    
	if ($result->num_rows == 0) {    	
	    echo "Error: No User with that name exists.";
	}
	else{	
		$row = $result->fetch_assoc();
		if($row['password'] == $_POST['password']){
			if (session_status() == PHP_SESSION_NONE) {
 			   session_start();
			}
			echo "You're not logged in.";
		}				
		else{
			echo "The password entered is incorrect.";
		}
	}

	session_start();
	$_SESSION['logged in'] = 'true';	
?>