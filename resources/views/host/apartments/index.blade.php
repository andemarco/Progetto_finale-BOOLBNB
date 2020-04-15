@extends('layouts.app')

@section('content')
<div class="container">
        <a class="btn btn-primary" href="{{route('host.apartments.create')}}">Insert Apartments</a>
      </div>
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
          @foreach ($apartments as $apartment)
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
            <td>{{$apartment->image_path}}</td>
            <td>{{$apartment->published}}</td>
            {{-- <td><a class="btn btn-primary" href="{{route('host.apartments.show', $apartment->id)}}">View</a> </td>
            <td><a class="btn btn-primary" href="{{route('admin.posts.edit', $post->slug)}}">Edit</a> </td>
            <td>
            <form action="{{route('admin.posts.destroy', $post)}}" method="post">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit">Delete</button>  
              </form> --}}
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
</div>
@endsection
