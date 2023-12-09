<?php

use App\Http\Controllers\UserController;
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
Route::get('/NotesMain', function () {
    return view('NotesMain');
});
Route::post('/bRegister', [UserController::class, 'register']);
Route::post('/bLogin',  [UserController::class, 'Login']);

Route::get('/Login', function () {
    return view('Login');
});
Route::get('/Register', function () {
    return view('Register');
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
Route::get('/Forum', function () {
    return view('Forum');
});
Route::get('/Todolist', function () {
    return view('Todolist');
});
