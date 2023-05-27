<?php
if(isset($_POST['username'])){
//connection
$server ="localhost";
$username="root";
$password="";
$db_name = "arcadelife";
$con =mysqli_connect($server,$username,$password,$db_name);

if(!$con){
    die("Connection failed due to".mysqli_connect_error());
}

//getting values from post and inserting in db
$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * from userinfo where username='$username' and password='$password'";

//executing query 
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result);
$count = mysqli_num_rows($result);
if(!empty($password&&$username)){

if($count == 1){  
  session_start();
  $_SESSION['username'] = $username;
  if($username=='admin'){
    header('location: admin');
  }
  else{
  header('location: user'); 
  } 
}
else{  
    echo "<center><p class='invalid'> Login failed. Invalid username or password.</p></center>";  
}
}
//closing connection
$con->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="style.css">
  <style>
    .invalid{
      background-image: linear-gradient(to right, #4a68ef, #764ba2, #4d79d8, #8E37D7);
      box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
      font-size: 16px;
      color: #fff;
    }
    button{
      background-image: linear-gradient(to right top, #370197, #31018f, #2b0187, #26007f, #200077);
    }
    </style>
</head>
<body class="back">
  <center>
  <div class="container" style="height:550px">
  <img src="imgs/arcade.jpg" alt="arcadelife" class="logo">
 <h1>Login</h1>
  <form action="index.php" method="post">
  <p style="margin-bottom: -5%;">Username</p><br>
  <input type="text" name="username" required id="username" placeholder="  Enter username" style="background-image: url(imgs/icons/username.png); "></input><br>
  Password<br>
  <input type="password" name="password" id="password" required placeholder="  Enter password" style="background-image: url(imgs/icons/lock2.png);"></input><br>
    <button type="submit" value="login" style="width: 390px; margin-top: 5.5%;">Login</button><br>
    <p><a href="forgot.php">Forgot password?</a></p>
    <p>First time to Arcadelife?<a href="signup.php">Create New Account</a></p>
</center>
</body>
</html>