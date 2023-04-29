<?php
	include 'includes/conn.php';
	session_start();

	if(isset($_SESSION['users_dl'])){
		$sql = "SELECT * FROM users WHERE user_id = '".$_SESSION['users_dl']."'";
		$query = $conn->query($sql);
		$voter = $query->fetch_assoc();
	}
	else{
		header('location: login.php');
	}


	if(isset($_SESSION['type_dl'])){

	}
	else{
		header('location: login.php');
	}

?>