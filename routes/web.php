<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ServiceController;

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

// Welcome Page
Route::get('/',[HomeController::class,'index']);

// Show Login Form
Route::get('/login',[UserController::class,'login'])->name('login');

// Show Register Form
Route::get('/register',[UserController::class,'create']);

// User Registration
Route::post('/users',[UserController::class,'store']);

// User Log In
Route::post('/users/authenticate',[UserController::class,'authenticate']);

// User Log Out
Route::get('/logout',[UserController::class,'logout']);

// Show Shopping Cart
Route::get('/products/shopping_cart',[CartController::class,'index']);

// Add To Cart
Route::post('/products/shopping_cart',[CartController::class,'store']);

// Show All Equipment
Route::get('/products/equipment',[ProductController::class,'equipment']);

// Show All Games
Route::get('/products/games',[ProductController::class,'games']);

// Show All News
Route::get('/news/index',[NewsController::class,'index']);

// Show About Us 
Route::get('/about-us',[HomeController::class,'about']);

// Show All Blogs
Route::get('/blogs/index',[BlogsController::class,'index']);

// Show All Services
Route::get('/services/index',[ServiceController::class,'index']);

// Show All Equipment - Admin Panel
Route::get('/admin-panel/equipment',[AdminController::class,'equipment']);

// Show Edit Form for Products
Route::get('/admin-panel/{product}/edit',[AdminController::class,'edit']);

// Show Single Service
Route::get('/services/{service}',[ServiceController::class,'show']);

// Show Single Blog
Route::get('/blogs/{blog}',[BlogsController::class,'show']);

// Show Single News
Route::get('/news/{news}',[NewsController::class,'show']);

// Show Single Product
Route::get('/products/{product}',[ProductController::class,'show']);

Auth::routes([
    'register' => false,
    'reset' => false,
    'verify'=>false,
    'login'=>false
]);


