(function(){
    "use strict";

    // TODO: Create person object
    // TODO: Create firstName and lastName properties in your person object; assign your name to them
	// TODO: Add a sayHello method to the person object that
    //       alerts a greeting using the firstName and lastName properties
	var person = {};

    person.firstName = "Keri";
    person.lastName = "Chesire";

	person.sayHello = function () {
		alert('Hello ' + this.firstName + ' ' + this.lastName + '!')
	};

	//  (firstName + lastName) {
	// 	alert('Hello ' + name + '!');
	// }
    // Say hello from the person object.
	
	person.sayHello();
})();
