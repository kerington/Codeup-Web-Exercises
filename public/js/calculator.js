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

		//TO CHANGE TO NEG NUMBER
	var switchSigns = function() {

		if (middleInput.innerText === ""){
  			leftInput.innerText *= -1;
  		} else {
  			rightInput.innerText *= -1;
  		} 
	}

		//TO GET A PERCENT
		var percent = function() {

		if (middleInput.innerText === ""){
  			leftInput.innerText /= 100;
  		} else {
  			rightInput.innerText /= 100;
  		} 
	}


		//FOR TOTAL
		var equals = function(event){
		var total;
        switch(middleInput.innerText) {

			case '+' : 
				total = parseFloat(leftInput.innerText) + parseFloat(rightInput.innerText);
				console.log(leftInput.innerText);
				console.log(rightInput.innerText);
				console.log(total);

			break;

			case '-' : 
				total = parseFloat(leftInput.innerText) - parseFloat(rightInput.innerText);
				console.log(leftInput.innerText);
				console.log(rightInput.innerText);
				console.log(total);
			break;

			case '*' : 
				total = parseFloat(leftInput.innerText) * parseFloat(rightInput.innerText);
				console.log(leftInput.innerText);
				console.log(rightInput.innerText);
				console.log(total);
			break;

			case '/' : 
				total = parseFloat(leftInput.innerText) / parseFloat(rightInput.innerText);
				console.log(leftInput.innerText);
				console.log(rightInput.innerText);
				console.log(total);
			break;

			// case '+/-' : 
			// 	total = parseInt(leftInput.innerText) *(-1) parseInt(rightInput.innerText);
			// break;
		}
		leftInput.innerText = total;
		middleInput.innerText = "";
		rightInput.innerText = "";
	}


		//ELEMENTS
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
		document.getElementById('boxNeg').addEventListener('click', switchSigns);

		document.getElementById('boxClr').addEventListener('click', clearAll);
		document.getElementById('boxEq').addEventListener('click', equals);
		document.getElementById('boxPerc').addEventListener('click',percent);
		