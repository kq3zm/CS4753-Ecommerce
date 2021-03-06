<!DOCTYPE html>
<html>
<head>
<title>Eshop a Flat E-Commerce Bootstrap Responsive Website Template | Products :: w3layouts</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/component.css" rel='stylesheet' type='text/css' />
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
</div>
	</div>
		</div>
		
		<!-- content-section-starts -->
	<div class="container">
	   <div class="products-page">
			<div class="products">
			</div>
			<!-- <div class="new-product"> -->
				<div class="new-product-top">
					<ul class="product-top-list">
						<li><a href="index.php">Home</a>&nbsp;<span>&gt;</span></li>
					</ul>
					<p class="back"><a href="index.php">Back to Previous</a></p>
					<div class="clearfix"></div>
				</div>
				
			        <div id="cbp-vm" class="cbp-vm-switcher cbp-vm-view-grid">
					<div class="clearfix"></div>
					<ul> <!-- Start listing items to be sold in the store, store each item as a li -->
						<li>
							<a class="cbp-vm-image">
							<div class="simpleCart_shelfItem">
							  <div class="view view-first">
					   		  <div class="inner_content clearfix">
								<div class="product_image">
									<img src="images/Monopoly.jpg" class="img-responsive" alt=""/>
									<div class="product_container">
									   <div class="cart-left">
										 <p class="title">Monopoly</p>
									   </div>
									   <div class="pricey"><span class="item_price">$25.00</span></div>
									   <div class="clearfix"></div>
								     </div>		
								  </div>
			                     </div>
		                      </div>
							 </a>
							<div class="cbp-vm-details">
								The Classic Board Game!
							</div>

							<form target="paypal" action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
							<input type="hidden" name="cmd" value="_s-xclick">
							<input type="hidden" name="hosted_button_id" value="UFLLG2H94R69E">
							<input type="image" src="https://www.sandbox.paypal.com/en_US/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
							<img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
							</form>

							</div>
						</li>

						<li>
							<a class="cbp-vm-image">
								<div class="simpleCart_shelfItem">
							  <div class="view view-first">
					   		  <div class="inner_content clearfix">
								<div class="product_image">
									<img src="images/sushigo.jpg" class="img-responsive" alt=""/>
									<div class="product_container">
									   <div class="cart-left">
										 <p class="title">Sushi Go Party!</p>
									   </div>
									   <div class="pricey"><span class="item_price">$20.00</span></div>
									   <div class="clearfix"></div>
								     </div>		
								  </div>
			                     </div>
		                      </div>
							 </a>
							<div class="cbp-vm-details">
								A party platter of mega make, super sashimi, and endless edamame
							</div>

							<form target="paypal" action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
							<input type="hidden" name="cmd" value="_s-xclick">
							<input type="hidden" name="hosted_button_id" value="KEM5CEEHJCGXG">
							<input type="image" src="https://www.sandbox.paypal.com/en_US/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
							<img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
							</form>
							</div>
						</li>

						<li>
							<a class="cbp-vm-image">
							<div class="simpleCart_shelfItem">
							  <div class="view view-first">
					   		  <div class="inner_content clearfix">
								<div class="product_image">
									<img src="images/tickettoride.jpg" class="img-responsive" alt=""/>
									<div class="product_container">
									   <div class="cart-left">
										 <p class="title">Ticket to Ride</p>
									   </div>
									   <div class="pricey"><span class="item_price">$30.00</span></div>
									   <div class="clearfix"></div>
								     </div>		
								  </div>
			                     </div>
		                      </div>
							 </a>
							<div class="cbp-vm-details">
								A cross-country train adventure
							</div>
							<form target="paypal" action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
							<input type="hidden" name="cmd" value="_s-xclick">
							<input type="hidden" name="hosted_button_id" value="UF7KSNPY6SWB8">
							<input type="image" src="https://www.sandbox.paypal.com/en_US/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
							<img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
							</form>
							</div>
						</li>

						<li>
							<a class="cbp-vm-image">
								<div class="simpleCart_shelfItem">
							  <div class="view view-first">
					   		  <div class="inner_content clearfix">
								<div class="product_image">
									<img src="images/Catan.jpg" class="img-responsive" alt=""/>
									<div class="product_container">
									   <div class="cart-left">
										 <p class="title">The Settlers of Catan</p>
									   </div>
									   <div class="pricey"><span class="item_price">$25.00</span></div>
									   <div class="clearfix"></div>
								     </div>		
								  </div>
			                     </div>
		                      </div>
							 </a>
							<div class="cbp-vm-details">
								A race to settle the island of Catan
							</div>
							<form target="paypal" action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
							<input type="hidden" name="cmd" value="_s-xclick">
							<input type="hidden" name="hosted_button_id" value="XZXEFX6LHPSX8">
							<input type="image" src="https://www.sandbox.paypal.com/en_US/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
							<img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
							</form>
							</div>
						</li>

						<li>
							<a class="cbp-vm-image">
								<div class="simpleCart_shelfItem">
							  <div class="view view-first">
					   		  <div class="inner_content clearfix">
								<div class="product_image">
									<img src="images/dominion.jpg" class="img-responsive" alt=""/>
									<div class="product_container">
									   <div class="cart-left">
										 <p class="title">Dominion</p>
									   </div>
									   <div class="pricey"><span class="item_price">$30.00</span></div>
									   <div class="clearfix"></div>
								     </div>		
								  </div>
			                     </div>
		                      </div>
							 </a>
							<div class="cbp-vm-details">
								A deck building game 
							</div>
							<form target="paypal" action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
							<input type="hidden" name="cmd" value="_s-xclick">
							<input type="hidden" name="hosted_button_id" value="97CE695NRSW86">
							<input type="image" src="https://www.sandbox.paypal.com/en_US/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
							<img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
							</form>

							</div>
						</li>
					</ul>
				</div>
				<script src="js/cbpViewModeSwitch.js" type="text/javascript"></script>
                <script src="js/classie.js" type="text/javascript"></script>
			</div>
			<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>

		  <div class="copyright text-center">
				<p>© 2015 Eshop. All Rights Reserved | Design by   <a href="http://w3layouts.com">  W3layouts</a></p>
		  </div>
		</div>
		</div>
</body>
</html>