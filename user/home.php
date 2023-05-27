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
$email = $_POST['email'];
$rating = $_POST['rating'];
$feedback = $_POST['feedback'];

// Insert data into database
$sql = "INSERT INTO feedback (name, email, rating, feedback) VALUES ('$name', '$email', '$rating', '$feedback')";

if (mysqli_query($con, $sql)) {
    echo "Thank you for your feedback!";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
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
    <title>Home</title>
    <link rel="stylesheet" href="../style.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body>
<div id="navbar">
<div id="myNav" class="overlay">

<!-- Button to close the overlay navigation -->
<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

<!-- Overlay content -->
<div class="overlay-content">
<a href="home.php" class="active" >Home</a>
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
<div style="background-image: url('../imgs/arcadegif2.gif');
    background-size: cover;
    height: 120vh;
    padding:0;
    margin:0;"></div>
<div class="about-section">
  <h1>About Us</h1>
  <h2>We bring the good Arcadelife to Life.</h2>
  <img src="../imgs/ghost.png"style= "float: right;width:25%;margin-right:-50px;"alt="ghost">
  <p class="aboutus" data-aos="fade-up">Arcadelife is an arcade that offers an exciting and entertaining experience for its customers. From classic arcade games to the latest cutting-edge technology, Arcadelife has something for everyone. The arcade is designed to provide a fun and engaging atmosphere that keeps customers coming back for more. One of the unique features of Arcadelife is its focus on customer experience. The arcade is designed with the customer in mind, providing a comfortable and welcoming environment that encourages customers to stay and play.</p>
<p class="aboutus" data-aos="fade-up">With its friendly and knowledgeable staff, Arcadelife is committed to providing exceptional customer service. Another notable aspect of Arcadelife is its commitment to using the latest technology. The arcade features state-of-the-art games and equipment, ensuring that customers have access to the best gaming experiences available. Additionally, the arcade is equipped with advanced online systems, allowingcustomers to access game information, purchase credits, and track their progress from anywhere. Arcadelife is more than just an arcade; it's a community hub. The arcade hosts regular events and tournaments, bringing together gaming enthusiasts from across the area. Whether it's a birthday party, corporate event, or just a night out with friends, Arcadelife provides an unforgettable experience.</p>
<img src="../imgs/arcademachine.png" style= "float: left;width:20%;"alt="arcademachine">
<p class="aboutus" data-aos="fade-up">But the community at Arcadelife doesn't stop at just in-person events. The arcade also has a vibrant online presence, with a dedicated forum and social media accounts where gamers can connect, share tips and strategies, and participate in online tournaments. Through these digital channels, Arcadelife has fostered a strong sense of community among its customers, who not only come to play games but to build relationships and share their passion for gaming with like-minded individuals. In addition to its commitment to technology and community-building, Arcadelife also places a strong emphasis on accessibility. The arcade is designed to be welcoming to players of all ages and abilities, with options for customizing game settings to accommodate different skill levels and physical abilities.</p>
</div>
<div>
<h2 style="text-align:center" style="margin-bottom: 40px;">Our Team</h2>

<div class="row" data-aos="fade-up" style="margin-left: 40px;">
  <div class="column" style="margin-right: -51px;">
    <div class="card">
      <img src="../imgs/as.png" alt="ashwin" style="width:100%">
   
      <div style=" padding: 0 16px;height: 229px;">
        <h2>Ashwin Sharma</h2>
        <p style="color:grey;">CEO & Founder</p>
        <p>Some text that describes me.</p>
        <p>ashwinsharma@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column" style="margin-right: -51px;">
    <div class="card">
      <img src="../imgs/ms.png" alt="mayank" style="width:100%">
      <div style=" padding: 0 16px;height: 229px;">
        <h2>Mayank Sahariya</h2>
        <p style="color:grey;">CTO & Art Director</p>
        <p>Some text that describes.</p>
        <p>mayankshariya@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="../imgs/google.jpg" alt="ashwin" style="width:100%">
   
      <div style=" padding: 0 16px;height: 229px;">
        <h2>Google</h2>
        <p style="color:grey;">helping hand</p>
        <p>Some text that describes.</p>
        <p>gmail@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

</div>

<div class="about-section" style="margin-top:50px">
<center>
  <div class="container"style="width: 700px;height: 460px;background-image:url('../imgs/envelope.jpg');" data-aos="fade-up">
    <h1>Contact Us</h1>
    <form action="home.php" method="POST" >
    <p style="margin-bottom: 35px;font-size: 17px;">Swing by for a cup of coffee, or leave us a message:</p>
      <div style="float:left;">
      <label for="name" style="padding-right: 193px;">Name</label><br>
		<input type="text" name="name" style="width:262px;" required placeholder="Enter your name"><br><br>

    <label for="email" style="padding-right: 197px;">Email</label><br>
		<input type="email" name="email" style="width:262px;" required placeholder="Enter your email"><br><br>
		
		<label for="rating" style="padding-right: 193px;" >Rating:</label><br>
    <div class="custom-select" style="width:200px;">
		<select name="rating" required style="width: 306px;margin-left: -54px;opacity:.7;
    margin-top: 5px;">
			<option value="5">5 - Excellent</option>
			<option value="4">4 - Very Good</option>
			<option value="3">3 - Good</option>
			<option value="2">2 - Fair</option>
			<option value="1">1 - Poor</option>
		</select><br><br>
</div>
</div>
<div style="float:right">
		<textarea name="feedback" rows="5" cols="30" required placeholder="Your feedback.." style="height: 213px;;width:306px;margin-top: 28px;"></textarea><br><br>
</div>

<button type="submit" style="margin-left: 205px;margin-right: -125px;" >Submit</button>
		
	</form>
</div>
</div>
</center>


<!-- Footer -->
<footer>
<img src="../imgs/icons/icons.png" alt="icons" style="width: 15%; margin-bottom:-2%;">
<p style="margin-bottom: -1%">Info|Support|Privacy Policy|Terms and Conditions</p>
<p style="color: grey">Made by Ashwin Sharma && Mayank Sahariya</p>
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
    document.getElementById("navbar").style.marginLeft = "235px";
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
    document.getElementById("navbar").style.opacity = ".9";
    document.getElementById("logo").style.width = "350px";
    document.getElementById("logo").style.borderRadius = "0px";
    document.getElementById("navbar-right").style.marginTop = "33px";
   
  }
}
  </script>
</body>
</html>