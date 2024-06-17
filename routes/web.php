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
Route::get('/admin', [PagesController::class, 'admin'])->name('admin');
Route::get('/notificacion', [PagesController::class, 'notificacion'])->name('notificacion');
Route::get('/citas', [PagesController::class, 'citas'])->name('citas');
Route::get('/empleados', [PagesController::class, 'empleados'])->name('empleados');
Route::get('/servicios1', [PagesController::class, 'servicios1'])->name('servicios1');


