
<?php
	include("session.php"); 
   if (!empty($_POST)) {
        $bookname = $_POST['bookname'];
	echo $bookname;
        $sellprice = $_POST['price'];
	$query = "INSERT INTO inventory (book, price, seller) VALUES ('$bookname', '$sellprice', '$username')";
    
	}
    else {
        $query = "SELECT * FROM inventory";
    }

   if (!$conn->query($query)) {
      die("There was an error running the query [" . $conn->error . "]");
   }
	header('Location: http://localhost/bookstore/php/homepage.php');
?>
