require('./bootstrap');

const $ = require('jquery');
const Handlebars = require("handlebars");

$(document).ready(function () {
  $('#btn-search').click(function() {
    var inputCity = $('#city').val();
    if (inputCity == '') {
      alert('Nessun pippo inserito');
    } else {
      searchApartments(inputCity);

    }
  
  });
});


//------------------------------FUNCTIONS-------------------------------



function searchApartments(address) {
  $.ajax({
      url: 'https://api.tomtom.com/search/2/geocode/' + address + '.json?limit=1&countrySet=IT&key=T5RJjkTNh0XzCCh2P0vgAYziedXCFFWF',
      method: 'GET',
      success: function (data, state) {
        var thisAddress = data.results;
        for (var i = 0; i < thisAddress.length; i++) {
            var latitude = thisAddress[i].position.lat;
            var longitude = thisAddress[i].position.lon;
            $('#latitude').val(latitude);
            $('#longitude').val(longitude);
            
        }
        var inputLat = $('#latitude').val();
        var inputLong = $('#longitude').val();
        $('#latitude').val('');
        $('#longitude').val('');
         $.ajax({
             'url': 'http://127.0.0.1:8000/api/apartments?lat=' + inputLat + '&lon=' + inputLong,
             'method': 'POST',
             'data': data,
             'success': function (data) {

                 console.log(data);


             },
             'error': function () {
                 console.log('error');


             }
         });
      },
      error: function (richiesta, stato, errori) {
          alert("E' avvenuto un errore.");
      },
  });
}
