function isBlank(inputField) {
    if (inputField.type === "checkbox") {
	if(inputField.checked)
	    return false;
	return true;
    }
    if (inputField.value === "" ) {
	return true;
    }
    return false;
}

function makeRed(inputDiv) {
   	inputDiv.style.backgroundColor = rgb(170, 0, 0);
	inputDiv.parentNode.style.backgroundColor = rgb(170, 0, 0);
	inputDiv.parentNode.style.color = rgb(255, 255, 255);
}
function makeClean(inputDiv){
	inputDiv.parentNode.style.backgroundColor = rgb(255, 255, 255);
	inputDiv.parentNode.style.color = rgb(0, 0, 0);		
}

window.onload = function() {
    var mainForm = document.getElementById("mainForm");
    var requiredInputs = document.querySelectorAll(".required");
    for (var i=0; i < requiredInputs.length; i++){
	requiredInputs[i].onfocus = function(){
	    this.style.backgroundColor = rgb(238, 238, 0);
	}
    }
    mainForm.onsubmit = function(e){
	var requiredInputs = document.querySelectorAll(".required");
	for (var i=0; i < requiredInputs.length; i++){
	    if( isBlank(requiredInputs[i]) ){
		e.preventDefault();
		makeRed(requiredInputs[i]);
	    }
	    else{
		makeClean(requiredInputs[i]);
	    }
	}
    }
}