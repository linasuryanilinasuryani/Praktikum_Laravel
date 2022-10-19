<?php

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

//php artisan make:controller namacontroller (-r) Opsional

//route about (hyperlink), [(controller yang di tuju), (function yang di tuju)]
Route::get('/about', [App\Http\Controllers\AboutController::class, 'index']);

Route::get('/mahasiswa',[App\Http\Controllers\mahasiswaController::class, 'index'] );

Route::view('/utama', 'coba');

Route::get('/buku/taon/{berapa}', [AboutController::class, 'tahun']);
