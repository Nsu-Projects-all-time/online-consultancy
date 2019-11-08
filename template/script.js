

function validate() {
	
	
	var uname=document.forms["myform"]["username"];
	var pass=document.forms["myform"]["password"];
	
	
	 if(uname.value=="") 
		 
	 {
	 	//window.alert("Username can not be empty");
	 	username_error=document.getElementById("username_error");
	 	username_error.style.color="red";
	 	username_error.innerHTML="Username can not be empty";
	 	uname.focus();	
	 	return false;




     }
     if (pass.value=="")
     {
     //window.alert("Password can not be empty");
     password_error=document.getElementById("password_error");
     password_error.style.color="red";
     password_error.innerHTML="Password can not be empty";
     pass.focus();
     return false;
     



     }

}
