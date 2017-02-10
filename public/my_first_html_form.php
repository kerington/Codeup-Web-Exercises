<?php 
	var_dump($_GET);
	var_dump($_POST);
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Form Practice</title>
	</head>
	<body>
		<h1><a href="https://en.wikipedia.org/wiki/No_Doubt_discography" target="_blank">	NO DOUBT DISCOG</a></h1>
	
		<h2>Examples of links using query strings</h2>
		<ul>
			<li><a href="?page=2">Page 2</a></li>
			<li><a href="?page=2&limit=10">Page 2, Limit to 10 results at a time</a>
			<li><a href="?zipcode=78205&property_type=condo">Condos in 78205</a></li>
			<li><a href="http://caniuse.com/?feat=input-placeholder#feat=<input-placeholder>	</input-placeholder>">Can I use placeholders instead of labels?</a></li>
		</ul>
	
	
	
		<h1>Search For Videos Now:</h1>   
		<form action="https://youtube.com/results" method="GET">
			<p>
				<label for="search_query">Search</label>
				<input type="text" name="search_query" id="search_query">
			</p>
			<button type="submit">Find videos</button>
			
		</form>
	</body>
</html>