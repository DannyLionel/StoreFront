$(".slider-one")
  .not(".slick-intialized")
  .slick({
    autoplay: true,
    autoplaySpeed: 2000,
    dots: true,
    prevArrow: ".site-slider .slider-btn .prev",
    nextArrow: ".site-slider .slider-btn .next"
  });