const $ = require('jquery');

require('./bootstrap');


$(document).ready(function() {
  $(window).on('scroll', function() {
    if ($(window).scrollTop() >= 20) {
      $('#scroll_nav').addClass('shadow-sm');
      $('#scroll_nav').addClass('fixed-top');
    } else {
      $('#scroll_nav').removeClass('shadow-sm');
      $('#scroll_nav').removeClass('fixed-top');
    }
  });
});