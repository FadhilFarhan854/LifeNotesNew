<?php

use App\Http\Controllers\CatatanController;
use App\Http\Controllers\CatatanKeuanganController;
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
Route::get('/TambahCatatan', [NotesMainController::class, 'create']);
Route::get('/Search', [CatatanController::class, 'search']);

Route::post('/bRegister', [UserController::class, 'register']);
Route::post('/bLogin',  [UserController::class, 'Login']);

Route::get('/Login', function () {
    return view('Login');
});
Route::get('/Register', function () {
    return view('Register');
});

Route::get('/Catatan/{id_catatan}', [CatatanController::class, 'index']);
Route::get('/HapusCatatan/{id_catatan}', [CatatanController::class, 'delete']);
Route::put('/update/{id}', [CatatanController::class, 'update'])->name('update');

Route::get('/LaporanKeuangan', [CatatanKeuanganController::class, 'index']);
Route::get('/dataKeuangan/{id_catatan}', [CatatanKeuanganController::class, 'show']);
Route::get('/SearchCatatanKeuangan', [CatatanKeuanganController::class, 'search']);
Route::post('/TambahCatatanKeuangan', [CatatanKeuanganController::class, 'create']);
Route::post('/UbahJudulCatatanKeuangan/{id_catatan}', [CatatanKeuanganController::class, 'edit']);
Route::post('/UbahDataCatatanKeuangan/{id_catatan}', [CatatanKeuanganController::class, 'editData']);
Route::get('/SearchDataKeuangan/{id_catatan}', [CatatanKeuanganController::class, 'searchData']);

Route::get('/HapusCatatanKeuangan/{id_catatan}', [CatatanKeuanganController::class, 'delete']);
Route::get('/TambahDataKeuangan/{id_catatan}', [CatatanKeuanganController::class, 'createData']);

Route::get('/Forum', function () {
    return view('Forum');
});
Route::get('/Todolist', function () {
    return view('Todolist');
});
