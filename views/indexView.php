<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Ensa Surveilllance</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/style.css">
	</head>

	<body>

		<div class="wrapper">
			<div class="inner">
				<div class="logoensa image-holder">
					<img src="images/registration-form-4.jpg" alt="ensas">
				</div>
				<form action="loginController.php" method="post">
					<h3>Sign Up</h3>
					<div class="form-holder active">
						<input type="text" placeholder="username" name="username" class="form-control">
					</div>
					<div class="form-holder">
						<input type="password" placeholder="Password" name="password" class="form-control" style="font-size: 15px;">
					</div>
					<div class="checkbox">
						<label>	
							<input type="checkbox" checked> I agree all statement in <a href="#">Terms & Conditions</a>
							<span class="checkmark"></span>
						</label>
					</div>
					<div class="form-login">
						<button>Login</button>
					</div>
				</form>
			</div>
		</div>

		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/main.js"></script>
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>