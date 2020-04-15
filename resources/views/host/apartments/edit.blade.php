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
          <label for="title">Title</label>
        <input class="form-control" type="text" name="title" value="{{$apartment->title}}">
        </div>
        <div class="form-group">
          <label for="description">Description</label>
        <input class="form-control" type="text" name="description" value="{{$apartment->description}}">
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
            <option value="0" {{ ($apartment->published == 0) ? 'selected' : '' }}>No Published</option>
            <option value="1" {{ ($apartment->published == 1) ? 'selected' : '' }}>Published</option>
            {{-- @if ($apartment->published == 0)
            <option value="0" selected>No Published</option>
            <option value="1">Published</option>
            @elseif ($apartment->published == 1)
            <option value="0">No Published</option>
            <option value="1" selected>Published</option>
            @endif --}}
          </select>
        </div>
        <div class="form-group">
          <label for="services">Services</label>
          @foreach ($services as $service)
          <div>
            <span>{{$service->name}}</span>
            <input type="checkbox" name="services[]" value="{{$service->id}}" {{($apartment->services->contains($service->id)) ? 'checked' : ''}}>
          </div>
          @endforeach
        </div>
        <div class="form-group">
           <label for="images">Images</label>
            @isset($apartment->image_path)
              <img src="{{asset('storage/' . $apartment->image_path)}}" alt="">
            @endisset
           <input type="file" name="image_path" accept="image/*">
        </div>
        <button class="btn btn-success" type="submit">Salva</button>
      </form>
    </div>
  </div>
@endsection