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
						<?php
							session_start();
							if (isset($_SESSION['UserEmail'])) {
								echo "<li> Hello ".$_SESSION['UserEmail']."<li>";
								echo '<li><a href="logout.php"><span class="glyphicon glyphicon-lock"> </span>Logout</a></li>';		
							}
							else {
								echo '<li><a href="login.php"><span class="glyphicon glyphicon-user"> </span>Login</a></li>';
								echo '<li><a href="register.html"><span class="glyphicon glyphicon-lock"> </span>Create an Account</a></li>';
							}
						?>
			
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
	        <li><a href="products.php">Board Games</a></li>
			<li><a href="about.php">ABOUT</a><li>
	        </ul>
	    </div>
	    <!--/.navbar-collapse-->
	</nav>
	<!--/.navbar-->
</div>
</div>
<head>
<style>
p.padding {
    padding-top: 3cm;
}
p.padding2 {
    padding-top: 1cm;
}

</style>
</head>

<!-- <div class="tab-content responsive hidden-xs hidden-sm">
    <div class="tab-pane active"; style="position:relative;top:12px">
    <br>
	 <p class="tab-text">Become a paid member to get a shipment of board games every month and at the end of the month, send the games back to get a new set to try out. Members also get a discount for buying games directly from us, and as you buy more games you get more points, which make you a higher ranking member, which in turn gets you larger discounts when buying games.</p> <br>
    </div>
</div> -->

<div class="banner">
	<div class="container">
		<div class="banner-info">
			<h3>Become a member to try new set of board games every month</h3>
		</div>
		<div class="buttons">
			<!-- <ul>
				<li ><a class="hvr-shutter-in-vertical" href="#" data-toggle="modal" data-target="#myModal">Mobile</a></li>
				<li><a class="hvr-shutter-in-vertical" href="#" data-toggle="modal" data-target="#myModal1">DTH</a></li>
				<li><a class="hvr-shutter-in-vertical" href="#" data-toggle="modal" data-target="#myModal2">Datacard</a></li>
			</ul> -->
			
		</div>
	</div>
</div>

<div class="coupons">
	<div class="container">
		<div class="coupons-grids text-center">
		<p class="padding2"></p>
			<div class="col-md-3 coupons-gd">
				<p class="padding"></p>
				<h3>HOW IT WORKS</h3>
			</div>
			<div class="col-md-3 coupons-gd">
				<h4><span><img src="images/box.png" alt=" " /></span></h4>
				<p>GET A NEW SET OF GAMES EACH MONTH</p>
			</div>
			<div class="col-md-3 coupons-gd">
				<h4><span><img src="images/game.png" alt=" " /></span></h4>
				<p>PLAY THE GAMES</p>
				<P>RETURN AT THE END OF THE MONTH</p>
			</div>
			<div class="col-md-3 coupons-gd">
				<h4><span><img src="images/shop.jpg" alt=" " /></span></h4>
				<p>BUY THE GAMES THAT YOU LIKE</p>
				<P>BUY MORE FOR A DISCOUNT </p>
			</div>
			<div class="clearfix"> </div>
			<p class="padding"></p>

		</div>
	</div>
</div>

</div>
</div>
		  <div class="copyright text-center">
				<p style="position: fixed; bottom: 0; width:100%; text-align: center">© 2015 Eshop. All Rights Reserved | Design by   <a href="http://w3layouts.com">  W3layouts</a></p>
		  </div>
	</div>
</div>

</body>

</html>

