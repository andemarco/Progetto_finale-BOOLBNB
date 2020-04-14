@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                @foreach ($apartments as $apartment)
                <div class="card-body">
                    @dd($apartment['meters'])
                        
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
