
document.getElementById('firstname').addEventListener('keyup', firstnamevalidation);
function firstnamevalidation(e) {
    if (document.getElementById('firstname').value == "") {
        document.getElementById('validatefirstname').innerHTML = "FirstName is required";
    }
    else {
        document.getElementById('validatefirstname').innerHTML = "";
    }
}


document.getElementById('lastname').addEventListener('keyup', uservalidation);
function uservalidation(e) {
    if (document.getElementById('lastname').value == "") {
        document.getElementById('validatelastname').innerHTML = "LastName is required";
    }
    else {
        document.getElementById('validatelastname').innerHTML = "";
    }
}

document.getElementById('nid').addEventListener('keyup', nidvalidation);
function nidvalidation(e) {
    if (document.getElementById('nid').value == "") {
        document.getElementById('validatenid').innerHTML = "NID is required";
        console.log("1");
    }
    else if (document.getElementById('nid').value.length < 11) {
        document.getElementById('validatenid').innerHTML = "NID is invalid";
    }
    else {
        document.getElementById('validatenid').innerHTML = "";
    }
}

document.getElementById('nnid').addEventListener('keyup', nnidvalidation);
function nnidvalidation(e) {
    if (document.getElementById('nnid').value == "") {
        document.getElementById('validatennid').innerHTML = "Nomenee NID is required";
    }
    else if (document.getElementById('nnid').value.length < 11) {
        document.getElementById('validatennid').innerHTML = "Nomenee NID is invalid";
    }
    else {
        document.getElementById('validatennid').innerHTML = "";
    }
}



document.getElementById('phone').addEventListener('keyup', phonevalidation);
function phonevalidation(e) {
    if (document.getElementById('phone').value == "") {
        document.getElementById('validatephone').innerHTML = "Phone number is required";
    }
    else if (document.getElementById('phone').value.length < 11) {
        document.getElementById('validatephone').innerHTML = "Phone number is invalid";
    }
    else {
        document.getElementById('validatephone').innerHTML = "";
    }
}

document.getElementById('password').addEventListener('keyup', passvalidation);
function passvalidation(e) {
    if (document.getElementById('password').value == "") {
        document.getElementById('validatepassword').innerHTML = "Password is required";
    }
    else if (document.getElementById('password').value.length < 6) {
        document.getElementById('validatepassword').innerHTML = "Password Must be at least 6 character";
    }
    else {
        document.getElementById('validatepassword').innerHTML = "";
    }

}

document.getElementById('c_password').addEventListener('keyup', cpassvalidation);
function cpassvalidation(e) {
    if (document.getElementById('c_password').value == "") {
        document.getElementById('validatecpassword').innerHTML = "Confirm Password is required";
    }
    else if (document.getElementById('c_password').value != document.getElementById('password').value) {
        document.getElementById('validatecpassword').innerHTML = "Password does not match!";
    }
    else {
        document.getElementById('validatecpassword').innerHTML = "";
    }

}


