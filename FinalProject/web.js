// ------ Privacy/Disclaimer Statement ------- //
function myFunction() {
  alert("Rest asure your information will not be sold or misused");
}


// date  // 

var today = new Date();
var date = " Date: "+today.getDate() + " / " + (today.getMonth()+1) + " / " + today.getFullYear();

document.getElementById('date').innerHTML = date;


//  time  // 

function settime(){
var today = new Date();

var min = today.getMinutes();
var sec = today.getSeconds()
var hour = today.getHours()

if(min < 10){
	min = "0" + min;
}
if(sec < 10){
	sec = "0" + sec;
}

var ampm = "Am";
if(hour > 12){
	ampm = "Pm";
	hour = hour - 12;
}



var time = "Time: "+ hour + ":" + min + ":" + sec +" "+ampm; 
document.getElementById('time').innerHTML = time;

setTimeout(function() {settime()}, 1000);
}




// ------ find a dog/cat ------- //

function checkInf(){
	var x = true;

	if(document.querySelectorAll(".a")[0].checked || document.querySelectorAll(".a")[1].checked){
		x = true;
		if (document.querySelectorAll(".b")[0].checked || document.querySelectorAll(".b")[1].checked || document.querySelectorAll(".b")[2].checked) {
		x = true;
		if (document.querySelectorAll(".d")[0].checked || document.querySelectorAll(".d")[1].checked || document.querySelectorAll(".d")[2].checked) {
		x = true;
		if(document.querySelectorAll(".e")[0].checked || document.querySelectorAll(".e")[1].checked){
		x = true;
		if(x){
		alert("Thanks, your form have been submitted. ");
	}
	else{
		alert("Sorry, some of the field are left blank.\nPlease fill in all the form.");

		
		
	}

	}
	else{
		alert("Sorry, some of the field are left blank.\nPlease fill in all the form.");
	}

	}
	else{
		alert("Sorry, some of the field are left blank.\nPlease fill in all the form.");
	}

	}
    else{
		alert("Sorry, some of the field are left blank.\nPlease fill in all the form.");
	}

	}
	else{
		alert("Sorry, some of the field are left blank.\nPlease fill in all the form.");
	}


}

// ------ Have A Pet To Give Away ------- //


function checkInf2(){
	var x = true;

	if(document.querySelectorAll(".f")[0].checked || document.querySelectorAll(".f")[1].checked){
		x = true;
		if (document.querySelectorAll(".g")[0].checked || document.querySelectorAll(".g")[1].checked || document.querySelectorAll(".g")[2].checked) {
		x = true;
		if (document.querySelectorAll(".h")[0].checked || document.querySelectorAll(".h")[1].checked ) {
		x = true;
		if(document.querySelectorAll(".i")[0].checked || document.querySelectorAll(".i")[1].checked){
		x = true;
		if(document.querySelectorAll(".j")[0].checked || document.querySelectorAll(".j")[1].checked){
		x = true;
		if(document.querySelectorAll(".k")[0].checked || document.querySelectorAll(".k")[1].checked){
		x = true;

		if(document.querySelectorAll(".m")[0].value =="" || document.querySelectorAll(".m")[1].value ==""  || document.querySelectorAll(".m")[2].value =="" ){
	    alert("Sorry, some of the field are left blank.\nPlease fill in all the form.");


		}
		else{
			
			check()

		}

	

	}
	else{
		alert("Sorry, some of the field are left blank.\nPlease fill in all the form.");

	}
	

	}
	else{
		alert("Sorry, some of the field are left blank.\nPlease fill in all the form.");

		

	}

	}
	else{
		alert("Sorry, some of the field are left blank.\nPlease fill in all the form.");

		
	}

	}
	else{
		alert("Sorry, some of the field are left blank.\nPlease fill in all the form.");
		
	}

	}
    else{
		alert("Sorry, some of the field are left blank.\nPlease fill in all the form.");
	}

	}
	else{
		alert("Sorry, some of the field are left blank.\nPlease fill in all the form.");

		
	}


function check(){
	var reg = /^[a-z A-Z 0-9]+[\. _ \-]{1}[a-z A-Z 0-9]+[@][a-z]+[\.][a-z]{2,3}$/;



if(document.querySelectorAll(".m")[2].value.search(reg) ==0){
	alert("Thanks, your information have been submitted. The information is added to the (available_pet_information_file.json) file.");
	
	document.querySelectorAll(".m")[2].style.borderColor = "#3EC70B";
	document.querySelectorAll(".m")[2].style.backgroundColor = "#CEE5D0";
}
else{
	document.querySelectorAll(".m")[2].style.borderColor = "#FF1818";
	document.querySelectorAll(".m")[2].style.backgroundColor = "#EF9F9F";
	alert("Sorry, The Email provided is NOT in valid format. \n"+
		"your Email should be in the format: firstName.lastName@domain.com \n"+"NOTE: Make sure to include one of the following (. , - , _) between the firstName and lastName");

}

}


}











