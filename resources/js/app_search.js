require('./bootstrap');

const $ = require('jquery');
const Handlebars = require("handlebars");

$(document).ready(function () {
  $('#btn-search').click(function() {
    var inputCity = $('#city').val();
    var data = callTomTom(inputCity);
    // console.log(callTomTom(inputCity));

    for (var i = 0; i < data.length; i++) {
      console.log(data[i]);
      
      
    }
    

   
   

    //  $.ajax({
    //      'url': 'http://127.0.0.1:8000/api/apartments',
    //      'method': 'POST',
    //      'data': data,
    //      'success': function (data) {

    //          console.log(data.results);
             

    //      },
    //      'error': function () {
    //          console.log('error');

    //      }
    //  });
    
  });
});


//------------------------------FUNCTIONS-------------------------------



function callTomTom(address) {
  $.ajax({
      url: 'https://api.tomtom.com/search/2/geocode/' + address + '.json?limit=1&countrySet=IT&key=T5RJjkTNh0XzCCh2P0vgAYziedXCFFWF',
      method: 'GET',
      success: function (data, state) {
        var thisAddress = data.results;
        var position = [];
        for (var i = 0; i < thisAddress.length; i++) {
            var latitude = thisAddress[i].position.lat;
            var longitude = thisAddress[i].position.lon;
            position.push(latitude, longitude);
            
        }
        // var latitude = data.lat;
        // var longitude = data.lon;
        return console.log(position);
        ;
        
        
      },
      error: function (richiesta, stato, errori) {
          alert("E' avvenuto un errore.");
      },
  });
}


function searchApartments(value) {
  
}