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