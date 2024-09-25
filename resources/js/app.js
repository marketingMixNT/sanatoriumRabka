import './bootstrap';
import 'preline'



import Swiper from "swiper";
import {
    Autoplay,
    EffectFade,
 
} from "swiper/modules";
import "swiper/swiper-bundle.css";

//HERO CAROUSEL
new Swiper(".hero-carousel", {
    loop: false,
    effect: "fade",
    slidesPerView: 1,
    grabCursor: true,
    autoplay: {
        delay: 5500,
        disableOnInteraction: true,
    },
    modules: [Autoplay, EffectFade],
});


new Swiper(".attraction-gallery-swiper", {
    loop: true,
    grabCursor: true,
    slidesPerView: 1,
    spaceBetween: 50,
    breakpoints: {
        650: {
            slidesPerView: 2,
        },
        1000: {
            slidesPerView: 3,
        },
        
    },

    autoplay: {
        delay: 3500,
        disableOnInteraction: true,
        pauseOnMouseEnter: true,
    },
   
   
    modules: [Autoplay, ]
});


new Swiper(".testimonials-swiper", {
    loop: true,
    grabCursor: true,
    slidesPerView: 1,
    spaceBetween: 50,
    breakpoints: {
        800: {
            slidesPerView: 2,
        },
        1280: {
            slidesPerView: 3,
            spaceBetween: 30,
        },
        1500: {
            slidesPerView: 3,
            spaceBetween: 50,
        },
        
    },

    autoplay: {
        delay: 5000,
        disableOnInteraction: true,
        pauseOnMouseEnter: true,
    },
   
   
    modules: [Autoplay, ]
});


const footerYearSpan = document.querySelector("#footerYear");

const currentYear = new Date().getFullYear();

footerYearSpan.innerHTML = currentYear;