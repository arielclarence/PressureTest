<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;

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

Route::prefix('/')->group(function() {
    Route::get("/",[LoginController::class,'tologin']);
    Route::post("/user",[LoginController::class,"login"]);
});
Route::prefix('/allproduct')->group(function() {
    Route::get("/",[ProductController::class,'toallproduct']);

});
