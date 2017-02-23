'use strict';

var leftInput = document.getElementById('boxLeft');
var rightInput = document.getElementById('boxRight');
var middleInput = document.getElementById('boxMid');
    

        // FOR BOX LEFT
var band;
band.shred = function() {
    console.log('RAAAAAAAAAA!!!!');
}


    var listener = function (event){

        if (middleInput.innerText === ""){
            if (event.target.innerText == "."){
                if (leftInput.innerText.indexOf(".") == -1) {
                    leftInput.innerText = leftInput.innerText + event.target.innerText;
                }
            }else {
                leftInput.innerText = leftInput.innerText + event.target.innerText; 
            }
        } else {
            if (event.target.innerText == "."){
                if (rightInput.innerText.indexOf(".") == -1) {
                    rightInput.innerText = rightInput.innerText + event.target.innerText;
                }
            }else {
                rightInput.innerText = rightInput.innerText + event.target.innerText; 
            }
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


        //ONLY 1 DECIMAL ALLOWED


       //  var decimal = function(event){

       //  if (leftInput.innerText.indexOf(".") == -1){
       //      leftInput.innerText += ".";
       //  }
       // }
      

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
            //  total = parseInt(leftInput.innerText) *(-1) parseInt(rightInput.innerText);
            // break;
        }
        leftInput.innerText = total;
        middleInput.innerText = "";
        rightInput.innerText = "";
    }

    document.onkeypress = function(event) {

        var key_press = String.fromCharCode(event.keyCode);
        var key_code = event.keyCode;
        var input = document.querySelector('.screen');
        var inputVal = leftInput.innerHTML;
        var btnVal = this.innerHTML;
        var lastChar = inputVal[inputVal.length - 1];
        var equation = inputVal;
        
        console.log(event.keyCode);

            //!isNaN = is not NOT a number (SO, it IS a number!)
            if(!isNaN(key_press)) {
                if (middleInput.innerText === ""){
                    leftInput.innerHTML += key_press;
                } else {
                    rightInput.innerHTML += key_press;
                }
          }          
            if(key_press == "+" || event.keyCode == 43) {
                middleInput.innerHTML = key_press;
          }
            if(key_press == "-" || event.keyCode == 45) {
                middleInput.innerHTML = key_press;
          }
            if(key_press == "*" || event.keyCode == 42) {
                middleInput.innerHTML = key_press;
          }
            if(key_press == "/" || event.keyCode == 63) {
                middleInput.innerHTML = key_press;
          }
            if(key_press == "." || event.keyCode == 46) {
                  if (middleInput.innerText === ""){
                        if (leftInput.innerText.indexOf(".") == -1){

                            leftInput.innerHTML += key_press;
                        }
                } else {
                        if (rightInput.innerText.indexOf(".") == -1){

                            rightInput.innerHTML += key_press;
                        }
                }
          }
            if(key_press == "%" || event.keyCode == 37) {
                middleInput.innerHTML = key_press;
          }
            if(key_press == "=" || event.keyCode == 13) {
                equals()
          }
            if(key_press == "c" || event.keyCode == 8) {
                clearAll();
          }
    console.log(event.keyCode);
    }




console.log(10 % 3);



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


