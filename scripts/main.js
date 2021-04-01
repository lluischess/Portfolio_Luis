const hamburgerMenu = document.querySelector('#nav');
const navContent = document.querySelector('#nav-content');
const closenavbutton = document.querySelector('#nav-content .close-btn');
const navlinks = document.querySelectorAll('#nav-content nav ul li a');
const scrollbutton = document.querySelector('.scroll-top');

if (scrollbutton) {
    window.addEventListener('scroll', ()=> {
        if (pageYOffset > (window.innerHeight * 1.1)) {
            scrollbutton.style.display = 'flex';
             console.log(pageYOffset);
        } else {
            scrollbutton.style.display = 'none';
        }
    });
    scrollbutton.addEventListener('click', ()=> {
        window.scrollTo( 0, 0 );
    })
}

hamburgerMenu.addEventListener('click', ()=> {
    navContent.classList.add('show');
    document.body.style.overflow="hidden";
})

closenavbutton.addEventListener('click', ()=>{
    navContent.classList.remove('show');
    document.body.style.overflow="initial";
})

navlinks.forEach( link => {
    link.addEventListener('click', ()=>{
        navContent.classList.remove('show');
        document.body.style.overflow="initial";
    })
})