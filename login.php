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
    <li class="item"><a href="signup.php">Sign Up</a></li>
    </ul>
    </nav> 
  <div class="heading">

    <h1> Food Haulers</h1>

  </div>
  <div class="container">
    <h1> LOG IN</h1>
    <?php
         if(@$_GET['Empty']==true)
         {
    ?>
     <div class ="alert-light text-danger text-center my-3"><?php echo $_GET['Empty'] ?>   
      <?php
         }
         ?>
          <?php
         if(@$_GET['Invalid']==true)
         {
    ?>
     <div class ="alert-light text-danger text-center my-3"><?php echo $_GET['Invalid'] ?>   
      <?php
         }
         ?>
     <form action="process.php" method="POST">
        <div class="box">
          <i class="fa fa-envelope"></i>
          <input type="email" name="email" id="email" placeholder="Enter Your Email" class="form-control">
        </div>
        <br>
        <div class="box">
          <i class="fa fa-key"></i>
          <input type="password" name="password" id="password" placeholder="Enter Your Password" class="form-control">
        </div>
        <div>
        <button class="btn" name="Login"> <!--<a href="welcome.html">--> Login</button> 
        </div>
</form>
  </div>

 
</body>

</html>
