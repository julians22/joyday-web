import "./bootstrap";

// import Swiper bundle with all modules installed
import Swiper from "swiper/bundle";

// import styles bundle
import "swiper/css/bundle";

const swiper = new Swiper(".swiper", {
    init: false,
    loop: true,

    // Navigation arrows
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});


swiper.on('init', function(swiper) {
    // console.log(swiper.activeIndex, swiper.slides);
    playVideoBanner(swiper.slides[swiper.activeIndex]);
    playOverlayAnimation(swiper.slides[swiper.activeIndex]);
})

swiper.on('slideChangeTransitionEnd', function(swiper){
    playVideoBanner(swiper.slides[swiper.activeIndex]);
    playOverlayAnimation(swiper.slides[swiper.activeIndex]);
});

swiper.on('slideNextTransitionStart', function(swiper){
    console.log(swiper);

    const target = swiper.slides[swiper.activeIndex].querySelector('.banner-overlay');

    target.classList.remove('show');

});


function playVideoBanner(element) {

    const target = element.querySelector('.content');

    if ('VIDEO' == target.tagName) {
        target.pause();
        target.currentTime = 0;
        target.play();
    }
}

function playOverlayAnimation(element){
    const target = element.querySelector('.banner-overlay');
    target.classList.add('show');
}


swiper.init();
