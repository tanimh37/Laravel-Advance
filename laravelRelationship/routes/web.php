<?php

use App\Http\Controllers\PostController;
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

Route::get('/post',[PostController::class,'index']);
Route::get('/post/{id}',[PostController::class,'show'])->name('show');

// Route::get('/', function () {
//     return view('welcome');
// });
