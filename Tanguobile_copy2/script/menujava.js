var btn = document.querySelector('.menuToggle'); 
var nav = document.querySelector('.hide');

btn.onclick = function(){
    nav.classList.toggle('hide_open');
}