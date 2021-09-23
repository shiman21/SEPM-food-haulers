<?php

$con=mysqli_connect('localhost','root','','food_hauler');
if(!$con)
{
    die('PLEASE CHECK YOUR CONNECTION'.mysqli_error($con));
}
?>