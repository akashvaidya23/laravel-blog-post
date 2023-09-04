<?php

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
    return redirect('/login');
});

Route::get('/login',[App\Http\Controllers\loginController::class,'login']);
Route::post('/postLogin',[App\Http\Controllers\loginController::class,'postLogin']);
Route::get('/register',[App\Http\Controllers\loginController::class,'register']);
Route::post('/registerUser',[App\Http\Controllers\loginController::class,'registerUser']);
Route::get('/logout',[App\Http\Controllers\loginController::class,'logout']);

Route::get('/dashboard',[App\Http\Controllers\dashboardController::class,'dashboard']);
Route::get('/createPost',[App\Http\Controllers\PostController::class,'create']);
Route::post('/storePost',[App\Http\Controllers\PostController::class,'store']);
Route::get('/allPost',[App\Http\Controllers\PostController::class,'index']);