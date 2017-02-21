'use strict';

var leftInput = document.getElementById('boxLeft');
var rightInput = document.getElementById('boxRight');
var middleInput = document.getElementById('boxMid');
		// FOR BOX LEFT
	var listener = function (event){

		if (middleInput.innerText === ""){
  			leftInput.innerText = leftInput.innerText + event.target.innerText;
  		} else {
  			rightInput.innerText = rightInput.innerText + event.target.innerText;
  		} 

		console.log(event.target.innerText);
	}
	//FOR BOX MIDDLE
	var operatorDisplay = function(event){
		if (leftInput.innerText !== "") {
			middleInput.innerText = event.target.innerText;
		}
	}

	//TO CLEAR ALL
	var clearAll = function(event){
		leftInput.innerText = "";
		middleInput.innerText = "";
		rightInput.innerText = "";
	}

	var total = function(event){

        switch(middleInput.innerText) {

			case '+' : 
				total = parseInt(leftInput.innerText) + parseInt(rightInput.innerText);
				console.log(leftInput.innerText);
				console.log(rightInput.innerText);
				console.log(total);
			break;

			case '-' : 
				total = parseInt(leftInput.innerText) - parseInt(rightInput.innerText);
				console.log(total);
			break;

			case '*' : 
				total = parseInt(leftInput.innerText) * parseInt(rightInput.innerText);
				console.log(total);
			break;

			case '/' : 
				total = parseInt(leftInput.innerText) / parseInt(rightInput.innerText);
				console.log(total);
			break;

			case 'boxNeg' : 
				total = parseInt(leftInput.innerText) *-"1" parseInt(rightInput.value);
			break;
		}
	}

		document.getElementById('box0').addEventListener('click', listener);
		document.getElementById('box1').addEventListener('click', listener);
		document.getElementById('box2').addEventListener('click', listener);
		document.getElementById('box3').addEventListener('click', listener);
		document.getElementById('box4').addEventListener('click', listener);
		document.getElementById('box5').addEventListener('click', listener);
		document.getElementById('box6').addEventListener('click', listener);
		document.getElementById('box7').addEventListener('click', listener);
		document.getElementById('box8').addEventListener('click', listener);
		document.getElementById('box9').addEventListener('click', listener);
		document.getElementById('boxDot').addEventListener('click', listener);


		document.getElementById('boxAdd').addEventListener('click', operatorDisplay);
		document.getElementById('boxSubt').addEventListener('click', operatorDisplay);
		document.getElementById('boxMult').addEventListener('click', operatorDisplay);
		document.getElementById('boxDiv').addEventListener('click', operatorDisplay);
		document.getElementById('boxNeg').addEventListener('click', operatorDisplay);


		document.getElementById('boxClr').addEventListener('click', clearAll);
		document.getElementById('boxEq').addEventListener('click', total);


	// TO CLEAR ????


	// ALLOWING INPUT TO LEFT AND RIGHT BOXES
	//NEEDS WORK!!!
		
		

		// var middleInput = document.getElementById('boxMid');
		



// clear sets every display to empty screen


	//How to APPEND text!?????