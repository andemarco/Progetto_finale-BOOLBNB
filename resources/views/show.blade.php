@extends('layouts.app')

@section('content')
<div class="container-show-apt">
  @if (session('message'))
  <div class="alert alert-success">
    Hai inviato correttamente il messaggio.
  </div>
  @endif
  <div class="container-show-image">
    <img src="{{asset('storage/' . $apartment->image_path)}}" alt="">
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
    <ul class="ul-services">
      <li>{{$service['name']}}</li>
    </ul>
  @endforeach
  <div class="container-show-message">
    <h2>Contatta l'host</h2>
    <form action="{{route('message.writeMessage')}} " method="post">
      @csrf
      @method('POST')
      <input type="number" name="apartment_id" value="{{$apartment->id}}" hidden>
      <div class="form-group">
        <label for="title">Oggetto</label>
        <input type="text" name="title" class="form-control">
      </div>
      <div class="form-group dimension-text-area">
        <label for="body">Messaggio</label>
        <textarea class="message-text-area"  textarea style="resize:none" name="body" id="body">
        </textarea>
      </div>
      <div class="form-group">
        <label for="email">La tua mail</label>
        <input type="text" name="email" class="form-control" value="{{ (Auth::user()) ? Auth::user()->email : '' }}">
      </div>
      <button type="submit" class="btn btn-family" id="button-show">Invia</button>
    </form>
  </div>
</div>  


  <script src="{{asset('js/app_show.js')}}"></script>
  <script src="{{asset('js/app.js')}}"></script>
@endsection
