import './bootstrap';

window.addEventListener('scroll', function() {
    let header = document.querySelector('header');
    header.classList.toggle('sticky', window.scrollY > 0);
})

document.querySelectorAll('ul.menu li a').forEach((el, index) => {
    el.addEventListener('click', function(){
        toggleMenu()
    });
})

function toggleMenu() {
    let toggleMenu = document.querySelector('.toggle');
    let menu = document.querySelector('.menu');
    toggleMenu.classList.toggle('active');
    menu.classList.toggle('active');
}