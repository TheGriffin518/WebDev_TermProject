<?php
	include("config.php");
	session_start();

/**	$user_check = $_SESSION["username"];

	$ses_sql = mysqli_query($conn,"select user from accounts where user = '$user_check' ");

	$row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

	$account = $row['user'];

	if(!isset($_SESSION['username'])){
		header("location:login.php");
	}
**/
  if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
        $username = $_SESSION['username']; 
   }
   else {
        require_once('functions.php');
        redirect('location:login.php');
   }

?>
