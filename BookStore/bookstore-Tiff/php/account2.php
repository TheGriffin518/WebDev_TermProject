<?php 
   session_start();
   if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
        $username = $_SESSION['username']; 
   }
   else {
   	require_once('functions.php');
	redirect('http://localhost:8888/loginError.html');
   }
?>
<!DOCTYPE html>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<title> UGATextbookMarketplace </title>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href='https://fonts.googleapis.com/css?family=Amarante' rel='stylesheet'>
<link rel="stylesheet" href="../css/bookstore.css">
</head>

<body>
<?php echo "<h1>" . $username . "</h1>";?>
<div style="text-align:center" class="content">

<h1 style="text-align:left"><a href="account.php" style="text-decoration: none">UGATextbookMarketplace </a></h1>
<p></p>
<p style="text-align:right;">Hello,<a href="account.php"> <?php echo $username;?></a>&nbsp &nbsp<a href="selling.php"> Your Items</a> &nbsp &nbsp
<a href="cart.php">Cart</a> &nbsp &nbsp<a href="logout.php">Sign Out</a>&nbsp </p> 
<form method="post" action="result.php" id="searchbar">
	<input type="text" name="search" id="search" placeholder="Search...">
	<button type="submit" class="searchButton">Search</button>
</form>
<p><br></p>

<img src="../images/books.png" alt="books; https://www.flaticon.com/authors/freepik">
<h3 style="color:#af0303"> Want To Sell Your Textbooks?<h3>        
<form method="post" action="sell.php" id="sell">
     <table>
			<tr>
				<td>Enter Title</td>
				<td></td><td>Price</td>
			</tr>
			<tr>
				<td><input type="text" name="bookname" placeholder="Title"> </td>
				<td style="margin-right:50px; margin-left:none;">$</td>
				<td><input type="text" name="price" placeholder="00.00" size="2"></td>
				<td><button type="submit"> Post Sale </button></td>
			</tr>

                </table>
		
    </form>			      


<p></p>
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

