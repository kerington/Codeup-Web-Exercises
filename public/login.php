<?php

var_dump($_POST);

//if(!empty($_GET) || !empty($_POST)) 
//THE ABOVE IS SAME AS THE BELOW
if(isset($_POST['username']) && isset($_POST['password'])) {
	if (($_POST['username'] == 'guest') && ($_POST ['password'] == 'password')){ header('location: http://codeup.dev/authorized.php'); 
	} else {
		print("<h1>ACCESS DENIED</h1><h2><i>Please try again.</i></h2>");
	}
} else {
	print("<h1>CIA LOGIN:</h1>");
}

// $username = isset($_POST['username']) ? $_POST['username'] : "Guest";

//if $username == 'admin' && $password = "password"
//redirect users to authorized.php
?>
<!DOCTYPE html>
<html>
<head>
	<link href="https://fonts.googleapis.com/css?family=Raleway|Space+Mono" rel="stylesheet">
	<style type="text/css">
		body {
			text-align: center;
			background-color: black;
			color: white;
			font-family: 'Raleway', sans-serif;

		}
		h1 {
			color:red;
			font-family: 'Space Mono', monospace;
			font-size: 3em;
		}
	</style>
	<title>Login</title>
</head>
<body>

	<form action="login.php" method="POST">
		<p>
			<label for="username">Username:</label>
			<input type="text" name="username" id="username" placeholder="Enter Username Here" required>
		</p>

		<p>
			<label for="password">Password:</label>
			<input type="password" name="password" id="password" placeholder="Enter Password Here" required autofocus>
		</p>

		<button type="submit">Login</button> 
</body>
</html>
