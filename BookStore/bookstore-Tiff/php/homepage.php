<?php
	include("session.php");

   if (!empty($_POST)) {
        $search = $_POST['search'];
        $query = "SELECT * FROM inventory WHERE book LIKE '%$search%' ORDER BY `inventory`.`price` ASC";

   }
   else {
        $query = "SELECT * FROM `inventory` ORDER BY `inventory`.`book` ASC";
        /*$query = "SELECT i.book 'book', i.price 'price', i.seller 'seller'
          FROM cart c, inventory i 
          WHERE c.book = i.book AND c.userid = '" . $username "' 
          ORDER BY PRICE DESC";*/
   }
   if (!$result = $conn->query($query)) {
      die("There was an error running the query [" . $conn->error . "]");
      echo "no user";
   }

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

    <form class = "search" method="post" action="" id="searchbar">
    	<input type="search" class = "search-bar" name="search" placeholder="Search...">
    	<button typw="submit" class="searchButton">Search</button>
    </form>


    <div class = "flex">
 <div style="text-align:center"> 
	<img class = "book-image" src="books.png"/>
	<p></p>
<?php 
	echo "<table>";
	echo "<tr><th> Title </th>";
      	echo "<th> Price </th>";
      	echo "<th> Seller </th></tr>";
	while ($row = $result->fetch_assoc()) {
         echo "<tr>";
         echo "<td>" . $row['book'] . "</td>" .
              "<td>" . $row['price'] . "</td>" .
              "<td>" . $row['seller'] . "</td>";
	 echo "<td><a href='addToCart.php?bookid=".$row['bookid']."'> Add to Cart</a></td>";
         echo "</tr>";
   }
   echo "</table>";
?>
</div>
	<p></p>
    </div>
  </body>
</html>
