<?php

use App\Http\Controllers\categoryController;
use App\Http\Controllers\detailController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExampleController;

/*
|--------------------------------------------------------------------------
| Catatan
|--------------------------------------------------------------------------
|
| Sebelum mengatur route halaman di bawah,
| buat controller terlebih dahulu pada terminal,
| kemudian inisiasi file controller seperti contoh di atas.
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
Route::get('/', [categoryController::class, 'index']);
Route::get('/product', [categoryController::class, 'product']);
Route::get('/category', [categoryController::class, 'category']);
Route::get('/detail', [detailController::class, 'detail']);