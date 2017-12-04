<!DOCTYPE html>
<?php
	
        session_start();
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<title> UGATextbookMarketplace </title>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href='https://fonts.googleapis.com/css?family=Amarante' rel='stylesheet'>

<style type="text/css">

h1{     
        font-family:'Amarante';
        font-size: 20px;
        color: white;   
        background:#af0303;
}

footer{ 
        position: fixed;
        left 0; 
        bottom: 0;
        width:100%;
        height: 50px;
        background:#af0303;
        color:white;
        text-align: right;

}
.push{
	height: 50px;
}
.content{
	min-height: 100%;
	margin-bottom: -50px;
}
body{   
        background:white;
        color:black;
}

table{  
        border-style: solid;
        border-width: 5px;
        border-color: white;
        height: 70%;
        width: 30%;
        
        background: white;
        
        padding: 50px;
        margin-top: auto;
        margin-bottom: auto;
        margin-left: auto;
        margin-right: auto;
        text-align: left;


}

button{
        background-color:#af0303;
        border: none;
        color: white;
        padding: 10px 20px;
        text-align: center;
        font-size: 15px;
}

input[type=search]{
	width:300px;

}
</style>
<head>

<body>
<div style="text-align:center" class="content">

<h1 style="text-align:left"><a href="account.html" style="text-decoration: none">UGATextbookMarketplace </a></h1>
<p></p>
<p style="text-align:right;">Hello, <?php echo $_SESSION['username']; ?> &nbsp &nbsp<a href="cart-new.html">Cart</a> &nbsp &nbsp<a href="login.html">History</a> &nbsp &nbsp<a href="login.html">Sign Out</a>&nbsp </p> 
<form>
	<input type="search" id="search" placeholder="Search...">
	<button onclick="bookSearch()" class="searchButton">Search</button>
</form>
<p><br></p>

<img src="./books.png" alt="books; https://www.flaticon.com/authors/freepik">
<h3 style="color:#af0303"> Want To Sell Your Textbooks?<h3>        
                <table>
			<tr>
				<td>Enter Title</td>
				<td></td><td>Price</td>
			</tr>
			<tr>
				<td><input type="text" placeholder="Title"> </td>
				<td style="margin-right:50px; margin-left:none;">$</td><td><input type="text" placeholder="00.00" size="2"></td>
			</tr>
                </table>
       		<button onclick="sellBook()"> Post Sale </button> 



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

