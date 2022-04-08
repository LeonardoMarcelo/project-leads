let menutoggle =  document.querySelector('.toggle');
let navbar = document.querySelector('.header');
let efect = document.querySelector('.nav__toggle'); 
let distorcorpo = document.querySelector('.conteudo'); 
menutoggle.onclick = function(){
    menutoggle.classList.toggle('opem')
    navbar.classList.toggle('active')
    efect.classList.toggle('close')
    distorcorpo.classList.toggle('space')
}

let navoption = document.querySelector('item-nav2');
navoption.onclick = function() {
    navbar.classList.toggle('opem-optionnav')
}