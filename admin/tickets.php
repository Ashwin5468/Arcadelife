<?php
$insert=false;
if(isset($_POST['game'])){
//connection
$server ="localhost";
$username="root";
$password="";
$db_name = "arcadelife";
$con =mysqli_connect($server,$username,$password,$db_name);

if(!$con){
    die("Connection failed due to".mysqli_connect_error());
}
//calling for username from index.php
session_start();
$username = $_SESSION['username'];
//getting values from post and inserting in db
$name= $_POST['name'];
$game = $_POST['game'];
$timing = $_POST['timing'];
$date= $_POST['date'];
$member = $_POST['members'];
$sql = "INSERT INTO `tickets` (`Name`, `Game`, `Timing`, `Members`, `Date`,`Username`) VALUES ('$name', '$game', '$timing', '$member', '$date','$username');";
//executing query
if($con->query($sql) == true){
    echo "Tickets Confirmed";
    $insert= true;}
else{
  echo "Error: $sql <br> $con->error";
}
//closing connection
$con->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head >
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Home</title>
    <style>
    /* set a fixed width for each element */
    input, select {
        margin-bottom: 20px;
    }
    button{
        margin-top: 30px;
    }
    input{
    border: none;
    border-bottom: 2px solid #55346c;
    background-color: white;
    background-position: 10px 10px;
    background-repeat: no-repeat;
    padding-left: 0px;
    color: rgb(12, 12, 12);
    width: 270px;
    height: 30px;
    margin: 2px;
}
.card{
  background-color:white;
  box-shadow:0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}

.card:hover{
  box-shadow:0 40px 40px 0 rgba(0,0,0,0.2), 0 30px 60px 0 rgba(0,0,0,0.19);
}
.background{

        z-index:-1;
        background-image: url("../imgs/back/back3.jpg"); /* The image used */
    }
h1{
  font-size:70px;
}

  </style>
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body class="background">
<div id="navbar">
<div id="myNav" class="overlay">

<!-- Button to close the overlay navigation -->
<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

<!-- Overlay content -->
<div class="overlay-content">
<a href="home.php" >Home</a>
<a href="tokens.php">Tokens</a>
<a href="tickets.php"   class="active">Tickets</a>
<a href="shoppingcart.php" >Shop</a>
<a href="scoreboard.php" >Score Board</a>
<a href="demo.php" >Demo</a>
<a href="userinfo.php" >User Info</a>
<a href="feedback.php"  >Feedbacks</a>
<a href="balance.php" >Balance edit</a>
</div>
</div>
  <!--Logo -->
  <img src="../imgs/arcade1.png" alt="arcadelife" id="logo" style="">
 
  <div id="navbar-right">
    <!-- Use any element to open/show the overlay navigation menu -->
<span onclick="openNav()"><script src="https://cdn.lordicon.com/ritcuqlt.js"></script>
<lord-icon
  src="https://cdn.lordicon.com/hursldrn.json"
  trigger="morph"
  colors="primary:cyan,secondary:pink"
  style="width:70px;height:70px;">
</lord-icon></span>
    <!-- user prfile -->
    <a href="info.php"><script src="https://cdn.lordicon.com/ritcuqlt.js"></script>
<lord-icon
  src="https://cdn.lordicon.com/ljvjsnvh.json"
  trigger="hover"
  colors="primary:cyan,secondary:pink"
  state="hover-2"
  style="width:70px;height:70px">
</lord-icon></a>
    <!-- logout -->
    <a href="logout.php"><script src="https://cdn.lordicon.com/ritcuqlt.js"></script>
<lord-icon
  src="https://cdn.lordicon.com/hcuxerst.json"
  trigger="hover"
  colors="primary:cyan,secondary:pink"
  style="width:70px;height:70px; margin-right:70px">
</lord-icon></a>
  </div>
</div>
<center>
<h1 style="margin-top: 270px;">Book Tickets</h1>

<div>
<div class="row" data-aos="fade-up" style="margin-left: 40px;">

  <div class="column" style="margin-right: -51px;margin-top: 50px;">
    <div class="card" style="width:300px;">
      <img src="../imgs/bowling.jpg" alt="ashwin" style="width:100%">
   
      <div style=" padding: 0 16px;height: 270px;">
        <h2>Bowling</h2>
        <form action="ticket2.php" method="post" style="margin:0px;">

<input type="text" name="name" id="name" required  placeholder="Enter visitors name"></input><br>
<input type="time" name="timing" required id="timing" ></input>
<input type="date" name="date" required id="date" ></input><br>
<input type="int" name="members" id="members" required placeholder="Select Members"></input><br>
<button class="btn" name="game" value="Bowling">Confirm</button><br>
</form>
      </div>
    </div>
  </div>

  <div class="column" style="margin-right: -51px;margin-top: 50px;">
    <div class="card" style="width:300px;">
      <img src="../imgs/Pop-a-shot.jpg" alt="ashwin" style="width:100%">
   
      <div style=" padding: 0 16px;height: 270px;">
        <h2>Pop-a-shot</h2>
        <form action="ticket2.php" method="post" style="margin:0px;">

<input type="text" name="name" id="name" required placeholder="Enter visitors name"></input><br>
<input type="time" name="timing" required id="timing" ></input>
<input type="date" name="date" required id="date" ></input><br>
<input type="int" name="members" id="members" required  placeholder="Select Members"></input><br>
<button class="btn" name="game" value="Bowling">Confirm</button><br>
</form>
      </div>
    </div>
  </div>

  <div class="column" style="margin-right: -51px;margin-top: 50px;">
    <div class="card" style="width:300px;">
      <img src="../imgs/dance.jpg" alt="ashwin" style="width:100%">
   
      <div style=" padding: 0 16px;height: 270px;">
        <h2>Dance Revolution</h2>
        <form action="ticket2.php" method="post" style="margin:0px;">

<input type="text" name="name" id="name" required  placeholder="Enter visitors name"></input><br>
<input type="time" name="timing" required id="timing" ></input>
<input type="date" name="date" required id="date" ></input><br>
<input type="int" name="members" id="members" required  placeholder="Select Members"></input><br>
<button class="btn" name="game" value="Bowling">Confirm</button><br>
</form>
      </div>
    </div>
  </div>

  <div class="column" style="margin-right: -51px; margin-top: 50px;">
    <div class="card" style="width:300px;">
      <img src="../imgs/shooting.jpg" alt="ashwin" style="width:100%">
   
      <div style=" padding: 0 16px;height: 270px;">
        <h2>VR Dash</h2>
        <form action="ticket2.php" method="post" style="margin:0px;">

<input type="text" name="name" id="name" required placeholder="Enter visitors name"></input><br>
<input type="time" name="timing" required id="timing" ></input>
<input type="date" name="date" required id="date" ></input><br>
<input type="int" name="members" id="members" required  placeholder="Select Members"></input><br>
<button class="btn" name="game" value="Bowling">Confirm</button><br>
</form>
      </div>
    </div>
  </div>
</div>
<footer class="about-section" style="height:50px;padding:10px;">
<p><a href="demo.php">Click here</a> to know more about the games</p>
</footer>
</center>
<!-- aos.js -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init({
    duration: 1500,
  });
  /* Open when someone clicks on the span element */
function openNav() {
  document.getElementById("myNav").style.width = "100%";
}

/* Close when someone clicks on the "x" symbol inside the overlay */
function closeNav() {
  document.getElementById("myNav").style.width = "0%";
}
scrollFunction();
// When the user scrolls down 80px from the top of the document, resize the navbar's padding and the logo's font size
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
    document.getElementById("navbar").style.padding = "0px 12px";
    document.getElementById("navbar").style.borderRadius = "70px";
    document.getElementById("navbar").style.width = "800px";
    document.getElementById("navbar").style.marginLeft = "250px";
    document.getElementById("navbar").style.marginTop = "10px";
    document.getElementById("navbar").style.opacity = "1";
    document.getElementById("logo").style.width = "150px";
    document.getElementById("logo").style.borderRadius = "20px";
    document.getElementById("navbar-right").style.marginTop = "0px";
    


  } else {
    document.getElementById("navbar").style.padding = "30px 10px";
    document.getElementById("navbar").style.borderRadius = "0px";
    document.getElementById("navbar").style.width = "1300px";
    document.getElementById("navbar").style.marginLeft = "0px";
    document.getElementById("navbar").style.marginTop = "0px";
    document.getElementById("navbar").style.opacity = ".9";
    document.getElementById("logo").style.width = "350px";
    document.getElementById("logo").style.borderRadius = "0px";
    document.getElementById("navbar-right").style.marginTop = "33px";
   
  }
}
  </script>
</body>
</html>