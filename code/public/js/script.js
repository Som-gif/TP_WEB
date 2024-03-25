// Hugo Le Noë TD3 Firefox
    
let p
let verif 
document.addEventListener("DOMContentLoaded", function() {

    console.log(document.getElementsByClassName("passwordSignup"))
    p = document.getElementById('passwordSignup')
    p.addEventListener("input", verifPassword)

    verif = document.getElementById('verifPassword')
    verif.addEventListener("input", verifDiff)
});

let displayLogin = false
let displaySignup = false

function showLogin(){
    let formLogin = document.getElementById("connexion")
    let formCrea = document.getElementById("creationCompte")
    displaySignup = false
    formCrea.style.display= "None"
    if(displayLogin){
        formLogin.style.display = "None"
    }else{
        formLogin.style.display = "block"
    }

    displayLogin = !displayLogin
}

function showSignUp(){
    let formLogin = document.getElementById("creationCompte")
    let formCrea = document.getElementById("connexion")
    formCrea.style.display = "None"
    displayLogin = false
    if(displaySignup){
        formLogin.style.display = "None"
    }else{
        formLogin.style.display = "block"
    }
    displaySignup = !displaySignup
}




function verifPassword(){
    let input = document.getElementById('passwordSignup')
    console.log(input.value)

    if(input.value.length > 8){
        document.getElementById("taillePass").style.display = "none"
    }else{
        document.getElementById("taillePass").style.display = "block"
    }
}

function verifDiff(){
    let input = document.getElementById('passwordSignup')
    let verif = document.getElementById('verifPassword')

    if(verif.value == input.value){
        document.getElementById('diff').style.display  = "none" 
        document.getElementById('notDiff').style.display = "block"
    }else{
        let test = document.getElementById('diff').style.display 
        if(test == "none"){
            document.getElementById('diff').style.display  = "block" 
        }
    }


}
