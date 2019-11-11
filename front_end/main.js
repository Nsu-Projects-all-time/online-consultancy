//validate login form
function login_validate() {


    var email = document.forms["login_form"]["email"];
    var pass = document.forms["login_form"]["password"];


    if (email.value == "")

    {
        window.alert("field can not be empty");

        email.focus();
        return false;




    }
    if (pass.value == "") {
        window.alert("field can not be empty");

        pass.focus();
        return false;




    }

}




//validate password
function validate_password(s) {

}


//validate registration form




function register_validate() {



    var person = document.forms["registration_form"]["person"];
    var name = document.forms['registration_form']["name"];
    var email = document.forms["registration_form"]["email"];
    var gender = document.forms["registration_form"]["gender"];
    var dob = document.forms["registration_form"]["dob"];
    var phone = document.forms["registration_form"]["phone"];
    var pass = document.forms["registration_form"]["password"];
    var pass1 = document.forms["registration_form"]["confirm_password"];



    if (person.value == "null") {
        window.alert("please select account option");
        person.focus();
        return false;
    }
    if (name.value == "")

    {
        window.alert("name can not be empty");

        name.focus();
        return false;

    }

    if (email.value == "")

    {
        window.alert("email can not be empty");

        email.focus();
        return false;

    }
    if (gender.value == "null") {
        window.alert("please select gender");
        person.focus();
        return false;
    }
    if (dob.value == "") {
        window.alert("please select date of birth");
        dob.focus();
        return false;
    }

    if (pass.value == "") {
        window.alert("password can not be empty");

        pass.focus();
        return false;

    }
    var passw = /^[A-Za-z]\w{7,14}$/;

    if (!pass.value.match(passw)) {
        window.alert("password length must be 6-20 character long with\n number,uppercase and lower case letter");
        pass.focus();
        return false;
    }

    if (pass1.value == "" || pass1.value != pass.value) {
        window.alert("password does not match");
        pass1.focus();
        return false;
    }
    if (phone.value == "") {
        window.alert("phone number can not be empty");
    }
    var phoneno = /^\d{13}$/;
    if (!phone.value.match(phoneno)) {
        window.alert('Please Enter valid phone');
        phone.focus();
        return false;

    }
}