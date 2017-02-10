<?php 
    var_dump($_GET);
    var_dump($_POST);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Property Search</title>
</head>
<body>
    

    <h1>Property search below:</h1>
    <!-- Form's action is where the request goes -->
    <form action="form.php" method="GET">
        <p>
            <label for="zipcode">Zipcode</label>
            <input type="text" id="zipcode" name="zipcode">
        </p>
        <p>
            <label for="property_type">Property Type</label>
            <input type="text" id="property_type" name="property_type">
        </p>
        <p>
            <label for="min_price">Minimum Price</label>
            <input type="text" name="minimum_price" id="min_price">
        </p>
        <p>
            <label for="max_price">Maximum Price</label>
            <input type="text" name="maximum_price" id="max_price">
        </p>
        <button type="submit">Search now!</button>
    </form>
</body>
</html>