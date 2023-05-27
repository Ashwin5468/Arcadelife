<?php
if(isset($_POST['email'])){
$server ="localhost";
$username="root";
$password="";
$db_name = "arcadelife";
$con =mysqli_connect($server,$username,$password,$db_name);

if(!$con){
    die("Connection failed due to".mysqli_connect_error());
}

// Get form data
$email = $_POST['email'];

// Check if email exists in database
$sql = "SELECT * FROM userinfo WHERE Email='$email'";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {   
    echo "<errorr>"."A new password has been sent to your email address."."<errorr>";
} else {
    echo "<errorr>"."Sorry, the email address you entered does not exist in our database."."</errorr>";
}

// Close database connection
mysqli_close($con);
} else {
    echo "Email field is missing.";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot</title>
    <link rel="stylesheet" href="style.css">
    <style>
    errorr{
        color: lightblue;
    }
    </style>
</head>
<body style="background-color: darkslategrey;">
    <center>
    <div class="container" style="height: 270;margin-top: 130px;">
<h1>Forgot Password</h1>
	<form action="forgot.php" method="POST">
		<input type="email" name="email" required placeholder="Enter your email"><br><br>
		
		<button type="submit">Submit</button>
	</form>
    <p>Already have an account<a href="index.php">Login</a></p>
</div>
</center>
</body>
</html>
