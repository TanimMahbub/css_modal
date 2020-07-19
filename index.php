<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- ===== meta tags start here =======-->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- =========== page title ========== -->
		<title>Pure CSS Modal</title>
		<!-- ========= page title end ======== -->

		<meta name="description" content="Pure CSS3 Modal- no js requirement">
		<meta name="keywords" content="CSS3, modal, popup, css3 popup, css3 modal">
		<meta name="author" content="Tanim Mahbub">
		<!-- ======= meta tags end here =======-->

		<link rel="shortcut icon" href="img/favicon.png">

		<!-- ========== css library ========== -->
		<link rel="stylesheet" href="css/animate.min.css">
		<link rel="stylesheet" href="css/font-awesome.css">
		<!-- ======== css library end ======== -->

		<!-- =========== main css =========== -->
		<link rel="stylesheet" href="cssmodal.css">
		<!-- ========= main css end ========= -->

		<script src=js/modernizr-2.8.3.min.js></script>

		<!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	    <![endif]-->
	</head>
	<body>
		
		<header>
			<input type="checkbox" class="remove" id="info" checked>
			<label for="info" class="information">
				<i class="fa fa-plus"></i>
				<i class="fa fa-times"></i>
			</label>
			<div class="header-content">
				<div class="f2">
                	<p>/*</p>
                    <i>Created ------- :</i> <span class="cc">11/10/2017</span><br>
                    <i>Author -------- :</i> <span><a href="https://codecanyon.net/user/gwdesign_org" class="cc">gwdesign_org <i class="fa fa-external-link"></i></a></span><br>
                    <i>Developed by -- :</i> <span class="cc">Tanim Mahbub</span><br>
                    <i>Email --------- :</i> <span class="cc">tanim.mahbub001@gmail.com</span>
                    <p>*/</p>
                </div>
	        </div>
	        <img src="img/logo.png" alt="logo" class="logo">
		</header>

		<input type="radio" name="colors" class="color-switch cs-1" id="cs1" checked>
		<label for="cs1" class="cs cs--1"></label>
		<input type="radio" name="colors" class="color-switch cs-2" id="cs2">
		<label for="cs2" class="cs cs--2"></label>
		<input type="radio" name="colors" class="color-switch cs-3" id="cs3">
		<label for="cs3" class="cs cs--3"></label>
		<input type="radio" name="colors" class="color-switch cs-4" id="cs4">
		<label for="cs4" class="cs cs--4"></label>
		<input type="radio" name="colors" class="color-switch cs-5" id="cs5">
		<label for="cs5" class="cs cs--5"></label>
		<input type="radio" name="colors" class="color-switch cs-6" id="cs6">
		<label for="cs6" class="cs cs--6"></label>

		<div class="page-wrapper">

			<div class="tac">
				<a href="#cssmodal" class="cssmodal-btn">CSS Modal Default</a>
				<a href="#cssmodal-2" class="cssmodal-btn">CSS Modal sm</a>
				<a href="#cssmodal-3" class="cssmodal-btn">CSS Modal lg</a>
				<a href="#cssmodal-4" class="cssmodal-btn">CSS Modal fluid</a>
			</div>

			<br><br>

			<div class="tac">
				<a href="#cssmodal-5" class="cssmodal-btn">Log in form</a>
				<a href="#cssmodal-6" class="cssmodal-btn">Sign up form</a>
			</div>

			<div class="cssmodal-container" id="cssmodal">
				<div class="cssmodal-screen">
					<a href="#close" class="overlay"></a>
					<div class="css-modal">
						<a href="#close" class="exit-button">
							<i class="fa fa-close"></i>
						</a>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae tempora in sequi perferendis accusamus soluta aut nobis laborum, quia quod, nisi perspiciatis nemo</p><br><br>
						<a href="#close" class="cssmodal-btn">Close modal</a>
					</div>
				</div>
			</div>

			<div class="cssmodal-container" id="cssmodal-2">
				<div class="cssmodal-screen">
					<a href="#close" class="overlay"></a>
					<div class="cssmodal-br cssmodal-sm">
						<a href="#close" class="exit-button">
							<i class="fa fa-close"></i>
						</a>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae tempora in sequi perferendis accusamus soluta aut nobis laborum, quia quod, nisi perspiciatis nemo</p><br><br>
						<a href="#close" class="cssmodal-btn">Close modal</a>
					</div>
				</div>
			</div>
			
			<div class="cssmodal-container" id="cssmodal-3">
				<div class="cssmodal-screen">
					<a href="#close" class="overlay"></a>
					<div class="css-modal cssmodal-lg">
						<a href="#close" class="exit-button">
							<i class="fa fa-close"></i>
						</a>
						<p>Tolestias expedita porro error cupiditate ipsam illo architecto exercitationem eveniet quod nemo quasi quisquam officiis, sint quo eaque consectetur ipsa? Amet maxime provident minus, autem cupiditate facilis ut voluptate, nemo minima impedit maiores. Atque voluptas provident et earum deleniti consectetur officia esse tempore porro animi.</p><br><br>
						<div class="contact-map-area">
			                <!-- google-map start here-->
			                <div class="google-map" id="map" 
			                     data-map-lat="23.812181" 
			                     data-map-lng="90.413918" 
			                     data-icon-path="img/01.png"
			                     data-map-title="CSS Modal"
			                     data-map-zoom="14" 
			                     data-markers='{
			                                   "marker-1": [23.812181, 90.413918, "<h4>CSS Moda</h4><p>1430 Dhaka, Bangladesh</p>"]
			                                   }'>
			                </div>
							<!-- google-map end here--> 
		         		</div>
						<br>
						<br>
						<a href="#close" class="cssmodal-btn">Close modal</a>
					</div>
				</div>
			</div>
			
			<div class="cssmodal-container" id="cssmodal-4">
				<div class="cssmodal-screen">
					<a href="#close" class="overlay"></a>
					<div class="css-modal cssmodal-fluid">
						<a href="#close" class="exit-button">
							<i class="fa fa-close"></i>
						</a>
						<p>Tolestias expedita porro error cupiditate ipsam illo architecto exercitationem eveniet quod nemo quasi quisquam officiis, sint quo eaque consectetur ipsa? Amet maxime provident minus, autem cupiditate facilis ut voluptate, nemo minima impedit maiores. Atque voluptas provident et earum deleniti consectetur officia esse tempore porro animi.</p><br><br>
						<div class="contact-map-area">
			                <!-- google-map start here-->
			                <div class="google-map" id="map-2" 
			                     data-map-lat="23.812181" 
			                     data-map-lng="90.413918" 
			                     data-icon-path="img/01.png"
			                     data-map-title="CSS Modal"
			                     data-map-zoom="14" 
			                     data-markers='{
			                                   "marker-1": [23.812181, 90.413918, "<h4>CSS Moda</h4><p>1430 Dhaka, Bangladesh</p>"]
			                                   }'>
			                </div>
							<!-- google-map end here--> 
		         		</div>
						<br>
						<br>
						<a href="#close" class="cssmodal-btn">Close modal</a>
					</div>
				</div>
			</div>

			<div class="cssmodal-container" id="cssmodal-5">
				<div class="cssmodal-screen">
					<a href="#close" class="overlay"></a>
					<div class="css-modal">
						<a href="#close" class="exit-button">
							<i class="fa fa-close"></i>
						</a>
						<h2 class="tac form-title">Log in</h2>
						<form class="cssmodal-form" method="POST" action="action.php">
							<input type="text" placeholder="User name or Email">
							<span class="fa fa-user"></span>
							<input type="password" placeholder="Password">
							<span class="fa fa-unlock-alt"></span>
							<button type="submit" name="submit" class="cssmodal-btn">log in</button>
						</form>
						<br>
						<br>
						<h2 class="tac form-title">Or Log in with other accounts</h2>
						<div class="social-login tac">
							<a href="#" class="facebook-bg">
								<i class="fa fa-facebook"></i>
								<span>Facebook</span>
							</a>
							<a href="#" class="google-bg">
								<i class="fa fa-google"></i>
								<span>Google</span>
							</a>
							<a href="#" class="twitter-bg">
								<i class="fa fa-twitter"></i>
								<span>Twitter</span>
							</a>
						</div>
						<br><br><br><br>
						<div class="tac">
							<a href="#close" class="cssmodal-btn">Close modal</a>
						</div>
					</div>
				</div>
			</div>

			<div class="cssmodal-container" id="cssmodal-6">
				<div class="cssmodal-screen">
					<a href="#close" class="overlay"></a>
					<div class="css-modal">
						<a href="#close" class="exit-button">
							<i class="fa fa-close"></i>
						</a>
						<h2 class="tac form-title">Sign up</h2>
						<form class="cssmodal-form" method="POST" action="action.php">
							<input type="text" placeholder="User name">
							<span class="fa fa-user"></span>
							<input type="email" placeholder="Email">
							<span class="fa fa-envelope"></span>
							<input type="password" placeholder="Password">
							<span class="fa fa-unlock-alt"></span>
							<input type="password" placeholder="Confirm Password">
							<span class="fa fa-lock"></span>
							<button type="submit" name="submit" class="cssmodal-btn">Sign up</button>
						</form>
						<br>
						<br>
						<h2 class="tac form-title">Or Sign up with other accounts</h2>
						<div class="social-login tac">
							<a href="#" class="facebook-bg">
								<i class="fa fa-facebook"></i>
								<span>Facebook</span>
							</a>
							<a href="#" class="google-bg">
								<i class="fa fa-google"></i>
								<span>Google</span>
							</a>
							<a href="#" class="twitter-bg">
								<i class="fa fa-twitter"></i>
								<span>Twitter</span>
							</a>
						</div>
						<br><br><br><br>
						<div class="tac">
							<a href="#close" class="cssmodal-btn">Close modal</a>
						</div>
					</div>
				</div>
			</div>

		</div>
		<!-- ========== jquery library ========== -->
		<script src="js/jquery-1.12.4.min.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBmDvvx5zZlF8kxgT8ZUFaS_BvjLpRl7kI"></script>
		<script src="js/gmaps.min.js"></script>
		<script src="js/map-helper.js"></script>
		<script src="js/SmoothScroll.js"></script>
		<script src="js/jquery.malihu.PageScroll2id.min.js"></script>
		<script src="js/wow.min.js"></script>
		<script src="js/main.js"></script>
	</body>
</html>