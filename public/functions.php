<?php

function (inputHas($key)) {
	if(inputHas("count")) {

	}
}

fucntion (inputGet($key))

function (escape($input))

?>

Now, go back to the ping/pong and user login lessons from PHP with HTML and require the functions file you created. Use the input wrapper functions you created in place of accessing $_GET or $_POST directly. Also, use the escape function anywhere you need to echo user input. **(strip_tags!!)

Create a small templated web site.

Create a header, navbar, and footer all as separate PHP files. Add some HTML content to them as appropriate for each one.
Create an index.php file that includes all the other templates. Try viewing the index and see if it appears as you expected. Make sure you also view the page source to make sure that things come out just right.