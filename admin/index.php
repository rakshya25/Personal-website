<?php 
	session_start();
	/* To connect database */
	$conn = mysqli_connect('localhost','root','','personal');
?>

<?php 
	if (isset($_POST['login_button'])) {
		$email = $_POST['email'];
		$password = $_POST['password'];

		$query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
		$result = mysqli_query($conn, $query);
		if(mysqli_num_rows($result)>0){
			$_SESSION['login'] = true;
			header("Location:dashboard.php");
		}else{
			echo "Invalid username or password";
		};
		

	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Rakshya admin</title>
	</head>
	<body>
		<form method="POST">
			<input type="email" placeholder="Email" name="email">
			<input type="password" placeholder="Password" name="password">
			<input type="submit" value="Login" name="login_button">
		</form>
	</body>
</html>