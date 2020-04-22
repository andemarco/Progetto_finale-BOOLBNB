@extends('layouts.app')

@section('content')
  <div class="form">

    <div class="form" id="form-copy">
      <div class="form-group city-search">
        <input class="form-control" type="text" name="address" id="city" placeholder="insert your city" city-data="">
        {{-- <button class="btn btn-warning" type="submit" id="btn-search">invia</button> --}}
      <a class="btn btn-warning" id="btn-search">Search</a>
      </div>
      <div class="form-group">
          <input id="latitude" class="form-control" type="text" name="latitude"  hidden>
      </div>
      <div class="form-group">
          <input id="longitude" class="form-control" type="text" name="longitude" hidden>
      </div>
    </div>
    <div class="append-house">

    </div>

      <div class="form-group">
        <label for="radius">distanza in km</label>
        <input type="number" name="radius" id="radius" min="20"  value="20">
        {{-- <input type="range" name="radius" id="radius" min="20" max="1000"> --}}
        {{-- <input type="range" name="radius" id="radius" value="24" min="20" max="1000" onchange="getvalor(this.value);" oninput="radius.value = radius.value">     <input type="text" name="ageOutputName" id="ageOutputId">  --}}
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
        @foreach ($services as $service)
          <div class="input-group-text">
            <label for="{{$service->name}}">{{$service->name}}</label>
            <input class="service_check" type="checkbox" name="services[]" value="{{$service->id}}" aria-label="Checkbox for following text input">
          </div>
        @endforeach


    </div>
    <button class="btn btn-warning" id="btn-filter" type="submit">Filter</button>
  </div>


  <div class="append">
  </div>

  <script src="{{asset('js/app_search2.js')}}"></script>
  <script src="{{asset('js/app.js')}}"></script>
  <script id="entry-template" type="text/x-handlebars-template">
      <div class="entry">
        <div class="card">
          <h1><a href="#">@{{title}}</a></h1>
          <div class="body">
            <p>Numero di camere:@{{number_of_rooms}}</p>
            <p>Numero di bagni: @{{number_of_bath}}</p>
            <p>Posti letto: @{{number_of_beds}}</p>
            <p>Prezzo: @{{price_for_night}}/notte</p>
            <img src="@{{image_path}}" alt="">
          </div>
        </div>
      </div>
  </script>
</div>
@endsection
