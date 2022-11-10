window.onload = function(){

    const xttp = new XMLHttpRequest();
    let result = document.getElementById("result")
    xttp.onreadystatechange = function(){
        
        if (this.readyState == 4 && this.status == 200){
            result.innerHTML = this.responseText;
        }
    }

    let button = document.getElementById("lookup");
    button.onclick = function(){
        let value = document.getElementById("country").value
        xttp.open('GET',"world.php?country="+value);
        xttp.send()
    }


}