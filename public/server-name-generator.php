<?php

$adj = array("Different", "Basic", "Famous", "Difficult", "Useful", "Emotional", "Funny", "Strong", "Interesting", "Happy", "Nice", "Wonderful");
$randomAdj = array_rand($adj,1);

//=============================

$noun = array("Queens", "Beyonce", "Cats", "Worlds", "Cupcakes", "Nature", "Ryan Gosling", "Blueberries", "Crayons", "Tacos", "Baby Goats", "Braids");

$randomNoun = array_rand($noun,1);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Server Name Generator</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

        <!-- Bootstrap Core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    	<!-- Custom Stylesheet -->
    <link rel="stylesheet" type="text/css" href="css/server-name-generator.css">

    	<!-- ** UPDATE WITH GOOGLE FONT USED ** -->
   <link href="https://fonts.googleapis.com/css?family=Lobster+Two|Poiret+One" rel="stylesheet">

</head>
<body>
	<h1>Server Name Generator:</h1>

	<p>
	<?= "'" . $adj[$randomAdj] . " ";?>
	<?= $noun[$randomNoun] . "'" . PHP_EOL;?>
	</p>

    <!-- ** THIS ALWAYS GOES AT THE END OF THE BODY! ** -->
        <!-- jQuery Version 2.2.4 -->
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

        <!-- Custom JavaScript -->
    <!-- <script type="text/javascript" src="JAVASCRIPTLOCATION"></script> -->
</body>
</html>