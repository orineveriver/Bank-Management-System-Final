
document.getElementById('username').addEventListener('keyup', uservalidation);
function uservalidation(e) {
    if (document.getElementById('username').value == "") {
        document.getElementById('validateusername').innerHTML = "Firstname is required";
    }
    else {
        document.getElementById('validateusername').innerHTML = "";
    }
}

document.getElementById('name').addEventListener('keyup', namevalidation);
function namevalidation(e) {
    if (document.getElementById('name').value == "") {
        document.getElementById('validatename').innerHTML = "Lastname is required";
    }
    else {
        document.getElementById('validatename').innerHTML = "";
    }

}

document.getElementById('phone').addEventListener('keyup', phonevalidation);
function phonevalidation(e) {
    if (document.getElementById('phone').value == "") {
        document.getElementById('validatephone').innerHTML = "Nomenee NID is required";
    }
    else if (document.getElementById('phone').value.length < 11) {
        document.getElementById('validatephone').innerHTML = "Nomenee NID is invalid";
    }
    else {
        document.getElementById('validatephone').innerHTML = "";
    }

}

document.getElementById('email').addEventListener('keyup', emailvalidation);
function emailvalidation(e) {
    if (document.getElementById('email').value == "") {
        document.getElementById('validateemail').innerHTML = "Phone number is required";
    }
    else if (document.getElementById('email').value.length != 11) {
        document.getElementById('validateemail').innerHTML = "Phone Number is invalid";
    }
    else {
        document.getElementById('validateemail').innerHTML = "";
    }

}




document.getElementById('updatesubmit').addEventListener('click', updatedata);
function updatedata(e) {
    let firstname = document.getElementById('username').value;
    let lastname = document.getElementById('name').value;
    let phone = document.getElementById('email').value;
    let nnid = document.getElementById('phone').value;
    if (firstname != "" && lastname != "" && phone != "" && nnid != "" && phone.length == 11 && nnid.length > 11) {

        var xhttp = new XMLHttpRequest();

        xhttp.open("POST", "../control/editprofile.php", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("firstname=" + firstname + "&lastname=" + lastname + "&phone=" + phone + "&nnid=" + nnid);


        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                console.log(xhttp.responseText);
                if (xhttp.responseText == 'true') {
                    window.location.href = "../view/profile.php";
                }
            }
        }
    }

}
