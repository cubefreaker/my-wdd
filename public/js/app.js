
window.addEventListener('scroll', function() {
    let header = document.querySelector('header');
    header.classList.toggle('sticky', window.scrollY > 0);
})

function sendEmail() {
    let mailto = 'myemail@mail.com';
    let subject = `${document.getElementById('fullname').value} | ${document.getElementById('email').value}`;
    let message = document.getElementById('message').value;
    window.location.href = `mailto:${mailto}?subject=${subject}&body=${message}`
}

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