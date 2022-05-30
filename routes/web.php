<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

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
Route::get('/login',[UserController::class,'login']);

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

// Show All Equipment
Route::get('/products/equipment',[ProductController::class,'equipment']);

Auth::routes([
    'register' => false,
    'reset' => false,
    'verify'=>false,
    'login'=>false
]);


