
	'use strict';


/*

MY GRADES
var grade1 = 65;

var message;

	if (grade1 <= 70) {
		message = "You need to practice more";
 	} else if (grade1 >= 80) { 
 		message = "You're awesome!";
 	} else { 
 		message = "You're awesome!";
 	}

 	console.log(message);
*/

--

/*

JUSTINS GRADES -**STUDY THIS**-

    var grade1 = 70,
        grade2 = 80,
        grade3 = 95,
        numberOfGrades = 3,
        gradeAverage = (grade1 + grade2 + grade3) / numberOfGrades;

    if (gradeAverage > 80) {
        console.log("You're awesome!");
    } else {
        console.log("You need to practice more.");
    }


    // GROCERY DISCOUNT

    var customer = null,
        cost = null,
        totalCost = null,
        discount = .35,
        discountMessage = "";

    var cameronTotal = 180,
        ryanTotal = 250,
        georgeTotal = 320;

    var cameron = "Cameron",
        ryan = "Ryan",
        george = "George";


    customer = cameron;
    cost = cameronTotal;

    if (cost > 200) {
        totalCost = cost - cost * discount;
        discountMessage = "Discount was applied.";
    } else {
        totalCost = cost;
        discountMessage = "No discount was applied.";
    }
    console.log(customer + " bought " + "$" + cost.toFixed(2) + ". " + discountMessage + " Final payment: $" + totalCost.toFixed(2));


    customer = ryan;
    cost = ryanTotal;

    if (cost > 200) {
        totalCost = cost - cost * discount;
        discountMessage = "Discount was applied.";
    } else {
        totalCost = cost;
        discountMessage = "No discount was applied.";
    }
    console.log(customer + " bought " + "$" + cost.toFixed(2) + ". " + discountMessage + " Final payment: $" + totalCost.toFixed(2));


    customer = george;
    cost = georgeTotal;

    if (cost > 200) {
        totalCost = cost - cost * discount;
        discountMessage = "Discount was applied.";
    } else {
        totalCost = cost;
        discountMessage = "No discount was applied.";
    }
    console.log(customer + " bought " + "$" + cost.toFixed(2) + ". " + discountMessage + " Final payment: $" + totalCost.toFixed(2));


    // COIN FLIP

    var flipACoin = Math.floor(Math.random()* 2);

    var outcome = (flipACoin) ? "Buy a car." : "Buy a house.";

    console.log(outcome);

*/

--


/*
MY GROCERIES
	var groceries1 = 320;

	var message;

if (groceries1 == 180) {
		message = "Cameron / Before Discount = $180.00 / After Discount = $180.00";
	} else if (groceries1 == 250) { 
		message = "Ryan / Before Discount = $250.00 / After Discount = $162.50";
	} else if (groceries1 == 320) { 
		message = "George / Before Discount = $320.00 / $208.00";
 	} else { 
 		message = "idk";
 	}

 	console.log(message);
*/

/*JUSTINS GRADES
var customer = null,
cost = null
totalCost = null
discount = .35
discountMessage = "";

~~~FIND THE REST ON SLACK~~~

*/

/*MY BUY HOUSE OR CAR*/
var flipACoin = Math.floor(Math.random()* 2);
var message = ""

if (flipACoin == 0) {
 message = "Buy A Car";
}
if (flipACoin == 1) {
 message = "Buy A House";
}
 
 console.log(message)

/*

JUSTINS UY HOUSE OR CAR

~~~FIND THE REST ON SLACK~~~

*/


// HEB has an offer for the clients that buy products amounting more than $200 A 35%
// discount should be applied to any amount over $200. Write a JS program, using
// conditionals, that logs to the browser, how much does Ryan, Cameron and George need
// to pay. We know that Cameron bought $180, Ryan $250 and George $320. Your program
// will have to display a line with the name of the person, the amount before the
// discount, if any, and the amount after the discount. 