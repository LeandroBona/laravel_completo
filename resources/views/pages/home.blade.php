@extends('layouts.master')

@section('title', 'Home')

@section('content')
    <h1>Bem-vindo à Página Inicial</h1>
    <div class="row">
        @foreach($featuredPosts as $post)
            <div class="col-md-4">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">{{ $post['title'] }}</h5>
                        <p class="card-text">{{ $post['content'] }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection