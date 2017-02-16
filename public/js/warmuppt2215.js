// for (i = 100; i > 0; i-=5) {
//     console.log(i);
// }

//start a loop here
// go till here
//if number is divisible by 3
//if number is divisible by 5
//if number is divisible by both



for (var i = 1; i <= 100; i+=1) {



        if ( i % 3 == 0 && i % 5 !=0 ) {
            console.log("Fizz");
        } else if ( xi % 5 == 0 && i % 3 !=0) {
            console.log("Buzz");
        } else if ( i % 15 == 0) {
            console.log("FizzBuzz");
        } else {
        console.log(i);
    } }
