<?php
	include_once('config.php');
	include_once('functions.php');
	$msg="";
	if(isset($_POST['submit']))
	{
		$username = get_safe_value($conn,$_POST['username']);
		$password = get_safe_value($conn,$_POST['password']);
		$select = mysqli_query($conn,"SELECT * FROM `admin_users` WHERE `username` = '$username' AND `password` = '$password'");
		$count = mysqli_num_rows($select);
		if($count > 0)
		{
			$_SESSION['Admin_Username'] = true;
			$_SESSION['Admin_Username'] = $username;
			header('location:categories.php');
			die();
		}else
		{
			$msg =  "Please enter correct login details";
		}
	}
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
	<div class="account-page">
		<div class="container">
			<div class="row">
				<div class="col-2">
					<img src="images/logo.png" width="100%">
				</div>
				<div class="col-2">
					<div class="form-container">
						<div class="form-btn">
							<span onclick="login()">Login</span>
							<hr id="Indicator">
						</div>
						<form method = "POST">
							<input type="text" name="username" placeholder="Username" required>
							<input type="password" name="password" placeholder="Password" required>
							<button type="submit" name="submit" class="btn">Login</button>
							<div class="field-error"><?php echo $msg; ?></div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
  </body>
</html>