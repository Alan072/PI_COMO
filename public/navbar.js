$(document).ready(function() {
    var navbar = $('.navbar');
    var distance = navbar.offset().top;
    
    $(window).scroll(function() {
      if ($(window).scrollTop() >= distance) {
        navbar.addClass('fixed');
      } else {
        navbar.removeClass('fixed');
      }
    });
  });