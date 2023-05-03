import './bootstrap';
// import '../css/app.css';

window.addEventListener('scroll', function() {
    let header = document.querySelector('header');
    header.classList.toggle('sticky', window.scrollY > 0);
})

document.querySelectorAll('ul.menu li a').forEach((el, index) => {
    el.addEventListener('click', function(){
        toggleMenu()
    });
})

window.toggleMenu = function () {
    let toggleMenu = document.querySelector('.toggle');
    let menu = document.querySelector('.menu');
    toggleMenu.classList.toggle('active');
    menu.classList.toggle('active');
}