const s = ScrollReveal({
    distance: '75px',
    duration: 2600,
    delay: 470,
    reset: false
});

s.reveal('.info-text', {
    delay: 200,
    origin: 'top'
});
s.reveal('.info-text2', {
    delay: 200,
    origin: 'top'
});
s.reveal('.info-img', {
    delay: 200,
    origin: 'top'
});
s.reveal('.info-img2', {
    delay: 200,
    origin: 'top'
});
s.reveal('.icons', {
    delay: 500,
    origin: 'left'
});

let menu = document.querySelector('#menu-icon');
let navlist = document.querySelector('.navlist');

menu.onclick = () => {
    menu.classList.toggle('bx-x');
    navlist.classList.toggle('open');
};
