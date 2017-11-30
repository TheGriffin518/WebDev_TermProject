<?php 
   session_start();
   if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
        $username = $_SESSION['username']; 
   }
   else {
   	require_once('php/functions.php');
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
<link rel="stylesheet" href="css/bookstore.css">
<head>

<body>
<div style="text-align:center" class="content">

<h1 style="text-align:left"><a href="account.html" style="text-decoration: none">UGATextbookMarketplace </a></h1>
<p></p>
<p style="text-align:right;">Hello, <?php echo $username;?> &nbsp &nbsp<a href="cart.html">Cart</a> &nbsp &nbsp<a href="main.html">History</a> &nbsp &nbsp<a href="main.html">Sign Out</a>&nbsp </p>
<p><br></p>

<h3 style="color:#af0303"> Shopping Cart<h3>        
                <table>
			<tr>
				<th> Item </th>
				<th> Price </th>
				<th> Remove </th>
				<th> Purchase </th>
                        </tr>
                </table>
		
		<p></p>
		<form>
                	<button onclick="checkOut()"> Checkout </button> 
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

