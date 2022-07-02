// Password Matching

function matchPassword(){
    var pass1 = document.getElementById("pass1").value;
    var pass2 = document.getElementById("pass2").value;

    if(pass1!==pass2){
        alert("Dont't match the password");
    }else{  
        return true;
    }
    if(pass1<5 && pass2<5){
        alert("Password Must be greater than 5 letters");
    }else{
        return true;
    }
    
}