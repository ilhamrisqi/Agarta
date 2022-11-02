<?php

use Illuminate\Support\Facades\Route;
use \App\Models\tampilan;

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

Route::get('/', [\App\Http\Controllers\TampilansController::class, 'home']);

Route::get('/about', [\App\Http\Controllers\TampilansController::class, 'aboutus']);

Route::get('/contact', [\App\Http\Controllers\TampilansController::class, 'contact']);

Route::get('/gallery', [\App\Http\Controllers\TampilansController::class, 'gallery']);

Route::get('/subgallery/{id}',[\App\Http\Controllers\TampilansController::class, 'subgallery']);

