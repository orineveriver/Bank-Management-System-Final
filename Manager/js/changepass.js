let password = document.getElementById('password');
let cpassword = document.getElementById('c-password');
let validatepassword = document.getElementById('validatepassword');
let validatecpassword = document.getElementById('validatecpassword');

password.addEventListener('keyup', passvalidation);
password.addEventListener('keyup', cpassvalidation);
cpassword.addEventListener('keyup', cpassvalidation);

function passvalidation(e) {
    if (password.value == "") {
        validatepassword.innerHTML = "Password can not be empty!!!";
    }
    else if (password.value.length < 6) {
        validatepassword.innerHTML = "Password must be at least 6 character!!!";
    }
    else {
        validatepassword.innerHTML = "";
    }
}

function cpassvalidation(e) {
    if (cpassword.value == "") {
        validatecpassword.innerHTML = "Confirm Password can not be empty!!!";
    }
    else if (password.value != cpassword.value) {
        validatecpassword.innerHTML = "Password doesn't match!!!";
    }
    else {
        validatecpassword.innerHTML = "";
    }
}

