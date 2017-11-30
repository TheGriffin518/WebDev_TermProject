<?php

   $servername = "localhost:3306";
   $dbname = "bookstore";
   $username = "root";
   $password = "root";
   
   $conn = new mysqli($servername, $username, $password, $dbname);
   if ($conn->connect_errno > 0) {
      die("Unable to connect to database [" . $conn->connect_error . "]");
   }

   $sql = "SELECT * FROM book_images";
   
   if (!$result = $conn->query($sql)) {
      die("There was an error running the query [" . $conn->error . "]");
      echo "no user";
   }

    echo "<table>";
    while ($row = $result->fetch_assoc()){
    	  echo "<tr><td><img src=\"" . $row['path'] . "\" </td></tr>";
	  } 
    echo "</table>";
?>
