<?php                    
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

    $sql = "SELECT Tokens from userinfo where username='$username'";

    $result = mysqli_query($con, $sql);

    // Check if any rows were returned
if (mysqli_num_rows($result) > 0) {
    // Fetch the first row
    $row = mysqli_fetch_assoc($result);
    
    // Display the tokens

} else {
    echo "No rows were returned.";
}


// Close the database connection
mysqli_close($con);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="../style.css">

</div>
<style>
    .background{
        height: 1000px;
        z-index:-1;
        background-image: url("../imgs/back/back2.jpg"); /* The image used */
    }
    .container{
      margin-top:200px;
      width: 900px;
			height: 550px;
			padding:50px;
			background-color:#474e5de8;
      box-shadow:0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
    }
    .tkt{
      box-shadow:0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
      
    }
    .gs{
      -webkit-filter: drop-shadow(-2px 9px 8px rgba(0,0,0,0.5));
    }

    </style>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body>
<body class="background">
<div id="navbar">
<div id="myNav" class="overlay">

<!-- Button to close the overlay navigation -->
<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

<!-- Overlay content -->
<div class="overlay-content">
<a href="home.php" >Home</a>
<a href="tokens.php" class="active" >Tokens</a>
<a href="tickets.php" >Tickets</a>
<a href="shoppingcart.php" >Shop</a>
<a href="scoreboard.php" >Score Board</a>
<a href="demo.php" >Demo</a>
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
<div class="container">
<h1 style="margin-top: 0%;">Token count</h1>

<img src="../imgs/coins/g1.gif" class="gs" alt="coin2" style="width:200px;z-index: 1;position: absolute;top: 365px;
    left: 915px;">
<img src="../imgs/coins/g2.gif" class="gs" alt="coin2" style="width:200px;z-index: 1;position: absolute;top: 525px;
    left: 915px;">
<img src="../imgs/coins/g3.gif" class="gs" alt="coin2" style="width:200px;z-index: 1;position: absolute;top: 685px;
    left: 915px;">
<img src="../imgs/coins/g4.gif" class="gs" alt="coin2" style="width:200px;z-index: 1;position: absolute;top: 365px;
    left: 165px;">
<img src="../imgs/coins/g5.gif" class="gs" alt="coin2" style="width:200px;z-index: 1;position: absolute;top: 525px;
    left: 165px;">
<img src="../imgs/coins/g6.gif" class="gs" alt="coin2" style="width:200px;z-index: 1;position: absolute;top: 685px;
    left: 165px;">

<img src="../imgs/coin.png" class="gs" alt="coin4" style="width:90px;z-index: 1;position: absolute;top: 346px;left: 787px;">
<img src="../imgs/coin.png" class="gs" alt="coin2" style="width:90px;z-index: 1;position: absolute;top: 346px;left: 404px;">
<img src="../imgs/coin.png" class="gs" alt="coin4" style="width:90px;z-index: 1;position: absolute;top: 726px;left: 787px;">
<img src="../imgs/coin.png" class="gs" alt="coin2" style="width:90px;z-index: 1;position: absolute;top: 726px;left: 404px;">

<img src="../imgs/tkt.png" alt="tkt" class="tkt">
<div id="value" Style="font: 800 50px system-ui;padding-top: 139px;  font-size: 45px;
  font-weight: 600;
  color: #fdfdfe;
  background-clip: text;
  -webkit-background-clip: text;
  text-shadow: 0px 0px 5px #b393d3, 0px 0px 10px #b393d3, 0px 0px 10px #b393d3,
  0px 0px 20px #b393d3;margin-top: -430px;"> 
<h1><?php 
   echo $row['Tokens'];
   ?>
</h1>
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
  if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
    document.getElementById("navbar").style.padding = "0px 12px";
    document.getElementById("navbar").style.borderRadius = "70px";
    document.getElementById("navbar").style.width = "800px";
    document.getElementById("navbar").style.marginLeft = "235px";
    document.getElementById("navbar").style.marginTop = "10px";
    document.getElementById("navbar").style.opacity = "1";
    document.getElementById("logo").style.width = "150px";
    document.getElementById("logo").style.borderRadius = "20px";
    document.getElementById("navbar-right").style.marginTop = "0px";
    


  } else {
    document.getElementById("navbar").style.padding = "20px 10px";
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
function animateValue(obj, start, end, duration) {
  let startTimestamp = null;
  const step = (timestamp) => {
    if (!startTimestamp) startTimestamp = timestamp;
    const progress = Math.min((timestamp - startTimestamp) / duration, 1);
    obj.innerHTML = Math.floor(progress * (end - start) + start);
    if (progress < 1) {
      window.requestAnimationFrame(step);
    }
  };
  window.requestAnimationFrame(step);
}

const obj = document.getElementById("value");
animateValue(obj, 0, <?php echo $row['Tokens']; ?>, 3000);
  </script>
</body>
</html>