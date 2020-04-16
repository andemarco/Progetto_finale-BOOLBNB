require('./bootstrap');
var $ = require( "jquery" );



$(document).ready(function() {
  $('.btn-search').on('click', function() {
    var address = $('#address').val();
    searchAddress(address);
  });
  $(document).on('click', '.name', function() {
    var inputAddress = $(this).text();
    addCorrectAddress(inputAddress);
  });
});









//---------------------------------------FUNCTIONS------------------------------------------------

// FUNZIONE PER LA RICERCA DEGLI INDIRIZZI

function searchAddress(address) {
  $.ajax({
    url: 'https://api.tomtom.com/search/2/geocode/' + address + '.json?limit=1&countrySet=IT&key=T5RJjkTNh0XzCCh2P0vgAYziedXCFFWF',
    method: 'GET',
    success: function(data, state) {
      var thisAddress = data.results;

      for (var i = 0; i < thisAddress.length; i++) {
        var completeAddress = '<li class="name">' +  thisAddress[i].address.freeformAddress + '</li>';
        $('#address-list').html('');
        $('#address-list').append(completeAddress);
      }
    },
    error:function (richiesta, stato, errori) {
      alert("E' avvenuto un errore.");
    },
  });
}

// FUNZIONE PER L'AGGIUNTA DELL'INDIRIZZO
function addCorrectAddress(address) {
  $.ajax({
    url: 'https://api.tomtom.com/search/2/geocode/' + address + '.json?limit=1&countrySet=IT&key=T5RJjkTNh0XzCCh2P0vgAYziedXCFFWF',
    method: 'GET',
    success: function(data, state) {
      var thisAddress = data.results;

      for (var i = 0; i < thisAddress.length; i++) {

        var correctAddress = thisAddress[i].address.freeformAddress;

        var latitude = thisAddress[i].position.lat;
        var longitude = thisAddress[i].position.lon;
        $('#latitude').val(latitude);
        $('#longitude').val(longitude);
        $('#address').val(correctAddress);
        $('#address-list').html('');
      }
    },
    error:function (richiesta, stato, errori) {
      alert("E' avvenuto un errore.");
    },
  });
}


