<!DOCTYPE html>
<html>
<head>
<title>Eshop a Flat E-Commerce Bootstrap Responsive Website Template | Home :: w3layouts</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Eshop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<!-- for bootstrap working -->
	<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
<!-- //for bootstrap working -->
<!-- cart -->
	<script src="js/simpleCart.min.js"> </script>
<!-- cart -->
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
</head>
<body>
	<!-- header-section-starts -->
	<div class="header">
		<div class="header-top-strip">
			<div class="container">
				<div class="header-top-left">
					<ul>
						<li><a href="register.html"><span class="glyphicon glyphicon-lock"> </span>Create an Account</a></li>
						<li><a href="login.php"><span class="glyphicon glyphicon-user"> </span>Login</a></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- header-section-ends -->
	<div class="banner-top">
		<div class="container">
				<nav class="navbar navbar-default" role="navigation">
	    <div class="navbar-header">
	        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
	        </button>
				<div class="logo">
					<h1><a href="index.php"><span>B</span> ored Boards</a></h1>
					<p> Always have new games to play!</p>
				</div>
	    </div>
	    <!--/.navbar-header-->
	
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	        <ul class="nav navbar-nav">
			<li><a href="index.php">Home</a></li>
			<li><a href="products.html">Board Games</a></li>
			<li><a href="about.html">ABOUT</a><li>
	        </ul>
	    </div>
	    <!--/.navbar-collapse-->
	</nav>
	<!--/.navbar-->
</div>
</body> 
	<?php $UserFirstName =  $_POST["UserFirstname"]; 
	$UserLastName = $_POST["UserLastname"]; 
	$UserPassword = $_POST["UserPassword"]; 
	$UserEmail = $_POST["UserEmail"]; 
	$UserAddress = $_POST["UserAddress"]; 
	$UserCity = $_POST["UserCity"]; 
	$UserState = $_POST["UserState"]; 
	$UserZipcode = $_POST["UserZipcode"]; ?>
	</div>

<?php 
//Connect to DB
$user= 'root';
$pass = '';
$db = 'ecomm';

$conn = new mysqli('localhost', $user, $pass, $db) or die ("Unable to connect to ecomm database");

$sql = "INSERT INTO users (UserFirstName, UserLastName, UserPassword, UserEmail, UserAddress, UserCity, UserState, UserZipcode) 
 	VALUES ('$UserFirstName', '$UserLastName', '$UserPassword', '$UserEmail', '$UserAddress', '$UserCity', '$UserState', '$UserZipcode')";

$sqlcheck = "SELECT UserEmail from users";
$result = $conn->query($sqlcheck);

$flag = false;

if ($result->num_rows >0) { //returns all emails in the db as long as db isn't empty to start with
	while($row = $result->fetch_assoc()) {
		if ($row["UserEmail"] == $UserEmail) { //found email already in db
			$flag = true; ?>
			<div class="shop" style="position:relative;top:100px">
			<h1>That Email is already associated with an account!</h1> <?php
		} 
	}
} 
?>

<?php
if (!$flag){ //<!--New User registered -->
	?> <div class="shop" style="position:relative;top:100px">
	<h1>Thank You for Registering!</h1> 

	<?php
		$conn->query($sql); 
		require_once 'PHPMailer-master/PHPMailerAutoload.php';
		date_default_timezone_set('Etc/UTC');

		$mail = new PHPMailer;
		$mail->isSMTP();
		$mail->Host = 'smtp.gmail.com';
		$mail->Port = 587;
		$mail->SMTPSecure = 'tsl';
		$mail->SMTPAuth = true;

		//Username to use for SMTP authentication - use full email address for gmail
		$mail->Username = "Azomarite@gmail.com";
		//Password to use for SMTP authentication
		$mail->Password = "ZcJSC1266502";
		//Set who the message is to be sent from
		$mail->setFrom('Azomarite@gmail.com', 'Bored Boards');
		//Set who the message is to be sent to
		$mail->addAddress($UserEmail);
		//Set the subject line
		$mail->Subject = 'Bored Boards Registration';
		//Replace the plain text body with one created manually
		$mail->Body = 'Thank you for registering!!';

		if(!$mail->send()) {
		  // echo 'Message was not sent.';
		  echo 'Mailer error: ' . $mail->ErrorInfo;
		} else {
		  // echo 'Message has been sent.';
		}

		}
	?>
</html>