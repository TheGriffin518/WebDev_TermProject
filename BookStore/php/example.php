<!DOCTYPE HTML>
<html>
<body>
<h3>Trying to get database info from the vm.</h3>
<?php
$servername = 'localhost:3306'; // change to your correct localhost port number
$dbname = 'bookstore'; // change to your database name
$username = 'root'; // change to your username
$password = 'root'; // change to your db password 

//connection code
$conn = new mysqli($servername, $username, $password,$dbname);
if(mysqli_connect_errno())
{
   die("connection failed: " . mysqli_connect_error()
   . " (" . mysqli_connect_errno()
   . ")");
}

$query = "SELECT * from accounts";
$result = mysqli_query($conn, $query);
$all_property = array();

echo "<table>";
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
</body>
</html>
