<?php 
   session_start();
   if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
        $username = $_SESSION['username']; 
   }
   else {
   	require_once('functions.php');
	redirect('http://localhost:8888/loginError.html');
   }

   $servername = "localhost:3306";
   $dbname = "bookstore";
   $user = "root";
   $password = "root";
   $conn = new mysqli($servername, $user, $password, $dbname);
   if ($conn->connect_errno > 0) {
      die("Unable to connect to database [" . $conn->connect_error . "]");
   }
   

   if (!$result = $conn->query("SELECT i.book, i.price FROM cart c, inventory i WHERE c.book = i.book AND i.seller ='" . $username . "' ORDER BY price DESC")) {
      die("There was an error running the query [" . $conn->error . "]");
   }
   $count = mysqli_num_rows($result);

?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<title> UGATextbookMarketplace </title>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href='https://fonts.googleapis.com/css?family=Amarante' rel='stylesheet'>
<link rel="stylesheet" href="../css/bookstore.css">
<head>

<body>
<div style="text-align:center;" class="content">

<h1 style="text-align:left"><a href="account.php" style="text-decoration: none">UGATextbookMarketplace </a></h1>
<p></p>
    <p style="text-align:right;">Hello, <a href="account.php">user</a> &nbsp &nbsp<a href="cart.php">Cart</a> &nbsp &nbsp<a href="logout.php">Sign Out</a>&nbsp </p>
<p><br></p>

<h3 style="color:#af0303"> Shopping Cart<h3>        
    <form action="checkout.php" method="post">
<?php 
      echo "<table>";
      echo "<tr><th> Item </th>";
      echo "<th> Price </th>";
      echo "<th> Remove </th></tr>";
      while ($row = mysqli_fetch_array($result)) {
      	    echo "<tr>";
	    echo "<td>" . $row['book'] . "</td>";
	    echo "<td>" . $row['price'] . "</td>";
	    echo "<td><input type='checkbox' name='removelist[]' value='". $row['book'] . "'></td>";
	    echo "</tr>";
      }
      echo "</table>";
?>
	<input type="submit" name="submit" value="Update">
    </form>
<p style="padding-bottom:25px;"></p>
<div class="push"></div>
</div>
<footer></footer>

<script type="text/javascript">
function bookSearch(){
        var search = document.getElementById("search");

}
</script>
</body>


</html>

