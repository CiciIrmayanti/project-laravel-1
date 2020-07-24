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
Route::get('/pengalaman', function () {
    return view('experience');
});
Route::get('/porto', function () {
    return view('portofolio');
});
Route::get('/halaman', function () {
    return view('home');
});

Route::get('/nama/{nis}', function ($nipd) {
    return "Menampilkan NIPD Anda : $nipd";
})->where('nipd', '[A-Z]{2}[0-9]');



Route::fallback(function(){
    return 'Halaman Anda Kosong';
});
