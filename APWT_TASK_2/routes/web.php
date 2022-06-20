<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\LoginController;
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

Route::get('/',[HomeController::class ,'index']);
Route::get('/Log_In',[HomeController::class ,'index1'])->name('Log_In');
// Route::get('/Log_In',[HomeController::class ,'loginSuccess'])->name('Log_In');
Route::get('/reg',[HomeController::class ,'index2']);
Route::post('/reg',[StudentController::class ,'logInSubmitted'])->name('reg');

Route::get('/dash',[HomeController::class ,'index3'])->name('dash');


Route::post('/Log_In',[HomeController::class,'loginal'])->name('Log_In');

// Route::get('/logout',[HomeController::class ,'logout']);

