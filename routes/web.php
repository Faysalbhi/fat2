<?php

use App\Http\Controllers\BackendController;
use App\Http\Controllers\CategoryController;
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

// backend Controller 
Route::get('/dashboard',[BackendController::class,'dashboard']);

// Category controller 
Route::get('/category',[CategoryController::class,'index'])->name('category');
