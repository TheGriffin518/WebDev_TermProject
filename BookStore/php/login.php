<?php
   
   $servername = "localhost:3306";
   $dbname = "bookstore";
   $username = "root";
   $password = "root";
   
   $conn = new mysqli($servername, $username, $password, $dbname);
   if ($conn->connect_errno > 0) {
      die("Unable to connect to database [" . $conn->connect_error . "]");
   }
 
   $username=$_POST["username"];
   $password=$_POST["password"];
   $username = stripslashes($username);
   $password = stripslashes($password);

   $sql = "SELECT * FROM accounts WHERE userid='" . $username ."' and password='" . $password ."'";
   //$sql = "SELECT * FROM accounts WHERE user='$username' AND password='$password'";

   if (!$result = $conn->query($sql)) {
      die("There was an error running the query [" . $conn->error . "]");
      echo "no user";
   }

   $count = mysqli_num_rows($result);

   if($count == 1) {
      session_start();
      $_SESSION["loggedin"] = true;
      $_SESSION["username"] = $username;
      header('Location: http://localhost:8888/php/account.php');
      exit();
   }     
   else {
   	require_once 'functions.php';
	redirect('http://localhost:8888/loginError.html');
    }
?>
