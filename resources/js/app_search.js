require('./bootstrap');

const $ = require('jquery');
const Handlebars = require("handlebars");

$(document).ready(function () {
  $('#btn-search').click(function() {
    
    var inputCity = $('#city').val();
    if (inputCity == '') {
      alert('non hai indicato una città')
    } else {
      var queryString = '?' + inputCity
      window.location.href = 'http://127.0.0.1:8000/search' + queryString;
      return false;
    }
  });

  $('#city').keypress(function(event) {
    if (event.which == 13 || event.keycode == 13) {
      var inputCity = $('#city').val();
      if (inputCity == '') {
        alert('non hai indicato una città')
    } else {
      var queryString = '?' + inputCity
      window.location.href = 'http://127.0.0.1:8000/search' + queryString;
      return false;
    }
  }  
 });
 $('#city').val('');

});
// $('#searchBar').keypress(function(event) {     if (event.which == 13)