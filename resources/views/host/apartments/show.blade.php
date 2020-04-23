@extends('layouts.app')

@section('content')
    <table class="table">
      <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Description</th>
            <th>N. Room</th>
            <th>N. Beds</th>
            <th>N. Bath</th>
            <th>MQ2</th>
            <th>Adress</th>
            <th>Lat</th>
            <th>Lon</th>
            <th>Price</th>
            <th>Image</th>
            <th>Published</th>
            <th colspan="13"></th>
        </tr>
      </thead>
      <tbody>
        <tr>
            <td>{{$apartment->id}}</td>
            <td>{{$apartment->title}}</td>
            <td>{{$apartment->description}}</td>
            <td>{{$apartment->number_of_rooms}}</td>
            <td>{{$apartment->number_of_bath}}</td>
            <td>{{$apartment->number_of_beds}}</td>
            <td>{{$apartment->meters}}</td>
            <td>{{$apartment->address}}</td>
            <td>{{$apartment->latitude}}</td>
            <td>{{$apartment->longitude}}</td>
            <td>{{$apartment->price_for_night}}</td>
            <td><img src="{{asset('storage/' . $apartment->image_path)}}" alt=""></td>
            <td>{{$apartment->published}}</td>
        </tr>        
      </tbody>
    </table>
    @forelse ($apartment->messages as $message)
        <div class="card mb-5" style="width: 18rem;">
          <div class="card-body">
            <h3 class="card-title">{{$message->title}}</h3>
            <p class="card-text">{{$message->body}}</p>
          </div>
        </div>
    @empty
        <p>No Messages</p>
    @endforelse
@endsection