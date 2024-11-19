<?php

use Illuminate\Support\Facades\Route;

// Importando o caminho das controllers
use App\Http\Controllers\PageController;
use App\Http\Controllers\Contato;

// Name: nomeando as rotas
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::post('/contact', [Contato::class, 'store'])->name('contact.store');
Route::get('/login', [LoginController::class, 'login'])->name('site.login');
Route::post('/login', [LoginController::class, 'processLogin'])->name('site.login.process');


// Agrupamento de rotas para área administrativa
Route::prefix('admin')->group(function() {
    Route::get('/dashboard', [PageController::class, 'dashboard'])->name('admin.dashboard');
});
