<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="../style.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
    .background{
        height: 2000px;
        z-index:-1;
        background-image: url("../imgs/back/backy.jpg"); /* The image used */
    }
    </style>
</head>
<body class="background">
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
<a href="demo.php" class="active" >Demo</a>
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
<h1 style="margin-top:270px;">About Games</h1>
<div class="container" style="width: 1000px;height: 400px;" data-aos="fade-left">

<div class="demotext">
<h1>Pop-a-shot<h2>
    <p>Basketball arcade machines are a popular and lucrative
        feature in any games arcade. Score hoops with your friends, build points and win prizes.
        Arcades don't have to be filled with screens. These basketball games are a great test of 
        hand-eye coordination and extremely social.</p>
        <p>Book a ticket now<a href="tickets.php" style="color: cadetblue;"> click here!</a></p>
</div>
<video width='400' height= '395' controls>
<source src='../vids/vid1.mp4' type='video/mp4'>
</video>
</div>

<div class="container" style="width: 1000px;height: 400px;" data-aos="fade-right">
<div class="demotext">
<h1>Dance-Revolution<h2>
    <p>The core gameplay involves the player stepping their feet to correspond 
        with the arrows that appear on the screen and the beat. During normal 
        gameplay, arrows scroll upwards from the bottom of the screen and pass 
        over a set of stationary arrows near the top .</p>
        <p>Book a ticket now<a href="tickets.php" style="color: cadetblue;"> click here!</a></p>
</div>
<video width='400' height= '390' controls>
<source src='../vids/vid2.mp4' type='video/mp4'>
</video><br>
</div>

<div class="container" style="width: 1000px;height: 400px;" data-aos="fade-left">
<div class="demotext">
<h1>VR-Dash<h2> 
    <p>A zombie-themed shooter is hardly 
        a novel concept, and the game does not offer much originality when it comes to its story or 
        presentation. However, the controls are great, and ultimately, that is the most important thing.
Arizona Sunshine emphasizes VR's potential for immersion, both in terms of its world and, more importantly,
gunplay.</p>
<p>Book a ticket now<a href="tickets.php" style="color: cadetblue;"> click here!</a></p>
</div>
<video width='400' height= '390' controls>
<source src='../vids/vid3.mp4' type='video/mp4'>
</video>
</div>

<div class="container" style="width: 1000px;height: 400px;" data-aos="fade-right">
<div class="demotext">
<h1>Bowling<h2>
    <p>bowling, also called tenpins, game in which a heavy ball is rolled down a long, narrow lane toward
         a group of objects known as pins, the aim being to knock down more pins than an opponent.
        cmon everyone knows bowling...</p>
        <p>Book a ticket now<a href="tickets.php" style="color: cadetblue;"> click here!</a></p>
</div>
<video width='400' height= '395' controls>
<source src='../vids/vid4.mp4' type='video/mp4'>
</video>
</div>

</center>
<!-- aos.js -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init({
    duration: 1000,
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
  if (document.body.scrollTop > 30 || document.documentElement.scrollTop > 30) {
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
  </script>
</body>
</html>