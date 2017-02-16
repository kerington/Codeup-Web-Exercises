"use strict";

// TODO: Ask the user for their name.
//       Keep asking if an empty input is provided.
	do{
		name = prompt ('What is your name?');
		name = name.trim();
	// } while (!name);
	} while (name == "" || name == "null");

	

// TODO: Show an alert message that welcomes the user based on their input.

alert('Welcome, ' + name + '! :)');

// TODO: Ask the user if they like pizza.
//       Based on their answer show a creative alert message.

var answer = confirm ('Do you like pizza?');
if (answer) {
	alert ("Woo Hoo! Me too! :D");
} else {
	alert ("Boooooo! :'(");
}