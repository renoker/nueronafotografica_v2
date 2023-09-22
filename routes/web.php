<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/arquitectura', function () {
    return view('pages.arquitectura');
});

Route::get('/construccion', function () {
    return view('pages.construccion');
});

Route::get('/corporativa', function () {
    return view('pages.corporativa');
});

Route::get('/publicitaria', function () {
    return view('pages.publicitaria');
});


Route::get('/acerca_de', function () {
    return view('pages.acerca_de');
});

Route::get('/contacto', function () {
    return view('pages.contacto');
});


Route::get('/blog', function () {
    return view('pages.blog');
});

Route::get('/detalle', function () {
    return view('pages.detalle');
});

Route::get('/galeria', function () {
    return view('pages.galeria');
});


// Contactanos
Route::post('/contactanos/store',  [ContactController::class, 'store'])->name('contact.store');
