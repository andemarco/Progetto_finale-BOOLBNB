@extends('layouts.app')

@section('content')
    <table class="table">
      <thead>
        <tr>
            <th>ID</th>
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
            <th colspan="11"></th>
        </tr>
      </thead>
      <tbody>
        <tr>
            <td>{{$apartment->id}}</td>
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
@endsection