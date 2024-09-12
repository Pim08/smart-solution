<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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
Route::get('/home', [PagesController::class, "home"]);
Route::get('/contact', [PagesController::class, "contact"]);
Route::get('/ons', [PagesController::class, "ons"]);
Route::get('/app', [PagesController::class, "app"]);

