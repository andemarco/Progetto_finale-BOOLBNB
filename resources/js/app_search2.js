const $ = require('jquery');

require('./bootstrap');

const Handlebars = require("handlebars");
var queryString = decodeURIComponent(window.location.search);
query(queryString);
searchApartments($('#city').val());


$('#btn-search').click(function() {
  var inputCity = $('#city').val();
  if (inputCity == '') {
    alert('non hai indicato una città')
  } else {
    var queryString = '?' + inputCity
    window.location.href = 'http://127.0.0.1:8000/search' + queryString;
    return false;
    query(queryString);
  }
});



$('#btn-filter').click(function() {
    $('.append-house').html('');
    var inputAddress = $('#radius').val() * 1000;

    var inputBath = $('#bath').val();
    var inputRooms = $('#rooms').val();
    var inputBeds = $('#beds').val();
    var inputPrice = $('#price').val();
    var inputLat = $('#latitude').val();
    var inputLong = $('#longitude').val();

    var checkboxArray = $("input[type=checkbox]:checked.service_check").map(function () {
        return $(this).val()
    }).get();

    var data = {
        lat: inputLat,
        long: inputLong,
        rad: inputAddress,
        services: checkboxArray
    };


    if (inputBath != null && inputBath > null) {
      data['bath'] = inputBath;
    }
    if (inputRooms != null && inputRooms > null) {
      data['rooms'] = inputRooms;
    }
    if (inputBeds != null && inputBeds > null) {
      data['beds'] = inputBeds;
    }
    if (inputPrice != null && inputPrice > null) {
      data['price'] = inputPrice;
    }

    filterFor(data);
  });



function query(queryString) {
  var queryString = decodeURIComponent(window.location.search);

  queryString = queryString.substring(1);

  var queries = queryString.split("&");

  for (var i = 0; i < queries.length; i++)
  {
    $('#city').val(queries[i]);
  }
}


function searchApartments(address) {
  $.ajax({
    url: 'https://api.tomtom.com/search/2/geocode/' + address + '.json?limit=1&key=T5RJjkTNh0XzCCh2P0vgAYziedXCFFWF',
    method: 'GET',
    success: function (data, state) {
      var thisAddress = data.results;
      for (var i = 0; i < thisAddress.length; i++) {
          var latitude = thisAddress[i].position.lat;
          var longitude = thisAddress[i].position.lon;
          $('#latitude').val('');
          $('#longitude').val('');
          $('#latitude').val(latitude);
          $('#longitude').val(longitude);

      }

      var inputLat = $('#latitude').val();
      var inputLong = $('#longitude').val();
      var radius = 20000;

        $.ajax({
            'url': 'http://127.0.0.1:8000/api/apartments?lat=' + inputLat + '&long=' + inputLong + '&rad=' + radius,
            'method': 'POST',
            'data': data,
            'success': function (data) {

                console.log(data);
                var results = data;

                for (var i = 0; i < results.length; i++) {
                  var thisResult = results[i];

                  var source = $("#entry-template").html();
                  var template = Handlebars.compile(source);
                  var context = {
                      title: thisResult.title,
                      number_of_rooms: thisResult.number_of_rooms,
                      number_of_bath: thisResult.number_of_bath,
                      number_of_beds: thisResult.number_of_beds,
                      price_for_night: thisResult.price_for_night,
                      image_path: 'storage/' + thisResult.image_path + '',
                      id: thisResult.id,

                  };
                  var html = template(context);
                  $('.append-house').append(html);

                }
            },
            'error': function () {
                console.log('error, nessun risultato');
            }
        });
    },
    error: function (richiesta, stato, errori) {
        alert("E' avvenuto un errore.");
    },
  });
}

function filterFor(data) {
  $.ajax({
    'url': 'http://127.0.0.1:8000/api/apartments',
    'method': 'POST',
    'data': data,
    'success': function (data) {

      console.log(data);
      var results = data;

      for (var i = 0; i < results.length; i++) {
        var thisResult = results[i];

        var source = $("#entry-template").html();
        var template = Handlebars.compile(source);
        var context = {
          title: thisResult.title,
          number_of_rooms: thisResult.number_of_rooms,
          number_of_bath: thisResult.number_of_bath,
          number_of_beds: thisResult.number_of_beds,
          price_for_night: thisResult.price_for_night,
          image_path: thisResult.image_path,
          id: thisResult.id,
        };
        var html = template(context);



        $('.append-house').append(html);

      }


    },
    'error': function () {
        console.log('error');


    }
  });
  
}
