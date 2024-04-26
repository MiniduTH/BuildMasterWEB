function enableButton(){
    if(document.getElementById('checkBox').checked){
        document.getElementById("sign-btn").disabled = false;
    }
    else document.getElementById("sign-btn").disabled = true;
}
enableButton();