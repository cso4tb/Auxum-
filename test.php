<?php 
	session_start();
	if(isset($_SESSION['logged in']) && $_SESSION['logged in'] == 'true'){
		echo 'Members only page';
	}
	else{
		echo "Please sign in";
	}	
?>