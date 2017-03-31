<?php
session_start();
// var_dump($_SESSION);
require_once "indexphp.php";

if(!isset($_SESSION['logged_in_user'])){
    header("Location: http://codeup.dev/login.php");
}

?>

<!DOCTYPE html>
<html>
<head>
	<link rel= "stylesheet" type="text/css" href="/css/loginphp.css">
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Palanquin+Dark" rel="stylesheet">
	
	<title>Authorized</title>
</head>
<body>
	<h1>Welcome!</h1>
	<img src="/img/happysloth.jpg"><br><br>
	<a href="/logout.php"><button class="btn btn-info btn-block login" type="submit" href="/logout.php">LOG OUT</button></a>
</body>
</html>

<!--DONE--> <!-- Open the login.php page. If the correct username and password are sent, assign a session key called logged_in_user to the username of the logged in user. -->

<!--DONE--> <!-- Add a check to the login.php page to see if the user is logged in by checking the logged_in_user key. If they are, redirect to the authorized.php page instead of showing the login page. -->

<!--DONE--> <!-- Add a check to the authorized.php page to redirect to the login.php page if a user is not logged in.

*** NEED TO DO!! If they are, display their username after the authorized message. -->

<!--DONE--> <!-- Add a logout.php file. Use the clearSession() function from the examples in this lesson to perform a logout when that page is accessed and then redirect the user to the login page. -->

<!--DONE--> <!-- Add a link to the authorized.php page that goes to logout.php. -->

<!--DONE--> <!-- Test logging in, logging out, and accessing the authorized page without being logged in to make sure everything works as expected. -->
