@extends('layouts.app')
@section('content')

    <div class="container">
    <div class="row">
      <form action="{{route('host.apartments.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('POST')
        <div class="form-group">
          <label for="title">Title</label>
          <input class="form-control @error('title') is-invalid @enderror" type="text" name="title">
          @error('title')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
        </div>
        <div class="form-group">
          <label for="description">Description</label>
          <input class="form-control @error('description') is-invalid @enderror" type="text" name="description">
          @error('description')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
        </div>
        <div class="form-group">
          <label for="number_of_rooms">Number of rooms</label>
          <input class="form-control @error('number_of_rooms') is-invalid @enderror" type="text" name="number_of_rooms">
          @error('number_of_rooms')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
        </div>
        <div class="form-group">
          <label for="number_of_bath">Number of bath</label>
          <input class="form-control @error('number_of_bath') is-invalid @enderror" type="text" name="number_of_bath">
          @error('number_of_bath')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
        </div>
        <div class="form-group">
          <label for="number_of_beds">Number of beds</label>
          <input class="form-control @error('number_of_beds') is-invalid @enderror" type="text" name="number_of_beds">
          @error('number_of_beds')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
        </div>
        <div class="form-group">
          <label for="meters">Meters</label>
          <input class="form-control @error('meters') is-invalid @enderror" type="text" name="meters">
          @error('meters')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
        </div>
        <div class="form-group">
          <label for="address">Address</label>
          <input id="address" class="form-control @error('address') is-invalid @enderror" type="text" name="address">
          @error('address')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
          <button class="btn btn-warning mt-2 btn-search" type="button">Search</button>
          <ul id="address-list">

          </ul>
        </div>
        <div class="form-group">
          <input id="latitude" class="form-control" type="text" name="latitude" hidden>
        </div>
        <div class="form-group">
          <input id="longitude" class="form-control" type="text" name="longitude" hidden>
        </div>
        <div class="form-group">
          <label for="price_for_night">Price for night</label>
          <input class="form-control @error('price_for_night') is-invalid @enderror" type="text" name="price_for_night">
          @error('price_for_night')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
        </div>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <label class="input-group-text" for="published">Options</label>
          </div>
          <select class="custom-select" id="inputGroupSelect01" name="published">
            <option selected>Choose...</option>
            <option value="0">No Published</option>
            <option value="1">Published</option>
          </select>
        </div>
        <div class="form-group">
          <label for="services">Services</label>
          @foreach ($services as $service)
          <div>
            <span>{{$service->name}}</span>
            <input type="checkbox" name="services[]" value="{{$service->id}}">
          </div>
          @endforeach
        </div>
        <div class="form-group">
           <label for="images">Images</label>
           <input type="file" class="@error('image_path') is-invalid @enderror" name="image_path" accept="image/*">
            @error('image_path')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
            @enderror
        </div>
        <button class="btn btn-success" type="submit">Salva</button>
      </form>
    </div>
  </div>
@endsection
<script src="{{asset('js/app.js')}}"></script>