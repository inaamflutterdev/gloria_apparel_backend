<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RequestController;


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

Route::get('/' ,[RequestController::class,'view']);
Route::post('/contact', [RequestController::class,'store'])->name('store-contact');
