<?php
if(isset($_POST['name'])){
    $server = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($server, $username, $password);
    if(!$con)
    {
        
        die("connection to this databse failed due to " .mysqli_connect_error());

    }
    //echo "SUCCESS CONNNECTING TO THE DB";
    $name=$_POST['name'];
    $Number=$_POST['Number'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    
    $sql = "INSERT INTO `food_hauler`.`signup` ( `name`, `email`, `password`, `number`) VALUES ( '$name', '$email', '$password', '$Number');";
    //echo $sql;
    //echo $sql;
    if($con->query($sql) == true)
    {
        $insert=true;
        //echo "Successfully inserted";
    }
    else
    {
        echo "ERROR: $sql <br> $con->error";
    }
    $con->close();
}
 ?>
 <!doctype html>
<html>

<head>
  <script src="https://kit.fontawesome.com/b875c5d05a.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="style.css">
</head>

<body>
  <nav id="navbar">
    <ul>
    <li class="item"><a href="food haulers.php">Home</a></li>
    <li class="item"><a href="login.php">Log In</a></li>
    </ul>
    </nav>
  <div class="heading">

    <h1> Food Haulers</h1>

  </div>
  <div class="container">
    <h1> Sign Up</h1>
        <div class="box">
          <form action="signup.php" method="POST">
          <input type="name" name="name" id="name" placeholder="Enter Your Full Name">
        </div>
        <br>
        <div class="box">
                    <input type="password" name="password" id="password" placeholder="Enter Your New Password">
        </div>
	 	 <br>
        <div class="box">
            <input type="number" name="Number" id="Number" placeholder="Enter Your Phone Number">
        </div>
	 <br>
        <div class="box">
            <input type="email" name="email" id="email" placeholder="Enter Your Email">
        </div>
	 <br>
        <div>
          <button class="btn"> Register</a></button>
        
        </div>
      </form>
  </div>

  
 
</body>

</html>
 