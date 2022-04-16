<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WisataController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TransactionController;
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

// auth
Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/signup', function () {
    return view('signup');
});
Route::post('/signup', [SignupController::class, 'store']);

//wisata
Route::get('/admin-wisata', [WisataController::class,'index'])->name('wisata')->middleware('auth');
Route::get('/admin-tambahwisata', [WisataController::class,'tambahwisata'])->middleware('auth');

Route::post('/insertwisata', [WisataController::class,'insertwisata']);

Route::get('/showwisata/{id}', [WisataController::class,'showwisata'])->middleware('auth');
Route::get('/editwisata',[WisataController::class,'editwisata'])->middleware('auth');

Route::post('/updatewisata/{id}', [WisataController::class,'updatewisata']);
Route::get('/deletewisata/{id}', [WisataController::class,'deletewisata']);

//customer
Route::get('/admin-customer', [CustomerController::class,'index'])->name('customer')->middleware('auth');

Route::get('/admin-tambahcustomer', [CustomerController::class,'tambahcustomer'])->middleware('auth');

Route::post('/insertcustomer', [CustomerController::class,'insertcustomer']);

Route::get('/showcustomer/{id}', [CustomerController::class,'showcustomer'])->middleware('auth');
Route::get('/editcustomer',[CustomerController::class,'editcustomer'])->middleware('auth');

Route::post('/updatecustomer/{id}', [CustomerController::class,'updatecustomer']);
Route::get('/deletecustomer/{id}', [CustomerController::class,'deletecustomer']);

// Route::post('/signup', [SignupController::class, 'store']);
// Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/dataAdmin', function () {
    return view('dataAdmin');
})->middleware('auth');

Route::get('/editAdmin', [AdminController::class,'editinfo'])->middleware('auth');

Route::post('/updateAdmin', [AdminController::class,'updateinfo']);
Route::delete('/deleteAdmin', [AdminController::class,'deleteinfo']);

// Route::get('/admin-datatransaksi', function () {
//     return view('datatransaksi');
// });

Route::get('/admin-datatransaksi', [TransactionController::class,'index'])->middleware('auth');
