@extends('layouts.master')

@section('title', 'Login')

@section('content')
<div class="container mt-5">
    <h1>Login</h1>

    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
    <form action="{{ route('site.login.process') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="email" class="form-label">E-mail</label>
            <input type="email" class="form-control" id="email" name="usuario" >
            
        
        </div>
    
        <div class="mb-3">
            <label for="password" class="form-label">Senha</label>
            <input type="password" class="form-control" id="password" name="senha" >
        
        </div>
    
        <button type="submit" class="btn btn-primary">Entrar</button>
    </form>
 
</div>
@endsection
