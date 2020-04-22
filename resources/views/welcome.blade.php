@extends('layouts.app')
@section('content')


  <div class="content">
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


      <script src="{{asset('js/app_search.js')}}"></script>
      <script src="{{asset('js/app.js')}}"></script>
@endsection
