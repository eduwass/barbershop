export default {
  init() {
    // JavaScript to be fired on the home page
  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
    $(".slick").slick({
      dots: true,
      infinite: true,
      speed: 700,
      autoplay:false,
      arrows:true,
      slidesToShow: 4,
      slidesToScroll: 1,
      centerMode: true,
      centerPadding: '100px',
      initialSlide: 2,
      responsive: [
          {
            breakpoint: 580,
            settings: {
              slidesToShow: 2,
            },
          },
      ],
    });
  },
};
