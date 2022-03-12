<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController; 
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
    return view('buku');
});
Route::get('/anggota', function () {
    return view('anggota');
});
Route::get('/petugas', function () {
    return view('petugas');
});
Route::get('/inputan', [FormController::class, 'formulir']);
Route::post('/hasil', [FormController::class, 'hasil']);