<?php
        include("session.php");

	echo $_GET['bookid'];
	//echo $_GET['book'];
	//echo $_GET['price'];	

	$sql = "SELECT book, price, seller FROM inventory WHERE bookid=".$_GET['bookid']."";
  
 if (!$result = $conn->query($sql)) {
      die("There was an error running the query [" . $conn->error . "]");
      echo "no user";
   }
		
	if ($result->num_rows > 0){
	 	while($row = $result->fetch_assoc()){
			$book = $row['book'];
			$seller =  $row['seller'];	
			$sql2="INSERT INTO cart (book, userid, price, seller, bookid) VALUES ('$book', '$username', ".$row['price'].", '$seller', ".$_GET['bookid'].")"; 
				
			//echo $row['book'], $username, $row['price'], $row['seller'], $_GET['bookid'];		 
		}
	}

  if (!$conn->query($sql2)) {
      die("There was an error running the query [" . $conn->error . "]");
   }

        header('Location: http://localhost/bookstore/php/homepage.php');
?>
