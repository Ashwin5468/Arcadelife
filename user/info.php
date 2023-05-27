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

    $sql = "SELECT * from userinfo where username='$username'";
    $sqll="SELECT * from tickets where username='$username'";

    $result = mysqli_query($con, $sql);
    $resultt= mysqli_query($con, $sqll);
    
    if (mysqli_num_rows($resultt) > 0) {
        // Fetch the first row
        $roww = mysqli_fetch_assoc($resultt);
    
    } 

    // Check if any rows were returned
if (mysqli_num_rows($result) > 0) {
    // Fetch the first row
    $row = mysqli_fetch_assoc($result);


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
        height: 1050px;
    }
    lbl{
        float: left;
        color:darkgrey;
        font-size: 15px;
    }
    dtl{
        float :left;
        font-size: 20px;
    }
    .demotext{
        width: 330px;
    height: 360px;
    }
    .container{
        height: 890px;
    }
    </style>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body>
<body>
<div id="navbar">
<div id="myNav" class="overlay">

<!-- Button to close the overlay navigation -->
<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

<!-- Overlay content -->
<div class="overlay-content">
<a href="home.php"  >Home</a>
<a href="tokens.php">Tokens</a>
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
<div style="background-image: url('../imgs/fyrS.gif');
    background-size: cover;
    height: 100vh;
    padding:0;
    margin:0;"></div>
<div class="background">
<div class="container">

<h1 style="margin-top: 0%;">User Info</h1>
<div class="demotext">
    <center>
<img src="../imgs/icons/user.png" alt="profile" style="width :30%;"><br>
</center>
<?php 
echo "<lbl>"."Name: "."</lbl>"."<br>";
echo "<dtl>".$row['Name']."<dtl>"."<br>";

echo "<lbl>"."Email: "."</lbl>"."<br>";
echo "<dtl>".$row['Email']."<dtl>"."<br>";

echo "<lbl>"."Phone:"."</lbl>"."<br>";
echo "<dtl>".$row['Phone']."<dtl>"."<br>";

echo "<lbl>"."Username: "."</lbl>"."<br>";
echo "<dtl>".$row['username']."<dtl>"."<br>";

echo "<lbl>"."Token Count: "."</lbl>"."<br>";
echo "<dtl>".$row['Tokens']."<dtl>"."<br>";

?>
</div>
<div class="demotext" style="margin-top:20px;  height: 250px; ">
<h1>Ticket Details</h1>
<?php
echo "<lbl>"."Timeing: "."</lbl>"."<br>";
echo "<dtl>".$roww['Timing']."<dtl>"."<br>";

echo "<lbl>"."Memebers: "."</lbl>"."<br>";
echo "<dtl>".$roww['Members']."<dtl>"."<br>";

echo "<lbl>"."Date: "."</lbl>"."<br>";
echo "<dtl>".$roww['Date']."<dtl>"."<br>";

   ?>
   </div>
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
    document.getElementById("navbar").style.padding = "60px 10px";
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