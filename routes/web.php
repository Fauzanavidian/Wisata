<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WisataController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignupController;
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
    return view('home');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/admin-wisata', [WisataController::class,'index'])->name('wisata');
Route::get('/admin-tambahwisata', [WisataController::class,'tambahwisata']);

Route::post('/insertwisata', [WisataController::class,'insertwisata']);

Route::get('/showwisata/{id}', [WisataController::class,'showwisata']);
Route::post('/updatewisata/{id}', [WisataController::class,'updatewisata']);
Route::get('/deletewisata/{id}', [WisataController::class,'deletewisata']);

//customer
Route::get('/admin-customer', [CustomerController::class,'index'])->name('customer');

Route::get('/admin-tambahcustomer', [CustomerController::class,'tambahcustomer']);

Route::post('/insertcustomer', [CustomerController::class,'insertcustomer']);

Route::get('/showcustomer/{id}', [CustomerController::class,'showcustomer']);
Route::post('/updatecustomer/{id}', [CustomerController::class,'updatecustomer']);
Route::get('/deletecustomer/{id}', [CustomerController::class,'deletecustomer']);

Route::post('/signup', [SignupController::class, 'store']);
Route::post('/login', [LoginController::class, 'authenticate']);
