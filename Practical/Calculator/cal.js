var inputLabel = document.getElementById('inputLabel');
var inputLabel2 = document.getElementById('inputLabel2');
     
function pushBtn(obj) {
     
    var pushed = obj.innerHTML;
     
    if (pushed == '=') {
        // Calculate
        inputLabel2.innerHTML = eval(inputLabel.innerHTML);
    } else if (pushed == 'CE') {
        // Clear Answer
        inputLabel2.innerHTML = '0';
    }else if (pushed == 'C'){
        // All Clear
        inputLabel.innerHTML = '0';
        inputLabel2.innerHTML = '0';
    }
     else {
        if (inputLabel.innerHTML == '0') {
            inputLabel.innerHTML = pushed;  
        } else {
            inputLabel.innerHTML += pushed;   
        }
    }
}