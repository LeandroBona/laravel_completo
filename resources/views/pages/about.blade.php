@extends('layouts.master')

@section('title', 'Sobre Nós')

@section('content')
    <h1>Sobre Nós</h1>
    <div class="row">
        @foreach($teamMembers as $member)
            <div class="col-md-4">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">{{ $member['name'] }}</h5>
                        <p class="card-text"><strong>{{ $member['role'] }}</strong></p>
                        <p class="card-text">{{ $member['bio'] }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection