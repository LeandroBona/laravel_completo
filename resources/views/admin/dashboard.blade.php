@extends('layouts.master')

@section('title', 'Admin Dashboard')

@section('content')
    <h1>Admin Dashboard</h1>
    <p>Bem-vindo ao painel administrativo!</p>
    
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Estatísticas</h5>
                    <p class="card-text">Aqui você pode ver suas estatísticas.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Gerenciar Itens</h5>
                    <p class="card-text">Acesse para gerenciar os itens do sistema.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Configurações</h5>
                    <p class="card-text">Ajuste as configurações do sistema.</p>
                </div>
            </div>
        </div>
    </div>
@endsection
