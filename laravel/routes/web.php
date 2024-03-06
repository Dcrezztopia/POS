<?php

use App\Http\Controllers\FBController;
use App\Http\Controllers\BHController;
use App\Http\Controllers\HCController;
use App\Http\Controllers\BKController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\LevelController;
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

