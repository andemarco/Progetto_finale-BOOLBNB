@extends('layouts.app')

@section('content')
@if (session('message'))
    <div class="alert alert-danger">
      You create a message: {{session('message')->id}}
    </div>
@endif
  <h1>Titolo: {{$apartment->title}}</h1>
  <p>Descrizione: {{$apartment->description}}</p>
  <p>Numero di camere: {{$apartment->number_of_rooms}}</p>
  <p>Numro di bagni: {{$apartment->number_of_bath}}</p>
  <p>Numero di letti: {{$apartment->number_of_beds}}</p>
  <p>Metri qudri: {{$apartment->meters}}</p>
  <p>Indirizzo: {{$apartment->address}}</p>
  <p>Prezzo per notte: {{$apartment->price_for_night}}</p>
  <p>Image path: {{$apartment->image_path}}</p>
  <img src="{{asset('storage/' . $apartment->image_path)}}" alt="">
  <h6>SERVIZI</h6>
  <input class="lat" type="text" name="" value="{{$apartment->latitude}}" hidden>
  <input class="lon" type="text" name="" value="{{$apartment->longitude}}" hidden>
  @foreach ($apartment->services as $service)
    <ul>
      <li>{{$service['name']}}</li>
    </ul>
  @endforeach
  <img src="" class="image" alt="">




  <form action="{{route('message.writeMessage')}}" method="post">
    @csrf
    @method('POST')
    <input type="number" name="apartment_id" value="{{$apartment->id}}" hidden>
    <div class="form-group">
      <label for="title">Message Title</label>
      <input type="text" name="title" class="form-control">
    </div>
    <div class="form-group">
      <label for="body">Message</label>
      <textarea name="body" id="body" cols="30" rows="10">

      </textarea>
    </div>
    <div class="form-group">
      <label for="email">Your Email</label>
      <input type="text" name="email" class="form-control" value="{{ (Auth::user()) ? Auth::user()->email : '' }}">
    </div>
    <button type="submit" class="btn btn-success">Send message</button>
  </form>
  


  <script src="{{asset('js/app_show.js')}}"></script>
@endsection
