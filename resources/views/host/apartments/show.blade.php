@extends('layouts.app')

@section('content')
<div class="container-show-apt text-center">
    <div class="container-show-image">
      <img src="{{asset('storage/' . $apartment->image_path)}}" height="480px" width="640px" alt="">
    </div>
    <h1>{{$apartment->title}}</h1>
    <p>Posizione: {{$apartment->address}}</p>
    <h3>Descrizione: {{$apartment->description}}</h3>
    <div class="container-show-info">
      <div class="p-info-box">
        <p>Camere: {{$apartment->number_of_rooms}}</p>
      </div>
      <div class="p-info-box">
        <p>Bagni: {{$apartment->number_of_bath}}</p>
      </div>  
      <div class="p-info-box">
        <p>Letti: {{$apartment->number_of_beds}}</p>
      </div>  
      <div class="p-info-box">  
        <p>Metratura: {{$apartment->meters}}</p>
      </div>
    </div>
    <p class="p-price">Prezzo per notte: {{$apartment->price_for_night}}</p>
    
    <h5>SERVIZI:</h5>
    <input class="lat" type="text" name="" value="{{$apartment->latitude}}" hidden>
    <input class="lon" type="text" name="" value="{{$apartment->longitude}}" hidden>
    @foreach ($apartment->services as $service)
      <ul class="ul-services-host">
        <li>{{$service['name']}}</li>
      </ul>
    @endforeach
    @forelse ($apartment->messages as $message)
      <h2 class="message-host">Messaggio Ricevuto:</h2>
        <div class="card mb-5 card-message-contact">
          <div class="card-body">
            <p class="card-text card-sender">Mittente: {{$message->email}}</p>
            <h3 class="card-title">Oggetto: {{$message->title}}</h3>
            <p class="card-text">Testo: {{$message->body}}</p>
          </div>
        </div>
    @empty
        <p>Nessun messaggio per l'appartamento selezionato.</p>
    @endforelse
  </div>     
@endsection