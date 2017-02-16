'use strict';

// 1. Write a function definition for a function named "log" that takes in a single variable and logs it to the JS console. 
// 2. Create a variable called "result" and assign it the value of the function call. 
// 3. What is the value and data type stored in the variable called "result"

function log(input) {
    console.log(input);
}
var result = log("something");
console.log(result);



// 1. Write a function called "identity" that takes in a single variable and returns it.
// 2. Create a variable called "result" and assign it the value of the function call. 
// 3. What is the value and data type stored in the variable called "result"

function identity(input) {
    console.log(result);
}

result = identity("something");
console.log(result);



// Write a function called getRandomIntBetween(min, max) that takes in a min and max parameter and returns a random int between those numbers.

function getRandomIntBetween(min,max) {
	return Math.floor(Math.random() * (max - min + 1) + min;
}
var random = getRandomIntBetween(2,10);
// console.log("The minimum number is " + min + " and the max is " + max);



//Write a function called isNumeric(input) that takes in the input and returns true/false if the input is a number or string containing a number.
/*HOW TO RETURN IF INPUT IS NUMBER OR STRING CONTAINING NUMBER*/
function isNumeric (input) {
	return !isNan(input);
}
	// if(!isNaN(input)){
	// 	return true;
	// } else {
	// 	return false;
	// }
	//var result = true/false



// Define the following basic math functions
// add(a, b)
// subtract(a, b)
// multiply(a, b)
// divide(a, b)
// Define a function called square(a), make sure it uses your multiply() function, not *
function add(a, b) {
	if(isNumeric(a) && isNumeric(b)) {
		return a + b;
	} else {
		return "Both inputs must be numbers or numeric strings";
	}
}

function subtract(a, b) {
	return a - b;
}

function multiply(a, b) {
	return a * b;
}

function divide(a, b) {
	return a / b;
}

function square(num) {
	return multiply(num,num);
}



// Define a function called square(a), make sure it uses your multiply() function, not

function sumOfSquares(a,b) {
	return a*a + b*b;
	return square(a) + square(b)
	return add(square(a), square (b));
	return add(multiply(a,a), multiply(b,b));
}
console.log(sumOfSquares(2,3));










