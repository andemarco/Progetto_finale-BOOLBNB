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
  $('#btn-filter').click(function() {
    var inputAddress = $('#radius').val() * 1000;
    var inputBath = $('#bath').val();
    var inputRooms = $('#rooms').val();
    var inputBeds = $('#beds').val();
    var inputPrice = $('#price').val();
    
    
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
      var radius = 20000000000;
      $('#latitude').val('');
      $('#longitude').val('');
        $.ajax({
            'url': 'http://127.0.0.1:8000/api/apartments?lat=' + inputLat + '&lon=' + inputLong + '&rad=' + radius,
            'method': 'POST',
            'data': data,
            'success': function (data) {

                console.log(data);
                var results = data;

                for (let i = 0; i < results.length; i++) {
                  var thisResult = results[i];
                  
                  var source = $("#entry-template").html();
                  var template = Handlebars.compile(source);
                  var context = {
                      title: thisResult.title,
                      body: thisResult.address
                  };
                  var html = template(context);
                  
                  $('.append-house').append(html);
                  
                }

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

function filterFor(val1, val2, val3, val4, val5) {
  
}
