(function(){
    "use strict";

//	TODO: Create an array of 4 people's names using
//	literal array notation, in a variable called 'names'.
		var names = ['Keri' , 'Mary', 'Larry', 'Jerry'];
    	
//	TODO: Create a log statement that will log the
//	number of elements in the names array.
//		console.log(names.length);

//	TODO: Modify the code that logs the names array elements
//	individually to instead use a for loop.

		for (var i = 0; i < names.length; i++) {
			console.log('The name at index ' + i + ' is: ' + names[i]);
		}
//	TODO: Below the for loop, use a forEach loop to print the names again.
		names.forEach(function (element, index, array) {
			console.log('The name at index ' + index + ' is: ' + element);
		});

//	TODO: Create log statements that will print
//	each of the names array elements individually.
//		console.log('The first name is: ' + names[0]);
// 		console.log('The second name is: ' + names[1]);
//		console.log('The third name is ' + names[2]);
//		console.log('The fourth name is ' + names[3]);
	})();