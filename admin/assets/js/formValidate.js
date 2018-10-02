
function validateForm() {
    var mobile = document.forms["regForm"]["Contact"].value;
    var password= document.forms["regForm"]["Password"].value;;
    var verpassword = document.forms["regForm"]["passwordverify"].value;;
    var text;
    var valid = false;


    var mobileFormat = /^\d{10}$/;
    if ((mobile.match(mobileFormat))) {
        valid = true;

    }
    else {

        text = "Not a valid phone number"
        alert("invalid input");
        document.getElementById("demo").innerHTML = text;

    }

    if(password.match(verpassword)){
        valid = true ;
    }else{

        valid = false;
        text = "Passwords does not match"
        document.getElementById("pass").innerHTML = text;
    }


    return valid;

}








    /*var x = document.forms["regForm"]["name"].value;
    if (x == "") {
        alert("Name must be filled out");
        return false;
    }




    // Get the value of the input field with id="numb"
    x = document.getElementById("mobile").value;

    // If x is Not a Number or less than one or greater than 10
    if (isNaN(x) || x < 1 || x > 10) {
        text = "Input not valid";
    } else {
        text = "Input OK";
    }
    document.getElementById("demo").innerHTML = text;*/


