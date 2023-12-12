<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\detailController;
use App\Http\Controllers\cartController;
// use App\Http\Controllers\ExampleController;

/*
|--------------------------------------------------------------------------
| Catatan (1)
|--------------------------------------------------------------------------
|
| Sebelum mengatur route halaman seperti yang terdapat pada bagian paling
| bawah file web.php, buat controller terlebih dahulu pada terminal
| menggunakan "php artisan make:controller NamaController", kemudian
| inisiasi file controller di bagian atas file web.php.
|
| Contoh:
| use App\Http\Controllers\NamaController;
|
*/

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

// Route::get('/', function () {
//     return view('welcome');
// });

/*
|--------------------------------------------------------------------------
| Catatan (2)
|--------------------------------------------------------------------------
|
| Buka folder app/Http/Controller, kemudian pilih file NamaController.php
| dan inisiasi nama function serta return view sesuai panduan yang
| terdapat dalam file ExampleController.php
|
| Inisiasi route di bagian bawah file web.php sesuai format berikut:
| Route::get('/nama-route', [NamaController::class, 'nama_function'])
| * nama-route dapat diisi sesuka hati
|
| Terakhir, tambahkan "/nama-route" pada file nama-file.blade.php sesuai
| kebutuhan mengikuti format berikut:
| {{ url('nama-route') }}
|
*/

Route::get('/', [categoryController::class, 'index']);
Route::get('/women', [categoryController::class, 'index']);
Route::get('/women/1', [categoryController::class, 'index']);
Route::get('/women/2', [categoryController::class, 'product']);
Route::get('/women/dresses', [categoryController::class, 'category']);
Route::get('/women/dresses/1', [categoryController::class, 'category']);
Route::get('/women/dresses/astra-floral-linen-midi-dress', [detailController::class, 'detail']);
Route::get('/cart(2)', [cartController::class, 'cart']);
Route::get('/cart(3)', [cartController::class, 'cart_cart']);