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
var slider3 = new Swiper ('.slider3', {
  effect: 'slide',
  slidesPerView: 1,
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
});