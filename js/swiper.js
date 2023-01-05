var slider2 = new Swiper ('.p-slider__swiper', {
    effect: 'slide',
    slidesPerView: 2.5,
    breakpoints: {
      768: {
        slidesPerView: 4.5,
      },
    },
    loop: true,
    centeredSlides : true,
    clickable: true,
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    },
});