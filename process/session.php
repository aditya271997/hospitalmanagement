<?php
  session_start();
  if (isset($_SESSION['email'])) {
    $storeEmail = $_SESSION['email'];
  }
  else{
    header("location: index.php");
  }
?>