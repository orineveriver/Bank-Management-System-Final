let search = document.getElementById('search');

let show = document.getElementById('show');

search.addEventListener('keyup', documentstart);

function documentstart(e) {
    var xhttp = new XMLHttpRequest();

    xhttp.open("POST", "../control/transitionhistory.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("search=" + search.value);

    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            show.innerHTML = xhttp.responseText;
        }
    }
}

documentstart();