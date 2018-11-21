function showLogin(){
    var loginText;
    var loginInput;

    loginText=document.getElementById("loginText");
    loginText.remove();
    loginInput=document.getElementById("loginTable");
    loginInput.style.visibility="visible";
    loginInput.style.fontFamily="Arial";
}
