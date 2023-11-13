const s = ScrollReveal({
    distance: '65px',
    duration: 2600,
    delay: 450,
    reset: true
});

s.reveal('.info-text', {
    delay: 200,
    origin: 'top'
});
s.reveal('.info-img', {
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
