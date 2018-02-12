$(function() {
  var menuOffset = $('#sectionHeader').offset();
  
  $(document).on('scroll', function() {
    var scrollTop = $(document).scrollTop();
    if (scrollTop > menuOffset.top) {
      $('#menu-nav').addClass('menu-small');
      $('#menu-nav').removeClass('menu-normal');
    } else {
      $('#menu-nav').removeClass('menu-small');
      $('#menu-nav').addClass('menu-normal');
    }
  });
  
  var section1OffsetTop = $('#sectionPortfolio').offset().top;
  var section2OffsetTop = $('#sectionAbout').offset().top;
  var section3OffsetTop = $('#sectionContact').offset().top;
  
  $(document).on('scroll', function() {
    var scrollTop = $(document).scrollTop();
    var activeLi;
  
    if (scrollTop < section2OffsetTop) {
      activeLi = $('ul.menu li:nth-child(1) a');
    } else if (scrollTop < section3OffsetTop) {
      activeLi = $('ul.menu li:nth-child(2) a');
    } else {
      activeLi = $('ul.menu li:nth-child(3) a');
    }
    activeLi.addClass('active');
    $('.menu>li>a').not(activeLi).removeClass('active');
  });
});