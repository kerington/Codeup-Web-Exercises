<?php

//Write a function to take in array of letters and output in alphabetical order. 
// NO PHP SORT FUNCTIONS ALLOWED
// Duplicated letters, invalid characters, and upper case letters do not have to be accounted for.
// Use the following to test your function:


//FIRST TRY
// function sortIt($array) {
// 	$testArray = ['e', 'a', 'g', 'c', 'i', 'd', 'f', 'b', 'h'];

// 	foreach (range('a', 'i') as $letter) {
// 		echo $letter .PHP_EOL;
// 	}
// }

//SECOND TRY
// $testArray = ['e', 'a', 'g', 'c', 'i', 'd', 'f', 'b', 'h'];

// function sortIt($array) {
// 	$newArray = [];
// 	$alphabet = range('a', 'k');

// 	foreach (range('a', 'i') as $letter){
// 		if ($testArray) {
// 			# code...
// 		}
// 		array_push($newArray, $letter);
// 	}	
// 		return $newArray;
// }	

// $output = sortIt($testArray);
// print_r($output);

//THIRD TRY

$testArray = ['e', 'a', 'g', 'c', 'i', 'd', 'f', 'b', 'h'];

function sortIt ($array)
{
	$newArray = [];
	$alphabet = range('a', 'z');
	
	foreach ($alphabet as $letter) {
		$number = array_search($letter, $array);

		if (is_numeric($number) == true) {
			$newArray[] = $array[$number];
		}
	}

return $newArray;
}

$output = sortIt($testArray);
print_r($output);
