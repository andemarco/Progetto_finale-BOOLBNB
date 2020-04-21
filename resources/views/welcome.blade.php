<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/apartments') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    BoolBnB
                </div>

              <div class="form">
								<div class="form-group city-search">
									<input class="form-control" type="text" name="address" id="city" placeholder="insert your city">
									<button class="btn btn-warning" id="btn-search" type="submit">Search</button>
								</div>
                <div class="form-group">
                    <input id="latitude" class="form-control" type="text" name="latitude" hidden>
                </div>
                <div class="form-group">
                    <input id="longitude" class="form-control" type="text" name="longitude" hidden>
                </div>
							</div>
								<div class="append-house">

                </div>
------------------------------------------------------------------------------------------------------------------------------------------------
               <div class="form">
                <div class="form-group">
									<label for="radius">distanza in km</label>
									<input type="number" name="radius" id="radius">
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

           

            <script id="entry-template" type="text/x-handlebars-template">
                <div class="entry">
                    <h1>@{{title}}</h1>
                    <div class="body">
                    @{{body}}
                    </div>
                </div>
            </script>
        </div>
    <script src="{{asset('js/app_search.js')}}"></script>
    </body>
</html>
