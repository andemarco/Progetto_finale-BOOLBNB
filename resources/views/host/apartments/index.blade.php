@extends('layouts.app')

@section('content')
@if (session('delete'))
    <div class="alert alert-danger">
      You deleted the apartment: {{session('delete')->id}}
    </div>
@endif
<div class="container">
        <a class="btn btn-primary" href="{{route('host.apartments.create')}}">Insert Apartments</a>
      </div>
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
          @foreach ($apartments as $apartment)
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
            <td>{{$apartment->image_path}}</td>
            <td>{{$apartment->published}}</td>
            <td><a class="btn btn-primary" href="{{route('host.apartments.show', $apartment->id)}}">View</a> </td>
            <td><a class="btn btn-primary" href="{{route('host.apartments.edit', $apartment->id)}}">Edit</a> </td>
            <td>
            <form action="{{route('host.apartments.destroy', $apartment)}}" method="post">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit">Delete</button>  
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <canvas id="canvas" width="20" height="20"></canvas>
</div>
<script src="{{asset('js/app.js')}}"></script>
@endsection
