<?php

use Illuminate\Support\Facades\Route;

// Importando o caminho das controllers
use App\Http\Controllers\PageController;
use App\Http\Controllers\Contato;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TagController;
use App\Http\Middleware\logAcessoMiddleware;
use App\Http\Controllers\LoginController;

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
    Route::get('/configuracoes', [PageController::class, 'dashboard'])->name('admin.dashboard');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/profiles/create', [ProfileController::class, 'create'])->name('profiles.create');
    Route::post('/profiles', [ProfileController::class, 'store'])->name('profiles.store');
    Route::get('/profiles/{id}', [ProfileController::class, 'show'])->name('profiles.show');
});

Route::resource('profiles', ProfileController::class);
Route::resource('posts', PostController::class);
Route::resource('tags', TagController::class);
