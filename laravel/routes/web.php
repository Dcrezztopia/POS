<?php

use App\Http\Controllers\FBController;
use App\Http\Controllers\BHController;
use App\Http\Controllers\HCController;
use App\Http\Controllers\BKController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\POSController;
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

Route::get('/home', function () {
    return view('home', ['user' => 'Pascalis']);
});
Route::get('/', function () {
    return view('welcome');
});

Route::prefix('category')->group(function() {
    Route::get('/food-beverage', [FBController::class, 'index']);
    Route::get('/beauty-health', [BHController::class, 'index']);
    Route::get('/home-care', [HCController::class, 'index']);
    Route::get('/baby-kid', [BKController::class, 'index']);
});

Route::get('/user/{id}/name/{name}', function ($id, $name) {
    return '<h1>INFORMASI USER</h1>
            Nama: '.$name.
            '<br> ID: '.$id;
});

Route::get('/sales', [TransaksiController::class, 'landing']);

Route::get('/level', [LevelController::class, 'index']);
Route::get('/kategori', [KategoriController::class, 'index'])->name('manage.kategori');
Route::get('/kategori/create', [KategoriController::class, 'create'])->name('kategori.create');
Route::post('/kategori', [KategoriController::class, 'store']);
Route::get('/kategori/edit/{id}', [KategoriController::class, 'edit']);
Route::put('/kategori/{id}', [KategoriController::class, 'update']);
Route::get('/kategori/delete/{id}', [KategoriController::class, 'delete']);

Route::get('/user', [UserController::class, 'index']);
Route::get('/user/tambah', [UserController::class, 'tambah']);
Route::post('/user/tambah_simpan', [UserController::class, 'tambah_simpan']);
Route::get('/user/ubah/{id}', [UserController::class, 'ubah']);
Route::put('/user/ubah_simpan/{id}', [UserController::class, 'ubah_simpan']);
Route::get('/user/hapus/{id}', [UserController::class, 'hapus']);
Route::resource('m_user', POSController::class);
