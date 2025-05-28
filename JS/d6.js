
function checkPass(){
    let pass = document.getElementById('pass').value
    let msg = document.getElementById('msg')
    if(pass.length>=8){
        msg.style.color='green'
        msg.innerHTML = "You May Continue"
    }else{
        msg.style.color='red'
        msg.innerHTML = "Length should atleast be 8"
    }
}

