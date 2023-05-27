<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="../style.css">
    <style>
      .background{
        background-image: url("../imgs/back/backk.jpg"); /* The image used */
      }
.container{
  width:1000px;
}
.containerS{
  margin-top: 142px;
    margin-left: 14px;
    padding: 1px;
    height: 382px;
    width: 270px;
    background-color:#474e5de8;
}
form{
  float:left;
}
table{
  margin-right: -1000px;
}
h2{
			background: rgb(2,0,36);
			background-image: linear-gradient(to right top, #561fa4, #5529ac, #5532b4, #533abb, #5242c3);
			color: white;
			float:left;
			width: 270px;
			margin-right: 0px;
    margin-left: 60px;
    margin-top: -25px;
	padding-top: 123px;
    padding-bottom: 10px;
	box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
		}


        </style>
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body class="background">
    
<body>
<div id="navbar">
<div id="myNav" class="overlay">

<!-- Button to close the overlay navigation -->
<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

<!-- Overlay content -->
<div class="overlay-content">
<a href="home.php" >Home</a>
<a href="tokens.php">Tokens</a>
<a href="tickets.php" >Tickets</a>
<a href="shoppingcart.php" >Shop</a>
<a href="scoreboard.php" class="active" >Score Board</a>
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
<div>
<h1 style="margin-top:270px;">Score Board</h1>
<div class="container">
    <form action="scoreboard.php" method="POST">
    <h2 style="margin-left: 15px;" >Select a game:</h2><br>
    <div class="containerS">
<!--select box-->
<div style="width:200px; margin-top:126px;">
<select name="gamename" id="gamename">
<option value="0" style="color:grey;">Choose...</option>
  <option value="pac">Pop-a-shot</option>
  <option value="zombie">Dance-Revolution</option>
  <option value="vr">VR-Shooting</option>
  <option value="bowling">Bowling</option>
</select>
</div><br>
        <button type="submit" id="myButton">Submit</button>
  </div>
<div data-aos="fade-up">   
<?php

if(isset($_POST['gamename'])){
    // database connection variables
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "arcadelife";

    // create connection
    $con = new mysqli($servername, $username, $password, $dbname);

    // check connection
    if(!$con){
        die("Connection failed due to".mysqli_connect_error());
    }
    $gamename=$_POST['gamename'];
    // select all rows from the table
    $sql = "SELECT * FROM $gamename";
    $result =mysqli_query($con, $sql);

    if (is_object($result) && $result->num_rows > 0) {
        // output data of each row
        echo "<table><tr><th>Rank</th><th>Player Name</th><th>Score</th><th>Level</th><th>Date</th></tr>";
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>".$row["Rank"]."</td><td>".$row["Player Name"]."</td><td>".$row["Score"]."</td><td>".$row["Level"]."</td><td>".$row["Date"]."</td></tr>";
        }
        echo"</table>";
    } else {
        echo "0 results";
    }

    // close connection
    $con->close();
}
    ?>
</div>
</div>
</div>
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
    document.getElementById("navbar").style.opacity = ".8";
    document.getElementById("logo").style.width = "350px";
    document.getElementById("logo").style.borderRadius = "0px";
    document.getElementById("navbar-right").style.marginTop = "33px";
   
  }
}


  </script>
</body>
</html>