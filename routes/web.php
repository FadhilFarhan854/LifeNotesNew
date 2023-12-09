<?php

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
    return view('LandingPage');
});
Route::get('/register', function () {
    return view('Register');
});
Route::get('/Login', function () {
    return view('Login');
});

Route::get('/Catatan', function () {
    return view('Catatan');
});
Route::get('/Homepage', function () {
    return view('NotesMain');
});
Route::get('/LaporanKeuangan', function () {
    return view('laporanKeuangan');
});