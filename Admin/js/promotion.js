let show = document.getElementById('show');

function searchfunc(e) {
    var xhttp = new XMLHttpRequest();

    xhttp.open("POST", "../control/promotion.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send();

    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            show.innerHTML = xhttp.responseText;
        }
    }
}

searchfunc();


