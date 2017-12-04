<?php
	include("config.php");
   
	
	if($_SERVER["REQUEST_METHOD"] == "POST"){

		$username=$_POST["username"];
		$password=$_POST["password"];
		$username = stripslashes($username);
		$password = stripslashes($password);

		$sql = "SELECT * FROM accounts WHERE user='" . $username ."' and password='" . $password ."'";
		//$sql = "SELECT * FROM accounts WHERE user='$username' AND password='$password'";
		//$result = mysqli_query($conn, $sql);

		if (!$result = $conn->query($sql)) {
			die("There was an error running the query [" . $conn->error . "]");
			echo "no user";
		}

		$count = mysqli_num_rows($result);

		if($count == 1) {
			session_start();
			$_SESSION["loggedin"] = true;
			$_SESSION['username'] = $username;
			header('Location:http://localhost/bookstore/php/homepage.php');
			exit();
		}     
		else {
			require_once 'functions.php';
			redirect('http://localhost/bookstore/loginError.html');
		}

	}// if
?>
