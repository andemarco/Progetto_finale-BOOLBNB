@extends('layouts.app')

@section('content')

  <div class="form" id="form-search" style="background-image: url('storage/images/ImmagineSearch.jpg');">
    <div class="form" id="form-search-filter">
      <div class="col-sm-10 box-form-filter ">
        <div class="form-group city-search">
          <input class="form-control-search" type="text" name="address" id="city" placeholder="Inserisci la città di destinazione" city-data="">
          <a class="btn btn-warning" id="btn-search"><i class="fas fa-search"></i></a>
        </div>
        <div class="container-group">
          <div class="label-group">
            <label class="label-title" for="radius">Raggio di ricerca</label>
            <label class="label-title" for="number_of_bath">Bagni</label>
            <label class="label-title" for="number_of_rooms">Camere</label>
            <label class="label-title" for="number_of_beds">Letti</label>
            <label class="label-title" for="price_for_night">Prezzo per notte</label>
          </div>
          <div class="value-group">
            <div class="form-group">
              <input class="filter-input" type="number" name="radius" id="radius" min="20"  value="20">
            </div>
            <div class="form-group">
              <input class="filter-input" type="number" name="bath" id="bath" min="1" value="1">
            </div>
            <div class="form-group">
              <input class="filter-input" type="number" name="rooms" id="rooms" min="1" value="1">
            </div>
            <div class="form-group">
              <input class="filter-input" type="number" name="beds" id="beds" min="1" value="1">
            </div>
            <div class="form-group">
              <input class="filter-input" type="number" name="price" id="price" min="1" value="1">
            </div>
          </div>
        </div>
        <div class="input-group">
          @foreach ($services as $service)
            <div class="input-group-text">
              <label for="{{$service->name}}">{{$service->name}}</label>
              <input class="service_check" type="checkbox" name="services[]" value="{{$service->id}}" aria-label="Checkbox for following text input">
            </div>
          @endforeach
            </div>
          <button class="btn btn-family" id="btn-filter" type="submit">Filtra i risultati</button>
        </div>
        
        {{-- <div class="append">
        </div> --}}
      </div>
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
    <script id="entry-template" type="text/x-handlebars-template">
      <div class="entry">
        <div class="card-apt">
          <img class="image-search-apt"src="@{{image_path}}" alt="">
          <div class="body-search-apt">
            <h1><a href="http://127.0.0.1:8000/search/show/@{{id}}">@{{title}}</a></h1>
            <p class="first-p">Numero di camere:@{{number_of_rooms}}</p>
            <p>Numero di bagni: @{{number_of_bath}}</p>
            <p>Posti letto: @{{number_of_beds}}</p>
            <p class="last-p">Prezzo: @{{price_for_night}}/notte</p>
          </div>
        </div>
      </div>
  </script>
  <script src="{{asset('js/app_search2.js')}}"></script>
  <script src="{{asset('js/app.js')}}"></script>
</div>
@endsection
