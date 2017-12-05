<?php
	include("session.php");

	if (isset($_POST['checkout'])){
		$sql = "DELETE cart, inventory FROM cart JOIN inventory WHERE cart.userid='$username' AND inventory.userid='$username'";

		if (!$conn->query($sql)) {
		      die("There was an error running the query [" . $conn->error . "]");
		      echo "no user";
		}

	}
        header('Location: http://localhost/bookstore/php/cart.php');
?>
