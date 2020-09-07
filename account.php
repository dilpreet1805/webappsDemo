<!doctype html>
<html lang="en">
  <head>
	 <meta charset="utf-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	 <title>All Products - RedStore</title>
	 <link rel="stylesheet" href="css/style.css">
	 <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;500;600;700&display=swap" rel="stylesheet">
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
	<div class="container">
		<div class="navbar">
			<div class="logo">
				<img src="images/logo.png" width="125px">
			</div>
			<nav>
				<ul id="MenuItems">
					<li><a href="">Home</a></li>
					<li><a href="">Products</a></li>
					<li><a href="">About</a></li>
					<li><a href="">Contact</a></li>
					<li><a href="">Account</a></li>
				</ul>
			</nav>
			<img src="images/cart.png" width="30px" height="30px">
			<img src="images/menu.png" class="menu-icon" onclick="menutoggle()">
		</div>
	</div>
	<!-----Account Page----->
	<div class="account-page">
		<div class="container">
			<div class="row">
				<div class="col-2">
					<img src="images/image1.png" width="100%">
				</div>
				<div class="col-2">
					<div class="form-container">
						<div class="form-btn">
							<span onclick="login()">Login</span>
							<span onclick="register()">Register</span>
							<hr id="Indicator">
						</div>
						<form id="LoginForm">
							<input type="text" placeholder="Username">
							<input type="password" placeholder="Password">
							<button type="submit" class="btn">Login</button>
							<a href="">Forgot Password</a>
						</form>
						<form id="RegForm">
							<input type="text" placeholder="Username">
							<input type="email" placeholder="Email">
							<input type="password" placeholder="Password">
							<button type="submit" class="btn">Register</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-----Footer----->
	<div class="footer">
		<div class="container">
			<div class="row">
				<div class="footer-col-1">
					<h3>Download Our App</h3>
					<p>Download App for Android and ios mobile phones.</p>
					<div class="app-logo">
						<img src="images/play-store.png">
						<img src="images/app-store.png">
					</div>
				</div>
				<div class="footer-col-2">
					<img src="images/logo-white.png">
					<p>Our Purpose Is Sustainably Make the Pleasure and Benifits of Sports Accessible to the Many.</p>
				</div>
				<div class="footer-col-3">
					<h3>Useful Links</h3>
					<ul>
						<li>Coupons</li>
						<li>Blog Post</li>
						<li>Return Policy</li>
						<li>Join Affiliate</li>
					</ul>
				</div>
				<div class="footer-col-3">
					<h3>Follow us</h3>
					<ul>
						<li>Facebook</li>
						<li>Twitter</li>
						<li>Instagram</li>
						<li>YouTube</li>
					</ul>
				</div>
			</div>
			<hr>
			<p class="copyright">Copyright 2020 - Tech Builders</p>
		</div>
	</div>
	<script src="js/main.js"></script>
	<script src="js/account.js"></script>
  </body>
</html>