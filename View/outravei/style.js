function loadRank(url){
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            if(this.responseText != document.getElementById("table").innerHTML){
                document.getElementById("table").innerHTML = this.responseText;
                //document.getElementById("mydiv").innerText = this.responseText + "\n" + document.getElementById("online_users").innerHTML;
            }
        }
    };
    xhttp.open("POST", url + '.php', true);
    xhttp.send();
}

function loadTeams(url){
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            if(this.responseText != document.getElementById("table").innerHTML){
                document.getElementById("table").innerHTML = this.responseText;
                //document.getElementById("mydiv").innerText = this.responseText + "\n" + document.getElementById("online_users").innerHTML;
            }
        }
    };
    xhttp.open("POST", url + '.php', true);
    xhttp.send();
}