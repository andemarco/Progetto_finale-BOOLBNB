@extends('layouts.app')

@section('content')
  <h1>Titolo: {{$apartment->title}}</h1>
  <p>Descrizione: {{$apartment->description}}</p>
  <p>Numero di camere: {{$apartment->number_of_rooms}}</p>
  <p>Numro di bagni: {{$apartment->number_of_bath}}</p>
  <p>Numero di letti: {{$apartment->number_of_beds}}</p>
  <p>Metri qudri: {{$apartment->meters}}</p>
  <p>Indirizzo: {{$apartment->address}}</p>
  <p>Prezzo per notte: {{$apartment->price_for_night}}</p>
  <p>Image path: {{$apartment->image_path}}</p>
  <h6>SERVIZI</h6>
  <input class="lat" type="text" name="" value="{{$apartment->latitude}}" hidden>
  <input class="lon" type="text" name="" value="{{$apartment->longitude}}" hidden>
  @foreach ($apartment->services as $service)
    <ul>
      <li>{{$service['name']}}</li>
    </ul>
  @endforeach
  <img src="" class="image" alt="">
  <script src="{{asset('js/app_show.js')}}"></script>
@endsection
