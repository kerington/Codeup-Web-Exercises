'use strict';

var num = Math.floor((Math.random()*50)+1);
	console.log('Random number to skip is ' + num);

	for (var i = 1; i <= 50; i++) {

	    if (i % 2 == 0) {
	        continue;
	    }

	    if (num === i) {
	    	console.log('Yikes! Skipping number ' + i);
	    } else {
	    console.log('Here is an odd number: ' + i);
	}

	if (i >50) {
		break;
	}

	    // console.log('Random odd number to skip is:' + i)
		// 	break;
		// console.log('meow');
	}



