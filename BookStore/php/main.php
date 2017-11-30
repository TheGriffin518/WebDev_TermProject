<?php 
      session_start();
      if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
      	 echo "Welcome to member's club";
      }     
      else {
         header('Location: http://localhost:8888/login.html');
	 exit();
      }
?>