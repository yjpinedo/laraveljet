<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/texto', function () {
    return 'Este es un Texto';
});

Route::get('/arreglo', function () {
    return [1, 2, ['array'], 'holaMundo'];
});

Route::get('/nombre/{nombre}', function ($nombre) {
    return '<h1>El nombre es:' . $nombre . '</h1>';
});

Route::get('/nombre1/{nombre}', function ($nombre) {
    return "<h1>El nombre es: $nombre</h1>";
});

Route::get('/cliente/{cliente?}', function($cliente = 'Cliente General'){
    return "<h1>El cliente es: $cliente </h1>";
});

Route ::get('/ruta1', function(){
    return '<h1>Esta es la vista de la Ruta 1</h1>';
})->name('RutaNro1');

Route ::get('/ruta2', function(){
    return redirect()->route('RutaNro1');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
