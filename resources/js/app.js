import './bootstrap';


if (document.querySelector('#scroll-text')) {
    window.addEventListener('scroll', () => {
        if (window.scrollY > 25) {
            document.querySelector('#scroll-text').style.opacity = 0;
            document.querySelector('#scroll-text').style.transform = 'translateY(-25%)';
        } else {
            document.querySelector('#scroll-text').style.opacity = 1;
            document.querySelector('#scroll-text').style.transform = 'translateY(0)';
        }
    });
}


const mobileMenu = document.getElementById('mobile-menu');
const hamburgerBtn = document.getElementById('hamburger-btn');
const hamburgerLines = hamburgerBtn.querySelectorAll('.hamburger-line');


hamburgerBtn.addEventListener('click', function() {
    mobileMenu.classList.toggle('hidden');
    hamburgerBtn.classList.toggle('active');

    hamburgerLines.forEach(line => line.classList.toggle('active'));
});