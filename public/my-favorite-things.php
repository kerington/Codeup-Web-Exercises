<?php

$faveThings = array("Raindrops On Roses", "And Whiskers On Kittens.", "Bright Copper Kettles", "And Warm Woolen Mittens", "Brown Paper Packages Tied Up With Strings", "These are a few of my faaaavorite things.");

?>

<!DOCTYPE html>
<html>
<head>
    <title>My Favorite Things</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

        <!-- Bootstrap Core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

      <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="css/my-favorite-things.css">

      <!-- ** UPDATE WITH GOOGLE FONT USED ** -->
   <link href="https://fonts.googleapis.com/css?family=Dosis|Nova+Oval" rel="stylesheet">

</head>
<body>

<main>
	
	
	<table class="table-hover">
		<tr>
			<th id = heading>Favorite Things</th>
		</tr>
			<?php foreach ($faveThings as $key => $value) { ?>
				<tr>
					<td><?= $value ?></td>
				</tr>
			<?php } ?>
	</table>



</main>

    <!-- ** THIS ALWAYS GOES AT THE END OF THE BODY! ** -->
        <!-- jQuery Version 2.2.4 -->
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

        <!-- Custom JavaScript -->
    <script type="text/javascript" src="JAVASCRIPTLOCATION"></script>
</body>
</html>



<!-- <?php
// foreach ($faveThings as $key => $value) {
// echo "<tr> <td>" . $value . "</td> </tr>" . PHP_EOL;}
?> -->