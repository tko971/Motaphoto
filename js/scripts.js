let liencontact = document.querySelector(".menu-item-75");
let modale = document.querySelector(".modale");


liencontact.addEventListener("click", toggleNav)

function toggleNav(e){
    e.preventDefault()
	modale.classList.toggle("active") 
}

let liencontacte = document.querySelector(".menu-item-76");
let modalee = document.querySelector(".modale");


liencontacte.addEventListener("click", toggleNave)

function toggleNave(e){
    e.preventDefault()
	modale.classList.toggle("active") 
}