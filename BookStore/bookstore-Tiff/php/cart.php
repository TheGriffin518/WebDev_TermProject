<?php 
	include("session.php");

   if (!$result = $conn->query("SELECT i.book, i.price, i.seller, i.bookid FROM cart c, inventory i WHERE c.bookid = i.bookid AND c.userid ='" . $username . "' ORDER BY price DESC")) {
      die("There was an error running the query [" . $conn->error . "]");
   }
   $count = mysqli_num_rows($result);

?>
<html>
  <head>
    <meta charset="utf-8">
    <title> UGATextbookMarketplace </title>
    <link rel="stylesheet" href="textbook-marketplace.css">
    <link href='https://fonts.googleapis.com/css?family=Amarante' rel='stylesheet'>
  </head>

<body>
    <div class = "header">
      <!-- header and content -->
      <h1 class="header-title">UGATextbookMarketplace</h1>

      <a href="homepage.php"><h3 class="header-element">Welcome, <?php echo $username; ?> </h3></a>
      <a href="../sell-books.html"><h3 class="header-element">Sell Book</h3></a>
      <a href="cart.php"><h3 class="header-element">Cart</h3></a>
      <a href="logout.php"><h3 class="header-element" id="last-element">Logout</h3></a>
    </div>

 <div class = "flex">
 <div style="text-align:center">
    <h3 style="color:#af0303"> Shopping Cart<h3>        
    <form action="checkout.php" method="post">
<?php
      $totalPrice = 0;	 
      echo "<table>";
      echo "<tr><th> Item </th>";
      echo "<th> Price </th>";
      echo "<th> Seller </th>";
      echo "<th> Remove </th></tr>";
      while ($row = mysqli_fetch_array($result)) {
      	    echo "<tr>";
	    echo "<td>" . $row['book'] . "</td>";
	    echo "<td>" . $row['price'] . "</td>";
	    $totalPrice += $row['price'];
	    echo "<td>" . $row['seller'] . "</td>";
	    echo "<td><button><a href='remove.php?bookid=".$row['bookid']."'> Remove</a></button></td>";
	    echo "</tr>";
      }
      /**echo "<tr>
		<td></td>
		<td></td>
		<td></td>
		<td><button><a href='cartUpdate.php?bookid=".$row['bookid']."'> cartUpdate</a></button></td>
            </tr>";**/
      echo "</table>";
?>
	<p> Total: $<?php echo $totalPrice ?> </p>
	<!--<button><a href='cartUpdate.php?bookid=".$row['bookid']."'>Checkout</a></button>-->
	<input type="submit" name="checkout" value="Checkout">
    </form>
    </div>
  </div>
</body>


</html>

