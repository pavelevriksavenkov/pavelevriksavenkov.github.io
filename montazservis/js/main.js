var mySwiper = new Swiper('.swiper-container', {
    slidesPerView: 1,
    loop: true,
    autoplay: {
        delay: 3000,
    },
    navigation: {
        nextEl: '.button-next',
        prevEl: '.button-prev',
    },
});