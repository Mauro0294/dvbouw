import './bootstrap';


document.addEventListener('scroll', function () {
    if (window.scrollY > 0) {
        console.log('hide');
        document.querySelector('#scroll-text').classList.add = 'hide-scroll';
    } else {
        console.log('show');
        document.querySelector('#scroll-text').classList.remove = 'hide-scroll';
    }
});

const mobileMenu = document.getElementById('mobile-menu');
const hamburgerBtn = document.getElementById('hamburger-btn');
const hamburgerLines = hamburgerBtn.querySelectorAll('.hamburger-line');


hamburgerBtn.addEventListener('click', function() {
    mobileMenu.classList.toggle('hidden');
    hamburgerBtn.classList.toggle('active');

    hamburgerLines.forEach(line => line.classList.toggle('active'));
});