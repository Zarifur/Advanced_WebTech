<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
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

Route ::get ('/',[HomeController::class, 'index' ])->name('home');
Route ::get ('/aboutUs',[AboutController::class, 'About' ]);
Route ::get ('/contactUs',[AboutController::class, 'contact' ]);
Route ::get ('/service',[AboutController::class, 'service' ]);
Route ::get ('/team',[AboutController::class, 'team' ]);