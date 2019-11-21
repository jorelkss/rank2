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

function verification(name, ins, inpt){
    //let form = document.getElementById("");
    const formdata = new FormData(form);
    formdata.append('namae', name);
    formdata.append('ins', ins);
    let nameInp = document.getElementById(inpt);
    //let butao = document.getElementById('jorel');
    //let butao = document.getElementsById('butao').innerHTML = "";;
        //POST 
        fetch("verification.php",{
            method: "POST",
            body: formdata
        })
        //GET fetch("verification.php?namae="+name+"&ins="+ins)
        .then((response)=>{
            return response.text();
        })
        .then((res)=>{
            console.log(res);
            nameInp.innerHTML = res;
        })   
}

function check(e){
    let div1 = document.getElementById("nameInp");
    let div2 = document.getElementById("emailInp");
    let form = document.getElementById("form");
    const formdata = new FormData(form);
    if(div1.innerHTML != "" || div2.innerHTML != ""){
        e.preventDefault();
    }/*else{
        fetch("Controller/registerUser.php", {
            method: "POST",
            body: formdata
        })
        window.location.replace("http://localhost/userPage.php");
    }*/
}

/*function verification(name, ins){
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
        xmlhttp.open("GET", 'verification.php?'+'namae='+name+"&ins="+ins, true);
        //xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlhttp.send();
    }   
}*/