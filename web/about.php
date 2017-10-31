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

  <div class="tab-content responsive hidden-xs hidden-sm">
    <div class="tab-pane active" id="how-to">
    <h1 style="text-align:center;max-width:1400px;margin-left:auto;margin-right:auto;">About Us</h1>
    <hr>

	 <p class="tab-text" style="text-align:center;max-width:1400px;margin-left:auto;margin-right:auto;">Our goal in creating Bored Boards is to help people combat boredom through a constant supply of new and unique board games for people to interact with each other with. </p> <br>

	 <p class="tab-text" style="text-align:center;max-width:1400px;margin-left:auto;margin-right:auto;">For a monthly fee of $12, each member will be given a random set of 3 games within user set genres at the beginning of each month to try out. At the end of the month, they send back the 3 games for another set. If they find that they like a game, members can buy them from the website at a discounted rate. If members want more than 3 games per month, then they can pay $3 for each additional game they want per month.</p><br>
	 <p class="tab-text" style="text-align:center;max-width:1400px;margin-left:auto;margin-right:auto;">Members can also provide feedback about the games they receive, and over time our propriety system will analyze and adjust to individual member preferences. This will provide a tailored experience for each and every client. As members buy more games, they will be awarded points which increase their membership "rank", going in order from bronze to silver, to gold, to platinum. As their rank increases, members get larger discounts when buying games from the website.</p><br>
	 <p class="tab-text" style="text-align:center;max-width:1400px;margin-left:auto;margin-right:auto;">This website was made by Jing Chen (jlc6zj) and Katherine Qian (kq3zm) for UVA E-Commerce Spring 2017.</p>

    </div>
</div>

</body> 

<?php
	if (isset($_SESSION['UserEmail'])) {
		echo '<h1><div class="shop" style="position:relative;top:100px"> Thank you for being a member!!</div></h1>';

	}
	else {
		echo '<div class="shop" style="position:relative;top:100px"> <a href="register.html">Register Now!</a></div>';
	}
?>

	<script src="js/responsive-tabs.js"></script>
    <script type="text/javascript">
      $( '#myTab a' ).click( function ( e ) {
        e.preventDefault();
        $( this ).tab( 'show' );
      } );

      $( '#moreTabs a' ).click( function ( e ) {
        e.preventDefault();
        $( this ).tab( 'show' );
      } );

      ( function( $ ) {
          // Test for making sure event are maintained
          $( '.js-alert-test' ).click( function () {
            alert( 'Button Clicked: Event was maintained' );
          } );
          fakewaffle.responsiveTabs( [ 'xs', 'sm' ] );
      } )( jQuery );

    </script>