$(function () {
  var menuOffset = $('#header').offset();

  $(document).on('scroll', function () {
    var scrollTop = $(document).scrollTop();
    if (scrollTop > menuOffset.top) {
      $('#menu-nav').addClass('menu-white');
      $('#menu-nav').removeClass('menu-transparent');
    } else {
      $('#menu-nav').removeClass('menu-white');
      $('#menu-nav').addClass('menu-transparent');
    }
  });

  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
      e.preventDefault();
      document.querySelector(this.getAttribute('href')).scrollIntoView({
        behavior: 'smooth'
      });
    });
  });

  window.sr = ScrollReveal();
  sr.reveal('.t-jumbotron', {
    duration: 3000,
    origin: 'left',
    rotate: { x: 50, y: 0, z: 50 },
    easing: 'cubic-bezier(0.6, 0.2, 0.1, 1)'
  });
  sr.reveal('.title-scroll', {
    duration: 2000,
    origin: 'left'
  });
  sr.reveal('.photo', {
    duration: 2000,
    origin: 'right'
  });
  sr.reveal('.scroll-text', {
    duration: 2000,
    origin: 'left'
  });
});