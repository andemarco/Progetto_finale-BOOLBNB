@extends('layouts.app')
@section('content')
    <div class="jumbo-edit">
      <div class="box-jumbo-edit">
        <div class="border-text">
          <h1>Aggiorna il tuo appartamento</h1>
        </div>
      </div>
    </div>
    <div class="box-arrow">
      <h2>Modifica</h2>
      <i class="far fa-arrow-alt-circle-down"></i>
    </div>
  <div class="box-create-edit">
    <div class="box-row">
      <form action="{{route('host.apartments.update', $apartment->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="form-group">
          <label for="title">Titolo</label>
        <input class="form-control" type="text" name="title" value="{{$apartment->title}}">
        </div>
        <div class="form-group">
          <label for="description">Descrizione</label>
          <input class="form-control" type="text" name="description" value="{{$apartment->description}}">
        </div>
        <div class="services-box-create">
          <div class="form-group flex-column">
            <label for="number_of_rooms">Camere</label>
          <input class="form-control input-text" type="text" name="number_of_rooms" value="{{$apartment->number_of_rooms}}">
          </div>
          <div class="form-group flex-column">
            <label for="number_of_bath">Bagni</label>
            <input class="form-control input-text" type="text" name="number_of_bath" value="{{$apartment->number_of_bath}}">
          </div>
          <div class="form-group flex-column">
            <label for="number_of_beds">Letti</label>
            <input class="form-control input-text" type="text" name="number_of_beds" value="{{$apartment->number_of_beds}}">
          </div>
          <div class="form-group flex-column">
            <label for="meters">Metratura</label>
            <input class="form-control input-text" type="text" name="meters" value="{{$apartment->meters}}">
          </div>
        </div>
        <div class="form-group" hidden>
          <label for="address">Indirizzo</label>
          <input class="form-control" type="text" name="address" value="{{$apartment->address}}">
        </div>
        <div class="form-group" hidden>
          <label for="latitude">Latitudine</label>
          <input class="form-control" type="text" name="latitude" value="{{$apartment->latitude}}">
        </div>
        <div class="form-group" hidden>
          <label for="longitude">Longitudine</label>
          <input class="form-control" type="text" name="longitude" value="{{$apartment->longitude}}">
        </div>
        <div class="form-group">
          <label for="price_for_night">Prezzo per notte</label>
          <input class="form-control" type="text" name="price_for_night" value="{{$apartment->price_for_night}}">
        </div>
        <div class="input-group mb-3 box-publish">
          <div class="input-group-prepend">
            <label class="input-group-text" for="published">Opzioni</label>
          </div>
          <select class="custom-select" id="inputGroupSelect01" name="published">
            <option value="0" {{ ($apartment->published == 0) ? 'selected' : '' }}>Non pubblicare l'appartamento</option>
            <option value="1" {{ ($apartment->published == 1) ? 'selected' : '' }}>Pubblica l'appartamento</option>
          </select>
        </div>
        {{-- Services --}}
        <div class="form-group box-services">
          <label for="services">Servizi</label>
          <div class="all-services">
            @foreach ($services as $service)
            <div class="checkbox-services">
              <span>{{$service->name}}</span>
              <input type="checkbox" name="services[]" value="{{$service->id}}" {{($apartment->services->contains($service->id)) ? 'checked' : ''}}>
            </div>
            @endforeach
          </div>
        </div>
        <div class="form-group">
           <label for="images">Immagine</label>
            {{-- @isset($apartment->image_path)
              <img src="{{asset('storage/' . $apartment->image_path)}}" alt="">
            @endisset --}}
           <input type="file" name="image_path" accept="image/*">
        </div>
        <button class="btn btn-family" type="submit">Salva</button>
      </form>
    </div>
  </div>
  <script src="{{asset('js/toggle.js')}}"></script>
@endsection


















































