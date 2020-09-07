<?php
	
?>

<!doctype html>
<html lang="en">
  <head>
	 <meta charset="utf-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	 <title>Admin - RedStore</title>
	 <link rel="stylesheet" href="css/style.css">
	 <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;500;600;700&display=swap" rel="stylesheet">
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
		<div class="header">
			<div class="container">
				<div class="navbar">
					<div class="logo">
						<a href="index.php"><img src="images/logo.png" width="125px"></a>
					</div>
					<img src="images/menu.png" class="menu-icon" onclick="menutoggle()">
					<h1>Welcome Admin</h1>
				</div>
			</div>
		</div>
			<div class="row">
				<div class="col-1">
					<nav>
						<ul id="MenuItems">
							<li><a href="categories.php">Categories Master</a> <i class="fa fa-angle-right"></i></li>
							<li><a href="product.php">Products Master</a> <i class="fa fa-angle-right"></i></li>
							<li><a href="#">Order Master</a> <i class="fa fa-angle-right"></i></li>
							<li><a href="#">User Master</a> <i class="fa fa-angle-right"></i></li>
							<li><a href="#">Contact Us</a> <i class="fa fa-angle-right"></i></li>
							<li><a href="logout.php">Logout</a> <i class="fa fa-angle-right"></i></li>
						</ul>
					</nav>
				</div>
				<div class="col-7">
					<div class="cart-page">
						<table>
							
								<tr>
									<th>#</th>
									<th>ID</th>
									<th>Categories</th>
									<th>Status</th>
								</tr>
								<tr>
									<td>1</td>
									<td><img src="images/buy-1.jpg"></td>
									<td>#5469</td>
									<td>Louis Stanley</td>
								</tr>
							
						</table>
					</div>
				</div>
			</div>
			<div class="footer">
				<p class="copyright">Copyright <?php echo date('Y')?> - Tech Builders</p>
			</div>
			<script src="js/main.js"></script>
	</body>
</html>