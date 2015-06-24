<?php
session_start();

if (!empty($_POST["submit"])) {
	if ($_POST["user_name"] == "admin" && $_POST["password"] == "login") {
		$_SESSION["login"] = FALSE;
		$_SESSION["user"] = $_POST["user_name"];
		header("Location: /summary/");
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Portfolio - Niek van den Brink | LOGIN</title>
	<link rel="stylesheet" type="text/css" href="css/materialize.css">
	<link rel="stylesheet" type="text/css" href="css/materialize.min.css">

	 <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
</head>
<body class="valign-wrapper blue-grey lighten-4">
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="js/materialize.js"></script>
	<script type="text/javascript" src="js/materialize.min.js"></script>

	<div class="container">
		<div class="row col s12">
			<div class="card blue-grey darken-1 col s8 m8 l6 offset-s2 offset-m2 offset-l3 z-depth-4">
				<i class="large mdi-action-account-circle left teal-text text-accent-4"></i>
				<h1 class="header teal-text text-accent-4 hide-on-small-only">Login</h1>
				<form method="POST" autocomplete="off">
					<div class="row">
						<div class="input-field col s10 offset-s1">
							<input id="user_name" name="user_name" type="text" class="white-text" autocomplete="false">
							<label for="user_name" class="grey-text text-lighten-3">User Name</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s10 offset-s1">
							<input id="password" name="password" type="password" class="white-text" autocomplete="false">
							<label for="password" class="grey-text text-lighten-3">Password</label>
						</div>
					</div>
					<div class="row">
						<div class="col right">
							<button class="btn waves-effect waves-light" type="submit" name="submit" value="submit">Submit
    							<i class="mdi-content-send right"></i>
  							</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>