var swiper = new Swiper(".inw-carousel", {
  slidesPerView: 1,
  effect: "fade",
  loop: true,
  lazy: true,
  speed: 600,
  parallax: true,
  //   autoplay: {
  //     delay: 4000
  //   },
  pagination: {
    el: ".swiper-pagination",
    clickable: true
  }
});
