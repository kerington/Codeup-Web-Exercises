<?php

require_once 'loginNavBar.html';
require_once 'header.php';

?>

<!DOCTYPE html>
<html>
<head>

	<style>html,
	body {
	   margin:0;
	   padding:0;
	   height:100%;
	}
	#container {
	   min-height:100%;
	   position:relative;
	}
	#header {
	   background:#ff0;
	   padding:10px;
	}
	#body {
	   padding:10px;
	   padding-bottom:60px;   /* Height of the footer */
	}
	#footer {
	   position:absolute;
	   bottom:0;
	   width:100%;
	   height:60px;   /* Height of the footer */
	   background:#272B30;
	}

	<div id="container">
	   <div id="header"></div>
	   <div id="body"></div>
	   <div id="footer"></div>
	</div>

	</style>
	
	<title></title>
</head>
<body>

</body>
</html>

	<?php require 'footer.php'; ?>
