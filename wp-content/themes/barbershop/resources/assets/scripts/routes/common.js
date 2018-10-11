export default {
  init() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
  finalize() {
    // JavaScript to be fired on all pages
    var whiteText = $('header.banner').hasClass('white-text');
    $('.menu .hamburger').toggle(function() {
      $('.mobile-menu').addClass('visible');
      if(!whiteText){
        $('header.banner').addClass('white-text');
      }
      $('html, body').css({
          overflow: 'hidden',
          height: '100%',
      });
    }, function() {
      $('.mobile-menu').removeClass('visible');
      if(!whiteText){
        $('header.banner').removeClass('white-text');
      }
      $('html, body').css({
          overflow: 'auto',
          height: 'auto',
      });
    });
  },
};
