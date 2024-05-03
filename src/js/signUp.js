function enableButton(){
    if(document.getElementById('checkBox').checked){
        document.getElementById("sign-btn").disabled = false;
    }
    else document.getElementById("sign-btn").disabled = true;
}
enableButton();

function checkPassword(){
    if (document.getElementById('pwd').value != document.getElementById('cpwd').value){
        alert("Password Mismatched!")
        return false
    }else {
        return true
    }
};