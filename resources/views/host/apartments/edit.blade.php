@extends('layouts.app')
@section('content')

    <div class="container">
    <div class="row">
      <form action="{{route('host.apartments.update', $apartment->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="form-group">
          <label for="number_of_rooms">Number of rooms</label>
        <input class="form-control" type="text" name="number_of_rooms" value="{{$apartment->number_of_rooms}}">
        </div>
        <div class="form-group">
          <label for="number_of_bath">Number of bath</label>
          <input class="form-control" type="text" name="number_of_bath" value="{{$apartment->number_of_bath}}">
        </div>
        <div class="form-group">
          <label for="number_of_beds">Number of beds</label>
          <input class="form-control" type="text" name="number_of_beds" value="{{$apartment->number_of_beds}}">
        </div>
        <div class="form-group">
          <label for="meters">Meters</label>
          <input class="form-control" type="text" name="meters" value="{{$apartment->meters}}">
        </div>
        <div class="form-group">
          <label for="address">Address</label>
          <input class="form-control" type="text" name="address" value="{{$apartment->address}}">
        </div>
        <div class="form-group">
          <label for="latitude">Latitude</label>
          <input class="form-control" type="text" name="latitude" value="{{$apartment->latitude}}">
        </div>
        <div class="form-group">
          <label for="longitude">Longitude</label>
          <input class="form-control" type="text" name="longitude" value="{{$apartment->longitude}}">
        </div>
        <div class="form-group">
          <label for="price_for_night">Price for night</label>
          <input class="form-control" type="text" name="price_for_night" value="{{$apartment->price_for_night}}">
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
           <input type="file" name="image_path" accept="image/*">
        </div>
        <button class="btn btn-success" type="submit">Salva</button>
      </form>
    </div>
  </div>
@endsection