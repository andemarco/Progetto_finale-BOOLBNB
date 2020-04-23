require('./bootstrap');

const $ = require('jquery');
const Handlebars = require("handlebars");

  var lat = $('.lat').val();
  var lon = $('.lon').val();
  console.log(lat);

  var url = 'https://api.tomtom.com/map/1/staticimage?layer=basic&style=main&format=png&zoom=15&center=' + lon + ',' + lat + '&width=512&height=512&view=IN&key=T5RJjkTNh0XzCCh2P0vgAYziedXCFFWF';

  $('.image').attr('src' , url);
