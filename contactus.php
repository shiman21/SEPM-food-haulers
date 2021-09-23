<?php
    $server = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($server, $username, $password);
    if(!$con)
    {
        
        die("connection to this databse failed due to " .mysqli_connect_error());

    }
    // echo "SUCCESS CONNNECTING TO THE DB";
    $name=$_POST['name'];
    $Number=$_POST['Number'];
    $query=$_POST['query'];
    
    $sql = "INSERT INTO `food_hauler`.`contactus` ( `NAME`, `PHONE`, `QUERY`) VALUES ( '$name ', '$Number', '$query');";
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
 ?>
 <!DOCTYPE html>
<html lang="en">

<head>
    <meta chrset="UTF-8">
    <title>Food haulers</title>

    <link rel="stylesheet" href="style_contact.css">

</head>

<body>
    <nav id="navbar">
        <ul>
            <li class="item"><a href="food haulers.php">Home</a></li>
            <li class="item"><a href="about us.php">About Us</a></li>
            <li class="item"><a href="login.php">Log In</a></li>
        </ul>
    </nav>
    <div class="heading">
        <br>
        <h1> Food haulers</h1>
        <br>

    </div>
    <div id="body">
        <h2> Contact Us</h2>
    </div>
    <div id="main">
        <h3>You can contact us on following platforms:</h3>
        <a href="https://www.instagram.com/foodhaulerssss/"><button id="instagram"><img src="instagram.png"
                    alt="instagram"></button>
        </a>
        <a href="https://www.facebook.com/foodhaulerssss/"><button id="facebook"><img src="facebook.png"
                    alt="facebook"></button></a>
        <a href="foodhaulers786@gmail.com">Email</a>
        <div id="chat">You can also fill the form below for a query regarding your order and a get faster response.
            <br>
            <br>
            <form  action="contactus.php" method="POST">
                <label >Name</label>
                <br>
                <input type="text" id="name" name="name" placeholder="Your name..">
                <br>
                <label>Phone Number</label>
                <br>
                <input type="number" name="Number" id="Number" placeholder="Phone Number">
                <br>
                <label for="query">Write your query below:</label>
                <br>
                <input type="text" id="query" name="query" placeholder="Write something.." style="height:200px">
                <br>
                <button>submit</button>
            </form>
        </div>
    </div>


</body>

</html>