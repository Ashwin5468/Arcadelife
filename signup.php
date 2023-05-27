<?php
$insert=false;
if(isset($_POST['name'])){
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
$name = $_POST['name'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$username = $_POST['username'];
$password = $_POST['password'];

$sql = "INSERT INTO `userinfo` (`Name`, `Gender`, `Email`, `Phone`, `username`, `password`) VALUES ( '$name', '$gender', '$email', '$phone', '$username', '$password');";
//executing query
if(!empty($name&&$gender&&$email&&$phone&&$username&&$password)){
if($con->query($sql) == true){
    echo "Successfully inserted";
    $insert= true;}
else{
  echo "Error: $sql <br> $con->error";
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
  <title>Signup</title>
  <link rel="stylesheet" href="style.css">
</head>
<body class="back">
  <center>
  <div class="container">
  <h1>Signup</h1>
  <p><strong>Enter your details here</strong></p>
  <?php
        if($insert == true){
        echo "success";
        }
    ?>
  <form action="signup.php" method="post">
    <input type="text" name="name" id="name" required placeholder="  Enter your name" style="background-image: url(imgs/icons/name.png); "></input><br>
    <input type="text" name="gender" id="gender" required placeholder="  Enter your gender" style="background-image: url(imgs/icons/gender.png); " ></input><br>
    <input type="email" name="email" id="email" required placeholder="  Enter your email" style="background-image: url(imgs/icons/email.png); "></input><br>
    <input type="phone" name="phone" id="phone" required placeholder=" Enter your phone number" style="background-image: url(imgs/icons/phone.png); "></input><br>
    <input type="text" name="username" id="username" required placeholder="  Create new username" style="background-image: url(imgs/icons/username.png); "></input><br>
    <input type="password" name="password" id="password" required placeholder="  Create new password" style="background-image: url(imgs/icons/lock2.png);"></input><br>
    <button class="btn">Signin</button><br>
    <p>Already have an account<a href="index.php" >Login?</a></p>
  </form>
  </div>
  </center>
</body>
</html>