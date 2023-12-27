<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\CatatanController;
use App\Http\Controllers\NotesMainController;
use App\Http\Controllers\CatatanKeuanganController;
use App\Http\Controllers\CatatanTodolistController;

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
Route::post('/bLogin',  [UserController::class, 'login']);

Route::get('/Login', function () {
    return view('Login');
});
Route::get('/ForgotPass', function () {
    return view('ForgotPass');
});
Route::get('/Register', function () {
    return view('Register');
});
Route::get('/Logout', [UserController::class, 'logout']);

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

Route::get('/Todolist', [CatatanTodolistController::class, 'index']);
Route::get('/EditTodolist/{id_catatan}', [CatatanTodolistController::class, 'edit']);
Route::patch('/update-status/{id}', [CatatanTodolistController::class, 'updateStatus']);
Route::get('/TambahTodolist', [CatatanTodolistController::class, 'create']);
Route::get('/SearchTodolist', [CatatanTodolistController::class, 'search']);

//User
Route::get('/Forum', [ForumController::class, 'indexUser']);
Route::get('/SearchForum', [ForumController::class, 'search']);
Route::post('/likes/{id_saluran}', [ForumController::class, 'likes']);

//Admin
Route::get('/ForumAdmin', [ForumController::class, 'indexAdmin']);
Route::post('/AddForum',[ForumController::class, 'create']);
Route::get('/DeleteForum/{id_saluran}',[ForumController::class, 'delete']);
Route::get('/UpdateForum/{id_saluran}',[ForumController::class, 'edit']);
Route::get('/SearchForumAdmin',[ForumController::class, 'searchAdmin']);
