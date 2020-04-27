@extends('layouts.app')
@section('content')

<section id='city-search'>
  <div class="content">
    <div class="form" id="form-copy">
      <div class="form-group city-search">
        <input class="form-control" type="text" name="address" id="city" placeholder="Insert The City Of Destination" city-data="">
        {{-- <button class="btn btn-warning" type="submit" id="btn-search">invia</button> --}}
        <a class="btn btn-warning" id="btn-search"><i class="fas fa-search"></i></a>
      
      </div>
      <div class="form-group">
          <input id="latitude" class="form-control" type="text" name="latitude"  hidden>
      </div>
      <div class="form-group">
          <input id="longitude" class="form-control" type="text" name="longitude" hidden>
      </div>
    </div>
</section>
<section id='sponsored-apt'>
<div class="apt-container pt-5">
  <h2 class="sponsor-title text-center p-2">Apt Sponsored</h2>
  <div class="box-apt">
    <div class="box-container">
      {{-- BOX APARTMENTS SPONSORED --}}
      <div class="single-apt" id="apt1">
        <div class="apt-image">
          <img class="house-image" src="{{asset('storage/images/CASAPROVA.jpeg')}}" height="300" width="400" alt="">
        </div>
        <div class="apt-info p-3">
          <h5>Titolo APP</h5>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nobis ipsa sapiente rem optio eaque doloribus corrupti!</p>
        </div> 
      </div>
      <div class="single-apt" id="apt2">
        <div class="apt-image">
          <img class="house-image" src="{{asset('storage/images/CASAPROVA.jpeg')}}" height="300" width="400" alt="">
        </div>
        <div class="apt-info p-3">
          <h5>Titolo APP</h5>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nobis ipsa sapiente rem optio eaque doloribus corrupti!</p>
        </div>
      </div>
      <div class="single-apt" id="apt3">
        <div class="apt-image">
          <img class="house-image" src="{{asset('storage/images/CASAPROVA.jpeg')}}" height="300" width="400" alt="">
        </div>
        <div class="apt-info p-3">
          <h5>Titolo APP</h5>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nobis ipsa sapiente rem optio eaque doloribus corrupti!</p>
        </div>
      </div>
    </div>
  </div>

  <h2 class="sponsor-title text-center p-2">Our Apartments</h2>
  <div class="box-container">
    {{-- BOX APARTMENTS STATIC --}}
    <div class="single-apt" id="apt4">
      <div class="apt-image">
        <img class="house-image" class="house-image" src="{{asset('storage/images/CASAPROVA.jpeg')}}" height="300" width="400" alt="">
      </div>
      <div class="apt-info p-3">
        <h5>Titolo APP</h5>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nobis ipsa sapiente rem optio eaque doloribus corrupti!</p>
      </div> 
    </div>
    <div class="single-apt" id="apt5">
      <div class="apt-image">
        <img class="house-image" src="{{asset('storage/images/CASAPROVA.jpeg')}}" height="300" width="400" alt="">
      </div>
      <div class="apt-info p-3">
        <h5>Titolo APP</h5>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nobis ipsa sapiente rem optio eaque doloribus corrupti!</p>
      </div>
    </div>
    <div class="single-apt" id="apt6">
      <div class="apt-image">
        <img class="house-image" src="{{asset('storage/images/CASAPROVA.jpeg')}}" height="300" width="400" alt="">
      </div>
      <div class="apt-info p-3">
        <h5>Titolo APP</h5>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nobis ipsa sapiente rem optio eaque doloribus corrupti!</p>
      </div>
    </div>
  </div>
</div>
</div>
</section>
<footer class="footer">
  <div class="footer-copyright text-center py-3">© 2020 Copyright
    <a href="https://mdbootstrap.com/education/bootstrap/"> BoolBnB</a>
  </div>
</footer>
      <script src="{{asset('js/app_search.js')}}"></script>
      <script src="{{asset('js/app.js')}}"></script>
@endsection
