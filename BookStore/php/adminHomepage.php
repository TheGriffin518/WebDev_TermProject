<?php
   include("session.php");
   $query = "SELECT * FROM accounts WHERE user NOT LIKE '%admin%'";
  
   if (!$result = $conn->query($query)) {
      die("There was an error running the query [" . $conn->error . "]");
      echo "no user";
   }
?>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<title> UGATextbookMarketplace </title>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href='https://fonts.googleapis.com/css?family=Amarante' rel='stylesheet'>
<link rel="stylesheet" href="../textbook-marketplace.css">
</head>

<body>
    <div class = "header">
          <!-- header and content -->
          <h1 class="header-title">UGATextbookMarketplace</h1>
          <a href="login.html"><h3 class="header-element" >Logout</h3></a>
    </div>
<br><br><br><br><br><br>


<?php
$servername = 'localhost'; // change to your correct localhost port number
$dbname = 'bookstore'; // change to your database name
$username = 'root'; // change to your username
$password = 'root'; // change to your db password 

$conn = new mysqli($servername, $username, $password,$dbname);
if(mysqli_connect_errno())
{
   die("connection failed: " . mysqli_connect_error()
   . " (" . mysqli_connect_errno()
   . ")");
}
$query = "SELECT * FROM accounts WHERE user NOT LIKE '%admin%'";
$result = mysqli_query($conn, $query);
$all_property = array();
echo "<br>";
echo "<table>";
echo "<tr>";
echo "</tr>";
echo "<tr>"; 
while ($property = mysqli_fetch_field($result)) {
   echo "<td>" . $property->name . "</td>";
   array_push($all_property,$property->name);
}  
echo '</tr>';
while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  foreach ($all_property as $item) {
     echo '<td>' . $row[$item] . '</td>';
  } // foreach
  echo '</tr>';
}// while
  echo "</table>";
?>
<footer></footer>
</body>
</html>
