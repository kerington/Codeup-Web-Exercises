'use strict';

		// FOR BOX LEFT
	var listener = function (event) {
		console.log(event.target.innerText);
		leftInput.innerText = event.target.innerText;
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



	// FOR BOX MID
	var listener = function (event) {
		console.log(event.target.innerText);
		middleInput.innerText = event.target.innerText;
	}

		document.getElementById('boxAdd').addEventListener('click', listener);
		document.getElementById('boxSubt').addEventListener('click', listener);
		document.getElementById('boxMult').addEventListener('click', listener);
		document.getElementById('boxDiv').addEventListener('click', listener);
		document.getElementById('boxPrc').addEventListener('click', listener);
		document.getElementById('boxPlMi').addEventListener('click', listener);



	// FOR BOX RIGHT IF/ELSE BOOLEAN CHECK!!!**
	var listener = function (event) {
		console.log(event.target.innerText);
		rightInput.innerText = event.target.innerText;
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

	// TO CLEAR 


		var leftInput = document.getElementById('boxLeft');
		var middleInput = document.getElementById('boxMid');
		var rightInput = document.getElementById('boxRight');



		

// clear sets every display to empty screen















	//How to APPEND text!?????