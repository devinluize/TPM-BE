<?php

use App\Http\Controllers\BukuControler;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/home',[BukuControler::class,'index'])->name('index');
Route::get('/create-book',[BukuControler::class,'create'])->name('create');
Route::post('/store-book',[BukuControler::class,'store'])->name('store');
Route::get('/show-book/{id}',[BukuControler::class,'show'])->name('show');
Route::get('/edit-book/{id}',[BukuControler::class,'edit'])->name('edit');
Route::patch('/update-book/{id}',[BukuControler::class,'update']);
Route::delete('/delete-book/{id}',[BukuControler::class,'delete']);

