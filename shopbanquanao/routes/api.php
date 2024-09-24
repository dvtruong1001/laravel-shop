<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;

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


Route::post('/login', [UserController::class,'login'])->name('apilogin');

Route::post('/register', [UserController::class,'register'])->name('apiregister');

Route::get("/getProductInfo", [ProductController::class,"getProductInfo"])->name("getProductInfo");

Route::get("/setProductInfo", [ProductController::class,"setProductInfo"])->name("setProductInfo");

Route::get("/addToCart", [CartController::class,"insertToCart"])->name("addToCart");

Route::get("/cartRemove", [CartController::class,"cartRemove"])->name("cartRemove");

Route::get("/cartConfirm", [CartController::class,"cartConfirm"])->name("cartConfirm");