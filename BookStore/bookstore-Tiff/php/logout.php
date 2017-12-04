<?php 
      session_start();
      if (!empty($_SESSION['username']) && $_SESSION['loggedin'] == true) {
         $_SESSION['loggedin'] = false;
      	 session_destroy();
      }
      require_once('functions.php');
      redirect('http://localhost/bookstore/login.html');
?>
