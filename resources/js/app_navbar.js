const $ = require('jquery');

require('./bootstrap');


$(document).ready(function() {
  // $(window).on('scroll', function() {
  //   if ($(window).scrollTop() >= 20) {
  //     $('#scroll_nav').addClass('shadow-sm');
  //     $('#scroll_nav').addClass('fixed-top');
  //   } else {
  //     $('#scroll_nav').removeClass('shadow-sm');
  //     $('#scroll_nav').removeClass('fixed-top');
  //   }
  // });
  // click sul bottone a pagina grande
  $('#auth-btn').click(function() {
    var dropDown = $('.dropdown-menu-auth');
    if (dropDown.hasClass('d-none')) {
        dropDown.removeClass('d-none');
    } else {
        dropDown.addClass('d-none');
    }
  });
  // click sull'hamburger menu
  $('#ham-btn').click(function () {
    console.log('suca');
      var listContainer = $('.auth-list-ham');
      var dropDown = $('.dropdown-menu-auth-ham');
      if (listContainer.hasClass('d-none') && dropDown.hasClass('d-none')) {
          listContainer.removeClass('d-none');
          dropDown.removeClass('d-none');
      } else {
          listContainer.addClass('d-none');
          dropDown.addClass('d-none');
      }
  });
});