<?php

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/reg-page', function (){
    return view('reg');
});
Route::post('/register',[\App\Http\Controllers\UserController::class,'register']);
Route::post('/home',[\App\Http\Controllers\UserController::class,'authenticate'])->name('login');
Route::get('/logout',[\App\Http\Controllers\UserController::class,'logoutUser'])->name('logout');

Route::group(['middleware' => ['jwt.verify']], function() {
    Route::get('/home',[\App\Http\Controllers\UserController::class,'home'])->name('home');
    Route::post('/search-number',[\App\Http\Controllers\SearchController::class,'searchNumber'])->name('search-number');
});
