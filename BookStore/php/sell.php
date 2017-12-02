
<?php 
    session_start();
    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
        $username = $_SESSION['username']; 
    }
    else {
        require_once('functions.php');
	redirect('http://localhost:8888/loginError.html');
    }
    if (!empty($_POST)) {
        $bookname = $_POST['bookname'];
	echo $bookname;
        $sellprice = $_POST['price'];
	$query = "INSERT INTO inventory VALUES ('". $bookname . "', '" . $sellprice . "', '" . $username . "')";
    }
    else {
        $query = "SELECT * FROM inventory";
    }

   $servername = 'localhost:3306'; // change to your correct localhost port number
   $dbname = 'bookstore'; // change to your database name
   $user = 'root'; // change to your username
   $password = 'root'; // change to your db password 

   $conn = new mysqli($servername, $user, $password, $dbname);
   if ($conn->connect_errno > 0) {
      die("Unable to connect to database [" . $conn->connect_error . "]");
   }

   if (!$conn->query($query)) {
      die("There was an error running the query [" . $conn->error . "]");
   }
   header('Location: http://localhost:8888/php/account.php');
?>