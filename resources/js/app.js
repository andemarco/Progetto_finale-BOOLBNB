var $ = require( "jquery" );

require('./bootstrap');

var Chart = require('chart.js');
var url = 'http://127.0.0.1:8000/apartments/chart';
        var Views = new Array();
        var Title = new Array();
        $(document).ready(function(){
          $.get(url, function(response){
            response.forEach(function(data){
              Views.push(data.views);
              Title.push(data.title);
            });
            var ctx = document.getElementById("canvas").getContext('2d');
            ctx.canvas.width = 1137;
            ctx.canvas.height = 528;
                var myChart = new Chart(ctx, {
                  type: 'bar',
                  data: {
                      labels:Title,
                      datasets: [{
                          label: 'Visite',
                          data: Views,
                          borderWidth: 1,
                          backgroundColor: ["#34558b", "#d13b40 ", "#ffaf12 ", "#eaac9d", "#4ec5a5", "#565d47", "#798fa8", "#fd823e", "#117893 ", "#f0daa4", "#eaac9d", "#a2553a", "#72617d", "#b49c73 ", "#3b3d4b"]
                      }]
                  },
                  options: {
                      scales: {
                          yAxes: [{
                              ticks: {
                                  beginAtZero:true
                              }
                          }]
                      }
                  }
              });
          });
        });
        
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
$(document).ready(function() {
  $('#chart_button').click(function() {
    $('.chart-container').fadeIn();
  });
  $('#close_chart').click(function() {
    $('.chart-container').fadeOut();
  });
  $(document).keyup(function(e) {
    if (e.key === "Escape") {
      $('.chart-container').fadeOut();
    }
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



