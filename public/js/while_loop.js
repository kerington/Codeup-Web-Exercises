// 'use strict';

// var i = 2;

// while (i <= 32768) {
// 	i = i * 2;
// 	/*OR i *=2*/
// 	console.log(i);
// }


'use strict';

// This is how you get a random number between 50 and 100
var coneInventory = Math.floor(Math.random() * 50) + 50;


do {
	var conesToSell = Math.floor(Math.random() * 5) + 1;
	 // if we have that many left, subtract it from our inventory
	if(conesToSell <= coneInventory) {
		console.log('Sold' + conesToSell + ' cones...')
		coneInventory = coneInventory - conesToSell;
	} else {
		console.log('I don\'t have enough!')
	}
while (coneInventory =0)
	}





// WALMART CHECKOUT

var luckyNumber = Math.floor(Math.random() * 6),
	receipt = 60,
	total = null;

console.log("Your lucky number is: " + luckyNumber);

switch (luckyNumber) {
	case 0:
		total = receipt;
		break;
	case 1:
		total = receipt - (receipt * .1);
		break;
	case 2:
		total = receipt - (receipt * .25);
		break;
	case 3:
		total = receipt - (receipt * .35);
		break;
	case 4:
		total = receipt - (receipt * .5);
		break;
	case 5:
		total = 0;
		break;
	default:
		console.log("Something went wrong.")
}
console.log("Your price is $" + total.toFixed(2));



    
/*} while (i < 10);



// This is how you get a random number between 1 and 5
*/