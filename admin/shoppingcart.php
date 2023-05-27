<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
	<title>Cart</title>
	<style>
		.back{
			z-index:-1;
			background-image: url("../imgs/back/backk.jpg"); /* The image used */
			height:3400px;
		}
		button{
			float:right;

		}
		img{
			width: 450px;
			float:left;
			box-shadow:0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
		}
		.containerS{
			width: 900px;
			height: 560px;
			padding:50px;
			background-color:#474e5de8;

		}
		.background{
			height: 3150px;
		}
		p{
			color: white;
			float:right;
			width: 270px;
			text-align:justify;
			margin-right: 60px;

		}
		h2{
			background: rgb(2,0,36);
			background-image: linear-gradient(to right top, #561fa4, #5529ac, #5532b4, #533abb, #5242c3);
			color: white;
			float:right;
			width: 270px;
			margin-right: 0px;
    margin-left: 60px;
    margin-top: -50px;
	padding-top: 123px;
    padding-bottom: 10px;
	box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
		}
		</style>
		<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body class="back">
<div id="navbar">
<div id="myNav" class="overlay">

<!-- Button to close the overlay navigation -->
<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

<!-- Overlay content -->
<div class="overlay-content">
<a href="home.php"  >Home</a>
<a href="tokens.php">Tokens</a>
<a href="tickets.php" >Tickets</a>
<a href="shoppingcart.php" class="active">Shop</a>
<a href="scoreboard.php" >Score Board</a>
<a href="demo.php" >Demo</a>
<a href="userinfo.php" >User Info</a>
<a href="feedback.php"  >Feedbacks</a>
<a href="balance.php" >Balance edit</a>
</div>
</div>

<!--Logo -->
  <img src="../imgs/arcade1.png" alt="arcadelife" id="logo" style="box-shadow:none;">
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
<div style="margin-top:280px;">
<div class="container" style="width: 1156px; 
    height: 258px;background:#a9a7a9f0;">
	<h1>Cart</h1>
	<?php
		session_start();
		// define product prices
		$prices = array("Soft toy" => 10, "Shoes" => 20, "I Pad" => 30,"Headphones" =>50);

		// check if product is added to cart
		if(isset($_POST['submit'])) {
			$product = $_POST['product'];
			$_SESSION['cart'][] = $product;
		}
		// check if clear cart button is pressed
		if(isset($_POST['clear_cart'])) {
			unset($_SESSION['cart']);
		}

		// calculate total price
		$total_price = 0;
		if(isset($_SESSION['cart'])) {
			foreach($_SESSION['cart'] as $product) {
				if(isset($prices[$product])) {
					$total_price += $prices[$product];
				}
			}
		}


		// display cart
		if(isset($_SESSION['cart'])) {
			echo "<itemz>";
			foreach($_SESSION['cart'] as $product) {
				echo "<li>$product</li>";
			}
			echo "</itemz>";
			echo "<br>";
			echo "<h3 style='float:none;'>Total price:".$total_price."</h3>";
			echo "<form method='post' action='shoppingcart.php'>";
			echo "<button type='submit' name='clear_cart' style='float:none;margin-top: 0px;margin-right: opx;'>Clear Cart</button>";
			echo "</form>";
		} else {
			echo "<h3 style='float:none;'>Your cart is empty.</h3>";
		}
	?>
	</div>

<div>
	<div class="about-section" style="box-shadow:0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);">
	<h1>Shop</h1>
	<h3>Browse our selection of products below:</h3>
	</div>

		<div class="containerS"  >
			<h2 style="margin-left: 0px;margin-right: 60px;">Soft Toy</h2>
			<img src="../imgs/item1.jpg" style="margin:60px;border-radius:10px;"alt="item1" data-aos="fade-right"></img>
			<div data-aos="fade-up">
			<p>Introducing our adorable soft toy, the perfect companion for children and adults alike! This huggable and cuddly friend is expertly crafted from the highest quality materials to ensure long-lasting durability and softness.

With its charming and lovable design, this toy is sure to capture the hearts of all who see it. Its soft, plush body is irresistibly snuggly, and its cheerful expression is sure to bring a smile to your face. Whether you're looking for a gift for a loved one or a little something to brighten up your own day, this soft toy is the perfect choice.
		<br>Price: 10<br></p>
			<form method="post" action="shoppingcart.php">
				<input type="hidden" name="product" value="Soft toy">
				<button type="submit" style=" float:left;"name="submit">Add to cart</button>
			</form>
	</div>
	</div>


		<div class="containerS" >
			<h2 style="float:left;margin-right:0px;margin-left:60px;">Shoes</h2>
			<img src="../imgs/item2.jpg" style="float:right;margin:60px;border-radius:10px;" data-aos="fade-left" alt="item2"></img>
			<div data-aos="fade-up">
			<p style="float:left;margin-right:0px;margin-left:60px;" >Introducing our latest pair of shoes, designed to provide both style and comfort. These shoes are crafted with the utmost attention to detail, using only the highest quality materials to ensure both durability and comfort.
With a sleek and modern design, these shoes are perfect for both casual and formal occasions. The outer material is made from [insert material], providing a sophisticated look while also being resistant to wear and tear. 
<br>Price: 10<br></p>
			<form method="post" action="shoppingcart.php">
				<input type="hidden" name="product" value="Shoes">
				<button type="submit" name="submit" >Add to cart</button>
			</form>
			</div>
	</div>
			<div class="containerS" >
			<h2 style="margin-left: 0px;margin-right: 60px;">Metallic Poster</h2>
			<img src="../imgs/item3.jpg" style="margin:60px;border-radius:10px;" data-aos="fade-right" alt="item3"></img>
			<div data-aos="fade-up">
			<p>Looking to add a touch of style to your living space? Look no further than this stunning matelick poster. With its eye-catching design and high-quality printing, it's sure to make a statement wherever you choose to display it. Perfect for collectors, art lovers, or anyone looking to add a unique touch to their home decor. Don't miss out on this must-have piece!
<br>Price: 10<br></p>
			<form method="post" action="shoppingcart.php">
				<input type="hidden" name="product" value="Soft toy">
				<button type="submit" style=" float:left;"name="submit" >Add to cart</button>
			</form>
			</div>
	</div>

	<div class="containerS">
			<h2 style="float:left;margin-right:0px;margin-left:60px;">Headphone</h2>
			<img src="../imgs/item4.jpg" style="float:right;margin:60px;border-radius:10px;"  data-aos="fade-left"alt="item4"></img>
			<div data-aos="fade-up">
			<p style="float:left;margin-right:0px;margin-left:60px;" >
			Experience music like never before with these high-quality headphones. Whether you're commuting, working out, or just relaxing at home, these headphones deliver crisp, clear sound that will transport you to another world. With their comfortable design and long battery life, you can wear them for hours without any discomfort. Perfect for music lovers and audiophiles alike, these headphones are a must-have accessory for anyone who wants to take their listening experience to the next level
			<br>Price: 10<br></p>
			<form method="post" action="shoppingcart.php">
				<input type="hidden" name="product" value="Headphones">
				<button type="submit" name="submit">Add to cart</button>
			</form>
	</div>
	</div>

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
    document.getElementById("navbar").style.opacity = ".9";
    document.getElementById("logo").style.width = "350px";
    document.getElementById("logo").style.borderRadius = "0px";
    document.getElementById("navbar-right").style.marginTop = "33px";
   
  }
}
  </script>
</body>
</html>