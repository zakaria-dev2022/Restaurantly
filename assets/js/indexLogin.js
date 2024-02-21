// let connecter=document.getElementById("connecter");
// let inscription=document.getElementById("inscription");
// let partieconnecter=document.getElementsByClassName("partieconnecter");
// let partieinscription=document.getElementById("partieinscription");


// connecter.addEventListener('click', ()=>{
//     partieconnecter.style.display = "block";
//     partieinscription.style.display="none";
//     alert ('zaza');
// })
// inscription.addEventListener('click', ()=>{
//     partieconnecter.style.display = "none";
//     partieinscription.style.display="block"
// })
// alert ('kakak')



let inscription = document.getElementById("inscription");
let connecter = document.getElementById("connecter");
let div1 = document.getElementById("div1");
let div2 = document.getElementById("div2");


connecter.addEventListener("click", function() {
    // Afficher le div 1 et masquer le div 2
    div1.style.display = "block";
    div2.style.display = "none";
    connecter.style.backgroundColor = "#cda45e";
    connecter.style.color = "white";
    inscription.style.backgroundColor = "white";
    inscription.style.color = "#cda45e";

});

inscription.addEventListener("click", function() {
    // Afficher le div 2 et masquer le div 1
    div2.style.display = "block";
    div1.style.display = "none";
    inscription.style.backgroundColor = "#cda45e";
    inscription.style.color = "white";
    connecter.style.backgroundColor = "white";
    connecter.style.color = "#cda45e";

});