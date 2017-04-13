<?php

define('DB_HOST', 'localhost');
define('DB_NAME', 'parks_db');
define('DB_USER', 'parks_user');
define('DB_PASS', 'parks_user');

require 'db_connect.php';

$dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . PHP_EOL;

$dropTable = "DROP TABLE IF EXISTS national_parks";
$dbc->exec($dropTable);

$createTable = "CREATE TABLE national_parks (
	id INT UNSIGNED NOT NULL AUTO_INCREMENT, 
	name VARCHAR(200) NOT NULL,
	location VARCHAR(200),
	date_established DATE,
	area_in_acres DOUBLE,
	PRIMARY KEY(id),
	UNIQUE (name)
	)";

$dbc->exec($createTable);



?>