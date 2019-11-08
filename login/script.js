function validate() {
	
	
	var uname=document.forms["myform2"]["uname"].value;
	var pass=document.forms["myform2"]["pass"].value;
	
	
	 if(uname=="" || uname==" ") 
		 
	 {window.alert("Username cannot be empty and whiteSpace");
     }
     if (pass=="" || pass.length<8 ||  pass.length>32)
     {
     window.alert("length must be between 8 to 32 characters");
     }

}
