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
    return view('home');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/logout', function () {
    return 'Sesión cerrada correctamente';
});

Route::get('/servicios', function () {
    return view('servicios.index');
});

Route::get('/servicios/show/{id}', function ($id) {
    return view('servicios.show', array('id' => $id));
});

Route::get('/servicios/create', function () {
    return view('servicios.create');
});

Route::get('/servicios/edit/{id}', function ($id) {
    return view('servicios.edit', array('id' => $id));
});
