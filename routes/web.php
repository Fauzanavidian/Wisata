<?php

use App\Http\Controllers\WisataController;
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

Route::get('/wisata', [WisataController::class,'index'])->name('wisata');
Route::get('/tambahwisata', [WisataController::class,'tambahwisata']);

Route::post('/insertwisata', [WisataController::class,'insertwisata']);

Route::get('/showwisata/{id}', [WisataController::class,'showwisata']);
Route::post('/updatewisata/{id}', [WisataController::class,'updatewisata']);
Route::get('/deletewisata/{id}', [WisataController::class,'deletewisata']);
