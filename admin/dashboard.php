<?php
	session_start();
	if (!isset($_SESSION['login'])) {
	 header("Location:index.php");
	}
	
?>

this is only for logged in users

<a href="logout.php">Logout</a>