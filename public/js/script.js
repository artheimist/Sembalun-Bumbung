let navbar =document.querySelector('.header .navbar');
let header =document.querySelector('.header');
document.querySelector('#menu-btn').onclick = () =>{
    navbar.classList.add('active');
}
document.querySelector('#nav-close').onclick = () =>{
    navbar.classList.remove('active');
}

window.onscroll = () =>{
    if(window.scrollY > 50){
       header.classList.add("active");
    } else {
        header.classList.remove("active");
    }
}
var swiper = new Swiper(".home-slider",{
    loop:true,
    grabCursor:true,
    navigation:{
        nextEl:".swiper-button-next",
        prevEl:".swiper-button-prev",
    },
});
