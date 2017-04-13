<?php

require 'db_connect.php';

$dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . PHP_EOL;

$nationalParksInformation = [
	[
		'name' => 'Great Smoky Mountains',
		'location' => 'North Carolina',
		'date_established' => '1934-06-15',
		'area_in_acres' => 522427
	],
	[
		'name' => 'Grand Canyon',
		'location' => 'Arizona',
		'date_established' => '1919-02-26',
		'area_in_acres' => 1217262
	],
	[
		'name' => 'Yosemite',
		'location' => 'California',
		'date_established' => '1890-10-01',
		'area_in_acres' => 761266
	],
	[
		'name' => 'Rocky Mountains',
		'location' => 'Colorado',
		'date_established' => '1915-01-26',
		'area_in_acres' => 265769
	],
	[
		'name' => 'Zion',
		'location' => 'Utah',
		'date_established' => '1919-11-19',
		'area_in_acres' => 146597
	],
	[
		'name' => 'Yellowstone',
		'location' => 'Wyoming',
		'date_established' => '1872-03-01',
		'area_in_acres' => 2219789
	],
	[
		'name' => 'Olympic',
		'location' => 'Washington',
		'date_established' => '1938-06-29',
		'area_in_acres' => 922000
	],
	[
		'name' => 'Acadia',
		'location' => 'Maine',
		'date_established' => '1916-07-08',
		'area_in_acres' => 49052
	],
	[
		'name' => 'Grand Teton',
		'location' => 'Wyoming',
		'date_established' => '1929-02-26',
		'area_in_acres' => 310000
	],
	[
		'name' => 'Glacier',
		'location' => 'Montana',
		'date_established' => '1910-05-11',
		'area_in_acres' => 1000000
	]

];

foreach ($nationalParksInformation as $park)
{
	$query = "INSERT INTO national_parks (name, location, date_established, area_in_acres) VALUES ('{$park['name']}' ,'{$park['location']}' ,'{$park['date_established']}' ,'{$park['area_in_acres']}');";
	$dbc->exec($query);
}

//foreach through this array

?>