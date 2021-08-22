$('.carousel').carousel();

function ValidateEmail(){
	var emailpattern = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
	var email = document.getElementById("email");
	if((!email.value.match(emailpattern))){
		alert("Enter valid email")
		email.value="";
	}

}

function ValidatePassword(){
	var passpattern = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/;
	var pass = document.getElementById("password");
	if((!pass.value.match(passpattern))){
		alert("Enter a password between 7 to 15 characters which contain at least one  numeric digit  and a special character")
		pass.value="";
	}

}