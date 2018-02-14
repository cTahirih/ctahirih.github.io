var ready = function() {
  var toggle = document.querySelector('.main-menu-toggle');
  
  toggle.onclick = function() {
    var menu = document.querySelector('.main-navigation');
    var toggle = document.querySelector('.main-menu-toggle');
   
    menu.classList.toggle('menu-show');
    toggle.classList.toggle('on');
  };
};
  
document.addEventListener('DOMContentLoaded', ready);
  