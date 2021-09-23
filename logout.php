<?php 
 session_start();
 if(isset($_GET['logout']))
 {
     session_destroy();
     header("location:food haluers.php");
 }
 else
 {
     header("location:food haulers.php");
 }
?>