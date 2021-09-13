let accno = document.getElementById('accno');
let amount = document.getElementById('amount');
let validateaccno = document.getElementById('validateaccno');
let validateamount = document.getElementById('validateamount');
var balance;

accno.addEventListener('keyup', accnovalidation);
amount.addEventListener('keyup', amountvalidation);

function accnovalidation(e) {
    if (accno.value == "") {
        validateaccno.innerHTML = "Account can not be empty!!!";
    }
    else if (accno.value.length != 7) {
        validateaccno.innerHTML = "Not in Format!!!";
    }
    else if (isNaN(accno.value)) {
        validateaccno.innerHTML = "Not in Format!!!";
    }
    else {
        validateaccno.innerHTML = "";
        let accname = document.getElementById('accname');

        var xhttp = new XMLHttpRequest();

        xhttp.open("POST", "../control/accholdername.php", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("accno=" + accno.value);

        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                accname.value = xhttp.responseText;
            }
        }
    }
}

function amountvalidation(e) {

    var xhttp = new XMLHttpRequest();

    xhttp.open("POST", "../control/accholderbal.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("accno=" + accno.value);

    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            balance = xhttp.responseText;
        }
    }


    if (amount.value == "") {
        validateamount.innerHTML = "Amount can not be empty!!!";
    }
    else if (amount.value < 0 || isNaN(amount.value)) {
        validateamount.innerHTML = "Invalid Amount!!!";
    }

    else if (parseInt(amount.value) > balance) {
        validateamount.innerHTML = "Insufficient Balance!!!";
    }
    else {
        validateamount.innerHTML = "";
    }
}