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
});