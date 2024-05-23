<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LibroCRUDController;
use App\Http\Controllers\PrestamoCRUDController;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', [Controller::class,'home']);

Route::get('/addLibro', [LibroCRUDController::class,'mostrarFormularioAdd']);
Route::post('/addLibroPost', [LibroCRUDController::class,'AddLibro'])->name('AddLibro');
Route::get('/libros', [LibroCRUDController::class, 'todos']);
Route::get('/libros/{id}', [LibroCRUDController::class, 'detalleslibro']);
Route::get('/libros/{id}/editar', [LibroCRUDController::class, 'editarLibro']);
Route::put('/libros/{id}', [LibroCRUDController::class, 'update'])->name('update');

Route::middleware('auth')->group(function () {

Route::get('/prestamos', [PrestamoCRUDController::class, 'index'])->name('index');
Route::get('/prestamos/create', [PrestamoCRUDController::class, 'create'])->name('create');
Route::post('/prestamos', [PrestamoCRUDController::class, 'store'])->name('store')->middleware('auth');
Route::get('/prestamos/{id}', [PrestamoCRUDController::class, 'show'])->name('show');
Route::delete('/destroy/{id}', [PrestamoCRUDController::class, 'destroy'])->name('destroy')->middleware('auth');

});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/my-loans', [UserController::class, 'showMyLoans'])->middleware('auth')->name('my-loans');
