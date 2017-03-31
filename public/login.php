<?php

// require_once "input.php"
session_start();

require_once "indexphp.php";

// var_dump($_POST);

$sessionId = session_id();
// $viewCount = isset($_SESSION['view_count']) ? $_SESSION['view_count'] : 0;
// $loggedIn = isset($_SESSION['logged_in']) ? $_SESSION['logged_in'] : 0;

// $viewCount++;
// $_SESSION['view_count'] = $viewCount;


//if(!empty($_GET) || !empty($_POST))
//THE ABOVE IS SAME AS THE BELOW
if (isset($_POST['username']) && isset($_POST['password'])) {
	if ($_POST['username'] == 'guest' && $_POST ['password'] == 'password') {
		$_SESSION['logged_in_user'] = htmlspecialchars(strip_tags($_POST['username']) && ($_POST['password']));
		if (isset($_SESSION['logged_in_user'])) {
			header('location: /authorized.php');
		}
	} else {
		print ("<h1>ACCESS DENIED</h1><h2><em>Please try again.</em></h2>");
	} 
	} else {
		print "<h1>LOG IN</h1>";
}
// else {
// 		print ("<h1>LOG IN</h1>");
// }
// else {
// 	print("<h1>Login, man:</h1>");
// }

// $username = isset($_POST['username']) ? $_POST['username'] : "Guest";

//if $username == 'admin' && $password = "password"
//redirect users to authorized.php
?>
<!DOCTYPE html>
<html>
<head>
	<link rel= "stylesheet" type="text/css" href="/css/loginphp.css">
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Palanquin+Dark" rel="stylesheet">
	<title>Login</title>
</head>
<body>

<div class="container">
	<div class="login-container">
		<div id="output"></div>
		<div class="avatar"></div>
		<div class="form-box">
			<form action="login.php" method="POST">
		<p>
			<label for="username">Username:</label>
			<input type="text" name="username" id="username" placeholder="username" required autofocus>
		</p>
		<p>
			<label for="password">Password:</label>
			<input type="password" name="password" id="password" placeholder="password" required>
		</p>

		<button class="btn btn-info btn-block login" type="submit">Let's Go!</button>
      </form>
    </div>
	</div>
</div>
</body>
</html>


<!--DONE--> <!-- Open the login.php page. If the correct username and password are sent, assign a session key called logged_in_user to the username of the logged in user. -->

<!--DONE--> <!-- Add a check to the login.php page to see if the user is logged in by checking the logged_in_user key. If they are, redirect to the authorized.php page instead of showing the login page. -->

<!--DONE--> <!-- Add a check to the authorized.php page to redirect to the login.php page if a user is not logged in.

*** NEED TO DO!! If they are, display their username after the authorized message. -->

<!--DONE--> <!-- Add a logout.php file. Use the clearSession() function from the examples in this lesson to perform a logout when that page is accessed and then redirect the user to the login page. -->

<!--DONE--> <!-- Add a link to the authorized.php page that goes to logout.php. -->

<!--DONE--> <!-- Test logging in, logging out, and accessing the authorized page without being logged in to make sure everything works as expected. -->
