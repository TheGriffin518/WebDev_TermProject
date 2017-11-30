
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
        $bookname = $_POST['bookname'];
	echo $bookname;
        $sellprice = $_POST['price'];
	$query = "INSERT INTO inventory VALUES ("'. $bookname . "', '" . $sellprice . "')";
    }
    else {
    	 echo "<h3>Empty post</h3>";
   	    $query = "SELECT * FROM inventory";
    }

   $servername = 'localhost:3306'; // change to your correct localhost port number
   $dbname = 'bookstore'; // change to your database name
   $username = 'root'; // change to your username
   $password = 'root'; // change to your db password 

   $conn = new mysqli($servername, $username, $password, $dbname);
   if ($conn->connect_errno > 0) {
      echo "<h3>Failure to connect</h3>";
      die("Unable to connect to database [" . $conn->connect_error . "]");
   }

   if (!$conn->query($query)) {
      die("There was an error running the query [" . $conn->error . "]");
   }
   echo "<h3>Hello</h3>";
?>