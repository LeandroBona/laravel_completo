@extends('layouts.master')

@section('title', 'Serviços')

@section('content')
    <h1>Nossos Serviços</h1>
    <div class="row">
        @foreach($services as $service)
            <div class="col-md-4">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">{{ $service['name'] }}</h5>
                        <p class="card-text">{{ $service['description'] }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection