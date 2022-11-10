window.onload = function(){

    const xttp = new XMLHttpRequest();
    let result = document.getElementById("result")
    xttp.onreadystatechange = function(){
        
        if (this.readyState == 4 && this.status == 200){
            result.innerHTML = this.responseText;
        }
    }

    let cobutton = document.getElementById("lookup");
    cobutton.onclick = function(){
        let value = document.getElementById("country").value
        let lookup = "country"
        xttp.open('GET',"world.php?country="+value+"&lookup="+lookup);
        xttp.send()
    }
    let cibutton = document.getElementById("lookupc");
    cibutton.onclick = function(){
        let value = document.getElementById("country").value
        let lookup = "city"
        xttp.open('GET',"world.php?country="+value+"&lookup="+lookup);
        xttp.send()
    }


}