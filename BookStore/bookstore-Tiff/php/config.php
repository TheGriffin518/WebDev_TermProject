<?php

	define('DB_SERVER', 'localhost:3306');
   	define('DB_USERNAME', 'root');
  	define('DB_PASSWORD', '');
  	define('DB_DATABASE', 'bookstore');
	
	$conn = mysqli_connect(DB_SERVER, DB_USERNAME,DB_PASSWORD, DB_DATABASE);
    
    if ($conn->connect_errno > 0) {
        die("Unable to connect to database [" . $conn->connect_error . "]");
    }
?>
