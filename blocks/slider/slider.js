var swiper = new Swiper(".inw-carousel", {
  slidesPerView: 1,
  effect: "fade",
  loop: true,
  lazy: true,
  speed: 600,
  parallax: true,
  autoplay: {
    delay: 4000
  },
  effect: "creative",
  creativeEffect: {
    prev: {
      shadow: true,
      translate: [0, 0, -400]
    },
    next: {
      translate: ["100%", 0, 0]
    }
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true
  }
});
