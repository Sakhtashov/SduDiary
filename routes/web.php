<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ClubsController;
use App\Http\Controllers\ContactController;
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

Route::get('/', [IndexController::class,'indexShowPage']);

Route::get('/clubs', [ClubsController::class,'showIndex'])->name('clubs');

Route::get('/contact', [ContactController::class,'showContact'])->name('contact');

Route::post('/login',[IndexController::class,'login'])->name('login');

Route::post('/register', [IndexController::class,'register'])->name('register');
?>
