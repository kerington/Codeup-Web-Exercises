// /*--*/
// /*NUMBERS OUTPUT*/

// for (var i = 1; i <= 1; i++) {
//     console.log('1');
// }
// for (var i = 1; i <= 2; i++) {
//     console.log('2');
// }
// for (var i = 1; i <= 3; i++) {
//     console.log('3');
// }
// for (var i = 1; i <= 4; i++) {
//     console.log('4');
// }
// for (var i = 1; i <= 5; i++) {
//     console.log('5');
// }
// for (var i = 1; i <= 6; i++) {
//     console.log('6');
// }
// for (var i = 1; i <= 7; i++) {
//     console.log('7');
// }
// for (var i = 1; i <= 8; i++) {
//     console.log('8');
// }
// for (var i = 1; i <= 9; i++) {
//     console.log('9');
// }
// for (var i = 1; i <= 10; i++) {
//     console.log('0');
// }

/*---OR---*/

var numberOutput = 1;
for (var i = 1; i <= 10; i++) {
	numberOutput = (i % 10);
	for (var j = 1; j < i; j++) {
			numberOutput += String((i % 10));
	}
	console.log(numberOutput);
}


// /*--*/
//  /*RANDOM MULTIPLICATION TABLE*/

// var num = Math.floor(Math.random()* 10 + 1);
// //use same logic from warmup 215 (math.random)
 
// var num = parseInt(num); //parse the num to number
// var i = 0;
 
// for(i = 1; i <= 10; i++) {
//     console.log(num + " x " + i + " = " + num * i );
// }



// /*--*/
// /*RANDOM EVEN OR ODD*/

// var oddOrEven = 0;

// for (var i = 0; i < 10; i++) {

// 	 oddOrEven = Math.floor((Math.random()) * (200 - 20)) +20;
		
// 		if (oddOrEven %2 == 0) {
// 			console.log(oddOrEven + " is even!"); 
// 		}
// 		else {
// 			console.log(oddOrEven + " is odd!");
// 		}
// 	}



// /*--*/
// /*-5 FOR LOOP*/

// for (i = 100; i > 0; i-=5) {
//     console.log(i);
// }



