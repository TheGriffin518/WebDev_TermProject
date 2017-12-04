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
      echo "<table>";
      echo "<tr><th> Item </th>";
      echo "<th> Price </th>";
      echo "<th> Seller </th>";
      echo "<th> Remove </th></tr>";
      while ($row = mysqli_fetch_array($result)) {
      	    echo "<tr>";
	    echo "<td>" . $row['book'] . "</td>";
	    echo "<td>" . $row['price'] . "</td>";
	    echo "<td>" . $row['seller'] . "</td>";
	    echo "<td><input type='checkbox' name='removelist[]' value='". $row['book'] . "'></td>";
	    echo "</tr>";
      }
      echo "</table>";
?>
	<input type="submit" name="submit" value="Update">
    </form>
    </div>
  </div>
</body>


</html>

