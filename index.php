<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-select.css">
	<link href='http://fonts.googleapis.com/css?family=Montserrat:200,300,400,600,700' rel='stylesheet' type='text/css'/>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:200,300,400,600,700' rel='stylesheet' type='text/css'/>
	<link href='//cdn.jsdelivr.net/fontawesome/4.3.0/css/font-awesome.min.css' rel='stylesheet' type='text/css'/>
    <link rel="stylesheet" type="text/css" href="css/camera.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Car Audio</title>
</head>
<body>
	<div class="page-container">
		<!-- Header -->
	    <header class="header">
			<nav class="navbar container">
			  	<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
					 	<span class="icon-bar"></span>
					  	<span class="icon-bar"></span>
					  	<span class="icon-bar"></span>
					</button>
					<a href="index.php" class="navbar-brand">Car Audio</a>
			  	</div>
	         	<div class="navbar-collapse collapse navbar-right">
					<ul class="nav navbar-nav">
			            <li class="active"><a href="index.php">Home</a></li>
	              		<li class="dropdown">
	                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">PROFILE <b class="caret"></b></a>
	                        <ul class="dropdown-menu">
	                        	<li><a href="gallery.php">Gallery</a></li>
	                          	<li><a href="achievement.php">Achievements</a></li>
	                        </ul>
	                  	</li>
						<li class="dropdown">
	                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">AUDIO <b class="caret"></b></a>
	                        <ul class="dropdown-menu">
							  	<li><a href="#" class="ajax_right">Difuser</a></li>
							  	<li><a href="#" class="ajax_right">Power Amplifier</a></li>
							  	<li><a href="#" class="ajax_right">Speaker</a></li>
							  	<li><a href="#" class="ajax_right">Subwoofer</a></li>
	                        </ul>
	                  	</li>   
						<li><a href="contact.php" class="ajax_right">Contact</a></li>
						<li><a href="#" data-toggle="modal" data-target="#sign_in_modal">SIGN IN</a></li>
					</ul>
					<ul class="nav navbar-right cart">
						<li class="dropdown">
							<a href="cart.php" class="dropdown-toggle" data-toggle="dropdown"><span>5</span></a>
							<div class="cart-info dropdown-menu">
								<table class="table">
									<tbody>
										<tr>
											<td class="image"><img alt="IMAGE" class="img-responsive" src="products/dress33.jpg"></td>
											<td class="name"><a href="project.php">Black Dress</a></td>
											<td class="quantity">x&nbsp;3</td>
											<td class="total">$130.00</td>
											<td class="remove"><img src="image/remove-small.png" alt="Remove" title="Remove"></td>											
										</tr>
										<tr>
											<td class="image"><img alt="IMAGE" class="img-responsive" src="products/dress11.jpg"></td>
											<td class="name"><a href="project.php">Blue Dress</a></td>
											<td class="quantity">x&nbsp;3</td>
											<td class="total">$230.00</td>
											<td class="remove"><img src="image/remove-small.png" alt="Remove" title="Remove"></td>											
										</tr>
									</tbody>									
								</table>
								<div class="cart-total">
									<table>
										<tbody>
											<tr>
												<td><b>Sub-Total:</b></td>
												<td>$400.00</td>
											</tr>
											<tr>
												<td><b>Total:</b></td>
												<td>$400.00</td>
											</tr>
										</tbody>
									</table>
									<div class="checkout"><a href="cart.php" class="ajax_right">View Cart</a> | <a href="checkout.php" class="ajax_right">Checkout</a></div>
								</div>
							</div> 
						</li>
					</ul>
					<form action="http://nicolette.ro/" class="navbar-form navbar-search navbar-right" role="search">
						<div class="input-group"> 
							<input type="text" name="search" placeholder="Search" class="search-query col-md-2"><button type="submit" class="btn btn-default icon-search"></button> 
						</div>
					</form>
				</div><!-- /.navbar-collapse -->
			</nav>		
		</header>
		<!-- Content -->
		<main class="container">
			<div class="row">
				<div class="col-md-12 slideshow">
					<div id="slideshow0">
						<div class="camera_wrap camera_emboss camera_white_skin">
							<div data-thumb="image/slider2.jpg" data-src="image/slider2.jpg" data-link="product.php">
							</div>
							<div data-thumb="image/slider3.jpg" data-src="image/slider3.jpg" >
							</div>
							<div data-thumb="image/slider4.jpg" data-src="image/slider4.jpg" >
							</div>
							<div data-thumb="image/slider5.jpg" data-src="image/slider5.jpg" >
							</div>
							<div data-thumb="image/slider6.jpg" data-src="image/slider6.jpg" >
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<!-- Row #1 -->
					<div class="row">
						<div class="col-md-3">
							<div class="product">
								<a href="product.php"><img alt="bud 6s" src="products/bud 6s.png"></a>
								<div class="name">
									<a href="#">Bud 6S</a>
								</div>
								<div class="price">
									<p>Rp 1.848.000</p>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="product">
								<a href="product.php"><img alt="es-60" src="products/es-60.png"></a>
								<div class="name">
									<a href="#">ES-60</a>
								</div>
								<div class="price">
									<p>Rp 2.520.000</p>
								</div>	
							</div>	
						</div>			
						<div class="col-md-3">
							<div class="product">
								<a href="product.php"><img alt="es-61" src="products/es-61.png"></a>
								<div class="name">
									<a href="#">ES-61</a>
								</div>
								<div class="price">
									<p>Rp 5.388.000</p>
								</div>
							</div>	
						</div>		
						<div class="col-md-3">
							<div class="product">
								<a href="product.php"><img alt="es-62" src="products/es-62.png"></a>
								<div class="name">
									<a href="">ES-62</a>
								</div>
								<div class="price">
									<p>Rp 4.320.000</p>
								</div>
							</div>	
						</div>		
					</div>
					<!-- Row #2 -->
					<div class="row">
						<div class="col-md-3">
							<div class="product">
								<a href="product.php"><img alt="bud 6s" src="products/bud 6s.png"></a>
								<div class="name">
									<a href="#">Bud 6S</a>
								</div>
								<div class="price">
									<p>Rp 1.848.000</p>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="product">
								<a href="product.php"><img alt="es-60" src="products/es-60.png"></a>
								<div class="name">
									<a href="#">ES-60</a>
								</div>
								<div class="price">
									<p>Rp 2.520.000</p>
								</div>	
							</div>	
						</div>			
						<div class="col-md-3">
							<div class="product">
								<a href="product.php"><img alt="es-61" src="products/es-61.png"></a>
								<div class="name">
									<a href="#">ES-61</a>
								</div>
								<div class="price">
									<p>Rp 5.388.000</p>
								</div>
							</div>	
						</div>		
						<div class="col-md-3">
							<div class="product">
								<a href="product.php"><img alt="es-62" src="products/es-62.png"></a>
								<div class="name">
									<a href="">ES-62</a>
								</div>
								<div class="price">
									<p>Rp 4.320.000</p>
								</div>
							</div>	
						</div>		
					</div>
					<!-- Row #3 -->
					<div class="row">
						<div class="col-md-3">
							<div class="product">
								<a href="product.php"><img alt="bud 6s" src="products/bud 6s.png"></a>
								<div class="name">
									<a href="#">Bud 6S</a>
								</div>
								<div class="price">
									<p>Rp 1.848.000</p>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="product">
								<a href="product.php"><img alt="es-60" src="products/es-60.png"></a>
								<div class="name">
									<a href="#">ES-60</a>
								</div>
								<div class="price">
									<p>Rp 2.520.000</p>
								</div>	
							</div>	
						</div>			
						<div class="col-md-3">
							<div class="product">
								<a href="product.php"><img alt="es-61" src="products/es-61.png"></a>
								<div class="name">
									<a href="#">ES-61</a>
								</div>
								<div class="price">
									<p>Rp 5.388.000</p>
								</div>
							</div>	
						</div>		
						<div class="col-md-3">
							<div class="product">
								<a href="product.php"><img alt="es-62" src="products/es-62.png"></a>
								<div class="name">
									<a href="">ES-62</a>
								</div>
								<div class="price">
									<p>Rp 4.320.000</p>
								</div>
							</div>	
						</div>		
					</div>
				</div>	
			</div>		
		</main>	
		<!-- Footer -->
		<footer class="footer black">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<div>
							<h3>Information</h3>
							<ul>
								<li><a href="about.php">About Us</a></li>
								<li><a href="#">Delivery Information</a></li>
								<li><a href="#">Privacy Policy</a></li>
								<li><a href="#">Terms & Conditions</a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-3">
						<div>
							<h3>Customer Service</h3>
							<ul>
								<li><a href="contact.php" class="ajax_right">Contact Us</a></li>
								<li><a href="#">Shipping</a></li>
							</ul>	
						</div>
					</div>		
					<div class="col-md-3"></div>
					<div class="col-md-3 social">
						<div class="copy">Copyright &copy; <?=date("Y");?></div>
						<ul class="social-network">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>	
						</ul>
					</div>
				</div>	
			</div>
		</footer>
	</div>
	<!-- Modal -->
	<div id="sign_in_modal" class="modal" tabIndex="-1" role="dialog" style="z-index:999999">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<a href="#" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></a>
					<h4 class="modal-title">SIGN IN</h4>
				</div>
				<div class="modal-body">
					<form class="loginbox form-horizontal" method="post" action="account.php">
						<div class="form-group">
							<label class="control-label col-md-4" for="inputEmail">Username or email<span class="required">*</span></label>
							<div class="col-md-8">
								<input type="text" class="form-control" name="user" required>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-4" for="inputPassword">Password<span class="required">*</span></label>
							<div class="col-md-8">
								<input type="password" class="form-control" name="pass" required>
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-12">
								<button class="btn btn-primary" type="submit">SIGN IN</button>
								<a href="account.php" class="btn btn-danger">SIGN UP</a>
								<a href="forgot-password.html">Lost Password?</a>
							</div>
						</div>
			        </form>
				</div>
			</div>
		</div>
	</div>
	<!-- Scripts -->
	<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/bootstrap-select.min.js"></script>
	<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="js/camera.js"></script>
	<script type="text/javascript" src="js/sapphire.js"></script>
	<script>
		$(function(){	
			jQuery('#slideshow0 > div').camera({
				alignment:"center",
				autoAdvance:true,
				mobileAutoAdvance:true,
				barDirection:"leftToRight",
				barPosition:"bottom",
				cols:6,
				easing:"easeInOutExpo",
				mobileEasing:"easeInOutExpo",
				fx:"random",
				mobileFx:"random",
				gridDifference:250,
				height:"auto",
				hover:true,
				loader:"pie",
				loaderColor:"#eeeeee",
				loaderBgColor:"#222222",
				loaderOpacity:0.3,
				loaderPadding:2,
				loaderStroke:7,
				minHeight:"200px",
				navigation:true,
				navigationHover:true,
				mobileNavHover:true,
				opacityOnGrid:false,
				overlayer:true,
				pagination:true,
				pauseOnClick:true,
				playPause:true,
				pieDiameter:38,
				piePosition:"rightTop",
				portrait:false,
				rows:4,
				slicedCols:12,
				slicedRows:8,
				slideOn:"random",
				thumbnails:false,
				time:7000,
				transPeriod:1500,				
				imagePath: '../image/'
			});
		});
	</script>    
</body>
</html>
