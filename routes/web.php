<?php

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/data/user',[UserController::class,'index'])->name('index');
Route::get('/data/user/show/{id}',[UserController::class,'show'])->name('show');
Route::get('/data/user/crate',[UserController::class,'create'])->name('create');
Route::post('/data/user/store',[UserController::class,'store'])->name('store');
Route::get('/data/user/edit/{id}',[UserController::class,'edit'])->name('edit');
Route::put('/data/user/update/{id}',[UserController::class,'update'])->name('update');
Route::delete('/data/user/destroy/{id}',[UserController::class,'destroy'])->name('destroy');


