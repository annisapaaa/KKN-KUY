<?php 
session_start();

include('function.php'); ?>

<?php

if( isset($_POST["login"]) ) {

	$username = $_POST["username"];
	$password = $_POST["password"];

	$result = mysqli_query($koneksi, "SELECT * FROM daftar WHERE username = '$username'");

	//cek username
	if(mysqli_num_rows($result) === 1) {

		//cek password
		$row = mysqli_fetch_assoc($result);
		if(password_verify($password, $row["password"])) {
			//set session
			$_SESSION["login"] = true;

			header("Location: indexasli.php");
			exit;
		}

	}

	$error = true;

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Kodinger">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Halaman Login - KKN KUY</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/my-login.css">
	<style>
		html,body {
			height: 100%;
		}

		body.my-login-page {
			background-color: #f7f9fb;
			font-size: 14px;
		}

		body {
			background-image: url("assets/images/slider2.jpg");
			background-repeat: no-repeat;
			background-size: cover;
		}

		.my-login-page .brand {
			width: 90px;
			height: 90px;
			overflow: hidden;
			border-radius: 50%;
			margin: 40px auto;
			box-shadow: 0 4px 8px rgba(0,0,0,.05);
			position: relative;
			z-index: 1;
		}

		.my-login-page .brand img {
			width: 100%;
		}

		.my-login-page .card-wrapper {
			width: 400px;
		}

		.my-login-page .card {
			border-color: transparent;
			box-shadow: 0 4px 8px rgba(0,0,0,.05);
		}

		.my-login-page .card.fat {
			padding: 10px;
		}

		.my-login-page .card .card-title {
			margin-bottom: 30px;
		}

		.my-login-page .form-control {
			border-width: 2.3px;
		}

		.my-login-page .form-group label {
			width: 100%;
		}

		.my-login-page .btn.btn-block {
			padding: 12px 10px;
		}

		.my-login-page .footer {
			margin: 40px 0;
			color: #888;
			text-align: center;
		}

		.card-wrapper {
			margin-top: 125px;
		}

		@media screen and (max-width: 425px) {
			.my-login-page .card-wrapper {
				width: 90%;
				margin: 0 auto;
			}
		}

		@media screen and (max-width: 320px) {
			.my-login-page .card.fat {
				padding: 0;
			}

			.my-login-page .card.fat .card-body {
				padding: 15px;
			}
		}
	</style>
</head>

<body class="my-login-page">
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-md-center h-100">
				<div class="card-wrapper">
					<div class="card fat">
						<div class="card-body">
							<h4 class="card-title">Login</h4>

							<?php if(isset($error)) : ?>
								<p style="color: red; font-style: italic">Username atau password salah!</p>
							<?php endif; ?>

							<form action="" method="POST" class="my-login-validation" novalidate="">
								<div class="form-group">
									<label for="username">Username</label>
									<input id="username" type="text" class="form-control" name="username" value="" required>
								</div>

								<div class="form-group">
									<label for="password">Password</label>
									<input id="password" type="password" class="form-control" name="password" required>
								</div>

								<div class="form-group m-0">
									<button type="submit" class="btn btn-primary btn-block" name="login">
										Login
									</button>
								</div>
								<div class="mt-4 text-center">
									Don't have an account? <a href="registrasiasli.php">Register</a>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="js/my-login.js"></script>
</body>
</html>