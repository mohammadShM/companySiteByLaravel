let swiper = new Swiper(".mySwiper", {
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    autoplay: {
        delay: 5000,
    },
    effect: 'fade',
    fadeEffect: {
        crossFade: true
    },
    observer: true,
    observeParents: true,
    parallax:true,
    loop: true,
    direction: 'horizontal',
    centeredSlides: true,
    slidesPerView: 1,
});
