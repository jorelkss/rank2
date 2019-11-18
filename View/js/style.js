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

/*$(document).ready(function () {

    function callLeft(){
        $('.leftdiv').toggleClass('leftDiv');
        $('.rightdiv').toggleClass('rightDiv');
        $('#times').off('click');
        $('#rank').on('click', callRight);
    }

    function callRight(){
        $('.rightdiv').toggleClass('rightDiv');
        $('.leftdiv').toggleClass('leftDiv');
        $('#rank').off('click');
        $('#times').on('click', callLeft);
    }
    
    $('#rank').on('click', callRight);

    $('#times').off('click');

});*/