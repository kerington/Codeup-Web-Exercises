inputHas($key): returns true or false based on whether the key is available.
inputGet($key): returns the value specified by the key, or null if the key is not set.
escape($input): returns the input as a safely escaped string.
Now, go back to the ping/pong and user login lessons from PHP with HTML and require the functions file you created. Use the input wrapper functions you created in place of accessing $_GET or $_POST directly. Also, use the escape function anywhere you need to echo user input.

Create a small templated web site.

Create a header, navbar, and footer all as separate PHP files. Add some HTML content to them as appropriate for each one.
Create an index.php file that includes all the other templates. Try viewing the index and see if it appears as you expected. Make sure you also view the page source to make sure that things come out just right.