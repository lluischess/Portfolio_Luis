const hamburgerMenu = document.querySelector('#nav');
const navContent = document.querySelector('#nav-content');
const closenavbutton = document.querySelector('#nav-content .close-btn');

hamburgerMenu.addEventListener('click', ()=> {
    navContent.classList.add('show');
    document.body.style.overflow="hidden";
})

closenavbutton.addEventListener('click', ()=>{
    navContent.classList.remove('show');
    document.body.style.overflow="initial";
})