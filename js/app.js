$(function() {
  var menuOffset = $('#header').offset();
  
  $(document).on('scroll', function() {
    var scrollTop = $(document).scrollTop();
    if (scrollTop > menuOffset.top) {
      $('#menu-nav').addClass('menu-white');
      $('#menu-nav').removeClass('menu-transparent');
    } else {
      $('#menu-nav').removeClass('menu-white');
      $('#menu-nav').addClass('menu-transparent');
    }
  });

  $(function() {
    $('html').smoothScroll(500);
  });
  $('.img-scroll').smoove({rotateZ: '100deg'});
  $('.moveleft').smoove({moveX: '15%'});
  $('.moveright').smoove({moveX: '-15%'});
});