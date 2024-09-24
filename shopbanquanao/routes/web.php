<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileUploadController;



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

Route::get('/', [Controller::class,'home'])->name('home');

Route::post('/upload', [FileUploadController::class, 'upload'])->name('upload');

Route::get("/search", [Controller::class,"search"])->name("search");


Route::get("/product", [Controller::class,"search"])->name("product");


Route::get("/shopping-cart", [Controller::class,"shoppingCart"])->name("cart");

Route::get("admin/", [AdminController::class,"index"])->name("adminIndex");

Route::get("admin/products", [AdminController::class, "products"])->name("adminProducts");


Route::get("admin/category", [AdminController::class, "category"])->name("adminCategory");

Route::get("admin/cart", [AdminController::class, "cart"])->name("adminCart");