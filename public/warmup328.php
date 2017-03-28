<?php

$testArray = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i'];
function removeVowels($array) {
	$newArray = [];

	$vowels = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
	foreach ($array as $letter) {
	    if (!is_numeric(array_search($letter, $vowels))) {
	    	$newArray[] = $letter;
	    }
	    return $newArray;
	    }
	}