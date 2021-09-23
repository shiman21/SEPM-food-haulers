<?php
session_start();
require_once('connection.php');

 if(isset($_POST['Login']))
 {
  //echo 'WORKING NOW';
  if(empty($_POST['email']) || empty($_POST['password']))
  {
    header("location:login.php?Empty=PLEASE FILL THE BLANK");
  }
  else
  {
         $query="select * from signup where email='".$_POST['email']."' and password='".$_POST['password']."'";
         $result=mysqli_query($con,$query);
         if(mysqli_fetch_assoc($result))
         {
             $SESSION['User']=$_POST['email'];
             header("location:welcome.php");
         }
         else
         {
             header("location:login.php?Invalid= PLEASE ENTER CORRECT EMAIL AND PASSWORD");
         }
  }
 }
else
{
    echo 'NOT WORKING';
}
?>