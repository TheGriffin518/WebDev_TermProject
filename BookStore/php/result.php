<?php
   session_start();
   if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
        $username = $_SESSION['username']; 
   }
   else {
   	require_once('php/functions.php');
	redirect('http://localhost:8888/loginError.html');
   }

   if (!empty($_POST)) {
        $search = $_POST['search'];
	$query = "SELECT * FROM inventory WHERE book LIKE '%$search%'";
   }
   else {
   	$query = "SELECT * FROM inventory";
   }

   $servername = 'localhost:3306'; // change to your correct localhost port number
   $dbname = 'bookstore'; // change to your database name
   $username = 'root'; // change to your username
   $password = 'root'; // change to your db password 

   $conn = new mysqli($servername, $username, $password, $dbname);
   if ($conn->connect_errno > 0) {
      die("Unable to connect to database [" . $conn->connect_error . "]");
   }

   if (!$result = $conn->query($query)) {
      die("There was an error running the query [" . $conn->error . "]");
      echo "no user";
   }

   echo "<table>";
   while ($row = $result->fetch_assoc()) {
   	 echo "<tr>";
   	 echo "<td>" . $row['book'] . "</td>" .
	      "<td>" . $row['price'] . "</td>";
	 echo "</tr>";
   }
   echo "</table>";
   
?>