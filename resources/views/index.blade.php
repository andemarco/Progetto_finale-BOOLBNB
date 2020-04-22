@extends('layouts.app')

@section('content')
  <div class="form">
      <div class="form-group">
        <label for="radius">distanza in km</label>
        <input type="number" name="radius" id="radius">
        {{-- <input type="range" name="radius" id="radius" min="20" max="1000"> --}}
        {{-- <input type="range" name="radius" id="radius" value="24" min="20" max="1000" onchange="getvalor(this.value);" oninput="radius.value = radius.value">     <input type="text" name="ageOutputName" id="ageOutputId">  --}}
        <script>
          const $ = require('jquery');
          alert('ciao');
        </script>
      </div>

      <div class="form-group">
        <label for="number_of_bath">Bagni</label>
        <input type="number" name="bath" id="bath">
      </div>
      <div class="form-group">
        <label for="number_of_rooms">Stanze</label>
        <input type="number" name="rooms" id="rooms">
      </div>
      <div class="form-group">
        <label for="number_of_beds">Letti</label>
        <input type="number" name="beds" id="beds">
      </div>
      <div class="form-group">
        <label for="price_for_night">Prezzo per notte</label>
        <input type="number" name="price" id="price">
      </div>
      
      
      </div>

      <div class="input-group mb-3">
        <div class="input-group-text">
          <label for="aut">aut</label>
          <input class="service_check" type="checkbox" name="services[]" value="1" aria-label="Checkbox for following text input">
        </div>
        <div class="input-group-text">
          <label for="id">id</label>
          <input class="service_check" type="checkbox" name="services[]" value="2" aria-label="Checkbox for following text input">
        </div>
        <div class="input-group-text">
          <label for="itaque">itaque</label>
          <input class="service_check" type="checkbox" name="services[]" value="3" aria-label="Checkbox for following text input">
        </div>
        <div class="input-group-text">
          <label for="nihil">nihil</label>
          <input class="service_check" type="checkbox" name="services[]" value="4" aria-label="Checkbox for following text input">
        </div>
        <div class="input-group-text">
          <label for="qui">qui</label>
          <input class="service_check" type="checkbox" name="services[]" value="5" aria-label="Checkbox for following text input">
        </div>
        <div class="input-group-text">
          <label for="vero">vero</label>
          <input class="service_check" type="checkbox" name="services[]" value="6" aria-label="Checkbox for following text input">
        </div>
    </div>
    <button class="btn btn-warning" id="btn-filter" type="submit">Filter</button>
  </div>

  <div class="append-house">

  </div>
    

  <script id="entry-template" type="text/x-handlebars-template">
      <div class="entry">
          <h1>@{{title}}</h1>
          <div class="body">
          @{{body}}
          </div>
      </div>
  </script>
</div>
@endsection