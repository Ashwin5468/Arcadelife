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
            height: 720px;
        }
        table, th, td {
            border-bottom: 1px solid #ddd;
            
}
th{
    background-color: #55346c;
    color: white;
    
}
table {
  width: 100%;
  margin-top: 50px;
}
td{
    text-align: center; 
}
tr{
    background-color: #f3e1fb;
    height: 50px;
}
tr:hover {background-color: aliceblue;}


        </style>
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body  class="background">
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
<a href="scoreboard.php" >Score Board</a>
<a href="demo.php" >Demo</a>
<a href="userinfo.php"  class="active" >User Info</a>
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
<div class="container" style="width:725px;margin-top:250px;">
    <h1>Users list</h1>
        
<?php
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
    // select all rows from the table
    $sql = "SELECT * FROM userinfo";
    $result =mysqli_query($con, $sql);

    if (is_object($result) && $result->num_rows > 0) {
        // output data of each row
        echo "<table><tr><th>S_No.</th><th>Name</th><th>Gender</th><th>Email</th><th>Phone</th></tr>";
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>".$row["S_No."]."</td><td>".$row["Name"]."</td><td>".$row["Gender"]."</td><td>".$row["Email"]."</td><td>".$row["Phone"]."</td></tr>";
        }
        echo"</table>";
    } else {
        echo "0 results";
    }

    // close connection
    $con->close();
    ?>

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