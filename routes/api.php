<?php

use Illuminate\Http\Request;
use App\Http\Controllers\SellerProductController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/



Route::get('/catagory/list',[SellerProductController::class,'APIList']);
Route::post('/catagory/list-post',[SellerProductController::class,'APIPost']);
Route::post('/product/create',[SellerProductController::class,'apiproductCreateSubmit']);

Route::post('/login',[UserController::class,'apilogin']); 
Route::post('/logout',[UserController::class,'apilogout']); 