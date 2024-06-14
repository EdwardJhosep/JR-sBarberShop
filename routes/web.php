<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [PagesController::class, 'index'])->name('home');
Route::get('/servicios', [PagesController::class, 'servicios'])->name('servicios');
Route::get('/contacto', [PagesController::class, 'contacto'])->name('contacto');
Route::get('/login', [PagesController::class, 'login'])->name('login');
Route::get('/productos', [PagesController::class, 'productos'])->name('productos');