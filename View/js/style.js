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

function verification(name, ins){
    if(name.length == 0){
        document.getElementById("nameInp").innerHTML = "";
        document.getElementById("butao").innerHTML = "";
        return;
    }else{
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function(){
            if (this.readyState == 4 && this.status == 200) {
                console.log(this.responseText);
                if(this.responseText != ""){
                    document.getElementById("nameInp").innerHTML = this.responseText;
                    document.getElementById("butao").innerHTML = "";
                }else{
                    document.getElementById("nameInp").innerHTML = "";
                    document.getElementById("butao").innerHTML = '<button class="btn btn-dark btn-block" type="submit">Sign In</button>';
                }
            }
        };
        //console.log(name);
        xmlhttp.open("GET", 'verification.php', true);
        //xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlhttp.send('namae='+name+"&ins="+ins);
    }   
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