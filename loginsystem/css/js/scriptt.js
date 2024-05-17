let menu = document.querySelector('#menu-btn');
let navbar  = document.querySelector('.header._nav');

menu.onclick = () =>{
    menu.classList.toggle('fa-times');
    _nav.classList.toggle('active');
}

window.onscroll = () =>{
    menu.classList.remove('fa-times');
    _nav.classList.remove('active');
}