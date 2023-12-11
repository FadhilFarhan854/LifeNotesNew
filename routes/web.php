<?php

use App\Http\Controllers\CatatanController;
use App\Http\Controllers\NotesMainController;
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

Route::get('/NotesMain', [NotesMainController::class, 'index']);

Route::post('/bRegister', [UserController::class, 'register']);
Route::post('/bLogin',  [UserController::class, 'Login']);

Route::get('/Login', function () {
    return view('Login');
});
Route::get('/Register', function () {
    return view('Register');
});

Route::get('/Catatan/{id_catatan}', [CatatanController::class, 'index']);
Route::get('/Catatan/{id_catatan}', [CatatanController::class, 'index']);
Route::get('/Search', [CatatanController::class, 'search']);

Route::get('/LaporanKeuangan', function () {
    return view('laporanKeuangan');
});
Route::get('/Forum', function () {
    return view('Forum');
});
Route::get('/Todolist', function () {
    return view('Todolist');
});
Route::get('/dataKeuangan', function () {
    return view('dataKeuangan');
});
