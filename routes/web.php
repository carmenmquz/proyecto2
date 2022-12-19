<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServicioController;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'getHome']);

// Route::get('/login', function () {
//     return view('auth.login');
// });

// Route::get('/logout', function () {
//     return 'Sesión cerrada correctamente';
// });

Route::get('/servicios', [ServicioController::class, 'getIndex']) -> middleware(['auth']);

Route::get('/servicios/show/{id}', [ServicioController::class, 'getShow']) -> middleware(['auth']);

Route::get('/servicios/create', [ServicioController::class, 'getCreate']) -> middleware(['auth']);

Route::post('/servicios/create', [ServicioController::class, 'postCreate']) -> middleware(['auth']);

Route::get('/servicios/edit/{id}', [ServicioController::class, 'getEdit']) -> middleware(['auth']);

Route::put('/servicios/edit/{id}', [ServicioController::class, 'putEdit']) -> middleware(['auth']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
